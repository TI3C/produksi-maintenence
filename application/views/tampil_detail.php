<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Detail Maintenance | Korporasi</title>
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

	<div class="container">
	<div class="row">
	
		<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="panel-title"><center><strong>DETAIL MAINTENANCE</strong></center></div>
				</div>

		<div class='btn-group'>
				<a href="<?= base_url()?>maintenance/view_data" class='btn btn-success'>View Data Maintenance</a>
				<a href="<?= base_url()?>users/logout" class='btn btn-danger'>Logout</a>
		</div>
		
		
		<div class="panel-body">
		<div class="cool-md-2 col-lg-ofset-6 table-responsive">
			<table border="1" align="left" class="table table-bordered table-striped" style="color:#000000">
				<tr class="asd">
					<td><center><strong>No</strong></center></td>
					<!--<td><strong>ID Barang</strong></td>-->
					<!-- <td><center><strong>Kode Detail Maintenance</strong></center></td> -->
					<td><center><strong>Keterangan Kerusakan</strong></center></td>
					<td><center><strong>Biaya</strong></center></td>
					<td><center><strong>Kode Maintenance</strong></center></td>
					<td><center><strong>Kode Alat</strong></center></td>
					<td><center><strong>Aksi</strong></center></td>
				</tr>
			<?php
				$no=1;
				foreach($detail as $data){
				echo"<tr>
					<td>$no</td>
					<td>".$data['Keterangan_Kerusakan']."</td>
					<td>Rp. ".$data['Biaya']."</td>
					<td>".$data['Kd_Maintenance']."</td>
					<td>".$data['Kd_Alat']."</td>
					<td>
						<div class='btn-group'>
							<a href=".base_url()."maintenance/edit_barang/".$data['Kd_DetMaintenance']." class='btn btn-warning'>Update</a> 
							<a href=".base_url()."maintenance/delete_barang/".$data['Kd_DetMaintenance']." class='btn btn-danger'>Delete</a>
					</td>
						
				</tr>";
				$no++;
				
			}
			
			
		?>
	</table>
	</div>
	</div>
</div>
</div>
</div>
</div>

<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
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
                    <p style="color:#FFFFFF">Copyright &copy; Mochamad Arriza 2014</p>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
