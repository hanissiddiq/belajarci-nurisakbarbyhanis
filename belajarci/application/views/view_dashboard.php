<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>

</head>

<body>
        <ul>
        
        <li><?php echo anchor('con_kategori', 'Kategori'); ?></li>
        <li><?php echo anchor('con_barang', 'Data Barang'); ?></li>
        <li><?php echo anchor('con_operator', 'Operator Sistem'); ?></li>
        <li><?php echo anchor('con_transaksi', 'Form Transaksi'); ?></li>
        <li><?php echo anchor('con_transaksi/laporan', 'Laporan Transakasi'); ?></li>
        <li><?php echo anchor('auth/logout', 'Logout'); ?></li>
    </ul>
</body>

</html>