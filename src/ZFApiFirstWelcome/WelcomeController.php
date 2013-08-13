<?php

namespace ZFApiFirstWelcome;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class WelcomeController extends AbstractActionController
{
    public function welcomeAction()
    {
        return new ViewModel();
    }
}