<?php
class model_operator extends CI_Model {


function login($username,$password)
{
$check = $this->db->get_where('operator',array('username'=> $username,'password'=>md5($password)));
    if($check->num_rows()>0)
    {
        return 1;
    }
    else
    {
        return 0;
    }
}

    function tampil_data()
    {
        return $this->db->get('operator');
    }

    function get_one($id)
    {
        $param =  array('id_operator' => $id);
        return $this->db->get_where('operator', $param);
    }

}
?>