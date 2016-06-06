<?php

namespace FlashMessenger;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

class Module {
    public function onBootstrap(MvcEvent $e) {
        $eventManager = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
        $e->getApplication()->getServiceManager()->get('viewhelpermanager')->setFactory('FlashMsg', function($sm) use ($e) {
                $viewHelper = new \FlashMessenger\View\Helper\FlashMsg(
                        $sm->get('flashmessenger'),
                        $sm->get('inlinescript'),
                        $sm->get('HeadLink'),
                        $sm->get('url'));
                
                return $viewHelper;
            });
    }

    public function getConfig() {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig() {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__=> __DIR__. '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

}
