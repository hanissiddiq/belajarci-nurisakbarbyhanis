<?php echo form_open('con_barang/post');
?>


<h3>Tambah Data Barang</h3>
<table border="1">
    <tr>
        <td>Nama Barang</td>
        <td><input type="text" name="nama_barang" placeholder="Nama Barang"></td>
    <tr>    <td>Kategori</td>
        <td><select name="kategori"> <?php foreach ($kategori as $k){
        echo "<option value='$k->id_kategori'>$k->nama_kategori </option>";
        }
        ?>
        </select>
    </tr>
    <tr>
        <td>Harga</td>
        <td><input type="text" name="harga" placeholder="Harga"></td>
    </tr>
    </tr>
    <tr>
        <td colspan="2"><button type="submit" name="submit">Simpan</button></td>
    </tr>
</table>