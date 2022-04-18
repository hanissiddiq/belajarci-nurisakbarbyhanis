<?php echo form_open('con_kategori/post');
?>


<h3>Tambah Data Kategori</h3>

<table class="table table-bordered mt-2">
    <tr>
        <td class="col-3">Nama Kategori</td>
        <td><input class="form-control" type="text" name="kategori" placeholder="Masukkan Kategori"></td>
    </tr>
    <tr>
        <td colspan="2">
			<button class="btn btn-primary" type="submit" name="submit">Simpan</button>
			<a href="javascript:window.history.go(-1);" class="btn btn-warning">Kembali</a>
		</td>
		
    </tr>
</table>

