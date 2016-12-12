<?php

/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2016-12-12
 * Time: 8:34 AM
 */
class  Class_model extends CI_Model
{

    public function getAllGrades()
    {
        $restult = $this->db
            ->query("SELECT DISTINCT grade FROM class c")
            ->result_array();

        return $restult;
    }

    public function getAllClassNames()
    {
        $restult = $this->db
            ->query("SELECT DISTINCT name FROM class c")
            ->result_array();

        return $restult;
    }

    public function getClassId($grade, $name)
    {
        $restult = $this->db
            ->query("SELECT id FROM class c WHERE grade = $grade AND name = '$name'")
            ->row_array();

        return $restult['id'];
    }

}