<?php
class Enquiries extends CI_Model{
    public function add_enquiry() {
        $this->dbig = $this->load->database('imposglobal', TRUE);
        $fname = $this->input->post('full_name');
        $email = $this->input->post('email');
        $phone = $this->input->post('mobile_no');
        $dept = $this->input->post('dept');
        $msg = $this->input->post('message');
        $date = date('y-m-d');

        $add_data = array(
            'full_name' => $fname,
            'email' => $email,
            'mobile_no' => $phone,
            'dept' => $dept,
            'message' => $msg,
            'date' => $date
        );
        $query = $this->dbig->insert('enquiries', $add_data);
    }
}
?>