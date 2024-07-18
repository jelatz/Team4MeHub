<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
	<title>Team4MeHub Log in</title>
</head>

<body class="bg-secondary-subtle">
	<div class="container-fluid bg-secondary-subtle mt-5">
		
		<div class="row min-vh-100 align-items-start justify-content-center mt-5">
			<div class="col-7 col-md-4 col-lg-3 text-center mt-5">
				<h1 class="p-0 m-0 fw-bolder fs-1 mt-5">CTC BPO</h1>
				<h4 class="mb-5">Team4MeHub</h4>	
				<?php $this->load->helper('form'); ?>
        <div class="row">
            <div class="col-md-12">
                <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
            </div>
        </div>
        <?php
        $this->load->helper('form');
        $error = $this->session->flashdata('error');
        if($error)
        {
            ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $error; ?>                    
            </div>
        <?php }
        $success = $this->session->flashdata('success');
        if($success)
        {
            ?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $success; ?>                    
            </div>
        <?php } ?>
		<div class="container bg-white p-4 rounded-3">
			<h5 class="my-2">Sign in</h5>
			<form action="<?php echo base_url(); ?>loginMe" method="post">
				<div class="mb-3">
					<label for="email" class="d-none">Email: </label>
					<input type="text" name="email" placeholder="Email Address" id="email" class="form-control">
				</div>
				<div class="mb-3">
					<label for="password" class="d-none">Password: </label>
					<input type="password" name="password" placeholder="Password" class="form-control">
				</div>
				<div class="">
					<a href="<?php echo base_url() ?>forgotPassword" class="link-offset-2 link-underline link-underline-opacity-0 d-block text-start">Forgot Password</a><br>
					<input type="submit" class="btn btn-primary d-block mx-auto w-50" value="Log in" />
				</div>
			</form>
		</div>
		</div>
		</div>
	</div>


	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>

</body>
</html>




</body>
</html>
