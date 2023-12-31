<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>
    
    <?php
    $notif = $this->session->flashdata('notif');
    if(!empty ($notif)){
        echo '
        <div class="alert alert-danger">'.$notif.'</div>
        ';
    }
    ?>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets_user/login/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets_user/login/css/style.css">
</head>
<body>
<div></div>

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="<?php echo base_url();?>assets_user/login/images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="login_user/register" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign in</h2>
                        <form method="POST" class="register-form" id="login-form" action="<?=base_url('login_user/ceklogin')?>">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="<?php echo base_url();?>assets_user/login/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets_user/login/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
