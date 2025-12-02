<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load necessary libraries, models, or helpers here
        $this->load->library('form_validation', 'email');
        $this->load->helper('url');
    }

    public function index() 
    {

        $data['title'] = 'Home - Suzuki';
        $data['states'] = $this->db->get_where('states', ['status' => 1])->result();  

        // Check if form submitted
        if ($this->input->post()) {

            $state_id     = $this->input->post('state');
            $district_id  = $this->input->post('mydistrict');
            $location_id  = $this->input->post('location_id');

            // Fetch outlet
            $this->db->where('state_id', $state_id);
            $this->db->where('district_id', $district_id);
            $this->db->where('location_id', $location_id);
            $data['outlet'] = $this->db->get('outlets')->row();
        }

        // Load the same page always
        $data['page'] = 'templates/home/index';
        $this->load->view('templates/home/main', $data);
    }

    public function get_districts()
    {
        $state_id = $this->input->post('state_id');
        if (!$state_id) {
            echo '<option value="">-- No State Selected --</option>';
            return;
        }
        $districts = $this->db
            ->where('state_id', $state_id)
            ->get('districts')
            ->result();

        if (empty($districts)) {
                echo '<option value="">-- No districts Found --</option>';
        } else {
            echo '<option value="">-- Select District --</option>';
            foreach ($districts as $d) {
                echo '<option value="' . $d->id . '">' . $d->district_name . '</option>';
            }
        }
    }

    public function get_locations()
    {
        $district_id = $this->input->post('district_id');
        
        if (!$district_id) {
            echo '<option value="">District ID Missing</option>';
            return;
        }

        $locations = $this->db->get_where('locations', [
            'district_id' => $district_id,
            'status'      => 1
        ])->result_array();

        if (empty($locations)) {
            echo '<option value="">No Locations Found</option>';
            return;
        }

        $options = '<option value="">-- Select Location --</option>';
        foreach ($locations as $l) {
            $options .= '<option value="' . $l['id'] . '">' . $l['location_name'] . '</option>';
        }

        echo $options;
    }

    public function submit_test_ride()
    {
        header('Content-Type: application/json');

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('model', 'Model', 'required|trim');
        $this->form_validation->set_rules('mobile', 'Mobile Number', 'required|numeric|exact_length[10]');

        if ($this->form_validation->run() == FALSE) {
            echo json_encode(['status' => 'error', 'message' => validation_errors()]);
            return;
        }

        $name   = $this->input->post('name', TRUE);
        $model  = $this->input->post('model', TRUE);
        $mobile = $this->input->post('mobile', TRUE);

        // Your Email Receiver
        $to = "php.developer@varungroup.com";   // CHANGE THIS
        $subject = "New Test Ride Request";

        $message = "
        Name: $name
        Model: $model
        Mobile: $mobile
            ";

        $headers = "From: noreply@suzuki.com";

        if (mail($to, $subject, $message, $headers)) {
            echo json_encode(['status' => 'success', 'message' => 'Your test ride request has been submitted!']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Unable to send email. Please try again.']);
        }
    }
    public function submit_book_service()
    {
        header('Content-Type: application/json');

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('model', 'Model', 'required|trim');
        $this->form_validation->set_rules('mobile', 'Mobile Number', 'required|numeric|exact_length[10]');

        if ($this->form_validation->run() == FALSE) {
            echo json_encode(['status' => 'error', 'message' => validation_errors()]);
            return;
        }

        $name   = $this->input->post('name', TRUE);
        $model  = $this->input->post('model', TRUE);
        $mobile = $this->input->post('mobile', TRUE);

        $to = "php.developer@varungroup.com";  // CHANGE THIS
        $subject = "New Service Booking Request";

        $message = "
        Name: $name
        Model: $model
        Mobile: $mobile
            ";

        $headers = "From: noreply@suzuki.com";

        if (mail($to, $subject, $message, $headers)) {
            echo json_encode(['status' => 'success', 'message' => 'Your service booking has been submitted!']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Unable to send email. Please try again.']);
        }
    }
    public function contact_form()
    {
        header('Content-Type: application/json');

        $this->form_validation->set_rules('username', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'E-mail', 'required|trim');
        $this->form_validation->set_rules('phone', 'Phone', 'required|numeric|exact_length[10]');
        $this->form_validation->set_rules('subject', 'Subject', 'required|trim');
        $this->form_validation->set_rules('message', 'Message', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            echo json_encode(['status' => 'error', 'message' => validation_errors()]);
            return;
        }

        $username   = $this->input->post('username', TRUE);
        $email  = $this->input->post('email', TRUE);
        $phone = $this->input->post('phone', TRUE);
        $subject  = $this->input->post('subject', TRUE);
        $message = $this->input->post('message', TRUE);



        $to = "youremail@suzuki.com";  // CHANGE THIS
        $subject = "Contact Details";

        $message = "
        Name: $username
        E-mail: $email
        Phone: $phone
        Subject: $subject
        Message: $message
            ";

        $headers = "From: noreply@suzuki.com";

        if (mail($to, $subject, $message, $headers)) {
            echo json_encode(['status' => 'success', 'message' => 'Your response submitted!']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Unable to send email. Please try again.']);
        }
    }



}
