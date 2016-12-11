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

    public function class1stMarks()
    {

        $index = $this->input->post('index');

        $classId = $this->Student_model->getStudent_s_Class_for_year($index);

        //  echo 'class id ',$classId;
        $class1stIndex = $this->Student_model->getClassFirstId($classId);

        // echo '<br> class 1st id ',$class1stIndex;


        $marksResult = $this->Student_model->getMarksForStudent($class1stIndex);
        // echo '<br> Mark result ',json_encode($marksResult);
        $marks = [];

        foreach ($marksResult as $key => $value) {

            if ($value['term'] == 3) {
                array_push($marks, $value['value']);
            }


        }

        echo json_encode($marks);

    }

    public function allClassAvgMarks()
    {
        $index = $this->input->post('index');

        $result = $this->Student_model->getAllClassAvgMarks($index);


        echo json_encode($result);
    }

    public function getLastTermMarks()
    {
        $index = $this->input->post('index');
        $classId = $this->Student_model->getStudent_ClassId($index);
        $marksResult = $this->Student_model->getMarksForStudent($classId);

        $terms = [];
        $subjects = [];
        $marks = [];

        foreach ($marksResult as $key => $value) {


            if (!in_array($value['term'], $terms, false)) {
                array_push($terms, $value['term']);
            }
            if (!in_array($value['name'], $subjects, false)) {
                array_push($subjects, $value['name']);
            }

            array_push($marks, $value['value']);


        }

        $result = [$terms, $subjects, $marks];

        echo json_encode($result);


    }


    public function getClassAvgMarks()
    {
        $index = $this->input->post('index');

        $classId = $this->Student_model->getStudent_s_Class_for_year($index);
//        echo $classId;
        $result = $this->Student_model->getClassAvg($classId);
//        echo $result;
        echo json_encode($result);


    }

    public function test()
    {
        $result = $this->Student_model->getClassFirstId(1);
//        echo json_encode($result);
        echo $result;
    }

}