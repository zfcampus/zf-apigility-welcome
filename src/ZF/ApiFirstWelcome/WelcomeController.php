<?php

namespace ZF\ApiFirstWelcome;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class WelcomeController extends AbstractActionController
{
    public function welcomeAction()
    {
        $viewModel = new ViewModel();
        $viewModel->setTemplate('zf-api-first-welcome/welcome/welcome');
        return $viewModel;
    }
}
