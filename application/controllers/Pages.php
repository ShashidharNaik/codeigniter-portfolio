<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

        public function view($page = 'home') {


                // Set form validation rules so Code Igniter (CI) knows the fields that are required
                $this->form_validation->set_rules('name', 'Name', 'required');
                $this->form_validation->set_rules('email', 'E-mail', 'required');
                $this->form_validation->set_rules('message', 'Message', 'required');

                // Check if the user has submitted all the required fields
                if($this->form_validation->run() == TRUE){

                        // By now CI knows the user has submitted the contact form required fields

                        // Check recaptcha part 1
                        $recaptcha = $this->input->post('g-recaptcha-response');
                        $response = $this->recaptcha->verifyResponse($recaptcha);

                        // Check recaptcha part 2
                        if (isset($response['success']) and $response['success'] === true) {

                                // Recaptcha success!

                                // Load e-mail server settings
                                $this->load->library('email');

                                // Create e-mail
                                $post_name = $this->input->post('name');
                                $post_complete = "<h2>Message: </h2>" . $this->input->post('message') . "<br /><br /><h2>E-mail field: </h2>" . $this->input->post('email') . "<br /><br /><h2>Ip-address: </h2>" . $this->input->ip_address();
                                $this->email->from('FROM-EMAIL-HERE', $post_name);
                                $this->email->to('TO-EMAIL-HERE');
                                $this->email->subject('dhcp.wiki contact form');
                                $this->email->message($post_complete);
                                $this->email->send();

                                // Send e-mail
                                if ( $this->email->send() ){

                                        $data['submit_msg']  = '<div class="block-title text-danger bold">Internal server error, message not sent. This problem is reported, I\'m sorry for the inconvenience.</div>';
                                
                                }
                                
                                else{
                                
                                        $data['submit_msg']  = '<div class="block-title text-success bold">Message sent, we will come back to you as soon as possible.</div>';       
                                
                                }
                        }

                        else{

                                // Failed the recapcha check
                                $data['submit_msg']  = '<div class="block-title text-danger bold">ReCaptcha verification mismatch. Please check the verification code.</div>';
                        
                        }

                                       
                }


                // Capitalise the first letter of the requested page
                $data['title'] = ucfirst($page);

                // Query database for footer and portfolio information, required for every page load
                $data['db'] = $query1 = $this->db->query('SELECT * FROM Portfolio');

                // Set reCaptcha variables
                $data['widget'] = $this->recaptcha->getWidget();
                $data['script'] = $this->recaptcha->getScriptTag();

                // Set server timezone as a fix for common errors
                date_default_timezone_set('Europe/Amsterdam');

                // Enable debug mode
                // $this->output->enable_profiler(TRUE);

                // Check if the page exists
                if (file_exists(APPPATH . '/views/pages/'. $page . '.php')){

                        // Load page
                        $this->load->view('templates/header', $data);
                        $this->load->view('pages/'.$page, $data);
                        $this->load->view('templates/footer', $data);

                }

                // Else show 404 error
                else{

                        // Show 404 error
                        $this->load->view('templates/header', $data);
                        $this->load->view('pages/404', $data);
                        $this->load->view('templates/footer', $data);

                }

        } // End view controller
} // End class