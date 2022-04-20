<!DOCTYPE html>
<html>

<style>
	.pas-photo{border: 1px solid #ddd;
		border-radius: 4px;
		padding: 5px;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		width: 150px;
	height:200px
	}

	@media only screen and (max-width: 550px) {
  /* For mobile phones: */
  div.row {
    width: 100%;
	height:50%;
	display:absolute;
	text-align:center;
	margin-left:55px;
  }

  .ml-2, .mx-2 {
    margin-left: 1.7rem!important;
}

  .container{
	  text-align:center;
  }

  .card,.row,.photo{
	  width:100%;
	  height:auto;
	  
	  
  }

  p{
	  font-size:10px;
	  text-align:justify;
	}

	td{
	  font-size:10px;
	  text-align:left;
	}
  
 
	.pas-photo{
	width: 100px;
	height:130px;
	}
	

	.col-2 {
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 60.666667%;
    max-width: 50.666667%;}
}

</style>

<head>
    <title>Welcome !!!</title>

</head>

<body>
     
<div class="card">
	<div class="row">
		
		<div class="col-2 my-2 p-2 mx-2 photo">
			<img class="card-img-top img-fluid pas-photo" src="<?= base_url();?>vendor2\assets\images\users\foto-hanis.jpg" alt="Card image cap">
		</div>
			
		<div class="card-body col-8">
			<h4 class="card-title font-16 mt-0">Selamat Datang di App POS</h4>
			<p class="card-text">POS atau Point of Sales adalah suatu sistem yang digunakan dalam kebutuhan berbagai macam usaha bisnis ritel untuk dapat mempermudah proses transaksi jual beli secara cepat, aman, dan sistematis. POS juga termasuk versi modern dari mesin kasir konvensional yang masih sering digunakan pada beberapa toko atau usaha.</p>
			<table>
				<tr><td>Nama</td><td>: Hanis Siddiq,S.Kom</td></tr>
				<tr><td>Tempat Lahir</td><td>: Kubu</td></tr>
				<tr><td>Tanggal Lahir</td><td>: 31-Maret-1998</td></tr>
				<tr><td>Alamat</td><td>: Tgk Imum Cut Haji</td></tr>
				<tr><td>NIM</td><td>: 1705020011</td></tr>
				<tr><td>Telp</td><td>: 082211887735</td></tr>
				
			</table>
			<a href="#" class="btn btn-primary waves-effect waves-light">Button</a>
		</div>

	</div>
</div>

</body>

</html>
