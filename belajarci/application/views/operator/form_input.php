<?php echo form_open('con_operator/post');
?>


<h3>Tambah Data Operator</h3>
<table class="table table-bordered mt-2">
    <tr>
        <td class="col-3">Nama Lengkap</td>
        <td><input class="form-control" type="text" name="nama" placeholder="nama lengkap"></td>
    </tr>
    <tr>
        <td class="col-3">Username</td>
        <td><input class="form-control" type="text" name="username" placeholder="username"></td>
    </tr>
    <tr>
        <td class="col-3">Password</td>
        <td><input class="form-control" type="text" name="password" placeholder="password"></td>
    </tr>
    <tr>
        <td colspan="2"><button class="btn btn-primary" type="submit" name="submit">Simpan</button>
		<a href="javascript:window.history.go(-1);" class="btn btn-warning">Kembali</a>
	</td>
    </tr>
</table>
