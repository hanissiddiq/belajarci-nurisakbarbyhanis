<?php
class con_operator extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('model_operator');
    }
    

    function index()
    {
        $data['record']=$this->model_operator->tampil_data()->result();
        $this->load->view('operator/lihat_data',$data);

    }

    function post()
    {
        if(isset($_POST['submit'])){
            //proses input data operator
           $nama = $this->input->post('nama',true);
           $username = $this->input->post('username',true);
           $password = $this->input->post('password',true);
           $data = array(
               'nama_lengkap' => $nama,
               'username' => $username,
               'password' =>md5($password) ,
           );

           $this->db->insert('operator',$data);


            redirect('con_operator');
        }
        else{
            $this->load->view('operator/form_input');
        }
    }


    function edit()
    {
        if (isset($_POST['submit'])) {
            // proses edit operator
            $id = $this->input->post('id',true);
            $nama = $this->input->post('nama',true);
            $username = $this->input->post('username',true);
            $password = $this->input->post('password',true);

            if(empty($password)){
                $data = array(
                    'nama_lengkap' => $nama,
                    'username' => $username,
                    );
            }
            else{
                $data = array(
                    'nama_lengkap' => $nama,
                    'username' => $username,
                    'password' => md5($password)
                    );
            }
           
                $this->db->where('id_operator',$id);
                $this->db->update('operator',$data);
           redirect('con_operator');
        }
        //tombol batal dengan nama 'batal' 
        elseif (isset($_POST['batal'])) {
            redirect('con_operator');
        } else {
            $id = $this->uri->segment(3);
          
            $data['record'] = $this->model_operator->get_one($id)->row_array();
            $this->load->view('operator/form_edit', $data);
        }
    }


    function delete()
    {
        $id =$this->uri->segment(3);
        $this->db->where('id_operator',$id);
        $this->db->delete('operator');
        redirect('con_operator');



    }




}