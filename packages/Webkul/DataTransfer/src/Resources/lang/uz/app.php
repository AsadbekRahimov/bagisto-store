<?php

return [
    'importers' => [
        'customers' => [
            'title' => 'Xaridorlar',

            'validation' => [
                'errors' => [
                    'duplicate-email'        => 'Email: \'%s\' import faylida birdan ortiq uchraydi.',
                    'duplicate-phone'        => 'Telefon raqami: \'%s\' import faylida birdan ortiq uchraydi.',
                    'email-not-found'        => 'Email: \'%s\' tizimda topilmadi.',
                    'invalid-customer-group' => 'Xaridorlar guruhi qoʻllab-quvvatlanmaydi yoki notoʻgʻri.',
                ],
            ],
        ],

        'products' => [
            'title' => 'Mahsulotlar',

            'validation' => [
                'errors' => [
                    'duplicate-url-key'         => 'URL-kalit: \'%s\' SKU kodi \'%s\' boʻlgan element uchun allaqachon yaratilgan.',
                    'invalid-attribute-family'  => 'Atributlar oilasi ustuni uchun notoʻgʻri qiymat (Atributlar oilasi mavjud emasmi?)',
                    'invalid-type'              => 'Mahsulot turi qoʻllab-quvvatlanmaydi yoki notoʻgʻri',
                    'sku-not-found'             => 'Koʻrsatilgan SKU kodiga ega mahsulot topilmadi',
                    'super-attribute-not-found' => 'Super atribut \'%s\' kodi bilan topilmadi yoki \'%s\' atributlar oilasiga tegishli emas',
                ],
            ],
        ],

        'tax-rates' => [
            'title' => 'Soliq stavkalari',

            'validation' => [
                'errors' => [
                    'duplicate-identifier' => 'Identifikator: \'%s\' import faylida birdan ortiq topilgan.',
                    'identifier-not-found' => 'Identifikator: \'%s\' tizimda topilmadi.',
                ],
            ],
        ],
    ],

    'validation' => [
        'errors' => [
            'column-empty-headers' => ' "%s" ustunlar sonining sarlavhalari boʻsh.',
            'column-name-invalid'  => 'Notoʻgʻri ustun nomlari: "%s".',
            'column-not-found'     => 'Majburiy ustunlar topilmadi: %s.',
            'column-numbers'       => 'Ustunlar soni sarlavhadagi qatorlar soniga mos kelmaydi.',
            'invalid-attribute'    => 'Sarlavha notoʻgʻri atribut(lar)ni oʻz ichiga oladi: "%s".',
            'system'               => 'Kutilmagan tizim xatosi yuz berdi.',
            'wrong-quotes'         => 'Toʻgʻri tirnoqlar oʻrniga qiyshiq tirnoqlar ishlatilgan.',
        ],
    ],
];
