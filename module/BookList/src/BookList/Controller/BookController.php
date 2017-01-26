<?php
/**
 * Created by PhpStorm.
 * User: bad4iz
 * Date: 25.01.2017
 * Time: 22:17
 */

namespace BookList\Controller;


use BookList\Form\BookForm;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class BookController extends AbstractActionController{
    public function indexAction()
    {
        return new ViewModel(array(
            'book'=>[]
        ));
    }
    public function addAction(){
        $form = new BookForm();
        $form->get('submit')->setValue('Add');

        $request = $this->getRequest();
        if($request->isPost()){

        }
        return array('form'=> $form);

    }
    public function editAction(){

    }
    public function deleteAction(){

    }

}