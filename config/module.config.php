<?php
return array(
    'router' => array(
        'routes' => array(
            'zf-api-first-welcome' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/welcome',
                    'defaults' => array(
                        'controller' => 'ZFApiFirstWelcome\Welcome',
                        'action'     => 'welcome',
                    ),
                ),
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'ZFApiFirstWelcome\Welcome' => 'ZFApiFirstWelcome\WelcomeController'
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'zf-api-first-welcome' => __DIR__ . '/../view',
        ),
    ),
);
