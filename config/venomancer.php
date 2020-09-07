<?php

return [
    'server' => [
        // 服务端口
        'port' => 8882,
    ],
    'client' => [
        // 客户端 base_uri 默认为 "http://localhost:{$config['server']['port']}"
        'base_uri' => null,
    ]
];