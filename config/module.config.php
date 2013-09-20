<?php
return array(
    'router' => array(
        'routes' => array(
            'zf-apigility-welcome' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/welcome',
                    'defaults' => array(
                        'controller' => 'ZF\Apigility\Welcome\Welcome',
                        'action'     => 'welcome',
                    ),
                ),
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'ZF\Apigility\Welcome\Welcome' => 'ZF\Apigility\Welcome\WelcomeController'
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'zf-apigility-welcome' => __DIR__ . '/../view',
        ),
    ),
);
