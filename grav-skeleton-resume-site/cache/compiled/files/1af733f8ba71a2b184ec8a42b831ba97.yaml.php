<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/sergio/public_html/grav-skeleton-resume-site/user/config/system.yaml',
    'modified' => 1515166919,
    'data' => [
        'home' => [
            'alias' => '/left'
        ],
        'pages' => [
            'theme' => 'resume',
            'process' => [
                'markdown' => true,
                'twig' => false
            ],
            'markdown' => [
                'extra' => true
            ]
        ],
        'cache' => [
            'enabled' => false,
            'check' => [
                'method' => 'file'
            ],
            'driver' => 'auto',
            'prefix' => 'g'
        ],
        'twig' => [
            'cache' => true,
            'debug' => true,
            'auto_reload' => true,
            'autoescape' => false
        ],
        'assets' => [
            'css_pipeline' => false,
            'css_minify' => true,
            'css_rewrite' => true,
            'js_pipeline' => false,
            'js_minify' => true
        ],
        'debugger' => [
            'enabled' => false,
            'twig' => true,
            'shutdown' => [
                'close_connection' => true
            ]
        ]
    ]
];
