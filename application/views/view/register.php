<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets_user/login/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets_user/login/css/style.css">
</head>
<body>
<div></div>

<section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                       
                        <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nama_user" id="nama_user" placeholder="Your Name"/>
                            </div>

                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="username" id="username" placeholder="Username"/>
                            </div>
                       
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                           
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="<?php echo base_url();?>assets_user/login/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="<?php echo base_url('login_user'); ?> "class="signup-image-link">I am already member</a>
                    </div>
                </div>

            </div>
            <!-- JS -->
    <script src="<?php echo base_url();?>assets_user/login/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets_user/login/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
        </section>
