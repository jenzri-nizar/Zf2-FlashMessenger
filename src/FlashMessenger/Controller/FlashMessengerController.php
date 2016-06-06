<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace FlashMessenger\Controller;
/**
 * Description of DemoController
 *
 * @author web
 */
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
class FlashMessengerController extends AbstractActionController
{
    public function indexAction()
    {
        $this->flashMessenger()->addSuccessMessage('Un message de réussite');
        $this->flashMessenger()->addErrorMessage('Erreur avec le système.');
        $this->flashMessenger()->addInfoMessage('Info message');
        $this->flashMessenger()->addWarningMessage('Message d\'avertissement.');
        return new ViewModel();
    }
    
    public function jsAction(){
        //$this->getResponse()->getHeaders()->addHeaderLine('Content-type', 'application/javascript;charset=utf-8');
         header('Content-type:application/javascript;charset=utf-8');
        $js=  file_get_contents(__dir__."/../../../asset/toastr.min.js");
        
        echo $js;
        exit;
    }
    public function cssAction(){
       
        header('Content-type:text/css;charset=utf-8');
        $css=  file_get_contents(__dir__."/../../../asset/toastr.min.css");
        
        echo $css;
        exit;
    }
}
