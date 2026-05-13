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

    'accepted' => 'يجب قبول الحقل :attribute.',
    'accepted_if' => 'يجب قبول الحقل :attribute عندما يكون :other هو :value.',
    'active_url' => 'الحقل :attribute ليس رابطاً صحيحاً.',
    'after' => 'يجب أن يكون الحقل :attribute تاريخاً لاحقاً للتاريخ :date.',
    'after_or_equal' => 'يجب أن يكون الحقل :attribute تاريخاً لاحقاً أو مطابقاً للتاريخ :date.',
    'alpha' => 'يجب أن يحتوي الحقل :attribute على أحرف فقط.',
    'alpha_dash' => 'يجب أن يحتوي الحقل :attribute على أحرف وأرقام وشرطات وشرطات سفلية فقط.',
    'alpha_num' => 'يجب أن يحتوي الحقل :attribute على أحرف وأرقام فقط.',
    'any_of' => 'الحقل :attribute غير صحيح.',
    'array' => 'يجب أن يكون الحقل :attribute مصفوفة.',
    'ascii' => 'يجب أن يحتوي الحقل :attribute على رموز وأحرف أرقام أحادية البايت فقط.',
    'before' => 'يجب أن يكون الحقل :attribute تاريخاً سابقاً للتاريخ :date.',
    'before_or_equal' => 'يجب أن يكون الحقل :attribute تاريخاً سابقاً أو مطابقاً للتاريخ :date.',
    'between' => [
        'array' => 'يجب أن يحتوي الحقل :attribute على عدد من العناصر بين :min و :max.',
        'file' => 'يجب أن يكون حجم الملف :attribute بين :min و :max كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة الحقل :attribute بين :min و :max.',
        'string' => 'يجب أن يكون طول نص الحقل :attribute بين :min و :max حرفاً.',
    ],
    'boolean' => 'يجب أن تكون قيمة الحقل :attribute إما صحيح (true) أو خطأ (false).',
    'can' => 'يحتوي الحقل :attribute على قيمة غير مصرح بها.',
    'confirmed' => 'تأكيد الحقل :attribute غير متطابق.',
    'contains' => 'الحقل :attribute يفتقد إلى قيمة مطلوبة.',
    'current_password' => 'كلمة المرور غير صحيحة.',
    'date' => 'الحقل :attribute ليس تاريخاً صحيحاً.',
    'date_equals' => 'يجب أن يكون الحقل :attribute تاريخاً مطابقاً للتاريخ :date.',
    'date_format' => 'يجب أن يطابق الحقل :attribute التنسيق :format.',
    'decimal' => 'يجب أن يحتوي الحقل :attribute على :decimal خانات عشرية.',
    'declined' => 'يجب رفض الحقل :attribute.',
    'declined_if' => 'يجب رفض الحقل :attribute عندما يكون :other هو :value.',
    'different' => 'يجب أن يكون الحقلان :attribute و :other مختلفين.',
    'digits' => 'يجب أن يتكون الحقل :attribute من :digits أرقام.',
    'digits_between' => 'يجب أن يكون الحقل :attribute بين :min و :max أرقام.',
    'dimensions' => 'الحقل :attribute يحتوي على أبعاد صورة غير صالحة.',
    'distinct' => 'للحقل :attribute قيمة مكررة.',
    'doesnt_contain' => 'يجب ألا يحتوي الحقل :attribute على أي من القيم التالية: :values.',
    'doesnt_end_with' => 'يجب ألا ينتهي الحقل :attribute بأي من القيم التالية: :values.',
    'doesnt_start_with' => 'يجب ألا يبدأ الحقل :attribute بأي من القيم التالية: :values.',
    'email' => 'يجب أن يكون الحقل :attribute عنوان بريد إلكتروني صحيحاً.',
    'encoding' => 'يجب أن يكون الحقل :attribute بترميز :encoding.',
    'ends_with' => 'يجب أن ينتهي الحقل :attribute بأحد القيم التالية: :values.',
    'enum' => 'القيمة المختارة :attribute غير صالحة.',
    'exists' => 'الحقل المختار :attribute غير صالح.',
    'extensions' => 'يجب أن يكون للحقل :attribute أحد الامتدادات التالية: :values.',
    'file' => 'يجب أن يكون الحقل :attribute ملفاً.',
    'filled' => 'يجب أن يحتوي الحقل :attribute على قيمة.',
    'gt' => [
        'array' => 'يجب أن يحتوي الحقل :attribute على أكثر من :value عنصر.',
        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :value كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة الحقل :attribute أكبر من :value.',
        'string' => 'يجب أن يكون طول نص الحقل :attribute أكبر من :value حرفاً.',
    ],
    'gte' => [
        'array' => 'يجب أن يحتوي الحقل :attribute على :value عنصر أو أكثر.',
        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من أو يساوي :value كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة الحقل :attribute أكبر من أو يساوي :value.',
        'string' => 'يجب أن يكون طول نص الحقل :attribute أكبر من أو يساوي :value حرفاً.',
    ],
    'hex_color' => 'يجب أن يكون الحقل :attribute لوناً سداسي عشرياً (Hex) صحيحاً.',
    'image' => 'يجب أن يكون الحقل :attribute صورة.',
    'in' => 'الحقل المختار :attribute غير صالح.',
    'in_array' => 'يجب أن يكون الحقل :attribute موجوداً في :other.',
    'in_array_keys' => 'يجب أن يحتوي الحقل :attribute على أحد المفاتيح التالية: :values.',
    'integer' => 'يجب أن يكون الحقل :attribute عدداً صحيحاً.',
    'ip' => 'يجب أن يكون الحقل :attribute عنوان IP صحيحاً.',
    'ipv4' => 'يجب أن يكون الحقل :attribute عنوان IPv4 صحيحاً.',
    'ipv6' => 'يجب أن يكون الحقل :attribute عنوان IPv6 صحيحاً.',
    'json' => 'يجب أن يكون الحقل :attribute نص JSON صحيحاً.',
    'list' => 'يجب أن يكون الحقل :attribute قائمة.',
    'lowercase' => 'يجب أن يكون الحقل :attribute أحرفاً صغيرة.',
    'lt' => [
        'array' => 'يجب أن يحتوي الحقل :attribute على أقل من :value عنصر.',
        'file' => 'يجب أن يكون حجم الملف :attribute أقل من :value كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة الحقل :attribute أقل من :value.',
        'string' => 'يجب أن يكون طول نص الحقل :attribute أقل من :value حرفاً.',
    ],
    'lte' => [
        'array' => 'يجب ألا يحتوي الحقل :attribute على أكثر من :value عنصر.',
        'file' => 'يجب أن يكون حجم الملف :attribute أقل من أو يساوي :value كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة الحقل :attribute أقل من أو يساوي :value.',
        'string' => 'يجب أن يكون طول نص الحقل :attribute أقل من أو يساوي :value حرفاً.',
    ],
    'mac_address' => 'يجب أن يكون الحقل :attribute عنوان MAC صحيحاً.',
    'max' => [
        'array' => 'يجب ألا يحتوي الحقل :attribute على أكثر من :max عناصر.',
        'file' => 'يجب ألا يكون حجم الملف :attribute أكبر من :max كيلوبايت.',
        'numeric' => 'يجب ألا تكون قيمة الحقل :attribute أكبر من :max.',
        'string' => 'يجب ألا يتجاوز طول نص الحقل :attribute :max حرفاً.',
    ],
    'max_digits' => 'يجب ألا يحتوي الحقل :attribute على أكثر من :max أرقام.',
    'mimes' => 'يجب أن يكون الحقل :attribute ملفاً من النوع: :values.',
    'mimetypes' => 'يجب أن يكون الحقل :attribute ملفاً من النوع: :values.',
    'min' => [
        'array' => 'يجب أن يحتوي الحقل :attribute على الأقل على :min عناصر.',
        'file' => 'يجب أن يكون حجم الملف :attribute على الأقل :min كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة الحقل :attribute على الأقل :min.',
        'string' => 'يجب أن يكون طول نص الحقل :attribute على الأقل :min حرفاً.',
    ],
    'min_digits' => 'يجب أن يحتوي الحقل :attribute على الأقل على :min أرقام.',
    'missing' => 'يجب أن يكون الحقل :attribute مفقوداً.',
    'missing_if' => 'يجب أن يكون الحقل :attribute مفقوداً عندما يكون :other هو :value.',
    'missing_unless' => 'يجب أن يكون الحقل :attribute مفقوداً إلا إذا كان :other هو :value.',
    'missing_with' => 'يجب أن يكون الحقل :attribute مفقوداً عندما يكون :values موجوداً.',
    'missing_with_all' => 'يجب أن يكون الحقل :attribute مفقوداً عندما تكون القيم :values موجودة.',
    'multiple_of' => 'يجب أن يكون الحقل :attribute من مضاعفات القيمة :value.',
    'not_in' => 'الحقل المختار :attribute غير صالح.',
    'not_regex' => 'تنسيق الحقل :attribute غير صحيح.',
    'numeric' => 'يجب أن يكون الحقل :attribute رقماً.',
    'password' => [
        'letters' => 'يجب أن يحتوي الحقل :attribute على حرف واحد على الأقل.',
        'mixed' => 'يجب أن يحتوي الحقل :attribute على حرف كبير وحرف صغير واحد على الأقل.',
        'numbers' => 'يجب أن يحتوي الحقل :attribute على رقم واحد على الأقل.',
        'symbols' => 'يجب أن يحتوي الحقل :attribute على رمز واحد على الأقل.',
        'uncompromised' => 'القيمة المدخلة في :attribute ظهرت في تسريب بيانات سابق. يرجى اختيار قيمة مختلفة لـ :attribute.',
    ],
    'present' => 'يجب أن يكون الحقل :attribute موجوداً.',
    'present_if' => 'يجب أن يكون الحقل :attribute موجوداً عندما يكون :other هو :value.',
    'present_unless' => 'يجب أن يكون الحقل :attribute موجوداً إلا إذا كان :other هو :value.',
    'present_with' => 'يجب أن يكون الحقل :attribute موجوداً عندما يكون :values موجوداً.',
    'present_with_all' => 'يجب أن يكون الحقل :attribute موجوداً عندما تكون القيم :values موجودة.',
    'prohibited' => 'الحقل :attribute محظور.',
    'prohibited_if' => 'الحقل :attribute محظور عندما يكون :other هو :value.',
    'prohibited_if_accepted' => 'الحقل :attribute محظور عندما يكون :other مقبولاً.',
    'prohibited_if_declined' => 'الحقل :attribute محظور عندما يكون :other مرفوضاً.',
    'prohibited_unless' => 'الحقل :attribute محظور ما لم يكن :other ضمن القيم :values.',
    'prohibits' => 'الحقل :attribute يمنع :other من التواجد.',
    'regex' => 'تنسيق الحقل :attribute غير صحيح.',
    'required' => 'الحقل :attribute مطلوب.',
    'required_array_keys' => 'يجب أن يحتوي الحقل :attribute على مدخلات لـ: :values.',
    'required_if' => 'الحقل :attribute مطلوب عندما يكون :other هو :value.',
    'required_if_accepted' => 'الحقل :attribute مطلوب عندما يكون :other مقبولاً.',
    'required_if_declined' => 'الحقل :attribute مطلوب عندما يكون :other مرفوضاً.',
    'required_unless' => 'الحقل :attribute مطلوب ما لم يكن :other ضمن القيم :values.',
    'required_with' => 'الحقل :attribute مطلوب عندما يكون :values موجوداً.',
    'required_with_all' => 'الحقل :attribute مطلوب عندما تكون القيم :values موجودة.',
    'required_without' => 'الحقل :attribute مطلوب عندما لا يكون :values موجوداً.',
    'required_without_all' => 'الحقل :attribute مطلوب عندما لا تكون أي من القيم :values موجودة.',
    'same' => 'يجب أن يتطابق الحقل :attribute مع :other.',
    'size' => [
        'array' => 'يجب أن يحتوي الحقل :attribute على :size عنصر.',
        'file' => 'يجب أن يكون حجم الملف :attribute :size كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة الحقل :attribute مساوية لـ :size.',
        'string' => 'يجب أن يكون طول نص الحقل :attribute :size حرفاً.',
    ],
    'starts_with' => 'يجب أن يبدأ الحقل :attribute بأحد القيم التالية: :values.',
    'string' => 'يجب أن يكون الحقل :attribute نصاً.',
    'timezone' => 'يجب أن يكون الحقل :attribute منطقة زمنية صحيحة.',
    'unique' => 'قيمة الحقل :attribute مُستخدمة من قبل.',
    'uploaded' => 'فشل تحميل الحقل :attribute.',
    'uploaded_logo_size' => 'فشل تحميل الشعار، قد يكون حجم الملف أكبر من المسموح به في إعدادات السيرفر.',
    'uppercase' => 'يجب أن يكون الحقل :attribute أحرفاً كبيرة.',
    'url' => 'يجب أن يكون الحقل :attribute رابطاً صحيحاً.',
    'ulid' => 'يجب أن يكون الحقل :attribute من نوع ULID صحيح.',
    'uuid' => 'يجب أن يكون الحقل :attribute من نوع UUID صحيح.',

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
            'rule-name' => 'رسالة-مخصصة',
        ],
        'g-recaptcha-response' => [
            'required' => 'يرجى التحقق من أنك لست روبوتاً.',
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

    'attributes' => [
        'name' => 'الاسم',
        'username' => 'اسم المستخدم',
        'email' => 'البريد الإلكتروني',
        'password' => 'كلمة المرور',
        'phone' => 'الهاتف',
        'address' => 'العنوان',
        'permissions' => 'الصلاحيات',
        'role.ar'=>'اسم الدور بالعربية',
        'role.en'=>'اسم الدور بالإنجليزية',
        'logo' => 'شعار الماركة',
        'status' => 'الحالة',
        'name.ar' => 'الاسم بالعربية',
        'name.en' => 'الاسم بالإنجليزية',
    ],

];
