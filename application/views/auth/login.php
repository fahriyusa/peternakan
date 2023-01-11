<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Peternakan | Log in</title>


	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free/css/all.min.css') ?>">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?= base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css') ?>">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
			<a><b>Peternakan</b></a>
		</div>
		<!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
            <p class="login-box-msg">Silahkan Diisi</p>
				<?php if($this->session->flashdata('message_login_error')): ?>
				<div class="invalid-feedback">
					<?= $this->session->flashdata('message_login_error') ?>
				</div>
				<?php endif ?>
			</div>
            
            <?= $this->session->flashdata('message'); ?>
			<form id="login" method="POST" action="<?= base_url('Auth/login') ?>" style="max-width: 600px;">
				
                <div class="input-group mb-3">
					<input type="text" class="form-control" id="username" name="username" placeholder="Silahkan Diisi" required >
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
				</div>

				<div class="input-group mb-3">
					<input type="password" class="form-control" id="password" name="password" placeholder="Silahkan Diisi" required >
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
				</div>
				<div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </div>
			</form>
        </div>
			<!-- /.login-box -->

			<!-- jQuery -->
			<script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
			<!-- Bootstrap 4 -->
			<script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
			<!-- AdminLTE App -->
			<script src="<?= base_url('assets/dist/js/adminlte.min.js') ?>"></script>
</body>

</html>
