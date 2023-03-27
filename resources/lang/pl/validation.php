<?php

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

return [
    'accepted'             => 'Pole :attribute musi zostać zaakceptowane.',
    'active_url'           => 'Pole :attribute jest nieprawidłowym adresem URL.',
    'after'                => 'Pole :attribute musi być datą późniejszą od :date.',
    'after_or_equal'       => 'Pole :attribute musi być datą nie wcześniejszą niż :date.',
    'alpha'                => 'Pole :attribute może zawierać jedynie litery.',
    'alpha_dash'           => 'Pole :attribute może zawierać jedynie litery, cyfry i myślniki.',
    'alpha_num'            => 'Pole :attribute może zawierać jedynie litery i cyfry.',
    'array'                => 'Pole :attribute musi być tablicą.',
    'attached'             => 'Ten :attribute jest już dołączony.',
    'before'               => 'Pole :attribute musi być datą wcześniejszą od :date.',
    'before_or_equal'      => 'Pole :attribute musi być datą nie późniejszą niż :date.',
    'between'              => [
        'array'   => 'Pole :attribute musi składać się z :min - :max elementów.',
        'file'    => 'Pole :attribute musi zawierać się w granicach :min - :max kilobajtów.',
        'numeric' => 'Pole :attribute musi zawierać się w granicach :min - :max.',
        'string'  => 'Pole :attribute musi zawierać się w granicach :min - :max znaków.',
    ],
    'boolean'              => 'Pole :attribute musi mieć wartość logiczną prawda albo fałsz.',
    'confirmed'            => 'Potwierdzenie pola :attribute nie zgadza się.',
    'date'                 => 'Pole :attribute nie jest prawidłową datą.',
    'date_equals'          => 'Pole :attribute musi być datą równą :date.',
    'date_format'          => 'Pole :attribute nie jest w formacie :format.',
    'different'            => 'Pole :attribute oraz :other muszą się różnić.',
    'digits'               => 'Pole :attribute musi składać się z :digits cyfr.',
    'digits_between'       => 'Pole :attribute musi mieć od :min do :max cyfr.',
    'dimensions'           => 'Pole :attribute ma niepoprawne wymiary.',
    'distinct'             => 'Pole :attribute ma zduplikowane wartości.',
    'email'                => 'Pole :attribute nie jest poprawnym adresem e-mail.',
    'ends_with'            => 'Pole :attribute musi kończyć się jedną z następujących wartości: :values.',
    'exists'               => 'Zaznaczone pole :attribute jest nieprawidłowe.',
    'file'                 => 'Pole :attribute musi być plikiem.',
    'filled'               => 'Pole :attribute nie może być puste.',
    'gt'                   => [
        'array'   => 'Pole :attribute musi mieć więcej niż :value elementów.',
        'file'    => 'Pole :attribute musi być większe niż :value kilobajtów.',
        'numeric' => 'Pole :attribute musi być większe niż :value.',
        'string'  => 'Pole :attribute musi być dłuższe niż :value znaków.',
    ],
    'gte'                  => [
        'array'   => 'Pole :attribute musi mieć :value lub więcej elementów.',
        'file'    => 'Pole :attribute musi być większe lub równe :value kilobajtów.',
        'numeric' => 'Pole :attribute musi być większe lub równe :value.',
        'string'  => 'Pole :attribute musi być dłuższe lub równe :value znaków.',
    ],
    'image'                => 'Pole :attribute musi być obrazkiem.',
    'in'                   => 'Zaznaczony element :attribute jest nieprawidłowy.',
    'in_array'             => 'Pole :attribute nie znajduje się w :other.',
    'integer'              => 'Pole :attribute musi być liczbą całkowitą.',
    'ip'                   => 'Pole :attribute musi być prawidłowym adresem IP.',
    'ipv4'                 => 'Pole :attribute musi być prawidłowym adresem IPv4.',
    'ipv6'                 => 'Pole :attribute musi być prawidłowym adresem IPv6.',
    'json'                 => 'Pole :attribute musi być poprawnym ciągiem znaków JSON.',
    'lt'                   => [
        'array'   => 'Pole :attribute musi mieć mniej niż :value elementów.',
        'file'    => 'Pole :attribute musi być mniejsze niż :value kilobajtów.',
        'numeric' => 'Pole :attribute musi być mniejsze niż :value.',
        'string'  => 'Pole :attribute musi być krótsze niż :value znaków.',
    ],
    'lte'                  => [
        'array'   => 'Pole :attribute musi mieć :value lub mniej elementów.',
        'file'    => 'Pole :attribute musi być mniejsze lub równe :value kilobajtów.',
        'numeric' => 'Pole :attribute musi być mniejsze lub równe :value.',
        'string'  => 'Pole :attribute musi być krótsze lub równe :value znaków.',
    ],
    'max'                  => [
        'array'   => 'Pole :attribute nie może mieć więcej niż :max elementów.',
        'file'    => 'Pole :attribute nie może być większe niż :max kilobajtów.',
        'numeric' => 'Pole :attribute nie może być większe niż :max.',
        'string'  => 'Pole :attribute nie może być dłuższe niż :max znaków.',
    ],
    'mimes'                => 'Pole :attribute musi być plikiem typu :values.',
    'mimetypes'            => 'Pole :attribute musi być plikiem typu :values.',
    'min'                  => [
        'array'   => 'Pole :attribute musi mieć przynajmniej :min elementów.',
        'file'    => 'Pole :attribute musi mieć przynajmniej :min kilobajtów.',
        'numeric' => 'Pole :attribute musi być nie mniejsze od :min.',
        'string'  => 'Pole :attribute musi mieć przynajmniej :min znaków.',
    ],
    'multiple_of'          => 'Pole :attribute musi być wielokrotnością wartości :value',
    'not_in'               => 'Zaznaczony :attribute jest nieprawidłowy.',
    'not_regex'            => 'Format pola :attribute jest nieprawidłowy.',
    'numeric'              => 'Pole :attribute musi być liczbą.',
    'password'             => 'Hasło jest nieprawidłowe.',
    'present'              => 'Pole :attribute musi być obecne.',
    'prohibited'           => 'Pole :attribute jest zabronione.',
    'prohibited_if'        => 'Pole :attribute jest zabronione, gdy :other to :value.',
    'prohibited_unless'    => 'Pole :attribute jest zabronione, chyba że :other jest w :values.',
    'regex'                => 'Format pola :attribute jest nieprawidłowy.',
    'relatable'            => 'Ten :attribute może nie być powiązany z tym zasobem.',
    'required'             => 'Pole :attribute jest wymagane.',
    'required_if'          => 'Pole :attribute jest wymagane gdy :other ma wartość :value.',
    'required_unless'      => 'Pole :attribute jest wymagane jeżeli :other nie znajduje się w :values.',
    'required_with'        => 'Pole :attribute jest wymagane gdy :values jest obecny.',
    'required_with_all'    => 'Pole :attribute jest wymagane gdy wszystkie :values są obecne.',
    'required_without'     => 'Pole :attribute jest wymagane gdy :values nie jest obecny.',
    'required_without_all' => 'Pole :attribute jest wymagane gdy żadne z :values nie są obecne.',
    'same'                 => 'Pole :attribute i :other muszą być takie same.',
    'size'                 => [
        'array'   => 'Pole :attribute musi zawierać :size elementów.',
        'file'    => 'Pole :attribute musi mieć :size kilobajtów.',
        'numeric' => 'Pole :attribute musi mieć :size.',
        'string'  => 'Pole :attribute musi mieć :size znaków.',
    ],
    'starts_with'          => 'Pole :attribute musi zaczynać się jedną z następujących wartości: :values.',
    'string'               => 'Pole :attribute musi być ciągiem znaków.',
    'timezone'             => 'Pole :attribute musi być prawidłową strefą czasową.',
    'unique'               => 'Taki :attribute już występuje.',
    'uploaded'             => 'Nie udało się wgrać pliku :attribute.',
    'url'                  => 'Format pola :attribute jest nieprawidłowy.',
    'uuid'                 => 'Pole :attribute musi być poprawnym identyfikatorem UUID.',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'attributes'           => [
        'name' => 'nazwa'
    ],
];