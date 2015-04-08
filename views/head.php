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
<html lang="ar" dir="rtl">
<head>
	<meta charset="UTF-8">
	<title>AdminArabol - <?php echo isset($title) ? $title : 'الصفحة الرئيسية'; ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>

	<!-- Global Style Sheets -->
	<link href="layout/screen.css" rel="stylesheet" type="text/css"><!-- Some Reset Css For Everything -->
 	<link href="layout/strap.css" rel="stylesheet" type="text/css"><!-- BootStrap Css Libs -->
 	<link href="layout/strap-select.min.css" rel="stylesheet" type="text/css"><!-- BootStrap Select Element -->
 	<link href="layout/strap-toggle.min.css" rel="stylesheet" type="text/css"><!-- BootStrap CheckBoxs Element -->
 	<link href="layout/bootstrap-formhelpers.css" rel="stylesheet" type="text/css"><!-- BootStrap Multi Purp. Element -->
 	<link href="layout/checkBo.css" rel="stylesheet" type="text/css">
	<link href="layout/layout.css" rel="stylesheet" type="text/css"><!-- The Main Css -->
	<link href="layout/content.css" rel="stylesheet" type="text/css"><!-- The Main Css For Content Page -->
	<link href="layout/font-awesome.css" rel="stylesheet" type="text/css"><!-- Font Awesome Icons -->
	<link href="layout/morris.css" rel="stylesheet" type="text/css"><!-- Chart Css Libs -->
	<link href="layout/media.css" rel="stylesheet" type="text/css"><!-- The Main Css For Media Pages -->
	<!--############################## You Can Add More Stylesheet Links Bottom There ##############################-->
	<!-- أضف
	<link href="layout/reset.css" rel="stylesheet" type="text/css">
	<link href="layout/reset.css" rel="stylesheet" type="text/css">
	<link href="layout/reset.css" rel="stylesheet" type="text/css">
	<link href="layout/reset.css" rel="stylesheet" type="text/css"> -->
	
	<!-- Favicon Link -->
	<link rel="shortcut icon" href="favicon.ico"/>

	<!-- Jquery Lib -->
	<script src="js/jquery.min.js" type="text/javascript"></script>

</head>
<body>
		
	<!-- Top Head -->
	<header class="topHead">
		<div class="prl10">
			<div class="row">
				<div class="col-sm-6 col-xs-12">

					<h1 class="logo">Admin Arabol</h1><!-- The Main Name -->

				</div> <!-- col-xs-6 -->
				<div class="col-sm-6 col-xs-12 topNav">

					<!-- Logout Button -->
					<a href="#" class="topA text-red" data-toggle="tooltip" data-placement="right" title="تسجيل الخروج"><span class="fa fa-power-off fa-fw"></span></a>

					<!-- User DropMenu -->
					<div class="btn-group user-infos">
						<a href="#" class="btn btn-sm btn-primary text-xs hidden-xs"><i class="fa fa-user fa-fw"></i> اهلا, مستر أكس </a>
						<a class="btn btn-sm btn-primary dropdown-toggle text-xs" data-toggle="dropdown"><span class="fa fa-chevron-down fa-fw hidden-xs"></span><span class="fa fa-user power-off fa-fw hidden-lg hidden-md hidden-sm"></span></a>
						<ul class="dropdown-menu text-right global-drop">
							<li role="presentation" class="dropdown-header text-right">وصول سريع</li>
							<li><a href="#"><i class="fa fa-home"></i>الصفحة الرئيسية</a></li>
							<li class="divider"></li>
							<li role="presentation" class="dropdown-header text-right">تحكم سريع</li>
							<li><a href="#"><i class="fa fa-edit"></i>تعديل بياناتى</a></li>
							<li><a href="#"><i class="fa fa-cog"></i>اعدادت الموقع</a></li>
							<li class="divider"></li>
							<li class="logout"><a href="#"><i class="fa fa-power-off"></i>تسجيل الخروج</a></li>
						</ul>
					</div> <!-- btn-group -->

					<!-- Messsage DropMenu -->
					<div class="btn-group user-infos">
						<a href="#" class="topA btn-primary pull-left dropdown-toggle" data-toggle="dropdown"><span class="fa fa-paper-plane-o fa-fw"></span><i class="badge">55</i></a>
						<ul class="dropdown-menu text-right message-drop">
								<li role="presentation" class="dropdown-header text-right">أخر رسائل غير مقرؤه</li>
									<ul class="ul-scroll">
										<li class="text-right">
											<a href="#" class="text-right">
												<i class="fa fa-envelope"></i>
												لوريم إيبسوم(Lorem Ipsum)
												<p>لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي</p>
												<p class="text-right p-date"><i class="label label-danger">منذ ٤ دقائق مضت</i></p>
											</a>
										</li>
										<li class="text-right">
											<a href="#" class="text-right">
												<i class="fa fa-envelope"></i>
												لوريم إيبسوم(Lorem Ipsum)
												<p>لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي</p>
												<p class="text-right p-date"><i class="label label-danger">منذ ٤ دقائق مضت</i></p>
											</a>
										</li>
										<li class="text-right">
											<a href="#" class="text-right">
												<i class="fa fa-envelope"></i>
												لوريم إيبسوم(Lorem Ipsum)
												<p>لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي</p>
												<p class="text-right p-date"><i class="label label-danger">منذ ٤ دقائق مضت</i></p>
											</a>
										</li>
										<li class="text-right">
											<a href="#" class="text-right">
												<i class="fa fa-envelope"></i>
												لوريم إيبسوم(Lorem Ipsum)
												<p>لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي</p>
												<p class="text-right p-date"><i class="label label-danger">منذ ٤ دقائق مضت</i></p>
											</a>
										</li>
										<li class="text-right">
											<a href="#" class="text-right">
												<i class="fa fa-envelope"></i>
												لوريم إيبسوم(Lorem Ipsum)
												<p>لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي</p>
												<p class="text-right p-date"><i class="label label-danger">منذ ٤ دقائق مضت</i></p>
											</a>
										</li>
										<li class="text-right">
											<a href="#" class="text-right">
												<i class="fa fa-envelope"></i>
												لوريم إيبسوم(Lorem Ipsum)
												<p>لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي</p>
												<p class="text-right p-date"><i class="label label-danger">منذ ٤ دقائق مضت</i></p>
											</a>
										</li>
										<li class="text-right">
											<a href="#" class="text-right">
												<i class="fa fa-envelope"></i>
												لوريم إيبسوم(Lorem Ipsum)
												<p>لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي</p>
												<p class="text-right p-date"><i class="label label-danger">منذ ٤ دقائق مضت</i></p>
											</a>
										</li>
										<li class="text-right">
											<a href="#" class="text-right">
												<i class="fa fa-envelope"></i>
												لوريم إيبسوم(Lorem Ipsum)
												<p>لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي</p>
												<p class="text-right p-date"><i class="label label-danger">منذ ٤ دقائق مضت</i></p>
											</a>
										</li>

										
									</ul>
								<li class="text-center last-li"><a href="#">عرض جميع الرسائل</a></li>
						</ul>
					</div> <!-- btn-group -->

					
					<!-- Event Alert DropMenu -->
					<div class="btn-group user-infos">
						<a href="#" class="topA btn-primary dropdown-toggle" data-toggle="dropdown"><span class="fa fa-bell-o fa-fw"></span><i class="badge">5</i></a>
						<ul class="dropdown-menu text-right message-drop">
									<li role="presentation" class="dropdown-header text-right">أخر أحداث تمت</li>
										<ul class="ul-scroll">
											<li class="text-right">
												<a href="#" class="text-right">
													<i class="fa fa-bell"></i>
													لوريم إيبسوم(Lorem Ipsum)
													<p class="text-left p-date"><i class="label">منذ ٤ دقائق مضت</i></p>
												</a>
											</li>
											<li class="text-right">
												<a href="#" class="text-right">
													<i class="fa fa-bell"></i>
													لوريم إيبسوم(Lorem Ipsum)
													<p class="text-left p-date"><i class="label">منذ ٤ دقائق مضت</i></p>
												</a>
											</li>
											<li class="text-right">
												<a href="#" class="text-right">
													<i class="fa fa-bell"></i>
													لوريم إيبسوم(Lorem Ipsum)
													<p class="text-left p-date"><i class="label">منذ ٤ دقائق مضت</i></p>
												</a>
											</li>
											<li class="text-right">
												<a href="#" class="text-right">
													<i class="fa fa-bell"></i>
													لوريم إيبسوم(Lorem Ipsum)
													<p class="text-left p-date"><i class="label">منذ ٤ دقائق مضت</i></p>
												</a>
											</li>
											<li class="text-right">
												<a href="#" class="text-right">
													<i class="fa fa-bell"></i>
													لوريم إيبسوم(Lorem Ipsum)
													<p class="text-left p-date"><i class="label">منذ ٤ دقائق مضت</i></p>
												</a>
											</li>
											<li class="text-right">
												<a href="#" class="text-right">
													<i class="fa fa-bell"></i>
													لوريم إيبسوم(Lorem Ipsum)
													<p class="text-left p-date"><i class="label">منذ ٤ دقائق مضت</i></p>
												</a>
											</li>
											<li class="text-right">
												<a href="#" class="text-right">
													<i class="fa fa-bell"></i>
													لوريم إيبسوم(Lorem Ipsum)
													<p class="text-left p-date"><i class="label">منذ ٤ دقائق مضت</i></p>
												</a>
											</li>

										
										</ul>
									<li class="text-center last-li"><a href="#">عرض جميع الأحداث</a></li>
							</ul>
						</div> <!-- btn-group -->
					
					<!-- Responsive Menu Button -->
					<a class="topA res-menu fa-fw hidden-sm hidden-md hidden-lg"><span class="fa fa-bars"></span></a>

				</div> <!-- col-xs-6 -->
			</div> <!-- Row -->
		</div> <!-- Container -->
	</header>

	<!-- MainBody -->
	<div class="box">
	    <div class="row">

				<!-- main -->
				<div class="column col-sm-10" id="main">
					<div class="padding">
						<div class="full col-md-9">
						<!-- content -->

