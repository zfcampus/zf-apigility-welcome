<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2014-2016 Zend Technologies USA Inc. (http://www.zend.com)
 */

namespace ZF\Apigility\Welcome;

use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'asset_manager' => [
        'resolver_configs' => [
            'paths' => [
                __DIR__ . '/../asset',
            ],
        ],
    ],
    'router' => [
        'routes' => [
            'zf-apigility' => [
                'may_terminate' => true,
                'options' => [
                    'defaults' => [
                        'controller' => WelcomeController::class,
                        'action'     => 'redirect',
                    ],
                ],
                'child_routes' => [
                    'welcome' => [
                        'type' => 'literal',
                        'options' => [
                            'route' => '/welcome',
                            'defaults' => [
                                'controller' => WelcomeController::class,
                                'action'     => 'welcome',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            WelcomeController::class => InvokableFactory::class,
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'zf-apigility-welcome' => __DIR__ . '/../view',
        ],
    ],
];
