<?php echo form_open('con_barang/post');
?>


<h3>Tambah Data Barang</h3>
<table class="table table-bordered mt-2">
    <tr>
        <td class="col-3">Nama Barang</td>
        <td><input class="form-control" type="text" name="nama_barang" placeholder="Nama Barang"></td>
    <tr>    <td>Kategori</td>
        <td><select name="kategori" class="form-control select2"> <?php foreach ($kategori as $k){
        echo "<option value='$k->id_kategori'>$k->nama_kategori </option>";
        }
        ?>
        </select>
    </tr>
    <tr>
        <td>Harga</td>
        <td><input class="form-control" type="text" name="harga" placeholder="Harga"></td>
    </tr>
    </tr>
    <tr>
        <td colspan="2">
			<button class="btn btn-primary" type="submit" name="submit">Simpan</button>
			<a href="javascript:window.history.go(-1);" class="btn btn-warning">Kembali</a>
		</td>
	
    </tr>
</table>
