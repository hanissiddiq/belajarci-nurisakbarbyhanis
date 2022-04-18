<?php echo form_open('con_barang/edit');
?>


<h3>Edit Data Barang</h3>
<input type="hidden" value="<?php echo $record['id_barang'] ?>" name="id">
<table border="1">
    <tr>
        <td>Nama Barang</td>
        <td><input type="text" name="nama_barang" placeholder="Nama Barang" value="<?php echo $record['nama_barang']?>"></td>
    <tr>    <td>Kategori</td>
        <td><select name="kategori" > <?php 
        foreach ($kategori as $k)
        {
        echo "<option value='$k->id_kategori'";
        echo $record['id_kategori']==$k->id_kategori?'selected':'';
        echo ">$k->nama_kategori </option>";
        }
        ?>
        </select>
    </tr>
    <tr>
        <td>Harga</td>
        <td><input type="text" name="harga" placeholder="Harga" value="<?php echo $record['harga']?>"></td>
    </tr>
    </tr>
    <tr>
        <td colspan="2"><button type="submit" name="submit">Simpan</button></td>
    </tr>
</table>