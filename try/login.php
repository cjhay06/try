<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css" />

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="./css/login.css">
</head>
<body>

<div class="container">

	<div class="d-flex justify-content-center h-100">

		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">

				<form method="POST" id="logform">
		<div id="msg_login"></div>
               <div class="">
                  <center><span id="myalert2"></span></center>
               </div>
              
               <div class="" id="myalert" style="display: none;">
                     <div class="">
                        <center><span id="alerttext"></span></center>
                     </div>
               </div>

               <div class="" id="myalert3" style="display: none;">
                     <div class="">
                          <div class="alert alert-success" id="alerttext3"></div>
                     </div>
               </div>
               
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="email" name="emailaddress" id="emailaddress" class="form-control" placeholder="email">
						  <span class="email-error"></span>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" id="password" name="password" class="form-control" placeholder="password">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					 <div class="form-group mt-2">
                  <button type="button" class="btn btn-primary" id="login-button" style="float: right;">Sign In</button>
               </div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="signup">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>

	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
  
// Wait for document to load
        $(document).ready(() => {
            $('#logform').on('submit', () => {

                // prevents default behaviour
                // Prevents event propagation
                return false;
            });
        });
        $('#logform').keypress((e) => {

            // Enter key corresponds to number 13
            if (e.which === 13) {
                $('#logform').submit();
                console.log('form submitted');
            }
        })


        $(document).on('click', '#login-button', function() {

            if ($('#emailaddress').val() != '' && $('#password').val() != '') {

                // $('#login-button').html(' Loading...');
                $('#myalert').slideUp();
                $('#myalert3').slideUp();
                var logform = $('#logform').serialize();
                setTimeout(function() {
                    $.ajax({
                        method: 'POST',
                        url: 'config/login.php', 
                        data: logform,
                        //   beforeSend: function() {

                        //    $('#login-button').html(' Loading...');
                        //    $('#login-button').html('');
                        // },
                        success: function(data) {
                            if (data == 1) {

                                $('#myalert3').slideDown();
                                $('#alerttext3').html(data);
                                $('#alerttext3').html('<i class="fa fa-check"></i> Login Successful. Admin Verified!');
                                $('#login-button').text('Login');
                                $('#logform')[0].reset();
                                $('#myalert').hide();
                                $('#alerttext').hide();
                                $('#myalert2').hide();
                                $('#alerttext2').hide();
                                setTimeout(function() {
                                    window.location = './admin/home';
                                }, 1000);
                            }  else if (data == 2) {

                                $('#myalert3').slideDown();
                                $('#alerttext3').html(data);
                                $('#alerttext3').html('<i class="fa fa-check"></i> Login Successful. User Verified!');
                                $('#login-button').text('Login');
                                $('#logform')[0].reset();
                                $('#myalert').hide();
                                $('#alerttext').hide();
                                $('#myalert2').hide();
                                $('#alerttext2').hide();
                                setTimeout(function() {
                                    window.location = './user/home';
                                }, 1000);
                            }

                            else if (data == 3) {

                                $('#myalert3').slideDown();
                                $('#alerttext3').html(data);
                                $('#alerttext3').html('<i class="fa fa-check"></i> Login Successful. Respondent Verified!');
                                $('#login-button').text('Login');
                                $('#logform')[0].reset();
                                $('#myalert').hide();
                                $('#alerttext').hide();
                                $('#myalert2').hide();
                                $('#alerttext2').hide();
                                setTimeout(function() {
                                    window.location = './respondent/home';
                                }, 1000);
                            }

                             else {
                                $('#myalert').slideDown();
                                $('#alerttext').html(data);
                                $('#logtext').text('Login');
                                $('#logform')[0].reset();
                                $('#myalert2').hide();
                                $('#alerttext3').hide();

                            }
                        }
                    });
                }, 1000);
            } else {
                $('#myalert2').slideDown();
                $('#myalert').hide();
                $('#alerttext3').hide();
                $('#myalert2').html('<div class="alert alert-warning err_msg"><i class="fa fa-info"></i> Please input both fields/select to Login</div>');
                $('#logtext').text('Login');
                $('#logform')[0].reset();

            }
        });


</script>
</div>
</body>
</html>