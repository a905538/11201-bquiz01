<?php
include_once "DB.php";
class Total extends DB
{

    public $header = '進站人數';

    public function __construct()
    {
        parent::__construct('total');
    }
    function list()
    {
        return $this->view("./view/total.php");
    }
    function show()
    {
        return $this->find(1)['bottom'];
        // return $this -> all('limit 1')[0]['bottom'];
    }
}
