<?php
class student extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('student_model');
    }

    public function index() {
        $data['student'] = $this->student_model->get_all_student();
        $this->load->view('student', $data);
    }

    public function add() {
        $this->load->view('add_student');
    }

    public function save() {
        $data = [
            'name' => $this->input->post('name'),
            'address' => $this->input->post('address'),
            'phone_number' => $this->input->post('phone_number')
        ];
        $this->student_model->insert_student($data);
        redirect('student');
    }

    public function edit($id) {
        $data['student'] = $this->student_model->get_student_by_id($id);
        $this->load->view('edit_student', $data);
    }

    public function update($id) {
        $data = [
            'name' => $this->input->post('name'),
            'address' => $this->input->post('address'),
            'phone_number' => $this->input->post('phone_number')
        ];
        $this->student_model->update_student($id, $data);
        redirect('student');
    }

    public function delete($id) {
        $this->student_model->delete_student($id);
        redirect('student');
    }
}