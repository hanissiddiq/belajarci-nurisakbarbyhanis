<?php
class dashboard extends CI_Controller {

function index(){
    check_session();
    // $this->load->view('view_dashboard');
    // $this->template->load('template','view_Userwelcome');
    $this->template->load('template2','view_dashboardv2');
}

}
