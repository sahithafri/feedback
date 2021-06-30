<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Feedback</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="js/scripts.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#register").click(function(){
                    fname=$("#fname").val();
                    lname=$("#lname").val();
                    email=$("#email").val();
                    password=$("#password").val();
                    passwordConfirm=$("#passwordConfirm").val();
                    
                    $.ajax({
                        type:"POST",
						url:"adduser.php",
						data: "fname=" + fname + "&lname=" + lname + "&email=" + email + "&password=" + password + "&passwordConfirm=" + passwordConfirm,
                        success: function(html){
                            if(html=='true'){
                                $("#add_err2").html('<div class="alert alert-success"><storng>Account</strong>Processed</div>');
                                window.location.href="it3_1.php";
                            }
                            else if(html=='fname'){
                                $("#add_err2").html('<div class="alert alert-danger"><storng>First Name </strong>is required</div>');
                            }else if(html=='lname'){
                                $("#add_err2").html('<div class="alert alert-danger"><storng>Last Name </strong>is required</div>');
                            }else if(html=='regno'){
								$("#add_err2").html('<div class="alert alert-danger"><storng>Register Number </strong>is required</div>');
							}else if(html=='eshort'){
                                $("#add_err2").html('<div class="alert alert-danger"><storng>Email Address </strong>is requried</div>');    
                            }else if(html=='eformat'){
                                $("#add_err2").html('<div class="alert alert-danger"><storng>Email Address </strong>Format is not valid</div>');    
                            }else if(html=='pshort'){
                                $("#add_err2").html('<div class="alert alert-danger"><storng>Password </strong>must be atleast 4 character</div>');  
                            }else if(html=='password'){
                                $("#add_err2").html('<div class="alert alert-danger"><storng>Password </strong>and Confirm Password are not equal</div>');
							}else if(html=='false'){
								$("#add_err2").html('<div class="alert alert-danger"><storng>Email Address </strong>already Exist</div>');
							}else{
                                $("#add_err2").html('<div class="alert alert-danger"><storng>Error </strong>Processing request. please try again</div>');  
                            }
                        },
                        beforeSend:function(){
                            $("#add-err2").html("Loading...");
                        }
                    });
                    return false;
                });
            });
		</script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        
                                        <form>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="fname" type="text" placeholder="Enter your first name" />
                                                        <label for="inputFirstName">First name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="lname" type="text" placeholder="Enter your last name" />
                                                        <label for="inputLastName">Last name</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="email" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="password" type="password" placeholder="Create a password" />
                                                        <label for="inputPassword">Password</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="passwordConfirm" type="password" placeholder="Confirm password" />
                                                        <label for="inputPasswordConfirm">Confirm Password</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button type="submit" id="register" class="btn btn-primary btn-block">Create Account</button></div>
                                            </div>
                                        </form>
                                    </div>
									<div id="add_err2"></div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.php">Have an account? Go to login</a></div>
										<div class="small"><a href="Adminlogin.php">Admin login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; SahithAfri 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        
        
    </body>
</html>
