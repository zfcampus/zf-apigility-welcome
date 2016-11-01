<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2016 Zend Technologies USA Inc. (http://www.zend.com)
 */

namespace ZFTest\Apigility\Welcome;

use Zend\Mvc\Application;
use Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;
use ZF\Apigility\Welcome\WelcomeController;

class WelcomeControllerTest extends AbstractHttpControllerTestCase
{
    protected function setUp()
    {
        $config = [
            'modules' => [
                'ZF\Apigility\Welcome',
            ],
            'module_listener_options' => [
                'config_glob_paths' => [
                    __DIR__ . '/config/testing.config.php',
                ],
            ],
        ];

        $r = (new \ReflectionClass(Application::class))->getConstructor();
        $appVersion = $r->getNumberOfRequiredParameters() === 2 ? 2 : 3;

        if ($appVersion === 3) {
            array_unshift($config['modules'], 'Zend\Router');
        }

        $this->setApplicationConfig($config);

        parent::setUp();
    }

    public function testRedirect()
    {
        $this->dispatch('/zftest-apigility');

        $this->assertRedirect();
        $this->assertRedirectTo('/zftest-apigility/welcome');
        $this->assertResponseStatusCode(302);
        $this->assertControllerName(WelcomeController::class);
        $this->assertControllerClass('WelcomeController');
        $this->assertActionName('redirect');
        $this->assertMatchedRouteName('zf-apigility');
    }

    public function testWelcome()
    {
        $this->dispatch('/zftest-apigility/welcome');

        $this->assertNotRedirect();
        $this->assertResponseStatusCode(200);
        $this->assertControllerName(WelcomeController::class);
        $this->assertControllerClass('WelcomeController');
        $this->assertActionName('welcome');
        $this->assertMatchedRouteName('zf-apigility/welcome');

        $this->assertQuery('.hero');
    }
}
