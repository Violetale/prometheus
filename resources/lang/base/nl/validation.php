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
    'accepted'        => ':AttributeValue moet geaccepteerd zijn.',
    'active_url'      => ':AttributeValue is geen geldige URL.',
    'after'           => ':AttributeValue moet een datum na :date zijn.',
    'after_or_equal'  => ':AttributeValue moet een datum na of gelijk aan :date zijn.',
    'alpha'           => ':AttributeValue mag alleen letters bevatten.',
    'alpha_dash'      => ':AttributeValue mag alleen letters, nummers, underscores (_) en streepjes (-) bevatten.',
    'alpha_num'       => ':AttributeValue mag alleen letters en nummers bevatten.',
    'array'           => ':AttributeValue moet geselecteerde elementen bevatten.',
    'before'          => ':AttributeValue moet een datum voor :date zijn.',
    'before_or_equal' => ':AttributeValue moet een datum voor of gelijk aan :date zijn.',
    'between'         => [
        'numeric' => ':AttributeValue moet tussen :min en :max zijn.',
        'file'    => ':AttributeValue moet tussen :min en :max kilobytes zijn.',
        'string'  => ':AttributeValue moet tussen :min en :max karakters zijn.',
        'array'   => ':AttributeValue moet tussen :min en :max items bevatten.',
    ],
    'boolean'        => ':AttributeValue moet ja of nee zijn.',
    'confirmed'      => ':AttributeValue bevestiging komt niet overeen.',
    'date'           => ':AttributeValue moet een datum bevatten.',
    'date_equals'    => ':AttributeValue moet een datum gelijk aan :date zijn.',
    'date_format'    => ':AttributeValue moet een geldig datum formaat bevatten.',
    'different'      => ':AttributeValue en :other moeten verschillend zijn.',
    'digits'         => ':AttributeValue moet bestaan uit :digits cijfers.',
    'digits_between' => ':AttributeValue moet bestaan uit minimaal :min en maximaal :max cijfers.',
    'dimensions'     => ':AttributeValue heeft geen geldige afmetingen voor afbeeldingen.',
    'distinct'       => ':AttributeValue heeft een dubbele waarde.',
    'email'          => ':AttributeValue is geen geldig e-mailadres.',
    'ends_with'      => ':AttributeValue moet met één van de volgende waarden eindigen: :values',
    'exists'         => ':AttributeValue bestaat niet.',
    'file'           => ':AttributeValue moet een bestand zijn.',
    'filled'         => ':AttributeValue is verplicht.',
    'gt'             => [
        'numeric' => 'De :attribute moet groter zijn dan :value.',
        'file'    => 'De :attribute moet groter zijn dan :value kilobytes.',
        'string'  => 'De :attribute moet meer dan :value tekens bevatten.',
        'array'   => 'De :attribute moet meer dan :value waardes bevatten.',
    ],
    'gte' => [
        'numeric' => 'De :attribute moet groter of gelijk zijn aan :value.',
        'file'    => 'De :attribute moet groter of gelijk zijn aan :value kilobytes.',
        'string'  => 'De :attribute moet minimaal :value tekens bevatten.',
        'array'   => 'De :attribute moet :value waardes of meer bevatten.',
    ],
    'image'    => ':AttributeValue moet een afbeelding zijn.',
    'in'       => ':AttributeValue is ongeldig.',
    'in_array' => ':AttributeValue bestaat niet in :other.',
    'integer'  => ':AttributeValue moet een getal zijn.',
    'ip'       => ':AttributeValue moet een geldig IP-adres zijn.',
    'ipv4'     => ':AttributeValue moet een geldig IPv4-adres zijn.',
    'ipv6'     => ':AttributeValue moet een geldig IPv6-adres zijn.',
    'json'     => ':AttributeValue moet een geldige JSON-string zijn.',
    'lt'       => [
        'numeric' => 'De :attribute moet kleiner zijn dan :value.',
        'file'    => 'De :attribute moet kleiner zijn dan :value kilobytes.',
        'string'  => 'De :attribute moet minder dan :value tekens bevatten.',
        'array'   => 'De :attribute moet minder dan :value waardes bevatten.',
    ],
    'lte' => [
        'numeric' => 'De :attribute moet kleiner of gelijk zijn aan :value.',
        'file'    => 'De :attribute moet kleiner of gelijk zijn aan :value kilobytes.',
        'string'  => 'De :attribute moet maximaal :value tekens bevatten.',
        'array'   => 'De :attribute moet :value waardes of minder bevatten.',
    ],
    'max' => [
        'numeric' => ':AttributeValue mag niet hoger dan :max zijn.',
        'file'    => ':AttributeValue mag niet meer dan :max kilobytes zijn.',
        'string'  => ':AttributeValue mag niet uit meer dan :max tekens bestaan.',
        'array'   => ':AttributeValue mag niet meer dan :max items bevatten.',
    ],
    'mimes'     => ':AttributeValue moet een bestand zijn van het bestandstype :values.',
    'mimetypes' => ':AttributeValue moet een bestand zijn van het bestandstype :values.',
    'min'       => [
        'numeric' => ':AttributeValue moet minimaal :min zijn.',
        'file'    => ':AttributeValue moet minimaal :min kilobytes zijn.',
        'string'  => ':AttributeValue moet minimaal :min tekens zijn.',
        'array'   => ':AttributeValue moet minimaal :min items bevatten.',
    ],
    'not_in'               => 'Het formaat van :attribute is ongeldig.',
    'not_regex'            => 'De :attribute formaat is ongeldig.',
    'numeric'              => ':AttributeValue moet een nummer zijn.',
    'password'             => 'Wachtwoord is onjuist.',
    'present'              => ':AttributeValue moet bestaan.',
    'regex'                => ':AttributeValue formaat is ongeldig.',
    'required'             => ':AttributeValue is verplicht.',
    'required_if'          => ':AttributeValue is verplicht indien :other gelijk is aan :value.',
    'required_unless'      => ':AttributeValue is verplicht tenzij :other gelijk is aan :values.',
    'required_with'        => ':AttributeValue is verplicht i.c.m. :values',
    'required_with_all'    => ':AttributeValue is verplicht i.c.m. :values',
    'required_without'     => ':AttributeValue is verplicht als :values niet ingevuld is.',
    'required_without_all' => ':AttributeValue is verplicht als :values niet ingevuld zijn.',
    'same'                 => ':AttributeValue en :other moeten overeenkomen.',
    'size'                 => [
        'numeric' => ':AttributeValue moet :size zijn.',
        'file'    => ':AttributeValue moet :size kilobyte zijn.',
        'string'  => ':AttributeValue moet :size tekens zijn.',
        'array'   => ':AttributeValue moet :size items bevatten.',
    ],
    'starts_with' => ':AttributeValue moet starten met een van de volgende: :values',
    'string'      => ':AttributeValue moet een tekst zijn.',
    'timezone'    => ':AttributeValue moet een geldige tijdzone zijn.',
    'unique'      => ':AttributeValue is al in gebruik.',
    'uploaded'    => 'Het uploaden van :attribute is mislukt.',
    'url'         => ':AttributeValue moet een geldig URL zijn.',
    'uuid'        => ':AttributeValue moet een geldig UUID zijn.',
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
        'address'               => 'adres',
        'age'                   => 'leeftijd',
        'amount'                => 'bedrag',
        'available'             => 'beschikbaar',
        'city'                  => 'stad',
        'content'               => 'inhoud',
        'country'               => 'land',
        'currency'              => 'valuta',
        'date'                  => 'datum',
        'date_of_birth'         => 'geboortedatum',
        'day'                   => 'dag',
        'description'           => 'omschrijving',
        'duration'              => 'tijdsduur',
        'email'                 => 'e-mailadres',
        'excerpt'               => 'uittreksel',
        'first_name'            => 'voornaam',
        'gender'                => 'geslacht',
        'group'                 => 'groep',
        'hour'                  => 'uur',
        'last_name'             => 'achternaam',
        'lesson'                => 'les',
        'message'               => 'bericht',
        'minute'                => 'minuut',
        'mobile'                => 'mobiel',
        'month'                 => 'maand',
        'name'                  => 'naam',
        'password'              => 'wachtwoord',
        'password_confirmation' => 'wachtwoordbevestiging',
        'phone'                 => 'telefoonnummer',
        'price'                 => 'prijs',
        'second'                => 'seconde',
        'sex'                   => 'geslacht',
        'size'                  => 'grootte',
        'street'                => 'straatnaam',
        'student'               => 'student',
        'subject'               => 'onderwerp',
        'teacher'               => 'Docent',
        'time'                  => 'tijd',
        'title'                 => 'titel',
        'username'              => 'gebruikersnaam',
        'year'                  => 'jaar',
    ],
];
