<?php
class student_model extends CI_Model {
    public function get_all_student() {
        return $this->db->get('student')->result();
    }

    public function get_student_by_id($id) {
        return $this->db->where('id', $id)->get('student')->row();
    }

    public function insert_student($data) {
        return $this->db->insert('student', $data);
    }

    public function update_student($id, $data) {
        return $this->db->where('id', $id)->update('student', $data);
    }

    public function delete_student($id) {
        return $this->db->where('id', $id)->delete('student');
    }
}