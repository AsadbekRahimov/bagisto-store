<?php

return [
    'checkout' => [
        'cart' => [
            'integrity' => [
                'qty-missing'   => 'Hech boʻlmaganda bitta mahsulotning miqdori 1 tadan koʻp boʻlishi kerak.',
            ],

            'inventory-warning' => 'Soʻralgan miqdor mavjud emas, iltimos keyinroq urinib koʻring.',
            'missing-links'     => 'Ushbu mahsulot uchun yuklab olish havolalari yoʻq.',
            'missing-options'   => 'Ushbu mahsulot uchun tanlov opsiyalari yoʻq.',
        ],
    ],

    'datagrid' => [
        'copy-of-slug'                  => 'nusxasi-:value',
        'copy-of'                       => ':value nusxasi',
        'variant-already-exist-message' => 'Xuddi shu atribut parametrlari bilan variant allaqachon mavjud.',
    ],

    'response' => [
        'product-can-not-be-copied' => ':type turidagi mahsulotlar nusxalanmaydi',
    ],

    'sort-by'  => [
        'options' => [
            'cheapest-first'  => 'Eng arzonlari birinchi',
            'expensive-first' => 'Eng qimmatlari birinchi',
            'from-a-z'        => 'A dan Z gacha',
            'from-z-a'        => 'Z dan A gacha',
            'latest-first'    => 'Eng yangilari birinchi',
            'oldest-first'    => 'Eng eskilari birinchi',
        ],
    ],

    'type'     => [
        'abstract'     => [
            'offers' => 'Har biri :price narxida :qty dona sotib oling va :discount tejang',
        ],

        'bundle'       => 'Toʻplam',
        'configurable' => 'Konfiguratsiyalanadigan',
        'downloadable' => 'Yuklab olinadigan',
        'grouped'      => 'Guruhlangan',
        'simple'       => 'Oddiy',
        'virtual'      => 'Virtual',
    ],
];
