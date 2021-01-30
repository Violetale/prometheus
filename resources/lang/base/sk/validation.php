<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages.
    |
    */

    'accepted'        => ':AttributeValue musí byť akceptovaný.',
    'active_url'      => ':AttributeValue má neplatnú URL adresu.',
    'after'           => ':AttributeValue musí byť dátum po :date.',
    'after_or_equal'  => ':AttributeValue musí byť dátum po alebo presne :date.',
    'alpha'           => ':AttributeValue môže obsahovať len písmená.',
    'alpha_dash'      => ':AttributeValue môže obsahovať len písmená, čísla a pomlčky.',
    'alpha_num'       => ':AttributeValue môže obsahovať len písmená, čísla.',
    'array'           => ':AttributeValue musí byť pole.',
    'before'          => ':AttributeValue musí byť dátum pred :date.',
    'before_or_equal' => ':AttributeValue musí byť dátum pred alebo presne :date.',
    'between'         => [
        'numeric' => ':AttributeValue musí mať rozsah :min - :max.',
        'file'    => ':AttributeValue musí mať rozsah :min - :max kilobajtov.',
        'string'  => ':AttributeValue musí mať rozsah :min - :max znakov.',
        'array'   => ':AttributeValue musí mať rozsah :min - :max prvkov.',
    ],
    'boolean'        => ':AttributeValue musí byť pravda alebo nepravda.',
    'confirmed'      => ':AttributeValue konfirmácia sa nezhoduje.',
    'date'           => ':AttributeValue má neplatný dátum.',
    'date_equals'    => ':AttributeValue musí byť dátum rovnajúci sa :date.',
    'date_format'    => ':AttributeValue sa nezhoduje s formátom :format.',
    'different'      => ':AttributeValue a :other musia byť odlišné.',
    'digits'         => ':AttributeValue musí mať :digits číslic.',
    'digits_between' => ':AttributeValue musí mať rozsah :min až :max číslic.',
    'dimensions'     => ':AttributeValue má neplatné rozmery obrázku.',
    'distinct'       => ':AttributeValue je duplicitný.',
    'email'          => ':AttributeValue má neplatný formát.',
    'ends_with'      => ':attribute musí obsahovať jednú z týchto hodnôt: :values.',
    'exists'         => 'označený :attribute je neplatný.',
    'file'           => ':AttributeValue musí byť súbor.',
    'filled'         => ':AttributeValue je požadované.',
    'gt'             => [
        'numeric' => 'Hodnota :attribute musí byť väčšia ako :value.',
        'file'    => ':AttributeValue musí mať viac kilobajtov ako :value.',
        'string'  => ':AttributeValue musí mať viac znakov ako :value.',
        'array'   => ':AttributeValue musí mať viac prvkov ako :value.',
    ],
    'gte' => [
        'numeric' => 'Hodnota :attribute musí byť väčšia alebo rovná ako :value.',
        'file'    => ':AttributeValue musí mať rovnaký alebo väčší počet kilobajtov ako :value.',
        'string'  => ':AttributeValue musí mať rovnaký alebo väčší počet znakov ako :value.',
        'array'   => ':AttributeValue musí mať rovnaký alebo väčší počet prvkov ako :value.',
    ],
    'image'    => ':AttributeValue musí byť obrázok.',
    'in'       => 'označený :attribute je neplatný.',
    'in_array' => ':AttributeValue sa nenachádza v :other.',
    'integer'  => ':AttributeValue musí byť celé číslo.',
    'ip'       => ':AttributeValue musí byť platná IP adresa.',
    'ipv4'     => ':AttributeValue musí byť platná IPv4 adresa.',
    'ipv6'     => ':AttributeValue musí byť platná IPv6 adresa.',
    'json'     => ':AttributeValue musí byť platný JSON reťazec.',
    'lt'       => [
        'numeric' => 'Hodnota :attribute musí byť menšia ako :value.',
        'file'    => ':AttributeValue musí mať menej kilobajtov ako :value.',
        'string'  => ':AttributeValue musí mať menej znakov ako :value.',
        'array'   => ':AttributeValue musí mať menej prvkov ako :value.',
    ],
    'lte' => [
        'numeric' => 'Hodnota :attribute musí byť menšia alebo rovná ako :value.',
        'file'    => ':AttributeValue musí mať rovnaký alebo menší počet kilobajtov ako :value.',
        'string'  => ':AttributeValue musí mať rovnaký alebo menší počet znakov ako :value.',
        'array'   => ':AttributeValue musí mať rovnaký alebo menší počet prvkov ako :value.',
    ],
    'max' => [
        'numeric' => ':AttributeValue nemôže byť väčší ako :max.',
        'file'    => ':AttributeValue nemôže byť väčší ako :max kilobajtov.',
        'string'  => ':AttributeValue nemôže byť väčší ako :max znakov.',
        'array'   => ':AttributeValue nemôže mať viac ako :max prvkov.',
    ],
    'mimes'     => ':AttributeValue musí byť súbor s koncovkou: :values.',
    'mimetypes' => ':AttributeValue musí byť súbor s koncovkou: :values.',
    'min'       => [
        'numeric' => ':AttributeValue musí mať aspoň :min.',
        'file'    => ':AttributeValue musí mať aspoň :min kilobajtov.',
        'string'  => ':AttributeValue musí mať aspoň :min znakov.',
        'array'   => ':AttributeValue musí mať aspoň :min prvkov.',
    ],
    'not_in'               => 'označený :attribute je neplatný.',
    'not_regex'            => ':AttributeValue má neplatný formát.',
    'numeric'              => ':AttributeValue musí byť číslo.',
    'password'             => 'Heslo nie je správne',
    'present'              => ':AttributeValue musí byť odoslaný.',
    'regex'                => ':AttributeValue má neplatný formát.',
    'required'             => ':AttributeValue je požadované.',
    'required_if'          => ':AttributeValue je požadované keď :other je :value.',
    'required_unless'      => ':AttributeValue je požadované, okrem prípadu keď :other je v :values.',
    'required_with'        => ':AttributeValue je požadované keď :values je prítomné.',
    'required_with_all'    => ':AttributeValue je požadované ak :values je nastavené.',
    'required_without'     => ':AttributeValue je požadované keď :values nie je prítomné.',
    'required_without_all' => ':AttributeValue je požadované ak žiadne z :values nie je nastavené.',
    'same'                 => ':AttributeValue a :other sa musia zhodovať.',
    'size'                 => [
        'numeric' => ':AttributeValue musí byť :size.',
        'file'    => ':AttributeValue musí mať :size kilobajtov.',
        'string'  => ':AttributeValue musí mať :size znakov.',
        'array'   => ':AttributeValue musí obsahovať :size prvkov.',
    ],
    'starts_with' => ':AttributeValue musí začínať niektorou z hodnôt: :values',
    'string'      => ':AttributeValue musí byť reťazec znakov.',
    'timezone'    => ':AttributeValue musí byť platné časové pásmo.',
    'unique'      => ':AttributeValue už existuje.',
    'uploaded'    => 'Nepodarilo sa nahrať :attribute.',
    'url'         => ':AttributeValue musí mať formát URL.',
    'uuid'        => ':AttributeValue musí byť platné UUID.',

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

    'attributes' => [
    ],
];
