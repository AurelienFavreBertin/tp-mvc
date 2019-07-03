<?php

class Example extends Db {

    const TABLE_NAME = "clients";

    protected $id;
    protected $field1;
    protected $field2;
    protected $field3;
    protected $field4;


    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setField1($field1) {
        $this->field1 = $field1;
        return $this;
    }

    public function setField2($field2) {
        $this->field2 = $field2;
        return $this;
    }

    public function setField3($field3) {
        $this->field3 = $field3;
        return $this;
    }

    public function setField4($field4)
    {
        $this->field4 = $field4;
        return $this;
    }




    public function getField1() {
        return $this->field1;
    }
    public function getField2() {
        return $this->field2;
    }
    public function getField3() {
        return $this->field3;
    }
    public function getField4() {
        return $this->field4;
    }

    public function save()
    {
        $data = [
            "field1"    => $this->getField1(),
            "field2"    => $this->getField2(),
            "field3"    => $this->getField3(),
            "field4"    => $this->getField4()
        ];
        //if ($this->id > 0) return $this->update();
        $nouvelId = Db::dbCreate(self::TABLE_NAME, $data);
        $this->setId($nouvelId);
        return $this;
    }

    public static function findAll() {
        $data = Db::dbFind(self::TABLE_NAME);
        return $data;
    }
}