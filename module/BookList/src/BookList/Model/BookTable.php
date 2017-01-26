<?php
/**
 * Created by PhpStorm.
 * User: bad4iz
 * Date: 27.01.2017
 * Time: 2:05
 */

namespace BookList\Model;
use Zend\Validator\Db;

class BookTable
{
protected $tableGateway;

public function __construct(TableGateway $tableGateway)
{
    $this->tableGateway=$tableGateway;
}
}