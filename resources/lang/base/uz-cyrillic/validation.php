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

    'accepted'        => ':AttributeValue майдонини қабул қилишингиз керак.',
    'active_url'      => ':AttributeValue майдонига нотўғри URL киритилди.',
    'after'           => ':AttributeValue майдонида сана :date дан кейинги бўлиши керак.',
    'after_or_equal'  => ':AttributeValue майдонида сана :date га тенг ёки ундан кейинги бўлиши керак.',
    'alpha'           => ':AttributeValue майдони фақат ҳарфларни қабул қилиши мумкин.',
    'alpha_dash'      => ':AttributeValue майдони фақат ҳарфлар, сонлар ва чизиқларни қабул қилиши мумкин.',
    'alpha_num'       => ':AttributeValue майдони фақат ҳарфлар ва сонларни қабул қилиши мумкин.',
    'array'           => ':AttributeValue майдони қатор (array) бўлиши керак.',
    'before'          => ':AttributeValue майдонида сана :date гачам бўлиши керак.',
    'before_or_equal' => ':AttributeValue майдонида сана :date га тенг ёки ундан олдин бўлиши керак.',
    'between'         => [
        'numeric' => ':AttributeValue майдонининг қиймати :min ва :max орасида бўлиши керак.',
        'file'    => ':AttributeValue майдонидаги файлнинг ҳажми :min ва :max килобайт орасида бўлиши керак.',
        'string'  => ':AttributeValue майдонидаги белгилар сони :min ва :max орасида бўлиши керак.',
        'array'   => ':AttributeValue майдонида элементлар сони :min ва :max орасида бўлиши керак.',
    ],
    'boolean'        => ':AttributeValue майдони фақат мантиқий қийматни қабул қилади.',
    'confirmed'      => ':AttributeValue майдони тасдиқланмади.',
    'date'           => ':AttributeValue сана майдонига нотўғри қиймат киритилди.',
    'date_equals'    => 'The :attribute must be a date equal to :date.',
    'date_format'    => ':AttributeValue майдони :format форматга мос келмади.',
    'different'      => ':AttributeValue ва :other майдонлари фарқли бўлиши керак.',
    'digits'         => ':AttributeValue рақамли майдон узунлиги :digits бўлиши керак.',
    'digits_between' => ':AttributeValue рақамли майдон узунлиги :min ва :max орасида бўлиши керак.',
    'dimensions'     => ':AttributeValue майдонидаги тасвир тўғри келмайдиган ўлчамларга эга.',
    'distinct'       => ':AttributeValue майдони такрорланувчи қийматлардан иборат.',
    'email'          => ':AttributeValue майдони ҳақийқий электрон почта манзили бўлиши керак.',
    'ends_with'      => 'The :attribute must end with one of the following: :values.',
    'exists'         => ':AttributeValue майдони учун танланган қиймат нотўғри.',
    'file'           => ':AttributeValue майдони файл турида бўлиши керак.',
    'filled'         => ':AttributeValue майдони тўлдирилиши шарт.',
    'gt'             => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file'    => 'The :attribute must be greater than :value kilobytes.',
        'string'  => 'The :attribute must be greater than :value characters.',
        'array'   => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file'    => 'The :attribute must be greater than or equal :value kilobytes.',
        'string'  => 'The :attribute must be greater than or equal :value characters.',
        'array'   => 'The :attribute must have :value items or more.',
    ],
    'image'    => ':AttributeValue майдони тасвир турида бўлиши керак.',
    'in'       => ':AttributeValue майдони учун танланган қиймат хато.',
    'in_array' => ':AttributeValue майдонининг қиймати :other да мавжуд эмас.',
    'integer'  => ':AttributeValue майдони бутун сон бўлиши керак.',
    'ip'       => ':AttributeValue майдони ҳақийқий IP манзил бўлиши керак.',
    'ipv4'     => ':AttributeValue майдони ҳақийқий IPv4 манзил бўлиши керак.',
    'ipv6'     => ':AttributeValue майдони ҳақийқий IPv6 манзил бўлиши керак.',
    'json'     => ':AttributeValue майдони JSON қатор (string) бўлиши керак.',
    'lt'       => [
        'numeric' => 'The :attribute must be less than :value.',
        'file'    => 'The :attribute must be less than :value kilobytes.',
        'string'  => 'The :attribute must be less than :value characters.',
        'array'   => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file'    => 'The :attribute must be less than or equal :value kilobytes.',
        'string'  => 'The :attribute must be less than or equal :value characters.',
        'array'   => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => ':AttributeValue майдони қиймати :max дан ошмаслиги керак.',
        'file'    => ':AttributeValue майдонидаги файлнинг ҳажми :max килобайтдан ошмаслиги керак.',
        'string'  => ':AttributeValue майдонидаги белгилар сони :max тадан ошмаслиги керак.',
        'array'   => ':AttributeValue майдонидаги элментлар сони :max тадан ошмаслиги керак.',
    ],
    'mimes'     => ':AttributeValue майдонидаги файл сўнгида келтирилган турлардан бирида бўлиши керак: :values.',
    'mimetypes' => ':AttributeValue майдонидаги файл сўнгида келтирилган турлардан бирида бўлиши керак: :values.',
    'min'       => [
        'numeric' => ':AttributeValue майдони қиймати :min дан кам бўлмаслиги керак.',
        'file'    => ':AttributeValue майдонидаги файлнинг ҳажми :min килобайтдан кам бўлмаслиги керак.',
        'string'  => ':AttributeValue майдонидаги белгилар сони :min тадан кам бўлмаслиги керак.',
        'array'   => ':AttributeValue майдонидаги элментлар сони :min тадан кам бўлмаслиги керак.',
    ],
    'not_in'               => ':AttributeValue майдони учун танланган қиймат хато.',
    'not_regex'            => 'The :attribute format is invalid.',
    'numeric'              => ':AttributeValue майдони сон бўлиши керак.',
    'present'              => ':AttributeValue майдони кўрсатилиши керак.',
    'regex'                => ':AttributeValue майдони хато форматда.',
    'required'             => ':AttributeValue майдони тўлдирилиши шарт.',
    'required_if'          => ':AttributeValue майдони тўлдирилиши шарт, қачонки :other майдони :value га тенг бўлса.',
    'required_unless'      => ':AttributeValue майдони тўлдирилиши шарт, қачонки :other майдони :values га тенг бўлмаса.',
    'required_with'        => ':AttributeValue майдони тўлдирилиши шарт, қачонки :values кўрсатилган бўлса.',
    'required_with_all'    => ':AttributeValue майдони тўлдирилиши шарт, қачонки :values кўрсатилган бўлса.',
    'required_without'     => ':AttributeValue майдони тўлдирилиши шарт, қачонки :values кўрсатилмаган бўлса.',
    'required_without_all' => ':AttributeValue майдони тўлдирилиши шарт, қачонки :values лардан ҳеч бири кўрсатилмаган бўлса.',
    'same'                 => ':AttributeValue майдонининг қиймати :other билан бир хил бўлиши керак.',
    'size'                 => [
        'numeric' => ':AttributeValue майдони қиймати :size га тенг бўлиши керак.',
        'file'    => ':AttributeValue майдонидаги файлнинг ҳажми :size килобайтга тенг бўлиши керак.',
        'string'  => ':AttributeValue майдонидаги белгилар сони :size га тенг бўлиши керак.',
        'array'   => ':AttributeValue майдонидаги элментлар сони :size га тенг бўлиши керак.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string'      => ':AttributeValue майдони қатор (string) бўлиши керак.',
    'timezone'    => ':AttributeValue майдонининг қиймати мавжуд вақт минтақаси бўлиши керак.',
    'unique'      => ':AttributeValue майдонининг бундай қиймати мавжуд (киритлган).',
    'uploaded'    => ':AttributeValue майдонини юклаш муваффақиятли амалга ошмади.',
    'url'         => ':AttributeValue майдони нотўғри форматга эга.',
    'uuid'        => 'The :attribute must be a valid UUID.',

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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],
];
