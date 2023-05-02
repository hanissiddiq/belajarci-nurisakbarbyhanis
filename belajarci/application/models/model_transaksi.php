<?php
class model_transaksi extends CI_Model {


    function simpan_barang()
    {
        $nama_barang = $this->input->post('barang');
        $qty = $this->input->post('qty');
        $id_barang = $this->db->get_where('barang',array('nama_barang'=>$nama_barang,))->row_array();
    
        $data = array('id_barang'=>$id_barang['id_barang'],
                        'qty'=>$qty,
                        'harga'=>$id_barang['harga'],
                        'status'=>'0');

                $this->db->insert('transaksi_detail',$data);
    }

    function tampilkan_detail_transaksi(){
    
            $query = "SELECT td.t_detail_id, td.qty, td.harga, b.nama_barang
            FROM transaksi_detail as td, barang as b
            WHERE b.id_barang = td.id_barang and td.status='0'";

        return $this->db->query($query);

    }

    function hapusitem($id)
    {
        $this->db->where('t_detail_id',$id);
        $this->db->delete('transaksi_detail');

    }

    function selesai_belanja($data)
    {
        $this->db->insert('transaksi',$data);
        $last_id=$this->db->query('select id_transaksi from transaksi order by id_transaksi desc')->row_array();
        $this->db->query("update transaksi_detail set id_transaksi='".$last_id['id_transaksi']."' where status = '0'");
        $this->db->query("update transaksi_detail set status='1' where status = '0'");

    }

    // function laporan_default(){
    //     $query = "SELECT t.tanggal_transaksi, o.nama_lengkap, sum(td.harga*td.qty) as total
    //     FROM transaksi AS t, transaksi_detail as td, operator as o
    //     WHERE td.id_transaksi = t.id_transaksi AND o.id_operator=t.id_operator
    //     GROUP by t.id_transaksi";

    //     return $this->db->query($query);
    // }


}
?>