<?php
class model_barang extends CI_Model {


function tampilkan_data()
{
    $query = "SELECT b.id_barang, b.nama_barang, b.harga, kb.id_kategori, kb.nama_kategori
                FROM barang as b,kategori_barang as kb 
                WHERE b.id_kategori = kb.id_kategori";
return $this->db->query($query);
}

function post($data)
{
    $this->db->insert('barang',$data);
}

///


function get_one($id)
    {
        $param =  array('id_barang' => $id);
        return $this->db->get_where('barang', $param);
    }


function edit($data,$id)
    {
        $this->db->where('id_barang',$id);
        $this->db->update('barang',$data);     
    }
    
function delete($id)
    {
        $this->db->where('id_barang',$id);
        $this->db->delete('barang'); 
    }
    

}
?>