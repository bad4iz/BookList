<?php
/**
 * Created by PhpStorm.
 * User: bad4iz
 * Date: 25.01.2017
 * Time: 20:57
 */

namespace BookList;


class Module
{
    /**
     * @return array
     */
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    /**
     *
     */
    public function getConfig(){
        return include __DIR__.'/config/module.config.php';
    }
}