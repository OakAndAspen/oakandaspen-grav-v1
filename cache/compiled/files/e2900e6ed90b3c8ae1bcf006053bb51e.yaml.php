<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/oakandaspen-grav-v1/user/config/plugins/email.yaml',
    'modified' => 1569936775,
    'data' => [
        'enabled' => true,
        'from' => 'webmaster@oakandaspen.ch',
        'to' => 'webmaster@oakandaspen.ch',
        'mailer' => [
            'engine' => 'mail',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none',
                'user' => '',
                'password' => ''
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ]
    ]
];
