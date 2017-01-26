<?php
/**
 * Created by PhpStorm.
 * User: bad4iz
 * Date: 27.01.2017
 * Time: 1:58
 */

namespace BookList\Model;


class Book
{
public $id;
public $title;
public $author;

public function exchangeArray($data){
    $this->id =(!empty($data['id']))? $data['id']:null;
    $this->title =(!empty($data['title']))? $data['title']:null;
    $this->author =(!empty($data['author']))? $data['author']:null;
}

}