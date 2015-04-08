<?php header('Refresh: 5;url=main.php'); ?>
<!--############################## Redirect ##############################-->
<!DOCTYPE html>
<!-- 
Template Name: Admin Arabol
Version: 1.0.1
Author: Mustapha Othman
Website: http://www.hos-t.com/
Contact: nemosucker@live.com
Follow: www.twitter.com/mustapha.os
Like: www.facebook.com/mustapha.os
License: GPL.
-->
<html lang="ar">
<head>
	<meta charset="UTF-8">
	<title>AdminArabol - الصفحة الرئيسية</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>

	<!--############################## Global Style Sheets ##############################-->
	<link href="layout/reset.css" rel="stylesheet" type="text/css">
 	<link href="layout/strap.css" rel="stylesheet" type="text/css">
 	<link href="layout/strap-toggle.min.css" rel="stylesheet" type="text/css">
	<link href="layout/layout.css" rel="stylesheet" type="text/css">
	<link href="layout/font-awesome.css" rel="stylesheet" type="text/css">
	<!-- أضف
	<link href="layout/demo.css" rel="stylesheet" type="text/css">
	<link href="layout/demo.css" rel="stylesheet" type="text/css">
	<link href="layout/demo.css" rel="stylesheet" type="text/css">
	<link href="layout/demo.css" rel="stylesheet" type="text/css"> -->
	
	<!--############################## Favicon Link ##############################-->
	<link rel="shortcut icon" href="favicon.ico"/>

</head>
<body>
		
	
	<div class="container"><!-- Container Start -->
		<div class="row"><!-- Row Start -->

			
			<div class="col-md-6 col-md-pull-3 col-sm-12 col-xs-12"><!-- The main responsive layout of Login Box -->
				
				<div class="loginBody"><!-- LoginBody Start -->
					
					<h2 class="text-center">Admin Arabol</h2><!-- The Name of the main site -->

					
					<div class="loginBox"><!-- LoginBox -->
						
						<h5 class="alert alert-success text-center rtl"><i class="fa fa-spinner fa-fw fa-spin icn-xs"></i>سيتم تحويلك خلال ٥ ثوانى</h5>
						<h2>تسجيل الدخول بحسابك</h2>

						<form action="main.php" method="" role="form">

							<div class="login-group">
								<i class="fa fa-user"></i>
								<input type="text" id="username" placeholder="أسم المستخدم"><!-- UserName Input -->
							</div>

							<div class="login-group">
								<i class="fa fa-lock"></i>
								<input type="password" id="password" placeholder="كلمة المرور"><!-- Password Input -->
							</div>
							
							<!--############################## You Can Add More Input if u like with the code bottom ##############################-->
							<!-- <div class="login-group">
								<i class="fa fa-...."></i>
								<input type="...." id="...." placeholder="....">
							</div> -->

							<div class="login-group">
								
								<div class="checkbox">
									 <input type="checkbox" data-style="android" data-size="small" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="نعم تذكرنى" data-off="تذكرنى !" data-width="100">
								</div>

								<button type="submit">دخول</button>

							</div><!-- Login-group end -->

						</form><!-- Form end -->
						
						<div class="line"></div><!-- Line Padding -->

						<div class="login-group">
							<h5 class="text-right text-flat mt20">تسجيل الدخول بواسطة</h5>
							<a href="#" class="login-soci facebook"><i class="fa fa-facebook"></i>فيس بوك</a>
							<a href="#" class="login-soci twitter"><i class="fa fa-twitter"></i> تويتر</a>
							<a href="#" class="login-soci google"><i class="fa fa-google"></i> جوجل +</a>
						</div><!-- End of login-group of Soci Login system -->

						<div class="login-group text-xs">
							<h5 class="text-right text-flat mt20">هل نسيت كلمة المرور !</h5>
							لا تقلق يمكنك استرجاع كلمة المرور بواسطة 
							<a href="#">هذا النموذج</a>.
						</div><!-- End of login-group Password Forget System -->

						<div class="login-group text-xs">
							<h5 class="text-right text-flat mt20">ليس لديك حساب حتى الان !</h5>
							يمكنك تسجيل عضوية جديدة من خلال 
							<a href="#">هذا النموذج</a>.
						</div><!-- End of login-group New Register System -->

					</div>
					<h4 class="text-center text-sm text-flat rtl">جميع الحقوق محفوظة لـ Admin Arabol.</h4><!-- CopyRight or a Small Note @ loginbox footer -->

				</div><!-- LoginMain end -->
			</div><!-- Main Responsive end -->


		</div><!-- Row end -->
	</div><!-- Container end -->



	<!-- Global javascript & jquery Files -->
	<!--############################## Jquery Libs ##############################-->
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<!--############################## BootStrap Libs ##############################-->
	<script src="js/strap.min.js" type="text/javascript"></script>
	<!--############################## BootStrap CheckBoxs Libs ##############################-->
	<script src="js/strap-toggle.min.js" type="text/javascript"></script>
	<!--############################## Scroll Animation ##############################-->
	<script src="js/scrollReveal.min.js" type="text/javascript"></script>
	<!--############################## Custom jQuery Codes ##############################-->
	<script src="js/custom.min.js" type="text/javascript"></script>

</body>
</html>