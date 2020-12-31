<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules ter multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'aceito' => ':attribute deve ser aceito.',
    'active_url' => ':attribute não é uma URL valida.',
    'after' => ':attribute deve ser uma data posterior a :date.',
    'after_or_equal' => ':attribute deve ser uma data posterior ou igual a :date.',
    'alpha' => ':attribute deve conter apenas letras.',
    'alpha_dash' => ':attribute deve conter apenas letras, números, traços (-) e subtraço (_).',
    'alpha_num' => ':attribute deve conter apenas letras e números.',
    'array' => ':attribute deve ser um array.',
    'before' => ':attribute deve ser uma data anterior a :date.',
    'before_or_equal' => ':attribute deve ser uma data anterior ou igual a :date.',
    'between' => [
        'numeric' => ':attribute deve ser entre :min e :max.',
        'file' => ':attribute deve ser entre :min e :max kilobytes.',
        'string' => ':attribute deve ser entre :min e :max characters.',
        'array' => ':attribute deve ter entre :min e :max itens.',
    ],
    'boolean' => 'Campo :attribute deve ser verdadeiro (true) ou falso (false).',
    'confirmed' => ':attribute confirmação não é igual.',
    'date' => ':attribute não é uma data válida.',
    'date_equals' => ':attribute deve ser uma data igual a :date.',
    'date_format' => ':attribute não possui o formato :format.',
    'different' => ':attribute e :other devem ser diferentes.',
    'digits' => ':attribute deve conter :digits digitos.',
    'digits_between' => ':attribute deve ser entre :min e :max digitos.',
    'dimensions' => ':attribute possui dimensões de imagem inválidas.',
    'distinct' => 'Campo :attribute tem um valor duplicado.',
    'email' => ':attribute deve ser um email válido.',
    'ends_with' => ':attribute deve terminar com um dos seguintes valores: :values.',
    'exists' => ':attribute selecionado é inválido.',
    'file' => ':attribute deve ser um arquivo.',
    'filled' => 'Campo :attribute deve ter um valor.',
    'gt' => [
        'numeric' => ':attribute deve ser maior que :value.',
        'file' => ':attribute deve ser maior que :value kilobytes.',
        'string' => ':attribute deve ter mais que :value caracteres.',
        'array' => ':attribute deve ter mais que :value itens.',
    ],
    'gte' => [
        'numeric' => ':attribute deve ser maior ou igual a :value.',
        'file' => ':attribute deve ser maior ou igual a :value kilobytes.',
        'string' => ':attribute deve ser maior ou igual a :value caracteres.',
        'array' => ':attribute deve ter :value ou mais itens.',
    ],
    'image' => ':attribute deve ser uma imagem.',
    'in' => ':attribute selecionado é inválido.',
    'in_array' => 'Campo :attribute não existe em :other.',
    'integer' => ':attribute deve ser um número inteiro.',
    'ip' => ':attribute deve ser uma valida IP address.',
    'ipv4' => ':attribute deve ser um endereço IPv4 válido.',
    'ipv6' => ':attribute deve ser um endereço IPv6 válido.',
    'json' => ':attribute deve ser uma string JSON valida.',
    'lt' => [
        'numeric' => ':attribute deve ser menor que :value.',
        'file' => ':attribute deve ser menor que :value kilobytes.',
        'string' => ':attribute deve ser menor que :value caracteres.',
        'array' => ':attribute deve ter menor que :value itens.',
    ],
    'lte' => [
        'numeric' => ':attribute deve ser menor ou igual a :value.',
        'file' => ':attribute deve ser menor ou igual a :value kilobytes.',
        'string' => ':attribute deve ser menor ou igual a :value caracteres.',
        'array' => ':attribute não deve ter mais que :value itens.',
    ],
    'max' => [
        'numeric' => ':attribute não deve ser maior que :max.',
        'file' => ':attribute não deve ser maior que :max kilobytes.',
        'string' => ':attribute não deve ser maior que :max caracteres.',
        'array' => ':attribute não deve ter mais que :max itens.',
    ],
    'mimes' => ':attribute deve ser um arquivo do tipo: :values.',
    'mimetypes' => ':attribute deve ser um arquivo do tipo: :values.',
    'min' => [
        'numeric' => ':attribute deve ter ao menos :min.',
        'file' => ':attribute deve ter ao menos :min kilobytes.',
        'string' => ':attribute deve ter ao menos :min caracteres.',
        'array' => ':attribute deve ter ao menos :min itens.',
    ],
    'multiple_of' => ':attribute deve ser múltiplo de :value',
    'not_in' => ':attribute selecionado é inválido.',
    'not_regex' => 'Formato de :attribute é inválido.',
    'numeric' => ':attribute deve ser um número.',
    'password' => 'A senha está incorreta.',
    'present' => 'Campo :attribute deve estar presente.',
    'regex' => 'Formato de :attribute é inválido.',
    'required' => 'O campo :attribute é requerido.',
    'required_if' => 'O campo :attribute é requerido quando :other is :value.',
    'required_unless' => 'O campo :attribute é requerido a menos que :other possua o valor :values.',
    'required_with' => 'O campo :attribute é requerido quando :values está presente.',
    'required_with_all' => 'O campo :attribute é requerido quando :values está presente.',
    'required_without' => 'O campo :attribute é requerido quando :values não está presente.',
    'required_without_all' => 'O campo :attribute é requerido quando nenhum dos :values estão presentes.',
    'same' => ':attribute e :other deve match.',
    'size' => [
        'numeric' => ':attribute deve ser :size.',
        'file' => ':attribute deve ser :size kilobytes.',
        'string' => ':attribute deve ser :size caracteres.',
        'array' => ':attribute deve conter :size itens.',
    ],
    'starts_with' => ':attribute deve começar com um dos seguintes valores: :values.',
    'string' => ':attribute deve ser uma string.',
    'timezone' => ':attribute deve ser uma zona válida.',
    'unique' => ':attribute já foi obtido.',
    'uploaded' => 'Falha no upload de :attribute.',
    'url' => 'Formato da :attribute é inválido.',
    'uuid' => ':attribute deve ser uma UUID válida.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify uma specific custom language line for uma given attribute rule.
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
