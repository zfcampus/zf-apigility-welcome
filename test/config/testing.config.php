<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2016 Zend Technologies USA Inc. (http://www.zend.com)
 */

namespace ZFTest\Apigility\Welcome;

return [
    'router' => [
        'routes' => [
            'zf-apigility' => [
                'type' => 'literal',
                'options' => [
                    'route' => '/zftest-apigility',
                ],
            ],
        ],
    ],
    'view_manager' => [
        'template_map' => [
            'layout/layout' => __DIR__ . '/../view/layout.phtml',
        ],
    ],
];
