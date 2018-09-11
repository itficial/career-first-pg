<html xmlns="">
   
<?php include("include/header.php"); ?>
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
    <!-- This is a wide open CSP declaration. To lock this down for production, see below. -->
    <meta http-equiv="Content-Security-Policy" content="default-src * 'unsafe-inline' gap:; style-src 'self' 'unsafe-inline'; media-src *" />
     
    <body class="loginPage" >

    <div class="container">

        <div id="header">

            <div class="row">

                <div class="navbar">
                    <div class="container">
					<div class="logo col-lg-12 col-sm-12 col-xs-12">
						<a href="dashboard.php">
							<center><img src="../images/ias-upsc-academy-surat.png"  alt="Top IAS IPS academy surat" height="55px" width="250px"></center>
						</a>
					</div>                    </div>
                </div><!-- /navbar -->

            </div><!-- End .row -->

        </div><!-- End #header -->

    </div><!-- End .container -->    

    <div class="container">

        <div class="loginContainer">
            <form class="form-horizontal" id="loginForm" role="form" >
                <div class="form-group">
                    <label class="col-lg-12 control-label" for="username">Username:</label>
                    <div class="col-lg-12">
                        <input id="username" type="text" name="username" class="form-control" value="" placeholder="Enter your username ...">
                        <span class="icon16 icomoon-icon-user right gray marginR10"></span>
                    </div>
                </div><!-- End .form-group  -->
                <div class="form-group">
                    <label class="col-lg-12 control-label" for="password">Password:</label>
                    <div class="col-lg-12">
                        <input id="password" type="password" name="password" value="" class="form-control">
                        <span class="icon16 icomoon-icon-lock right gray marginR10"></span>
                        
                    </div>
                </div><!-- End .form-group  -->
                <div class="form-group">
                    <div class="col-lg-12 clearfix form-actions">
                        <button type="submit" class="btn btn-info right" id="loginBtn"><span class="icon16 icomoon-icon-enter white"></span> Login</button>
                    </div>
                </div><!-- End .form-group  -->
            </form>
        </div>

    </div><!-- End .container -->

    <!-- Le javascript
    ================================================== -->
	
    <?php include("include/footer.php"); ?>

     <script type="text/javascript" >
	   $("#loginForm").submit(function(e) {
		 e.preventDefault();
		
		$.ajax({
			url: "login.php",
			type: "post",
			data: $("#loginForm").serialize() ,
			success: function (response) {
				console.log(response);
				
				if(response==1){
					window.location = "dashboard.php";
				}	
				else{
					toastr.error('Opps! Incorrect Credentials!', 'Career First!');
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
			   console.log(textStatus, errorThrown);
			}
		});
	});

        $(document).ready(function() {
          
            var supr_Options = {
                rtl:false
            }
           
            if(supr_Options.rtl) {
                localStorage.setItem('rtl', 1);
                $('#bootstrap').attr('href', 'css/bootstrap/bootstrap.rtl.min.css');
                $('#bootstrap-responsive').attr('href', 'css/bootstrap/bootstrap-responsive.rtl.min.css');
                $('body').addClass('rtl');
                $('#sidebar').attr('id', 'sidebar-right');
                $('#sidebarbg').attr('id', 'sidebarbg-right');
                $('.collapseBtn').addClass('rightbar').removeClass('leftbar');
                $('#content').attr('id', 'content-one')
            } else {localStorage.setItem('rtl', 0);}
            
            $("input, textarea, select").not('.nostyle').uniform();
            $("#loginForm").validate({
                rules: {
                    username: {
                        required: true,
                        minlength: 4
                    },
                    password: {
                        required: true,
                        minlength: 6
                    }  
                },
                messages: {
                    username: {
                        required: "Fill me please",
                        minlength: "My name is bigger"
                    },
                    password: {
                        required: "Please provide a password",
                        minlength: "My password is more that 6 chars"
                    }
                }   
            });
        });
	
    </script> 
    </body>
</html>
