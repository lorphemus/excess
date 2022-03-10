<?php
ob_start();
session_start();
include('assets/connect.php');
$qry=$db->prepare("SELECT * FROM users WHERE user_token=:token");
$qry->execute(array('token'=>$_GET['token']));
$user=$qry->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <meta name="author" content="Batuhan Nihat KILIÇ | Excess Reklam">
    <link rel="icon" href="img/favicon.ico">

    <title>Excess Reklam - Panel Giriş </title>
  
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="assets/vendor_components/font-awesome/css/font-awesome.min.css">

	<!-- Ionicons -->
	<link rel="stylesheet" href="assets/vendor_components/Ionicons/css/ionicons.min.css">

	<!-- Theme style -->
	<link rel="stylesheet" href="css/master_style.css">

	<!-- Cross Admin skins -->
	<link rel="stylesheet" href="css/skins/_all-skins.css">	

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="login.php"><b>Excess</b> Reklam</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Yeni Şifre Oluştur</p>
	
	<!-- Alerts -->
	<?php
	if(@$_GET['status']=='notequal'){
		echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Hata!</h4>
                Girdiğiniz Şifreler Aynı Olmalı!!
              </div>';
	}
	?>
	<?php
	$token=$user['user_token'];
	$get_token=$_GET['token'];
	if($token==$get_token){?>  
    <form action="assets/process.php" method="post" class="form-element">
      <div class="form-group has-feedback">
		<input type="hidden" name="user_token" value="<?php echo $user['user_token'] ?>">
        <input type="hidden" name="user_id" value="<?php echo $user['user_id'] ?>">
        <input type="password" name="pass" class="form-control" placeholder="Yeni Şifre" required>
        <span class="ion ion-email form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="pass_control" class="form-control" placeholder="Şifre Tekrar" required>
        <span class="ion ion-locked form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12 text-center">
          <button type="submit" name="newpass" class="btn btn-info btn-block btn-flat margin-top-10">Yeni Şifre Oluştur</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
	<?php }else{header('Location:login.php');} ?>
	  
    <div class="margin-top-30 text-center">
		<p><i class="ion ion-home"></i> Anasayfaya <a href="../index.php" class="text-info m-l-5">Geri Dön</a></p>
    	<p>Yazılım <a href="https://www.excessreklam.com" class="text-info m-l-5" target="_blank">Excess Reklam</a></p>
    </div>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- Modal Box Starts -->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
	  <form action="assets/process.php" method="post">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title">E-Mail Adresinizi Girin!</h4>
		  </div>
		  <div class="modal-body">
			<div class="form-group has-feedback">
				<input class="form-control" type="email" name="remail" placeholder="Email Adresiniz..." required>
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Kapat</button>
			<button type="submit" class="btn btn-success" name="repass">Mail Gönder</button>
		  </div>
		</div>
	  </form>
	<!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

	<!-- jQuery 3 -->
	<script src="assets/vendor_components/jquery/dist/jquery.min.js"></script>
	
	<!-- Bootstrap 3.3.7 -->
	<script src="assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

</html>
