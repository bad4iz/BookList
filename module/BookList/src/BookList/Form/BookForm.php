<?php
/**
 * Created by PhpStorm.
 * User: bad4iz
 * Date: 26.01.2017
 * Time: 20:28
 */

namespace BookList\Form;


use Zend\Form\Form;

class BookForm extends Form
{
    public function __construct()
    {
        parent::__construct('book');

        $this->add([
            'name'=>'id',
            'type'=>'Hidden',
        ]);
        $this->add([
            'name'=> 'title',
            'type'=> 'Text',
            'options'=> ['label'=>'Title',],
        ]);

        $this->add([
            'name'=> 'author',
            'type'=> 'Text',
            'options'=> ['label'=>'author',],
        ]);

        $this->add([
            'name'=> 'submit',
            'type'=> 'Submit',
            'attributes'=> [
                'value'=>'Go',
                'id'=>'submitbutton',
            ],
        ]);

    }
}