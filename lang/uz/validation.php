<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'        => ':attribute maydoni qabul qilinishi kerak.',
    'accepted_if'     => ':attribute maydoni, agar :other :value boʻlsa, qabul qilinishi kerak.',
    'active_url'      => ':attribute maydoni haqiqiy URL boʻlishi kerak.',
    'after'           => ':attribute maydoni :date sanasidan keyingi sana boʻlishi kerak.',
    'after_or_equal'  => ':attribute maydoni :date sanasidan keyingi yoki unga teng sana boʻlishi kerak.',
    'alpha'           => ':attribute maydoni faqat harflardan iborat boʻlishi kerak.',
    'alpha_dash'      => ':attribute maydoni faqat harflar, raqamlar, chiziqcha va pastki chiziqlardan iborat boʻlishi kerak.',
    'alpha_num'       => ':attribute maydoni faqat harflar va raqamlardan iborat boʻlishi kerak.',
    'array'           => ':attribute maydoni massiv boʻlishi kerak.',
    'ascii'           => ':attribute maydoni faqat bir baytli alfanumerik belgilar va simvollardan iborat boʻlishi kerak.',
    'before'          => ':attribute maydoni :date sanasidan oldingi sana boʻlishi kerak.',
    'before_or_equal' => ':attribute maydoni :date sanasidan oldingi yoki unga teng sana boʻlishi kerak.',

    'between' => [
        'array'   => ':attribute maydoni :min dan :max gacha elementlarga ega boʻlishi kerak.',
        'file'    => ':attribute maydoni :min dan :max gacha kilobayt oraligʻida boʻlishi kerak.',
        'numeric' => ':attribute maydoni :min dan :max gacha boʻlishi kerak.',
        'string'  => ':attribute maydoni :min dan :max gacha belgilar oraligʻida boʻlishi kerak.',
    ],

    'boolean'           => ':attribute maydoni rost (true) yoki yolgʻon (false) boʻlishi kerak.',
    'can'               => ':attribute maydoni ruxsat etilmagan qiymatni oʻz ichiga oladi.',
    'confirmed'         => ':attribute maydonini tasdiqlash mos kelmadi.',
    'current_password'  => 'Parol notoʻgʻri.',
    'date'              => ':attribute maydoni haqiqiy sana boʻlishi kerak.',
    'date_equals'       => ':attribute maydoni :date sanasiga teng boʻlishi kerak.',
    'date_format'       => ':attribute maydoni :format formatiga mos kelishi kerak.',
    'decimal'           => ':attribute maydonida :decimal oʻnlik kasrlar boʻlishi kerak.',
    'declined'          => ':attribute maydoni rad etilishi kerak.',
    'declined_if'       => ':attribute maydoni, agar :other :value boʻlsa, rad etilishi kerak.',
    'different'         => ':attribute va :other maydonlari farqli boʻlishi kerak.',
    'digits'            => ':attribute maydoni :digits raqamdan iborat boʻlishi kerak.',
    'digits_between'    => ':attribute maydoni :min dan :max gacha raqamlar oraligʻida boʻlishi kerak.',
    'dimensions'        => ':attribute maydonining rasm oʻlchamlari yaroqsiz.',
    'distinct'          => ':attribute maydonining qiymati takrorlangan.',
    'doesnt_end_with'   => ':attribute maydoni quyidagilardan biri bilan tugamasligi kerak: :values.',
    'doesnt_start_with' => ':attribute maydoni quyidagilardan biri bilan boshlanmasligi kerak: :values.',
    'email'             => ':attribute maydoni haqiqiy elektron pochta manzili boʻlishi kerak.',
    'ends_with'         => ':attribute maydoni quyidagilardan biri bilan tugashi kerak: :values.',
    'enum'              => 'Tanlangan :attribute yaroqsiz.',
    'exists'            => 'Tanlangan :attribute yaroqsiz.',
    'extensions'        => ':attribute maydonida quyidagi kengaytmalar mavjud boʻlishi kerak: :values.',
    'file'              => ':attribute maydoni fayl boʻlishi kerak.',
    'filled'            => ':attribute maydoni qiymatga ega boʻlishi kerak.',

    'gt' => [
        'array'   => ':attribute maydonida :value dan koʻproq element boʻlishi kerak.',
        'file'    => ':attribute maydoni :value kilobaytdan katta boʻlishi kerak.',
        'numeric' => ':attribute maydoni :value dan katta boʻlishi kerak.',
        'string'  => ':attribute maydoni :value dan koʻproq belgidan iborat boʻlishi kerak.',
    ],

    'gte' => [
        'array'   => ':attribute maydonida :value yoki undan koʻp element boʻlishi kerak.',
        'file'    => ':attribute maydoni :value kilobaytdan katta yoki unga teng boʻlishi kerak.',
        'numeric' => ':attribute maydoni :value dan katta yoki unga teng boʻlishi kerak.',
        'string'  => ':attribute maydoni :value yoki undan koʻp belgidan iborat boʻlishi kerak.',
    ],

    'hex_color' => ':attribute maydoni haqiqiy oʻn oltilik sanoq tizimidagi rang boʻlishi kerak.',
    'image'     => ':attribute maydoni rasm boʻlishi kerak.',
    'in'        => 'Tanlangan :attribute yaroqsiz.',
    'in_array'  => ':attribute maydoni :other ichida mavjud boʻlishi kerak.',
    'integer'   => ':attribute maydoni butun son boʻlishi kerak.',
    'ip'        => ':attribute maydoni haqiqiy IP-manzil boʻlishi kerak.',
    'ipv4'      => ':attribute maydoni haqiqiy IPv4 manzili boʻlishi kerak.',
    'ipv6'      => ':attribute maydoni haqiqiy IPv6 manzili boʻlishi kerak.',
    'json'      => ':attribute maydoni haqiqiy JSON qatori boʻlishi kerak.',
    'lowercase' => ':attribute maydoni kichik harflardan iborat boʻlishi kerak.',

    'lt' => [
        'array'   => ':attribute maydonida :value dan kam element boʻlishi kerak.',
        'file'    => ':attribute maydoni :value kilobaytdan kichik boʻlishi kerak.',
        'numeric' => ':attribute maydoni :value dan kichik boʻlishi kerak.',
        'string'  => ':attribute maydoni :value dan kam belgidan iborat boʻlishi kerak.',
    ],

    'lte' => [
        'array'   => ':attribute maydonida :value dan koʻp element boʻlmasligi kerak.',
        'file'    => ':attribute maydoni :value kilobaytdan kichik yoki unga teng boʻlishi kerak.',
        'numeric' => ':attribute maydoni :value dan kichik yoki unga teng boʻlishi kerak.',
        'string'  => ':attribute maydoni :value yoki undan kam belgidan iborat boʻlishi kerak.',
    ],

    'mac_address' => ':attribute maydoni haqiqiy MAC-manzil boʻlishi kerak.',

    'max' => [
        'array'   => ':attribute maydonida :max dan koʻp element boʻlmasligi kerak.',
        'file'    => ':attribute maydoni :max kilobaytdan katta boʻlmasligi kerak.',
        'numeric' => ':attribute maydoni :max dan katta boʻlmasligi kerak.',
        'string'  => ':attribute maydoni :max dan koʻp belgidan iborat boʻlmasligi kerak.',
    ],

    'max_digits' => ':attribute maydonida :max dan koʻp raqam boʻlmasligi kerak.',
    'mimes'      => ':attribute maydoni quyidagi turdagi fayl boʻlishi kerak: :values.',
    'mimetypes'  => ':attribute maydoni quyidagi turdagi fayl boʻlishi kerak: :values.',

    'min' => [
        'array'   => ':attribute maydonida kamida :min element boʻlishi kerak.',
        'file'    => ':attribute maydoni kamida :min kilobayt boʻlishi kerak.',
        'numeric' => ':attribute maydoni kamida :min boʻlishi kerak.',
        'string'  => ':attribute maydoni kamida :min belgidan iborat boʻlishi kerak.',
    ],

    'min_digits'       => ':attribute maydonida kamida :min raqam boʻlishi kerak.',
    'missing'          => ':attribute maydoni yoʻq boʻlishi kerak.',
    'missing_if'       => ':attribute maydoni, agar :other :value boʻlsa, yoʻq boʻlishi kerak.',
    'missing_unless'   => ':attribute maydoni, agar :other :value boʻlmasa, yoʻq boʻlishi kerak.',
    'missing_with'     => ':attribute maydoni, agar :values mavjud boʻlsa, yoʻq boʻlishi kerak.',
    'missing_with_all' => ':attribute maydoni, agar :values barchasi mavjud boʻlsa, yoʻq boʻlishi kerak.',
    'multiple_of'      => ':attribute maydoni :value ga karrali boʻlishi kerak.',
    'not_in'           => 'Tanlangan :attribute yaroqsiz.',
    'not_regex'        => ':attribute maydonining formati yaroqsiz.',
    'numeric'          => ':attribute maydoni son boʻlishi kerak.',

    'password' => [
        'letters'       => ':attribute maydoni kamida bitta harfni oʻz ichiga olishi kerak.',
        'mixed'         => ':attribute maydoni kamida bitta bosh harf va bitta kichik harfni oʻz ichiga olishi kerak.',
        'numbers'       => ':attribute maydoni kamida bitta raqamni oʻz ichiga olishi kerak.',
        'symbols'       => ':attribute maydoni kamida bitta simvolni oʻz ichiga olishi kerak.',
        'uncompromised' => 'Kiritilgan :attribute maʼlumotlar sizib chiqishida paydo boʻlgan. Iltimos, boshqa :attribute tanlang.',
    ],

    'present'              => ':attribute maydoni mavjud boʻlishi kerak.',
    'present_if'           => ':attribute maydoni, agar :other :value boʻlsa, mavjud boʻlishi kerak.',
    'present_unless'       => ':attribute maydoni, agar :other :value boʻlmasa, mavjud boʻlishi kerak.',
    'present_with'         => ':attribute maydoni, agar :values mavjud boʻlsa, mavjud boʻlishi kerak.',
    'present_with_all'     => ':attribute maydoni, agar :values barchasi mavjud boʻlsa, mavjud boʻlishi kerak.',
    'prohibited'           => ':attribute maydoni taqiqlanadi.',
    'prohibited_if'        => ':attribute maydoni, agar :other :value boʻlsa, taqiqlanadi.',
    'prohibited_unless'    => ':attribute maydoni, agar :other :values ichida boʻlmasa, taqiqlanadi.',
    'prohibits'            => ':attribute maydoni :other ning mavjud boʻlishini taqiqlaydi.',
    'regex'                => ':attribute maydonining formati yaroqsiz.',
    'required'             => ':attribute maydoni talab qilinadi.',
    'required_array_keys'  => ':attribute maydoni quyidagi yozuvlarni oʻz ichiga olishi kerak: :values.',
    'required_if'          => ':attribute maydoni, agar :other :value boʻlsa, talab qilinadi.',
    'required_if_accepted' => ':attribute maydoni, agar :other qabul qilingan boʻlsa, talab qilinadi.',
    'required_unless'      => ':attribute maydoni, agar :other :values ichida boʻlmasa, talab qilinadi.',
    'required_with'        => ':attribute maydoni, agar :values mavjud boʻlsa, talab qilinadi.',
    'required_with_all'    => ':attribute maydoni, agar :values barchasi mavjud boʻlsa, talab qilinadi.',
    'required_without'     => ':attribute maydoni, agar :values mavjud boʻlmasa, talab qilinadi.',
    'required_without_all' => ':attribute maydoni, agar :values hech biri mavjud boʻlmasa, talab qilinadi.',
    'same'                 => ':attribute maydoni :other bilan mos kelishi kerak.',

    'size' => [
        'array'   => ':attribute maydonida :size element boʻlishi kerak.',
        'file'    => ':attribute maydoni :size kilobayt boʻlishi kerak.',
        'numeric' => ':attribute maydoni :size boʻlishi kerak.',
        'string'  => ':attribute maydoni :size belgidan iborat boʻlishi kerak.',
    ],

    'starts_with' => ':attribute maydoni quyidagilardan biri bilan boshlanishi kerak: :values.',
    'string'      => ':attribute maydoni satr (string) boʻlishi kerak.',
    'timezone'    => ':attribute maydoni haqiqiy vaqt mintaqasi boʻlishi kerak.',
    'unique'      => ':attribute allaqachon band qilingan.',
    'uploaded'    => ':attribute yuklanmadi.',
    'uppercase'   => ':attribute maydoni bosh harflardan iborat boʻlishi kerak.',
    'url'         => ':attribute maydoni haqiqiy URL boʻlishi kerak.',
    'ulid'        => ':attribute maydoni haqiqiy ULID boʻlishi kerak.',
    'uuid'        => ':attribute maydoni haqiqiy UUID boʻlishi kerak.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
