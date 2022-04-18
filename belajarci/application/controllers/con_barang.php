<?php
class con_barang extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('model_barang');
    }
    

    function index()
    {
        $data['record']=$this->model_barang->tampilkan_data()->result();
        $this->load->view('barang/lihat_data',$data);

    }

    function post()
    {
        if(isset($_POST['submit'])){
            //proses input Barang
            $nama = $this->input->post('nama_barang');
            $kategori= $this->input->post('kategori');
            $harga = $this->input->post('harga');

            $data = array(
                'nama_barang'=>$nama,
                'id_kategori'=>$kategori,
                'harga'=>$harga
            );
            
            $this->model_barang->post($data);
            redirect('con_barang');
        }
        else{
            $this->load->model('model_kategori');
            $data['kategori']=$this->model_kategori->tampilkan_data()->result();
            $this->load->view('barang/form_input',$data);
        }
    }


    function edit()
    {
        if(isset($_POST['submit'])){
            //proses input Barang
            $id         = $this->input->post('id');
            $nama       = $this->input->post('nama_barang');
            $kategori   = $this->input->post('kategori');
            $harga      = $this->input->post('harga');

            $data = array(
                'nama_barang'=>$nama,
                'id_kategori'=>$kategori,
                'harga'=>$harga
            );
            
            $this->model_barang->edit($data,$id);
            redirect('con_barang');
        }
        else{
            $id =$this->uri->segment(3);
            $this->load->model('model_kategori');
            $data['kategori']=$this->model_kategori->tampilkan_data()->result();
            $data['record'] = $this->model_barang->get_one($id)->row_array();
            $this->load->view('barang/form_edit',$data);
        }
    }


    function delete()
    {
        $id =$this->uri->segment(3);
        $this->model_barang->delete($id);
        redirect('con_barang');



    }




}