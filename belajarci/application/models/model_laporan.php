<?php
class model_laporan extends CI_Model {

    function laporan_default(){
        $query = "SELECT t.tanggal_transaksi, o.nama_lengkap, sum(td.harga*td.qty) as total
        FROM transaksi AS t, transaksi_detail as td, operator as o
        WHERE td.id_transaksi = t.id_transaksi AND o.id_operator=t.id_operator
        GROUP by t.id_transaksi";

        return $this->db->query($query);
    }

    function laporan_periode($tanggal1,$tanggal2){
        $query="SELECT t.tanggal_transaksi, o.nama_lengkap, sum(td.harga*td.qty) as total
        FROM transaksi AS t, transaksi_detail as td, operator as o
        WHERE td.id_transaksi = t.id_transaksi AND o.id_operator=t.id_operator 
        AND t.tanggal_transaksi BETWEEN '$tanggal1' AND '$tanggal2'
        GROUP by t.id_transaksi";
         return $this->db->query($query);
    }


}
?>