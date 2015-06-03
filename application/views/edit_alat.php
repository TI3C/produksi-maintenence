<body>
<title>Edit Data Alat | Korporasi</title>
	<!-- <div class="container" style="background-image:url(../../temp_1/images/contact.png)"> -->
	<div class="table col-lg-offset-3">
		<div class="row col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="panel-title" align="center" style="font-size:30px">Form Alat</div>
					</div>
								
<div class="panel-body" style="background:#0000FF">
<div class="table-responsive">

<td align="center"><h1>Form Edit Data</h1></td>
    <link href="<?= base_url()?>temp_1/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url()?>temp_1/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url()?>temp_1/css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url()?>temp_1/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?= base_url()?>temp_1/css/main.css" rel="stylesheet">
    <link href="<?= base_url()?>temp_1/css/responsive.css" rel="stylesheet">
	
<?php 
    foreach ($tampil as $data) {
?>

    <form action="" method="POST">
<div class="form-group">
			<p> Tanggal Beli :<input type="date" name="tgl_beli"  value="<?php echo $data['tgl_beli']?>" class="form-control"/></p>
		</div>
		
		<div class="form-group">
			<p> Nama :<input type="text" name="nama" value="<?php echo $data['nama']?>" class="form-control"/></p>
		</div>
		
		<div class="form-group">
			<p> Harga :<input type="text" name="harga" value="<?php echo $data['harga']?>" class="form-control"/></p>
		</div>
		
		<div class="form-group">
			<p> Foto :<input type="text" name="foto" value="Disabled" Disabled="true" class="form-control"/></p>
		</div>
        
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
                    <p style="color:#FFFFFF">Copyright &copy; Abdi</p>
                </div>
            </div>
        </div>
    </footer>

    </body>

    <?php
    }
?>
