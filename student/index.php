<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<!-----Meta----->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Info Place @ BVRIT</title>
        
<!--Stylesheets-->
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="fonts/pacifico/stylesheet.css" rel="stylesheet" type="text/css" />

<!--Scripts-->
<script src="js/jquery.js"></script>
<script src="js/validate.js"></script>
<!--Sliding icons-->
<script type="text/javascript">
$(document).ready(function() {
	$(".login-form").validate({
    
        // Specify the validation rules
        rules: {
            username: "required",
            password: "required"
        },
        
        // Specify the validation error messages
        messages: {
            username: "Enter username (only firstname)",
            password: "Enter Password eg: 10211a0501 not 10211A0501"
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

	$(".username").focus(function() {
		$(".user-icon").css("left","-48px");
	});
	$(".username").blur(function() {
		$(".user-icon").css("left","0px");
	});
	
	$(".password").focus(function() {
		$(".pass-icon").css("left","-48px");
	});
	$(".password").blur(function() {
		$(".pass-icon").css("left","0px");
	});
});
</script>

</head>
<body>

	<div class="heading">
    	Info Place @ BVRIT
    </div>
    
<div id="wrapper">
	<!--Sliding icons-->
    <div class="user-icon"></div>
    <div class="pass-icon"></div>
    <!--END Sliding icons-->

<!--login form inputs-->
<form name="login-form" class="login-form" action="student/redirect.php" method="post">

	<!--Header-->
    <div class="header">
    <h1>Login Form</h1>
    </div>
    <!--END header-->
	
	<!--Input fields-->
    <div class="content">
	<!--USERNAME--><input name="username" type="text" class="input username" placeholder="Username" /><!--END USERNAME-->
    <!--PASSWORD--><input name="password" type="password" class="input password" placeholder="Password" /><!--END PASSWORD-->
    </div>
    <!--END Input fields-->
    
    <!--Buttons-->
    <div class="footer">
    <!--Login button--><input type="submit" name="submit" value="Login" class="button" /><!--END Login button-->
    </div>
    <!--END Buttons-->

</form>
<!--end login form-->

</div>

<!--bg gradient--><div class="gradient"></div><!--END bg gradient-->


</body>
</html>