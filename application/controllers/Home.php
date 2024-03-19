<?php
Class Home extends CI_Controller{
    public function index(){
        $this->load->view('home');
    }
    public function rnd_tax_credit(){
        $this->load->view('rnd_tax_credit');
    }
     public function qualifying_sectors(){
        $this->load->view('qualifying_sectors');
     }
    public function about_us()
    {
        $this->load->view('about');
    }
     public function about()
    {
        $this->load->view('about');
    }
     public function contact_us(){
         $this->load->view('contact');
     }
     public function privacy_policy()
    {
        $this->load->view('privacy_policy');
    }
    
    public function terms_conditions()
    {
        $this->load->view('terms_conditions');
    }
     public function complaints_procedure()
    {
        $this->load->view('complaints_procedure');
    }
    // --------------Useful Info Pages------------
    public function check_eligibility(){
        $this->load->view('check_eligibility');
    }
    public function the_process(){
        $this->load->view('process');
    }
    public function rnd_faq()
    {
        $this->load->view('rndfaq');
    }
    // -------------------------Qualifying Sectors Pages----------------
    public function science_n_medications(){
        $this->load->view('science_n_medications');
    }
    public function agriculture(){
        $this->load->view('agriculture');
    }
    public function architecture(){
        $this->load->view('architecture');
    }
    public function construction_industry(){
        $this->load->view('construction_industry');
    }
    public function hospitality(){
        $this->load->view('hospitality');
    }
    public function food_n_drink(){
        $this->load->view('food_n_drink');
    }
    public function manufacturing(){
        $this->load->view('manufacturing');
    }
    public function homepage() {
        $this->load->view('homepage');
    }
    
    function it_software()
    {
        $this->load->view('it_software');
    }
    public function care_home()
    {
        $this->load->view('care_home');
    }
    public function send_mail() {
    $config = Array(
    'protocol' => 'smtp',
    'smtp_host' => 'thefinanceinsider.co.uk',
    'smtp_port' => 25,
    'smtp_timeout' => 50,
    'smtp_user' => 'loans@thefinanceinsider.co.uk',
    'smtp_pass' => 'Loans@123',
    'mailtype' => 'html',
    'starttls'  => true,
    'charset' => 'utf-8',
    'wordwrap' => TRUE,
    'newline' => "\r\n",
    'crlf'    => "\r\n"
        );
    $name = $this->input->post('name');
    $last_name = $this->input->post('last_name');
    $number = $this->input->post('phone_num');
    $usermail = $this->input->post('email');
    $sub = $this->input->post('subject');
    $usermsg = $this->input->post('message');
    $mail_data = array(
                'name' => $name,
                'lname' => $last_name,
                'num' => $number,
                'subject' => $sub,
                'messg' => $usermsg,
                'mail' => $usermail
            );
        $message = '';
        $this->load->library('email', $config);
        $this->email->initialize($config);
        // $this->email->set_newline("\r\n");
        $this->email->from('loans@thefinanceinsider.co.uk', 'Loan Application');
        $this->email->to('chhayabgiram07@gmail.com');
        $msg = $this->load->view('emailDesign',$mail_data,TRUE);
        $this->email->subject('One Step Left for your Loan Application');
        $this->email->message($msg);
        if ($this->email->send()) {
            echo"<script>alert('Email Sent Succesfully');
    history.go(-1);
       </script>";
        }else {
            echo"<script>alert('Something went wrong');
       history.go(-1);
       </script>";
        }
    }
    public function submit_form() {
    $config = Array(
    'mailtype' => 'html',
    'starttls'  => true,
    'charset' => 'utf-8',
    'wordwrap' => TRUE,
    'newline' => "\r\n",
    'crlf'    => "\r\n"
        );
    $name = $this->input->post('name');
    $last_name = $this->input->post('last_name');
    $number = $this->input->post('phone_num');
    $usermail = $this->input->post('email');
    $sub = $this->input->post('subject');
    $usermsg = $this->input->post('message');
    $mail_data = array(
                'name' => $name,
                'lname' => $last_name,
                'num' => $number,
                'subject' => $sub,
                'messg' => $usermsg,
                'mail' => $usermail
            );
        $message = '';
        $this->load->library('email', $config);
        $this->email->initialize($config);
        // $this->email->set_newline("\r\n");
        $this->email->from('info@clickrnd.co.uk', 'Click R&D');
        $this->email->to('hiteshnainani17@gmail.com','chhayabgiram07@gmail.com');
        $msg = $this->load->view('emailDesign',$mail_data,TRUE);
        $this->email->subject('Click R&D website form Submission');
        $this->email->message($msg);
        if ($this->email->send()) {
            echo"<script>alert('Email Sent Succesfully');
    history.go(-1);
       </script>";
        }else {
            echo"<script>alert('Something went wrong');
       history.go(-1);
       </script>";
        }
    }
    public function qualify_form(){
        $this->load->view('qualify-form');
    }
    public function submit_qualify_form() {
        if (isset($_POST['submit-details'])) {
            $date = date("Y-m-d H:i:s");
            $client_name = $_POST['client_name'];
            $company_number = $_POST['company_number'];
            $lcompany = $_POST['ltd_company'];
            $comname = $_POST['company_name'];
            $new_p_p_s = $_POST['new_p_p_s'];
            $new_technologies = $_POST['new_technologies'];
            $failure = $_POST['failure'];
            $development = $_POST['development'];
            $stech = $_POST['sci_technology'];
            $work_need = $_POST['work_need'];
            $aspent = $_POST['amnt_spent'];
            $tspan = $_POST['time_span'];
        
            $stechadv = $_POST['sci_tech_advance'];
            $sctechun = $_POST['sci_tech_uncertainties'];
            $ouncert = $_POST['overcome_uncertainties'];
            $knowledge = $_POST['knowledge'];
            $tpoc = $_POST['third_party_or_company'];
                $data = array(
                    'client_name' => $_POST['client_name'],
                    'company_number' => $_POST['company_number'],
                    'ltd_company' => $_POST['ltd_company'],
                    'company_name' => $_POST['company_name'],
                    'new_p_p_s' => $_POST['new_p_p_s'],
                    'new_technologies' => $_POST['new_technologies'],
                    'failure' => $_POST['failure'],
                    'development' => $_POST['development'],
                    'sci_technology' => $_POST['sci_technology'],
                    'work_need' => $_POST['work_need'],
                    'amnt_spent' => $_POST['amnt_spent'],
                    'time_span' => $_POST['time_span'],
                    'sci_tech_advance' => $_POST['sci_tech_advance'],
                    'sci_tech_uncertainties' => $_POST['sci_tech_uncertainties'],
                    'overcome_uncertainties' => $_POST['overcome_uncertainties'],
                    'knowledge' => $_POST['knowledge'],
                    'third_party_or_company' => $_POST['third_party_or_company'],
                    'date' => $date
                );
                $this->db->insert('qualifying_details', $data);
                $file_name = $client_name . '.pdf';
                $html_code = '';
 $html_code .= '<p>Client name</p>
            <p style="color:green">'.$client_name.'</p>
            
            <p>Is your business a limited company?</p>
            <p style="color:green">'.$lcompany.'</p>
            
            <p>Company Name</p>
            <p style="color:green">'.$comname.'</p>
            
            <p>Company Number</p>
            <p style="color:green">'.$company_number.'</p>
            
            <p>Have you been creating new processes, products or services, or making improvements to existing ones (whether successful or not)?</p>
            <p style="color:green">'.$new_p_p_s.'</p>
            
            <p>Have you used or combined technologies in new ways?</p>
            <p style="color:green">'.$new_technologies.'</p>
            
            <p>Any failures in product or process development or improvement?</p>
            <p style="color:green">'.$failure.'</p>
            
            <p>Have you developed a new or changed product or process that has characteristics substantially different from those currently available (i.e. more efficient, robust, flexible, less expensive, etc.)?</p>
            <p style="color:green">'.$development.'</p>
            
            <p>Has this required an advance in science or technology to do this , which a competent professional in your field could not easily work out?</p>
            <p style="color:green">'.$stech.'</p>
            
            <p>Have you developed a new or changed product or process that has characteristics substantially different from those currently available (i.e. more efficient, robust, flexible, less expensive, etc.)?</p>
            <p style="color:green">'.$work_need.'</p>
            
            <p>What is your estimated total spend on this work?</p>
            <p style="color:green">'.$aspent.'</p>
            
            <p>Has this work been carried out in the last 2 years?</p>
            <p style="color:green">'.$tspan.'</p>
            
            <p>What was the scientific or technological advance?</p>
            <p style="color:green">'.$stechadv.'</p>
            
            <p>What scientific or technological uncertainties were encountered?</p>
            <p style="color:green">'.$sctechun.'</p>
            
            <p>How and when were the uncertainties overcome?</p>
            <p style="color:green">'.$ouncert.'</p>
            
            <p>Why wasn’t the knowledge being sought readily deducible by competent professionals?</p>
            <p style="color:green">'.$knowledge.'</p>
            
            <p>Was this project undertaken on behalf of and directly financed by a third party, or was it undertaken as your own company’s initiative?</p>
            <p style="color:green">'.$tpoc.'</p>';
            
            $this->load->library('pdf');
		$this->pdf->loadHtml($html_code);
		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->render();
		$file = $this->pdf->output();
 file_put_contents($file_name, $file);
		// Output the generated PDF (1 = download and 0 = preview)
// 		$this->pdf->stream($file_name, array("Attachment"=> 0));
// 		file_put_contents($file_name, $file);
		$config = Array(
    'mailtype' => 'html',
    'starttls'  => true,
    'charset' => 'utf-8',
    'wordwrap' => TRUE,
    'newline' => "\r\n",
    'crlf'    => "\r\n"
        );
    $name = $this->input->post('name');
    $last_name = $this->input->post('last_name');
    $number = $this->input->post('phone_num');
    $usermail = $this->input->post('email');
    $sub = $this->input->post('subject');
    $usermsg = $this->input->post('message');
    $mail_data = array(
                'name' => $name,
                'lname' => $last_name,
                'num' => $number,
                'subject' => $sub,
                'messg' => $usermsg,
                'mail' => $usermail
            );
        $message = '';
        $this->load->library('email', $config);
        $this->email->initialize($config);
        // $this->email->set_newline("\r\n");
        $this->email->from('teams@clickrnd.co.uk', 'Click R&D');
        $this->email->to('info@clickrnd.co.uk');
        //$this->email->to('teams@clickrnd.co.uk');
        $this->email->subject("Qualifying Form Details from"." ".$client_name);
        $this->email->message("Qualifying Form Details from"." ".$client_name);
        $this->email->attach($file_name);
        $this->email->send();
        unlink($file_name);
        echo '<script>alert("Thank you for contacting us. One of our representative will be get in touch with you soon");
        window.location.href = "https://clickrnd.co.uk//qualifying-form";
        </script>';
        }
    }
    
    
    
    function test()
    {
         $this->load->view('test');
    }
}
