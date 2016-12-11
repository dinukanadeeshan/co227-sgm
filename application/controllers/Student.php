<?php

/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2016-11-22
 * Time: 2:12 PM
 */
class Student extends CI_Controller
{


    public function search()
    {
        $search = $this->input->post('search');
        // echo $search;
        $query = $this->Student_model->searchStudent($search);
//        echo $query;
        //echo "<br>";
        echo json_encode($query);
    }


    public function marks()
    {
        $index = $this->input->post('index');

        $result = $this->testdb_model->getMarks($index);

        echo json_encode($result);
    }

    public function getGrade()
    {
        $index = $this->input->post('index');
        $result = $this->Student_model->getGradeForIndex($index);
        echo json_encode($result);
    }

    public function getRanks()
    {
        $index = $this->input->post('index');

    }

}