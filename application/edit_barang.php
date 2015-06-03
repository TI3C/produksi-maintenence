<head>
 <link href="<?= base_url()?>bootstrap/css/bootstrap.css" rel="stylesheet">
 <link href="<?= base_url()?>bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
 </head>
 
 <h3 align="left">
	<a style="color:#FFFFFF" href="<?= base_url()?>inventaris">Home</a> 
	<a style="color:#FFFFFF" href="<?= base_url()?>users/logout/">logout</a> 
</h3>
<body style="background:#000033">
<div class="container">
	<div class="table col-lg-offset-4">
		<div class="row col-md-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="panel-title" align="center" style="font-size:30px">Edit Data Barang</div>
					</div>

<div class="panel-body" style="background:#FFFFFF">
<div class="table-responsive">
<!--<td align="center"><h1>Edit Data</h1></td>-->
	<form action="" method="POST">
		<div class="form-group">
			<p> ID Barang :<input type="text" name="id" placeholder="ID Barang" class="form-control" value="<?php echo $data['id'] ?>"  disabled="disabled"/></p>
		</div>
		
		<div class="form-group">
			<p> Tanggal :<input type="text" name="tanggal" placeholder="Tanggal" class="form-control" value="<?php echo $data['tanggal'] ?>"/></p>
		</div>
		
		<div class="form-group">
			<p> Suppliier :<input type="text" name="supplier" placeholder="Supplier" class="form-control" value="<?php echo $data['supplier'] ?>"/></p>
		</div>
		
		<div class="form-group">
			<p> Nama Barang :<input type="text" name="nama_barang" placeholder="Name Barang" class="form-control" value="<?php echo $data['nama_barang'] ?>"/></p>
		</div>
		
		<div class="form-group">
			<p> Jumlah :<input type="text" name="jumlah" placeholder="Jumlah" class="form-control" value="<?php echo $data['jumlah'] ?>"/></p>
		</div>
		
		<div class="form-group">
			<p> Harga :<input type="text" name="harga" placeholder="Harga" class="form-control" value="<?php echo $data['harga'] ?>"/></p>
		</div>
		
		<!--<div class="form-group">
			<p> ID Peminjam :<input type="text" name="id_peminjam" placeholder="ID Peminjam" class="form-control" value="<?php echo $data['id_peminjam'] ?>" readonly="readonly"/></p>
		</div>
		
		<div class="form-group">
			<p> Nama Peminjam :<input type="text" name="nama_peminjam" placeholder="Name Peminjam" class="form-control" value="<?php echo $data['nama_peminjam'] ?>" readonly="readonly"/></p>
		</div>-->
		
		<div class="form-group">
			<input type="submit" class="btn btn-primary" name="save" value="Save" class="btn btn-success"/>
		</div>
		
	</form>
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
    <!-- /Footer -->

    <!-- JavaScript -->
    <script src="../../../inventory/js/jquery-1.10.2.js"></script>
    <script src="../../../inventory/js/bootstrap.js"></script>

    <!-- Custom JavaScript for the Side Menu and Smooth Scrolling -->
    <script>
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    </script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    </script>
    <script>
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>
</body>