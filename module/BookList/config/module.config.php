<?php
/**
 * Created by PhpStorm.
 * User: bad4iz
 * Date: 25.01.2017
 * Time: 20:52
 */
return array(
    'controllers'=>array(
        'invokables'=>array(
            'BookList\Controller\Book'=>'BookList\Controller\BookController',
        ),
    ),
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
                        'controller'=>'BookList\Controller\Book',
                        'action'=>'index',
                    ),
                ),
            ),
        ),
    ),
);