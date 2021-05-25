<?php declare(strict_types=1);

return [
    'paths' => [
        '.',
        'var/log/',
        'var/cache/',
        'public/',
        'config/jwt/',
    ],
    'system' => [
        ['name' => 'php', 'group' => 'core', 'required' => '7.4.3', 'error' => true],
        ['name' => 'pdo', 'group' => 'extension', 'required' => '1', 'error' => true],
        ['name' => 'pdo_mysql', 'group' => 'extension', 'required' => '1', 'error' => true],
        ['name' => 'phar', 'group' => 'extension', 'required' => '1', 'error' => true],
        ['name' => 'fileinfo', 'group' => 'extension', 'required' => '1', 'error' => true],
        ['name' => 'dom', 'group' => 'extension', 'required' => '1', 'error' => true],
        ['name' => 'gd', 'group' => 'extension', 'required' => '2.0.0'],
        ['name' => 'gd_jpg', 'group' => 'extension', 'required' => '1'],
        ['name' => 'freetype', 'group' => 'extension', 'required' => '1'],
        ['name' => 'libxml', 'group' => 'extension', 'required' => '2.6.26', 'error' => true],
        ['name' => 'curl', 'group' => 'extension', 'required' => '7.0.0', 'error' => true],
        ['name' => 'openssl', 'group' => 'extension', 'required' => '1', 'error' => true],
        ['name' => 'session', 'group' => 'extension', 'required' => '1'],
        ['name' => 'mbstring', 'group' => 'extension', 'required' => '1', 'error' => true],
        ['name' => 'pcre', 'group' => 'extension', 'required' => '1', 'error' => true],
        ['name' => 'iconv', 'group' => 'extension', 'required' => '1', 'error' => true],
        ['name' => 'json', 'group' => 'extension', 'required' => '1', 'error' => true],
        ['name' => 'xml', 'group' => 'extension', 'required' => '1', 'error' => true],
        ['name' => 'simplexml', 'group' => 'extension', 'required' => '1', 'error' => true],
        ['name' => 'fileinfo', 'group' => 'extension', 'required' => '1'],
        ['name' => 'zip', 'group' => 'extension', 'required' => '1', 'error' => true],
        ['name' => 'zlib', 'group' => 'extension', 'required' => '1', 'error' => true],
        ['name' => 'ftp', 'group' => 'extension', 'required' => '1'],
        ['name' => 'intl', 'group' => 'extension', 'required' => '1', 'error' => true],
        ['name' => 'sodium', 'group' => 'extension', 'required' => '1', 'error' => true],
        ['name' => 'ini_set', 'group' => 'config', 'required' => '1'],
        ['name' => 'include_path', 'group' => 'config', 'required' => '1'],
        ['name' => 'session.auto_start', 'group' => 'config', 'required' => '0'],
        ['name' => 'memory_limit', 'group' => 'config', 'required' => '512M'],
        ['name' => 'max_execution_time', 'group' => 'config', 'required' => '30'],
        ['name' => 'upload_max_filesize', 'group' => 'config', 'required' => '6M'],
        ['name' => 'post_max_size', 'group' => 'config', 'required' => '8M'],
        ['name' => 'allow_url_fopen', 'group' => 'config', 'required' => '1'],
        ['name' => 'curl_exec', 'group' => 'config', 'required' => '1'],
        ['name' => 'curl_multi_exec', 'group' => 'config', 'required' => '1'],
        ['name' => 'file_uploads', 'group' => 'config', 'required' => '1'],
    ],
];
