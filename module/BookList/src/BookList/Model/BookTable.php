<?php
/**
 * Created by PhpStorm.
 * User: bad4iz
 * Date: 27.01.2017
 * Time: 2:05
 */

namespace BookList\Model;

use Zend\Db\TableGateway\TableGateway;

class BookTable
{
    protected $tableGateway;

    /**
     * BookTable constructor.
     * @param TableGateway $tableGateway
     */
    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    /**
     * @return \Zend\Db\ResultSet\ResultSet
     */
    public function fetchAll(){
        $resultSet = $this->tableGateway->select();
        return $resultSet;
    }

    /**
     * @param $id
     * @return array|\ArrayObject|null
     * @throws \Exception
     */
    public function getBook($id){
        $id = (int)$id;
        $rowser = $this->tableGateway->select(array('id'=>$id));
        $row = $rowser->current();
        if (!$row){
            throw new \Exception('Could not find row $id');
        }
        return $row;
    }

    /**
     * @param Book $book
     * @throws \Exception
     */
    public function saveBook(Book $book){
        $data = array(
          'title'=>$book->title,
          'author'=>$book->author,
        );

        $id = (int)$book->id;
        if ($id == 0){
            $this->tableGateway->insert($data);
        }else{
            if ($this->getBook($id)){
                $this->tableGateway->update($data, array('id'=>$id));
            }else{
                throw new \Exception('Book id does not exit');
            }
        }

    }

    /**
     * @param $id
     */
    public function deleteBook($id){
        $this->tableGateway->delete(array('id'=>(int)$id));
    }
}