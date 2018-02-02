<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Gubu Fest</title>


  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900&subset=latin,latin-ext'>
  <link rel="stylesheet" href="<?php echo base_url('');?>/asset/login/css/style.css">


</head>

<body>

  <div class="materialContainer">

  <?php echo form_open_multipart('/login/cek_login'); ?>
   <div class="box">
      <div class="title">LOGIN</div>

      <div class="input">
         <label for="name">Username</label>
         <input type="text" name="username" id="name" required="">
         <span class="spin"></span>
      </div>

      <div class="input">
         <label for="pass">Password</label>
         <input type="password" name="password" id="pass" required="">
         <span class="spin"></span>
      </div>

      <div class="button login">
         <button><span>Login</span> <i class="fa fa-check"></i></button>
      </div>
   </div>
   <?php echo form_close(); ?>

   <?php echo form_open_multipart('/login/register'); ?>
   <div class="overbox">
      <div class="material-button alt-2"><span class="shape"></span></div>

      <div class="title">REGISTER</div>

      <div class="input">
         <label for="regname">Username</label>
         <input type="text" name="username" id="regname" required="">
         <span class="spin"></span>
      </div>

      <div class="input">
         <label for="regpass">Password</label>
         <input type="password" name="password" id="regpass" required="">
         <span class="spin"></span>
      </div>

      <div class="button">
         <button><span>Register</span></button>
      </div>
   </div>
   <?php echo form_close(); ?>

</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>



    <script  src="<?php echo base_url(''); ?>/asset/login/js/index.js"></script>




</body>

</html>
