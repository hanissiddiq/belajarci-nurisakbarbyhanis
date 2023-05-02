<?php
class con_laporan extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(array('model_laporan'));
        check_session();
    }
    

    function index()
    {
        $data['record']= $this->model_laporan->laporan_default();
        $this->template->load('template2','transaksi/laporan',$data); 

    }

    function laporan_periode(){
        if(isset($_POST['submit'])){
            $tanggal1=$this->input->post('tanggal1');
            $tanggal2=$this->input->post('tanggal2');
            $data['record']= $this->model_laporan->laporan_periode($tanggal1,$tanggal2);
            $this->template->load('template2','transaksi/laporan_periode',$data);
        }
        else{
            $data['record']= $this->model_laporan->laporan_default();
            $this->template->load('template2','transaksi/laporan_periode',$data); 
        }
    }

    //  function laporan(){
    //     $data['record']= $this->model_transaksi->laporan_default();
    //     $this->template->load('template2','transaksi/laporan',$data);
    // }
}


