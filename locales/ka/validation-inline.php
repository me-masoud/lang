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
    'accepted'             => 'ეს ველი უნდა იყოს მიღებული.',
    'accepted_if'          => 'This field must be accepted when :other is :value.',
    'active_url'           => 'ეს არ არის სწორი URL.',
    'after'                => 'ეს უნდა იყოს თარიღის შემდეგ :date.',
    'after_or_equal'       => 'ეს უნდა იყოს თარიღი ან ტოლია :date.',
    'alpha'                => 'ეს ველი შეიძლება შეიცავდეს მხოლოდ წერილებს.',
    'alpha_dash'           => 'ამ სფეროში შეიძლება შეიცავდეს მხოლოდ ასოები, ნომრები, dashes და ხაზს უსვამს.',
    'alpha_num'            => 'ეს ველი შეიძლება შეიცავდეს მხოლოდ ასოები და ციფრები.',
    'array'                => 'ეს ველი უნდა იყოს მასივი.',
    'attached'             => 'ეს ველი უკვე ერთვის.',
    'before'               => 'ეს უნდა იყოს თარიღი ადრე :date.',
    'before_or_equal'      => 'ეს უნდა იყოს თარიღი ადრე ან ტოლია :date.',
    'between'              => [
        'array'   => 'This content must have between :min and :max items.',
        'file'    => 'This file must be between :min and :max kilobytes.',
        'numeric' => 'This value must be between :min and :max.',
        'string'  => 'This string must be between :min and :max characters.',
    ],
    'boolean'              => 'ეს ველი უნდა იყოს ჭეშმარიტი ან ცრუ.',
    'confirmed'            => 'დადასტურება არ ემთხვევა.',
    'current_password'     => 'The password is incorrect.',
    'date'                 => 'ეს არ არის სწორი თარიღი.',
    'date_equals'          => 'ეს უნდა იყოს თარიღი ტოლია :date.',
    'date_format'          => 'ეს არ ემთხვევა ფორმატი :format.',
    'different'            => 'ეს მნიშვნელობა უნდა იყოს განსხვავებული :other.',
    'digits'               => 'ეს უნდა იყოს :digits ციფრები.',
    'digits_between'       => 'ეს უნდა იყოს :min და :max ციფრები.',
    'dimensions'           => 'ეს სურათი არასწორი ზომები.',
    'distinct'             => 'ეს ველი აქვს დუბლიკატი ღირებულება.',
    'email'                => 'ეს უნდა იყოს სწორი ელექტრონული ფოსტის მისამართი.',
    'ends_with'            => 'ეს უნდა დასრულდეს ერთ-ერთი შემდეგი: :values.',
    'exists'               => 'შერჩეული ღირებულება არასწორია.',
    'file'                 => 'შინაარსი უნდა იყოს ფაილი.',
    'filled'               => 'ამ სფეროში უნდა ჰქონდეს მნიშვნელობა.',
    'gt'                   => [
        'array'   => 'The content must have more than :value items.',
        'file'    => 'The file size must be greater than :value kilobytes.',
        'numeric' => 'The value must be greater than :value.',
        'string'  => 'The string must be greater than :value characters.',
    ],
    'gte'                  => [
        'array'   => 'The content must have :value items or more.',
        'file'    => 'The file size must be greater than or equal :value kilobytes.',
        'numeric' => 'The value must be greater than or equal :value.',
        'string'  => 'The string must be greater than or equal :value characters.',
    ],
    'image'                => 'ეს უნდა იყოს იმიჯი.',
    'in'                   => 'შერჩეული ღირებულება არასწორია.',
    'in_array'             => 'ეს მნიშვნელობა არ არსებობს :other.',
    'integer'              => 'ეს უნდა იყოს მთელი რიცხვი.',
    'ip'                   => 'ეს უნდა იყოს სწორი IP მისამართი.',
    'ipv4'                 => 'ეს უნდა იყოს სწორი IPv4 მისამართი.',
    'ipv6'                 => 'ეს უნდა იყოს სწორი IPv6 მისამართი.',
    'json'                 => 'ეს უნდა იყოს სწორი json string.',
    'lt'                   => [
        'array'   => 'The content must have less than :value items.',
        'file'    => 'The file size must be less than :value kilobytes.',
        'numeric' => 'The value must be less than :value.',
        'string'  => 'The string must be less than :value characters.',
    ],
    'lte'                  => [
        'array'   => 'The content must not have more than :value items.',
        'file'    => 'The file size must be less than or equal :value kilobytes.',
        'numeric' => 'The value must be less than or equal :value.',
        'string'  => 'The string must be less than or equal :value characters.',
    ],
    'max'                  => [
        'array'   => 'The content may not have more than :max items.',
        'file'    => 'The file size may not be greater than :max kilobytes.',
        'numeric' => 'The value may not be greater than :max.',
        'string'  => 'The string may not be greater than :max characters.',
    ],
    'mimes'                => 'ეს უნდა იყოს ფაილის ტიპი: :values.',
    'mimetypes'            => 'ეს უნდა იყოს ფაილის ტიპი: :values.',
    'min'                  => [
        'array'   => 'The value must have at least :min items.',
        'file'    => 'The file size must be at least :min kilobytes.',
        'numeric' => 'The value must be at least :min.',
        'string'  => 'The string must be at least :min characters.',
    ],
    'multiple_of'          => 'ღირებულება უნდა იყოს მრავალჯერადი :value',
    'not_in'               => 'შერჩეული ღირებულება არასწორია.',
    'not_regex'            => 'ეს ფორმატი არასწორია.',
    'numeric'              => 'ეს უნდა იყოს ნომერი.',
    'password'             => 'პაროლი არასწორია.',
    'present'              => 'ეს ველი წარმოდგენილი უნდა იყოს.',
    'prohibited'           => 'ეს ველი აკრძალულია.',
    'prohibited_if'        => 'ეს ველი აკრძალულია, როდესაც :other არის :value.',
    'prohibited_unless'    => 'ეს ველი აკრძალულია, თუ :other არის :values.',
    'prohibits'            => 'This field prohibits :other from being present.',
    'regex'                => 'ეს ფორმატი არასწორია.',
    'relatable'            => 'ეს ველი არ შეიძლება იყოს დაკავშირებული ამ რესურსთან.',
    'required'             => 'ეს ველი აუცილებელია.',
    'required_if'          => 'ეს ველი არის საჭირო, როდესაც :other არის :value.',
    'required_unless'      => 'ეს ველი არ არის საჭირო, თუ :other არის :values.',
    'required_with'        => 'ეს ველი არის საჭირო, როდესაც :values იმყოფება.',
    'required_with_all'    => 'ეს ველი არის საჭირო, როდესაც :values იმყოფებიან.',
    'required_without'     => 'ეს ველი არის საჭირო, როდესაც :values არ იმყოფება.',
    'required_without_all' => 'ეს ველი არის საჭირო, როდესაც არც ერთი :values იმყოფებიან.',
    'same'                 => 'ღირებულება ამ სფეროში უნდა ემთხვეოდეს ერთი :other.',
    'size'                 => [
        'array'   => 'The content must contain :size items.',
        'file'    => 'The file size must be :size kilobytes.',
        'numeric' => 'The value must be :size.',
        'string'  => 'The string must be :size characters.',
    ],
    'starts_with'          => 'ეს უნდა დაიწყოს ერთი შემდეგი: :values.',
    'string'               => 'ეს უნდა იყოს სიმებიანი.',
    'timezone'             => 'ეს უნდა იყოს სწორი ზონაში.',
    'unique'               => 'ეს უკვე მიღებული.',
    'uploaded'             => 'ეს ვერ ატვირთეთ.',
    'url'                  => 'ეს ფორმატი არასწორია.',
    'uuid'                 => 'ეს უნდა იყოს სწორი UUID.',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'attributes'           => [],
];
