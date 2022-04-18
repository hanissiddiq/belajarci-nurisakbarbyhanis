<?php echo form_open('con_transaksi');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    


<h3>FormTransaksi</h3>
<table border="1">
<tr><th colspan="3">Form</th></tr>
    <tr>
        <td>Barang</td>
        <td><input list="barang" name="barang" placeholder="masukkan nama barang"></td>
        <!-- <td><input list="car" name="car" placeholder="masukkan nama barang"></td> -->
    </tr>
    <tr>
        <td>Qty</td>
        <td><input type="text" name="qty" placeholder="jumlah"></td>
    </tr>
    
    <tr>
        <td colspan="2">
        <button type="submit" name="submit">Simpan</button>
        <!-- <?php echo anchor('con_transaksi/selesai', '<button type="submit" name="submit">Selesai</button>')?> -->
        <?php echo anchor('con_transaksi/selesai_belanja', 'Selesai')?>
        </td>
    </tr>
</table>
</form>
<br>

<table border="1">
<tr><th colspan="6">Detail Transaksi</th></tr>
    <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Qty</th>
        <th>Harga</th>
        <th>Subtotal</th>
        <th>Cancel</th>
    </tr>
    <?php 
    $no=1;
    $total=0;
    foreach ($detail->result() as $d) 
    {
        echo "<tr>
        <td>$no</td>
        <td>$d->nama_barang</td>
        <td>$d->qty</td>
        <td>$d->harga</td>
        <td>".$d->qty*$d->harga."</td>
        <td>".anchor('con_transaksi/hapusitem/'.$d->t_detail_id,'Hapus')."</td>
        </tr>";

        $total=$total+($d->qty*$d->harga);

        $no++;
    }?>
    <tr>
        <td colspan="4">Total</td>
        <td colspan="2"><?php echo "Rp.".$total;?></td>
    </tr>
</table>

<datalist id="barang">
<?php foreach($barang as $b)
{
    echo "<option value='$b->nama_barang'>";
}
?>
    
</datalist>

<!-- <datalist id="car">
    <option value="bmw">bmw</option>
    <option value="bmwtoyota">hyundai</option>
    <option value="hyundai">toyota</option>
</datalist> -->
</body>
</html>