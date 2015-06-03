<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Form Jenis Produk | Korporasi</title>
    
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
					<div class="panel-title" align="center" style="font-size:30px">Form Jenis Produk</div>
					</div>
								
<div class="panel-body" style="background:#0000FF">
<div class="table-responsive">

<!--<?php
$pilihan = array(
	// '1' => 'kualitas 1',
	// '2'	=> 'kualitas 2',
	// '3'	=> 'kualitas 3',		
);
?>-->

	<?php $tgl=date('Y-m-d');?>
	<form action="" method="POST">
	<table>
		<tr>
			<td>
			<p> Kode Jenis :</p>
			</td>
			<td>
			<input type="text" name="Kd_Jenis" class="form-control"/>
			</td>
		</tr>
		<tr>
			<td>
			<p> Keterangan :</p>
			</td>
			<td>
			<input type="text" name="Keterangan"  class="form-control"/>
			</td>
		</tr>
		<tr>
			<td>
			<p> Foto :</p>
			</td>
			<td>
			<input type="text" name="Foto" class="form-control" disabled="disabled"/>
			</td>
		</tr>
		<tr>
			<td>
			<p> Harga :</p>
			</td>
			<td>
			<input type="text" name="Harga" class="form-control"/>
			</td>
		</tr>
	</table>
	<div class="form-group">
		<input type="submit" name="save" value="Save" class="btn btn-success"/>
	</div>
	</form>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>

	</body>
    </html>
 