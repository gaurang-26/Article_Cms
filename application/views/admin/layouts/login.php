<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>KEWL CMS | LOGIN</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

    <!-- Bootstrap core CSS -->
<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
  <?php $attributes = array(
								'class' => 'form-signin'
							); 
		?>
		<?php echo form_open('admin/authenticate/login',$attributes); ?>
  <img class="mb-4" src="<?php echo base_url(); ?>assets/images/best_cms-668x445-c.jpg" alt="" width="72" height="72"/>
  <h1 class="h3 mb-3 font-weight-normal">KEWL CMS</h1>

	<?php echo validation_errors('<p class="alert alert-dismissable alert-danger">'); ?>
			<?php if($this->session->flashdata('fail_login')) : ?>
				<?php echo '<p class="alert alert-dismissable alert-danger">' .$this->session->flashdata('fail_login') . '</p>'; ?>
			<?php endif; ?>
			<?php if($this->session->flashdata('access_denied')) : ?>
				<?php echo '<p class="alert alert-dismissable alert-danger">' .$this->session->flashdata('access_denied') . '</p>'; //Access denied ?>
			<?php endif; ?>
			<?php if($this->session->flashdata('logged_out')) : ?>
				<?php echo '<p class="alert alert-dismissable alert-success">' .$this->session->flashdata('logged_out') . '</p>'; ?>
      <?php endif; ?>
      








  <label for="inputEmail" class="sr-only">Email address</label>
  <?php 
        $data = array(
        		'name'        => 'username',
        		'class'          => 'form-control',
            'placeholder'       => ' Enter Username',
            'id'=> 'inputEmail'
        );
        
        echo form_input($data);
    ?>
  <!-- <input type="TEXT" id="inputEmail" class="form-control" placeholder="Enter Username" required autofocus> -->
  <label for="inputPassword" class="sr-only">Password</label>
  <?php 
        $data = array(
        		'name'        => 'password',
        		'class'          => 'form-control',
            'placeholder'       => ' Enter Password',
            'id'                  => 'inputPassword'
        );
        
        echo form_password($data);
    ?>       
  
  <!-- <input type="password" id="inputPassword" class="form-control" placeholder="Enter Password" required> -->
  <?php 
        $data = array(
        		'class'          => 'btn btn-lg btn-primary btn-block',
				'content'       => 'Login',
        	
				'type'       => 'submit',
        );
        echo form_button($data);
    ?>
    <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
    <?php echo form_close(); ?>
  <!-- <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button> -->
  

</body>
</html>
