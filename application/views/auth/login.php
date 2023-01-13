<!DOCTYPE html>
<html lang="en">
<?php if ($this->session->flashdata('message_login_error')): ?>
		<div class="invalid-feedback">
			<?= $this->session->flashdata('message_login_error') ?>
		</div>
	<?php endif ?>
	<?= $this->session->flashdata('message'); ?>
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
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- SweetAlert2 -->
	<link rel="stylesheet" href="<?= base_url('assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') ?>">
	<!-- Toastr -->
	<link rel="stylesheet" href="<?= base_url('assets/plugins/toastr/toastr.min.css') ?>">

</head>

<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<a>Peternakan</a>
		</div>
		<!-- /.login-logo -->
		<div class="card">
			<div class="card-body login-card-body">
				<p class="login-box-msg">masukkan username dan password anda</p>
				<form id="login" method="POST" action="<?= base_url('Auth/login') ?>">
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="username" id="username" name="username">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-envelope"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="password" class="form-control" placeholder="Password" id="password"
							name="password">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-8">
							<div class="icheck-primary">
								<input type="checkbox" id="remember">
								<label for="remember">
									Remember Me
								</label>
							</div>
						</div>
						<!-- /.col -->
						<div class="col-4">
							<button type="submit" class="btn btn-primary btn-block">Sign In</button>
						</div>
						<!-- /.col -->
					</div>
				</form>
			</div>
			<!-- /.login-card-body -->
		</div>
	</div>
	<!-- /.login-box -->

	<!-- jQuery -->
	<!-- jQuery -->
	<script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
	<!-- Bootstrap 4 -->
	<script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
	<!-- AdminLTE App -->
	<script src="<?= base_url('assets/dist/js/adminlte.min.js') ?>"></script>
	<!-- jQuery -->
	<script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
	<!-- Bootstrap 4 -->
	<script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
	<!-- SweetAlert2 -->
	<script src="<?= base_url('assets/plugins/sweetalert2/sweetalert2.min.js') ?>"></script>
	<!-- Toastr -->
	<script src="<?= base_url('assets/plugins/toastr/toastr.min.js') ?>"></script>
	<script>
		$(function () {
			var Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 4000

				//yg kanggo
			});
			$('.berhasil').click(function () {
				toastr.success('Login berhasil, Selamat Datang di Web Aplication Peternakan.')
			});
			$('.salah').click(function () {
				toastr.error('Login Gagal, Username atau Password Salah')
			});
			$('.tidakada').click(function () {
				toastr.error('Mohon Maaf, Username Anda Tidak Terdaftar')
			});
		});
	</script>
</body>

</html>