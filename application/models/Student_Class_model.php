<?php

/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2016-12-12
 * Time: 8:25 PM
 */
class  Student_Class_model extends CI_Model
{
    public function registerStudentsToClass($data)
    {
        return $this->db->insert('student_class', $data);
    }
}