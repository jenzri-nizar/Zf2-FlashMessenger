<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace FlashMessenger;

return array(
    'router' => array(
        'routes' => array(
           
            'FlashMessenger' => array(
                'type'    => 'Segment',
                'options' => array(
                    'route'    => '/flashmessenger[/:action]',
                    'constraints' => array(
                        'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                    ),
                    'defaults' => array(
                        '__NAMESPACE__' => 'FlashMessenger\Controller',
                        'controller'    => 'FlashMessenger',
                        'action'        => 'index',
                    ),
                ),
              
            ),
        ),
    ),
    'service_manager' => array(
       
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'FlashMessenger\Controller\FlashMessenger' => Controller\FlashMessengerController::class
        ),
    ),
    'view_manager' => array(
        
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
);
