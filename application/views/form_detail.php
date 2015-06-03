
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Form Detail Maintenance | Korporasi</title>
    
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
	<!-- <div class="container" style="background-image:url(../../temp_1/images/contact.png)"> -->
	<div class="table col-lg-offset-4">
		<div class="row col-md-5">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="panel-title" align="center" style="font-size:30px">Form Detail Maintenance</div>
					</div>
								
<div class="panel-body" style="background:#0000FF">
<div class="table-responsive">

<?php 
    foreach ($det as $data) {
?>

	<form action="" method="POST">
		
		<div class="form-group">
			<p> Kd_Maintenance :<input type="text" name="Kd_Maintenance" class="form-control" value="<?php echo $data['Kd_Maintenance'] ?>" disabled="disabled"/></p>
		</div>

		<!-- <div class="form-group">
            <p> Kd_DetMaintenance :<input type="text" name="Kd_DetMaintenance" placeholder="Kd_DetMaintenance" class="form-control" class="form-control"/></p>
        </div> -->

		<div class="form-group">
            <p>Kd_Alat :<select name='Kd_Alat' <?php echo form_dropdown('statuspublish_id', $statuspublish_options);?></p>
             <!-- <option value="" selected="selected"</option>
                <option value="Ada">Ada</option>
                <option value="Dipinjam">Dipinjam</option>
                <option value="Rusak">Rusak</option>
            </select> -->
        </div>

		 <div class="form-group">
            <p> Keterangan :<input type="text" name="Keterangan_Kerusakan" class="form-control" placeholder="Keterangan Kerusakan"/></p>
        </div>
        
        <div class="form-group">
            <p> Biaya :<input type="text" name="Biaya" class="form-control" placeholder="Biaya"/></p>
        </div>
		
		<div class="form-group">
			<input type="submit" name="save" value="Save" class="btn btn-success"/>
			<!-- <a href="<?= base_url()?>maintenance/view_detail" class='btn btn-danger'>Finish</a> -->
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
            <!-- <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <ul class="list-inline">
                        <li><i class="fa fa-facebook fa-3x"></i>
                        </li>
                        <li><i class="fa fa-twitter fa-3x"></i>
                        </li>
                        <li><i class="fa fa-dribbble fa-3x"></i>
                        </li>
                    </ul>
                    <!-- <div class="top-scroll">
                        <a href="#top"><i class="fa fa-circle-arrow-up scroll fa-4x"></i></a>
                    </div>
                    <hr>
                    <!-- <p style="color:#FFFFFF">Copyright &copy; Mochamad Arriza 2014</p> -->
                </div>
            </div>
        </div>
    </footer>
    </body>
    </html>
	<?php
}
?>