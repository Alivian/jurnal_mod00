<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	public function index()
	{
        $cookie = $this->input->cookie('logged');

        if()) /* CONDITION If isser $cookie || isset $_Session */
        {
             /*load function logiPage() in the bottom */
        } else {
            $data['title'] = "Login";
            $this->load->view('Landing/Header', $data);
            $this->load->view('Landing/Login', $data);
            $this->load->view('Landing/Footer');
        }
    }
    
    public function Register() {
        $data['title'] = "Register";
        
        /* Load view in landing (Header,Register,Footer) and header have a variabel $data */ 
       
    }

    public function loginPage() {
        $cookie = $this->input->cookie('logged');
        $data['image'] = $this->User->getImage();
       /*Load loggedin from views folder with parameter $data */ 
    }
}