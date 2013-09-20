<?php

namespace ZF\Apigility\Welcome;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class WelcomeController extends AbstractActionController
{
    public function welcomeAction()
    {
        $viewModel = new ViewModel();
        $viewModel->setTemplate('zf-apigility-welcome/welcome/welcome');
        $viewModel->setTerminal(true);
        return $viewModel;
    }
}
