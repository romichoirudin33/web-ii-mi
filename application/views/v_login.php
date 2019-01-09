<!doctype html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet"
          href="<?php echo base_url('assets/bootstrap/css/bootstrap.css'); ?>">
</head>
<body style="background-color: #eee">
	<div class="col-md-4 offset-md-4">

	<?php if ($this->session->flashdata('info')) { ?>
		<div class="alert alert-danger mt-5">
			<?php echo $this->session->flashdata('info'); ?>
		</div>
	<?php } ?>

		<div class="card" style="margin-top: 100px">
			<div class="card-body">
				<h2 class="card-title text-center">Login</h2>
				<form action="<?= site_url('login/cek_login') ?>" method="post">
					<div class="form-group">
						<label>Username</label>
						<input type="text" class="form-control" name="username">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" name="password">
					</div>
					<div class="form-group">
						<input type="submit" name="submit" value="Submit" class="btn btn-primary btn-block mt-5">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>