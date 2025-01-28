<?php

return [

    /*
     * Database related configurations.
     */
    'database' => [
        /*
         * Name of the tables created by the migrations
         * and used by the models of this package.
         */
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', 'test-app-server.mysql.database.azure.com'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'test-app-database'),
            'username' => env('DB_USERNAME', 'kkjijmsslo'),
            'password' => env('DB_PASSWORD', 'ynOBJ$MKo1wgA6f0'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('/home/site/wwwroot/ssl/DigiCertGlobalRootCA.crt.pem'),
            ]) : [],

        'tables' => [
            'surveys' => 'surveys',
            'sections' => 'sections',
            'questions' => 'questions',
            'entries' => 'entries',
            'answers' => 'answers',
        ],
    ],
];
