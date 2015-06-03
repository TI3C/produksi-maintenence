<head>
 <!--<link href="<?= base_url()?>temp_1/css/bootstrap.min.css" rel="stylesheet">
 <link href="<?= base_url()?>temp_1/css/stylish-portfolio.css" rel="stylesheet">
 <link href="<?= base_url()?>temp_1/css/main.css" rel="stylesheet">
 <link href="<?= base_url()?>temp_1/css/responsive.css" rel="stylesheet">-->
	<link href="<?= base_url()?>temp_1/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url()?>temp_1/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url()?>temp_1/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?= base_url()?>temp_1/css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url()?>temp_1/css/main.css" rel="stylesheet">
    <link href="<?= base_url()?>temp_1/css/responsive.css" rel="stylesheet">
 </head>

 <div class="col-md-4 col-lg-offset-4 table-responsive" style="background:#0066CC">
<h2>Login</h2>

<body class="header">
<form action="" method="post">
<div class="form-group"><?php echo form_error('username'); ?>
<p>Username :<input type="text" name="username" placeholder="username" class="form-control"/></p>
</div>

<div class="form-group">
<p>Password :<input type="password" name="password" placeholder="password" class="form-control"/></p>
</div>

<!--<p>Username :<input type="text" name="username"/></p>
<p>Password :<input type="password" name="password"/></p>
<!--<p>User Type :
	<select name="user_type">
	<option value="" selected="selected">---</option>
	<option value="admin">admin</option>
	<option value="author">author</option>
	<option value="user">user</option>
	</select>-->
<p><input type="submit" class="btn btn-success" value="Login" /></p>
</form>
</body>