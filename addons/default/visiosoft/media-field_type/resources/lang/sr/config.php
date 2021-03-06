<?php

return [
    'folders' => [
        'name'         => 'Фасцикле',
        'instructions' => 'Наведите које су фасцикле доступне за ово поље. Оставите празно за приказ свих директоријума.',
        'warning'      => 'Постојеће дозволе за фасцикле имају предност над одабраним директоријумима.',
    ],
    'min'     => [
        'label'        => 'Минимум Селецтионс',
        'instructions' => 'Унесите минимални број дозвољених избора.',
    ],
    'max'     => [
        'label'        => 'Макимум Селецтионс',
        'instructions' => 'Унесите максималан број дозвољених избора.',
    ],
    'mode'    => [
        'name'         => 'Улазни режим',
        'instructions' => 'Како корисници треба да обезбеде унос датотека?',
        'option'       => [
            'default' => 'Отпремите и / или изаберите датотеке.',
            'select'  => 'Изаберите само датотеке.',
            'upload'  => 'Отпреми само датотеке.',
        ],
    ],
];
