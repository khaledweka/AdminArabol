<?php $title='موضوع جديد'; require_once 'views/head.php'; ?>

	<h2 class="text-flat">رئيسية التحكم <span class="text-sm"><?php echo $title; ?></span></h2>

	<ul class="breadcrumb pb30">
		<li><a href="#"><i class="fa fa-home"></i> الرئيسية</a></li>
		<li><a href="#">قالب المدخلات</a></li>
		<li class="active"><?php echo $title; ?></li>
	</ul>


<form class="form-horizontal">

<section class="col-md-8 col-xs-12">
	<div class="well bs-component" data-sr="wait 0s, then enter left and hustle 100%">


		  <fieldset>

		    <legend data-sr="wait 0.3s, then enter left and hustle 100%"><?php echo $title; ?></legend>

		    <div class="form-group" data-sr="wait 0.6s, then enter bottom and hustle 100%">
		      <div class="col-lg-12 input-grup">
		      	<i class="fa fa-users"></i>
		        <input type="text" class="form-control text-right" placeholder="عنوان الموضوع">
		      </div>
		    </div>

		    <div class="form-group" data-sr="wait 0.3s, then enter bottom and hustle 100%">
		      <div class="col-lg-12">
		        <textarea class="form-control" rows="3" id="ckeditort"></textarea>
		      </div>
		    </div>

		  </fieldset>

	</div>
</section>

<section class="col-md-4 col-xs-12">
	<div class="well bs-component" data-sr="wait 0s, then enter left and hustle 100%">


			<div class="form-group" data-sr="wait 0.3s, then enter bottom and hustle 100%">
		      <div class="col-xs-10 col-xs-pull-2">
		        <button type="reset" class="btn btn-default">أبدء من جديد ؟</button>
		        <button type="submit" class="btn btn-primary">حفظ</button>
		      </div>
		    </div>

		    <div class="form-group">
		    	<input type="checkbox">
		    </div>

	</div>
</section>


</form>


<?php require_once 'views/sidebar.php'; require_once 'views/foot.php';