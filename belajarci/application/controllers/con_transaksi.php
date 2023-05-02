<?php
class con_transaksi extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(array('model_barang','model_transaksi'));
        check_session();
    }
    

    function index()
    {
        if(isset($_POST['submit'])){
            $this->model_transaksi->simpan_barang();
            redirect('con_transaksi');        
        }
        else{
            $data['barang']=$this->model_barang->tampilkan_data()->result();
            $data['detail']=$this->model_transaksi->tampilkan_detail_transaksi();
            // $this->load->view('transaksi/form_transaksi',$data);
            $this->template->load('template2','transaksi/form_transaksi',$data);
        }

    }

    function hapusitem()
    { 
        $id = $this->uri->segment(3);
        $this->model_transaksi->hapusitem($id);
        redirect('con_transaksi');
    }

    function selesai_belanja()
    { 
        $tanggal=date('Y-m-d');
        $user = $this->session->userdata('username');
        $id_op = $this->db->get_where('operator',array('username'=>$user))->row_array();
        $data=array('id_operator'=>$id_op['id_operator'],'tanggal_transaksi'=>$tanggal);
        $this->model_transaksi->selesai_belanja($data);
        redirect('con_transaksi');
    }

    // function laporan(){
    //     $data['record']= $this->model_transaksi->laporan_default();
    //     $this->template->load('template2','transaksi/laporan',$data);
    // }
}


