<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

    /**
     * view of the controller
     */
    public function index()
    {
        $this->load->view('Home');
    }
}
