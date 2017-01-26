<?php
/**
 * Created by PhpStorm.
 * User: bad4iz
 * Date: 25.01.2017
 * Time: 20:52
 */
namespace BookList;

use Zend\ServiceManager\Factory\InvokableFactory;


return [
    'controllers' => [
        'factories' => [
            Controller\BookController::class => InvokableFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'book' => [
                'type'    => 'Literal',
                'options' => [
                    // Change this to something specific to your module
                    'route'    => '/book',
                    'defaults' => [
                        'controller'    => Controller\BookController::class,
                        'action'        => 'index',
                    ],
                ],
                'may_terminate' => true,
                'child_routes' => [
                    // You can place additional routes that match under the
                    // route defined above here.
                ],
            ],
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'ZendSkeletonModule' => __DIR__ . '/../view',
        ],
    ],
];
