<?php echo form_open('con_barang/edit');
?>


<h3>Edit Data Barang</h3>
<input type="hidden" value="<?php echo $record['id_barang'] ?>" name="id">
<table class="table table-bordered mt-2">
    <tr>
        <td class="col-3">Nama Barang</td>
        <td><input class="form-control" type="text" name="nama_barang" placeholder="Nama Barang" value="<?php echo $record['nama_barang']?>"></td>
    <tr>    <td>Kategori</td>
        <td><select class="form-control" name="kategori" > <?php 
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
        <td><input class="form-control" type="text" name="harga" placeholder="Harga" value="<?php echo $record['harga']?>"></td>
    </tr>
    </tr>
    <tr>
        <td colspan="2">
			<button class="btn btn-primary" type="submit" name="submit">Simpan</button>
			<a href="javascript:window.history.go(-1);" class="btn btn-warning">Kembali</a>
	</td>
    </tr>
</table>
