<?php echo form_open('con_operator/edit');
?>


<h3>Edit Data Operator</h3>
<input type="hidden" value="<?php echo $record['id_operator'] ?>" name="id">
<table border="1">
   
    <tr>
        <td>Nama Lengkap</td>
        <td><input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $record['nama_lengkap'] ?>"></td>
    </tr>
    <tr>
        <td>Username</td>
        <td><input type="text" name="username" placeholder="username" value="<?php echo $record['username'] ?>"></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input type="text" name="password" placeholder="password" ></td>
    </tr>
    <tr>
        <td colspan="2"><button type="submit" name="submit">Simpan</button></td>
    </tr>
</table>