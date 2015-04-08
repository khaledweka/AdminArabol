<?php require_once 'views/head.php'; ?>

	<h2 class="text-flat">رئيسية التحكم <span class="text-sm">الصفحة الرئيسية</span></h2>

	<ul class="breadcrumb pb30">
	  <li><a href="#">الرئيسية</a></li>
	  <li class="active">الصفحة الرئيسية</li>
	</ul>

	<!-- alert-success -->
	<div class="alert alert-success alert-dismissible shadow" data-sr="wait 0s, then enter bottom and hustle 100%">
		<button type="button" class="close pull-left" data-dismiss="alert">×</button>
		<h4 class="text-lg"><i class="fa fa-check icn-xs"></i> تم بنجاح ...</h4>
		<p>تم تنفيذ العملية المطلوبة بنجاح !</p>
	</div>

	<!-- alert-danger -->
	<div class="alert alert-danger alert-dismissible" data-sr="wait 0.3s, then enter bottom and hustle 100%">
		<button type="button" class="close pull-left" data-dismiss="alert">×</button>
		<h4 class="text-lg"><i class="fa fa-exclamation-circle icn-xs"></i> خطآ ...</h4>
		<p>هناك خطآ ما يجب عليك اصلاحه !</p>
	</div>

	<!-- alert-warning -->
	<div class="alert alert-warning alert-dismissible" data-sr="wait 0.6s, then enter bottom and hustle 100%">
		<button type="button" class="close pull-left" data-dismiss="alert">×</button>
		<h4 class="text-lg"><i class="fa fa-exclamation-triangle icn-xs"></i> تحذير هام ...</h4>
		<p>هذا اشعار بمحتوى تنبيه لحاله ما !</p>
	</div>

	<!-- alert-info -->
	<div class="alert alert-info alert-dismissible" data-sr="wait 0s, then enter bottom and hustle 100%">
		<button type="button" class="close pull-left" data-dismiss="alert">×</button>
		<h4 class="text-lg"><i class="fa fa-info-circle icn-xs"></i> معلومة هامه ...</h4>
		<p>هذا اشعار بالتنبية على شئ مهم !</p>
	</div>

<?php require_once 'views/sidebar.php'; require_once 'views/foot.php';