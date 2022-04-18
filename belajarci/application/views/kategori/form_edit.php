<?php echo form_open('con_kategori/edit');
?>


<h3>Edit Data Kategori</h3>
<input type="hidden" value="<?php echo $record['id_kategori'] ?>" name="id">

<table class="table table-bordered mt-2">
    <tr>
        <td class="col-3">Nama Kategori</td>
        <td><input class="form-control" type="text" name="kategori" placeholder="kategori" value="<?php echo $record['nama_kategori'] ?>"></td>
    </tr>
    <tr>
        <td colspan="2">
			<button class="btn btn-primary" type="submit" name="submit">Simpan</button>
			<a href="javascript:window.history.go(-1);" class="btn btn-warning">Kembali</a>
		</td>
    </tr>
</table>

