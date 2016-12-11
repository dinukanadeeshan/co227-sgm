<?php

class Upload extends CI_Controller
{
    public function index()
    {


        $this->load->view('template/header');


        $data = array(
            'active' => 'upload'
        );

        $this->load->view('template/side_bar', $data);

        $this->load->view('pages/upload');

        $this->load->view('template/footer');
    }


    public function subject_marks()
    {

        $grade = $this->input->post('grade');

        $class = $this->input->post('class');

        $subject = $this->input->post('subject');


        $data['grade'] = $grade;
        $data['class'] = $class;
        $data['subject'] = $subject;


        $res = $this->testdb_model->getMsg($data);

        foreach ($res as $object) {
            echo $object->grade;
        }

//        $config['upload_path'] = 'uploads/';
//        $config['allowed_types'] = 'text/plain|text/csv|csv';
//        $config['max_size'] = '5000';
//        $config['file_name'] = 'upload' . time();
//
//        $this->load->library('upload', $config);
//        $this->upload->initialize($config);
//        if(!$this->upload->do_upload($_FILES['fileToUpload'])) echo $this->upload->display_errors();
//        else {
//            $file_info = $this->upload->data();
//            $csvfilepath = "uploads/" . $file_info['file_name'];
//            $this->addfromcsv($csvfilepath);
//
//        }


    }

    public function student_list()
    {
        echo 'wow';
        echo $this->input->post('grade');
    }

    public function class_marks()
    {
        echo 'wow';
        echo $this->input->post('grade');
    }


}

