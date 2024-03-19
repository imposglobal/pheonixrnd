<?php
class Career_model extends CI_Model{
    public function current_jobs(){
        $query = $this->db
                ->select('*')
                ->from('jobs')
                ->get();
        return $query->result();
        
    }
    // ------------Apply----------------
    public function apply_job($resume) {
        $fname = $this->input->post('full_name');
        $email = $this->input->post('email');
        $phone = $this->input->post('mobile_no');
        $clocation = $this->input->post('current_location');
        $texp = $this->input->post('total_experience');

        $add_data = array(
            'full_name' => $fname,
            'email' => $email,
            'mobile_no' => $phone,
            'current_location' => $clocation,
            'total_experience' => $texp,
            'resume' => $resume
        );
        $query = $this->db->insert('applications', $add_data);
    }
    public function get_all_active_jobs() {
        $this->db->from('jobs');
//        $this->db->where('job_status', 1);
        $query = $this->db->get();
        return $query->result();
    }
    public function fetch_job_info($jobId) {
        $query = $this->db->from('jobs')
                ->where('job_id',$jobId)
                ->get();
        return $query->row();
    }
    public function apply_to_job($resume) {
        $fname = $this->input->post('full_name');
        $email = $this->input->post('email');
        $phone = $this->input->post('mobile_no');
        $clocation = $this->input->post('current_location');
        $texp = $this->input->post('total_experience');
        $jobTitle = $this->input->post('job_title');
        $jobType = $this->input->post('job_type');
        $edu = $this->input->post('education');
        $cert = $this->input->post('certification');
        $currEmp = $this->input->post('current_employer');
        $desig = $this->input->post('designation');
        $np = $this->input->post('notice_period');
        $nnp = $this->input->post('nego_notice_period');
        $cctc = $this->input->post('current_ctc');
        $ectc = $this->input->post('expected_ctc');
        $ks = $this->input->post('key_skills');
        $jid = $this->input->post('job_id');

        $add_data = array(
            'job_id' => $jid,
            'full_name' => $fname,
            'email' => $email,
            'mobile_no' => $phone,
            'current_location' => $clocation,
            'total_experience' => $texp,
            'resume' => $resume,
            'job_title' => $jobTitle,
            'job_type' => $jobType,
            'key_skills' => $ks,
            'education' => $edu,
            'certification' => $cert,
            'current_employer' => $currEmp,
            'designation' => $desig,
            'notice_period' => $np,
            'nego_notice_period' => $nnp,
            'current_ctc' => $cctc,
            'expected_ctc' => $ectc
        );
        $query = $this->db->insert('applications', $add_data);
    }
}
?>