<?php
/**
 * Created by PhpStorm.
 * User: bad4iz
 * Date: 25.01.2017
 * Time: 20:52
 */
namespace BookList;

use Zend\ServiceManager\Factory\InvokableFactory;

return array(
    'controllers'=>[
        'invokables'=>[
            Controller\BookController::class => InvokableFactory::class,
        ],
    ],
    'router'=>array(
        'routes'=>array(
            'book'=>array(
                'type'=>'segment',
                'options'=>array(
                    'route'=>'/book[/][:action][/:id]',
                    'constraints'=>array(
                        'action'=>'[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'=>'[0-9]+',
                    ),
                    'defaults'=>array(
                        'controller'=>Controller\BookController::class,
                        'action'=>'index',
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => [
        'template_path_stack' => [
            'book' => __DIR__ . '/../view',
        ],
    ],
);




///*
//
//    'controllers'=>[
//        'invokables'=>[
//            Controller\BookController::class => InvokableFactory::class,
//        ],
//    ],
//    'router'=>array(
//        'routes'=>array(
//            'book'=>array(
//                'type'=>'segment',
//                'options'=>array(
//                    'route'=>'/book[/][:action][/:id]',
//                    'constraints'=>array(
//                        'action'=>'[a-zA-Z][a-zA-Z0-9_-]*',
//                        'id'=>'[0-9]+',
//                    ),
//                    'defaults'=>array(
//                        'controller'=>Controller\BookController::class,
//                        'action'=>'index',
//                    ),
//                ),
//            ),
//        ),
//    ),
//    'view_manager' => [
//        'template_path_stack' => [
//            'ZendSkeletonModule' => __DIR__ . '/../view',
//        ],
//    ],
//);
//
//*/