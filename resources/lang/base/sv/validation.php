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

    'accepted'        => ':AttributeValue måste accepteras.',
    'active_url'      => ':AttributeValue är inte en giltig webbadress.',
    'after'           => ':AttributeValue måste vara ett datum efter :date.',
    'after_or_equal'  => ':AttributeValue måste vara ett datum senare eller samma dag som :date.',
    'alpha'           => ':AttributeValue får endast innehålla bokstäver.',
    'alpha_dash'      => ':AttributeValue får endast innehålla bokstäver, siffror och bindestreck.',
    'alpha_num'       => ':AttributeValue får endast innehålla bokstäver och siffror.',
    'array'           => ':AttributeValue måste vara en array.',
    'before'          => ':AttributeValue måste vara ett datum innan :date.',
    'before_or_equal' => ':AttributeValue måste vara ett datum före eller samma dag som :date.',
    'between'         => [
        'numeric' => ':AttributeValue måste vara en siffra mellan :min och :max.',
        'file'    => ':AttributeValue måste vara mellan :min till :max kilobyte stor.',
        'string'  => ':AttributeValue måste innehålla :min till :max tecken.',
        'array'   => ':AttributeValue måste innehålla mellan :min - :max objekt.',
    ],
    'boolean'        => ':AttributeValue måste vara sant eller falskt.',
    'confirmed'      => ':AttributeValue bekräftelsen matchar inte.',
    'date'           => ':AttributeValue är inte ett giltigt datum.',
    'date_equals'    => ':AttributeValue måste vara ett datum lika med :date.',
    'date_format'    => ':AttributeValue matchar inte formatet :format.',
    'different'      => ':AttributeValue och :other får inte vara lika.',
    'digits'         => ':AttributeValue måste vara :digits tecken.',
    'digits_between' => ':AttributeValue måste vara mellan :min och :max tecken.',
    'dimensions'     => ':AttributeValue har felaktiga bilddimensioner.',
    'distinct'       => ':AttributeValue innehåller fler än en repetition av samma element.',
    'email'          => ':AttributeValue måste innehålla en korrekt e-postadress.',
    'ends_with'      => ':AttributeValue måste sluta med en av följande: :values.',
    'exists'         => ':AttributeValue är ogiltigt.',
    'file'           => ':AttributeValue måste vara en fil.',
    'filled'         => ':AttributeValue är obligatoriskt.',
    'gt'             => [
        'numeric' => ':AttributeValue måste vara större än :value.',
        'file'    => ':AttributeValue måste vara större än :value kilobyte stor.',
        'string'  => ':AttributeValue måste vara längre än :value tecken.',
        'array'   => ':AttributeValue måste innehålla fler än :value objekt.',
    ],
    'gte' => [
        'numeric' => ':AttributeValue måste vara lika med eller större än :value.',
        'file'    => ':AttributeValue måste vara lika med eller större än :value kilobyte stor.',
        'string'  => ':AttributeValue måste vara lika med eller längre än :value tecken.',
        'array'   => ':AttributeValue måste innehålla lika många eller fler än :value objekt.',
    ],
    'image'    => ':AttributeValue måste vara en bild.',
    'in'       => ':AttributeValue är ogiltigt.',
    'in_array' => ':AttributeValue finns inte i :other.',
    'integer'  => ':AttributeValue måste vara en siffra.',
    'ip'       => ':AttributeValue måste vara en giltig IP-adress.',
    'ipv4'     => ':AttributeValue måste vara en giltig IPv4-adress.',
    'ipv6'     => ':AttributeValue måste vara en giltig IPv6-adress.',
    'json'     => ':AttributeValue måste vara en giltig JSON-sträng.',
    'lt'       => [
        'numeric' => ':AttributeValue måste vara mindre än :value.',
        'file'    => ':AttributeValue måste vara mindre än :value kilobyte stor.',
        'string'  => ':AttributeValue måste vara kortare än :value tecken.',
        'array'   => ':AttributeValue måste innehålla färre än :value objekt.',
    ],
    'lte' => [
        'numeric' => ':AttributeValue måste vara lika med eller mindre än :value.',
        'file'    => ':AttributeValue måste vara lika med eller mindre än :value kilobyte stor.',
        'string'  => ':AttributeValue måste vara lika med eller kortare än :value tecken.',
        'array'   => ':AttributeValue måste innehålla lika många eller färre än :value objekt.',
    ],
    'max' => [
        'numeric' => ':AttributeValue får inte vara större än :max.',
        'file'    => ':AttributeValue får max vara :max kilobyte stor.',
        'string'  => ':AttributeValue får max innehålla :max tecken.',
        'array'   => ':AttributeValue får inte innehålla mer än :max objekt.',
    ],
    'mimes'     => ':AttributeValue måste vara en fil av typen: :values.',
    'mimetypes' => ':AttributeValue måste vara en fil av typen: :values.',
    'min'       => [
        'numeric' => ':AttributeValue måste vara större än :min.',
        'file'    => ':AttributeValue måste vara minst :min kilobyte stor.',
        'string'  => ':AttributeValue måste innehålla minst :min tecken.',
        'array'   => ':AttributeValue måste innehålla minst :min objekt.',
    ],
    'not_in'               => ':AttributeValue är ogiltigt.',
    'not_regex'            => 'Formatet för :attribute är ogiltigt.',
    'numeric'              => ':AttributeValue måste vara en siffra.',
    'password'             => 'Lösenordet är fel.',
    'present'              => ':AttributeValue måste finnas med.',
    'regex'                => ':AttributeValue har ogiltigt format.',
    'required'             => ':AttributeValue är obligatoriskt.',
    'required_if'          => ':AttributeValue är obligatoriskt när :other är :value.',
    'required_unless'      => ':AttributeValue är obligatoriskt när inte :other finns bland :values.',
    'required_with'        => ':AttributeValue är obligatoriskt när :values är ifyllt.',
    'required_with_all'    => ':AttributeValue är obligatoriskt när :values är ifyllt.',
    'required_without'     => ':AttributeValue är obligatoriskt när :values ej är ifyllt.',
    'required_without_all' => ':AttributeValue är obligatoriskt när ingen av :values är ifyllt.',
    'same'                 => ':AttributeValue och :other måste vara lika.',
    'size'                 => [
        'numeric' => ':AttributeValue måste vara :size.',
        'file'    => ':AttributeValue får endast vara :size kilobyte stor.',
        'string'  => ':AttributeValue måste innehålla :size tecken.',
        'array'   => ':AttributeValue måste innehålla :size objekt.',
    ],
    'starts_with' => ':AttributeValue måste börja med en av följande: :values',
    'string'      => ':AttributeValue måste vara en sträng.',
    'timezone'    => ':AttributeValue måste vara en giltig tidszon.',
    'unique'      => ':AttributeValue används redan.',
    'uploaded'    => ':AttributeValue kunde inte laddas upp.',
    'url'         => ':AttributeValue har ett ogiltigt format.',
    'uuid'        => ':AttributeValue måste vara ett giltigt UUID.',

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
