<?php namespace Visiosoft\AdvsModule\OptionConfiguration;

use Visiosoft\AdvsModule\Adv\AdvModel;
use Visiosoft\AdvsModule\Adv\Contract\AdvRepositoryInterface;
use Visiosoft\AdvsModule\OptionConfiguration\Contract\OptionConfigurationInterface;
use Anomaly\Streams\Platform\Model\Advs\AdvsOptionConfigurationEntryModel;
use Visiosoft\AdvsModule\Productoption\Contract\ProductoptionRepositoryInterface;
use Visiosoft\AdvsModule\ProductoptionsValue\Contract\ProductoptionsValueRepositoryInterface;

class OptionConfigurationModel extends AdvsOptionConfigurationEntryModel implements OptionConfigurationInterface
{
	public function getName()
	{
		if($adv = app(AdvRepositoryInterface::class)->find($this->parent_adv_id))
		{
			$configurations_item = json_decode($this->option_json, true);
			$option_group_value = "";

			foreach ($configurations_item as $option_id => $value) {
				$value_entry = app(ProductoptionsValueRepositoryInterface::class)->find($value);
				$option_group_value .= " " . $value_entry->getName();
			}

			return $adv->name . ' | ' . trim($option_group_value, ' ');
		}
	}
}
