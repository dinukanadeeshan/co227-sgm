<?php

/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2016-12-10
 * Time: 5:45 PM
 */
class Student_model extends CI_Model
{
    public function searchStudent($name)
    {
        $results = $this->db->query("select * from student WHERE fname like '$name%' or lname like '$name%'")->result_array();
        return $results;
    }

    public function getGradeForIndex($index)
    {
        $this->db->select('c.grade, c.name');
        $this->db->from('Class c');

        $this->db->where(
            'Student_index', $index
        );

        $this->db->join('Student_Class sc', 'sc.Class_id = c.id', 'left');


        return $this->db->get()->result_array();
//        return 'test';

    }

}