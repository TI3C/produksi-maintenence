<!DOCTYPE html>

	<div class="container">
	<div class="row">
	
		<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="panel-title"><strong>DATA ALAT</strong></div>
				</div>
    <link href="<?= base_url()?>temp_1/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url()?>temp_1/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url()?>temp_1/css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url()?>temp_1/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?= base_url()?>temp_1/css/main.css" rel="stylesheet">
    <link href="<?= base_url()?>temp_1/css/responsive.css" rel="stylesheet">
		
		
		<div class="panel-body">
		<div class="cool-md-4 col-lg-ofset-8 table-responsive">
			<table border="1" align="left" class="table table-bordered table-striped" style="color:#000000">
				<tr class="asd">
					<td><center><strong>No</strong></center></td>
					<td><center><strong>Tanggal Beli</strong></center></td>
					<td><center><strong>Nama Barang</strong></center></td>
					<td><center><strong>Harga</strong></center></td>
					<td><center><strong>Aksi</strong></center></td>
				</tr>
			<?php
				$no=1;
				foreach($tampil as $data){
				echo"<tr>
					<td>$no</td>
					<td>".$data['tgl_beli']."</td>
					<td>".$data['nama']."</td>
					<td>Rp. ".$data['harga']."</td>
					<td>
						<div class='btn-group'>
							<a href=".base_url()."control_alat/edit_barang/".$data['kd_alat']." class='btn btn-warning'>Update</a> 
							<a href=".base_url()."control_alat/delete_barang/".$data['kd_alat']." class='btn btn-danger'>Delete</a>
						</div>
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
</html>
