<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Underconst extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Crud_model');
    }

    public function index()
    {
        $this->load->view('frontend/default/underconst');

    }

    public function notify()
    {
        $data = [
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'email' => $this->input->post('email'),
            'pnum' => $this->input->post('pnum'),
            'current_emp' => $this->input->post('current_emp'),
            'qualification' => $this->input->post('qualification'),
        ];
        $response = $this->Crud_model->saverecord($data);
        if ($response == true) {
            echo "Successfully inserted!";
        } else {
            echo "Insert failed";
        }
    }

    /* public function notify()
    {
        if ($this->input->post('save')) {
            $data['firstname'] = $this->input->post('firstname');
            $data['lastname'] = $this->input->post('lastname');
            $data['email'] = $this->input->post('email');
            $data['pnum'] = $this->input->post('pnum');
            $data['current_emp'] = $this->input->post('current_emp');
            $data['qualification'] = $this->input->post('qualification');

            $response = $this->Crud_model->saverecord($data);

            if ($response == true) {
                echo "Successfully inserted!";
            } else {
                echo "Insert failed";
            }
        } else {
            // Handle the case when the form is not submitted yet or any additional logic.
            $this->load->view('frontend/default/underconst');
        }
    } */
}
