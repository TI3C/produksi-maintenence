<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Form Edit Registrasi Produk | Koorporasi</title>
    
    <!-- core CSS -->
    <link href="<?= base_url()?>temp_1/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url()?>temp_1/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url()?>temp_1/css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url()?>temp_1/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?= base_url()?>temp_1/css/main.css" rel="stylesheet">
    <link href="<?= base_url()?>temp_1/css/responsive.css" rel="stylesheet">
    
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>

<body>
	<div class="container" style="background-image:url(../../temp_1/images/contact.png)">
	<div class="table col-lg-offset-3">
		<div class="row col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="panel-title" align="center" style="font-size:30px">Form Edit Registrasi Produk</div>
					</div>
								
<div class="panel-body" style="background:#0000FF">
<div class="table-responsive">

<!-- <td align="center"><h1>Form Edit Registrasi Produk</h1></td> -->
	<?php
$pilihan = array(
	'kualitas 1'=> 'kualitas 1',
	'kualitas 2'=> 'kualitas 2',
	'kualitas 3'=> 'kualitas 3',		
);
$data[0]='SELECT';
?>

	<?php
	foreach($tampil as $data) {
	?>
	<form action="" method="POST">
	<table>
	<tr>
			<td>
			<p> Kode Jenis :</p>
			</td>
			<td>
			<input type="text" name="Kd_Jenis" class="form-control" value="<?php echo $data['Kd_Jenis']?>" disabled="disabled"/>
			</td>
		</tr>
		<tr>
			<td>
			<p> Kode Barang :</p>
			</td>
			<td>
			<input type="text" name="Kd_Barang"  class="form-control" value="<?php echo $data['Kd_Barang']?>" disabled="disabled"/>
			</td>
		</tr>
		<tr>
			<td>
			<p> Kualitas :</p>
			</td>
			<td>
			<select name='Kualitas' <?php echo form_dropdown('pilihan', $pilihan,$data['Kualitas']);?>
			<!-- <input type="text" name="Kualitas" class="form-control" value="<?php echo $data['Kualitas']?>"/> -->
			</td>
		</tr>
		<tr>
			<td>
			<p> Tanggal Registrasi :</p>
			</td>
			<td>
			<input type="text" name="Tgl_Registrasi"  class="form-control" value="<?php echo $data['Tgl_Registrasi']?>"/>
			</td>
		</tr>
	</table>
		<div class="form-group">
			<input type="submit" class="btn btn-primary" name="save" value="Save" class="btn btn-success"/>
		</div>
	</form>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>


	<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <!--<ul class="list-inline">
                        <li><i class="fa fa-facebook fa-3x"></i>
                        </li>
                        <li><i class="fa fa-twitter fa-3x"></i>
                        </li>
                        <li><i class="fa fa-dribbble fa-3x"></i>
                        </li>
                    </ul>
                    <div class="top-scroll">
                        <a href="#top"><i class="fa fa-circle-arrow-up scroll fa-4x"></i></a>
                    </div>-->
                    <hr>
                    <p style="color:#FFFFFF">Copyright &copy; Nova </p>
                </div>
            </div>
        </div>
    </footer>
    </body>
    </html>
	<?php
	}
	?>