<?php $title='مدخلات Select, Select Multiple'; require_once 'views/head.php'; ?>

	<h2 class="text-flat">رئيسية التحكم <span class="text-sm"><?php echo $title; ?></span></h2>

	<ul class="breadcrumb pb30">
		<li><a href="#"><i class="fa fa-home"></i> الرئيسية</a></li>
		<li><a href="#">صفحات الأضافه</a></li>
		<li class="active"><?php echo $title; ?></li>
	</ul>

	<div class="well bs-component" data-sr="wait 0s, then enter left and hustle 100%">

		<form class="form-horizontal">

		  <fieldset>

		    <legend data-sr="wait 0.3s, then enter left and hustle 100%"><?php echo $title; ?></legend>

		    <div class="form-group" data-sr="wait 0.3s, then enter bottom and hustle 100%">
		      <label for="select" class="col-lg-2 control-label">أختر شئ</label>
		      <div class="col-lg-10">
		        <select class="form-control">
					    <option value="الخيار الاول">الخيار الاول</option>
					    <option value="الخيار الثانى">الخيار الثانى</option>
					    <option value="الخيار الثالث">الخيار الثالث</option>
					    <option value="الخيار الرابع">الخيار الرابع</option>
					    <option value="الخيار الخامس">الخيار الخامس</option>
					    <option value="الخيار السادس">الخيار السادس</option>
					    <option value="الخيار السابع">الخيار السابع</option>
					    <option value="الخيار الثامن">الخيار الثامن</option>
					    <option value="الخيار التاسع">الخيار التاسع</option>
					    <option value="الخيار العاشر">الخيار العاشر</option>
						</select>
		      </div>
		    </div>

		    <div class="form-group" data-sr="wait 0.3s, then enter bottom and hustle 100%">
		      <label for="select1" class="col-lg-2 control-label">أختر بلدك</label>
		      <div class="col-lg-10">
						<select class="form-control" data-title="أختر بلدك">
							<?php require_once 'country.php'; ?>
						</select>
						<span class="help-block">لديها عنوان خاص بالقائمة data-title.</span>
		      </div>
		    </div>


		    <div class="form-group" data-sr="wait 0.3s, then enter bottom and hustle 100%">
		      <label for="select" class="col-lg-2 control-label">متعدد</label>
		      <div class="col-lg-10">
		        <select class="form-control" multiple="" data-title="أختر عده خيارات">
					    <option value="الخيار الاول">الخيار الاول</option>
					    <option value="الخيار الثانى">الخيار الثانى</option>
					    <option value="الخيار الثالث">الخيار الثالث</option>
					    <option value="الخيار الرابع">الخيار الرابع</option>
					    <option value="الخيار الخامس">الخيار الخامس</option>
					    <option value="الخيار السادس">الخيار السادس</option>
					    <option value="الخيار السابع">الخيار السابع</option>
					    <option value="الخيار الثامن">الخيار الثامن</option>
					    <option value="الخيار التاسع">الخيار التاسع</option>
					    <option value="الخيار العاشر">الخيار العاشر</option>
						</select>
						<span class="help-block">أختيار متعدد من القائمة multiple.</span>
		      </div>
		    </div>

		    <div class="form-group" data-sr="wait 0.3s, then enter bottom and hustle 100%">
		      <label for="select" class="col-lg-2 control-label">أختيار معطل</label>
		      <div class="col-lg-10">
		        <select class="form-control" multiple="" data-title="أختر عده خيارات" disabled="">
					    <option value="الخيار الاول">الخيار الاول</option>
					    <option value="الخيار الثانى">الخيار الثانى</option>
					    <option value="الخيار الثالث">الخيار الثالث</option>
					    <option value="الخيار الرابع">الخيار الرابع</option>
					    <option value="الخيار الخامس">الخيار الخامس</option>
					    <option value="الخيار السادس">الخيار السادس</option>
					    <option value="الخيار السابع">الخيار السابع</option>
					    <option value="الخيار الثامن">الخيار الثامن</option>
					    <option value="الخيار التاسع">الخيار التاسع</option>
					    <option value="الخيار العاشر">الخيار العاشر</option>
						</select>
						<span class="help-block">مثال لاختيار معطل disabled.</span>
		      </div>
		    </div>

		    <div class="form-group" data-sr="wait 0.3s, then enter bottom and hustle 100%">
		      <label for="select" class="col-lg-2 control-label">أختيار مخصص</label>
		      <div class="col-lg-10">
		        <select class="form-control displaynone" multiple="" data-triggerOn="#custom">
					    <option value="الخيار الاول">الخيار الاول</option>
					    <option value="الخيار الثانى">الخيار الثانى</option>
					    <option value="الخيار الثالث">الخيار الثالث</option>
					    <option value="الخيار الرابع">الخيار الرابع</option>
					    <option value="الخيار الخامس">الخيار الخامس</option>
					    <option value="الخيار السادس">الخيار السادس</option>
					    <option value="الخيار السابع">الخيار السابع</option>
					    <option value="الخيار الثامن">الخيار الثامن</option>
					    <option value="الخيار التاسع">الخيار التاسع</option>
					    <option value="الخيار العاشر">الخيار العاشر</option>
						</select>
						<span id="custom" class="fa fa-plus icn-sm"></span>	
						<span class="help-block">مثال لاختيار بشكل مخصص data-triggerOn.</span>
		      </div>
		    </div>

		    <div class="form-group" data-sr="wait 0.3s, then enter bottom and hustle 100%">
		      <label for="select" class="col-lg-2 control-label">أختيار ملون</label>
		      <div class="col-lg-10">
		        <select class="form-control" data-style="btn-primary">
					    <option value="الخيار الاول">الخيار الاول</option>
					    <option value="الخيار الثانى">الخيار الثانى</option>
					    <option value="الخيار الثالث">الخيار الثالث</option>
					    <option value="الخيار الرابع">الخيار الرابع</option>
					    <option value="الخيار الخامس">الخيار الخامس</option>
					    <option value="الخيار السادس">الخيار السادس</option>
					    <option value="الخيار السابع">الخيار السابع</option>
					    <option value="الخيار الثامن">الخيار الثامن</option>
					    <option value="الخيار التاسع">الخيار التاسع</option>
					    <option value="الخيار العاشر">الخيار العاشر</option>
						</select>
						<span class="help-block">مثال لاختيار ملون بشكل مختلف data-style.</span>
		      </div>
		    </div>

		    <div class="form-group" data-sr="wait 0.3s, then enter bottom and hustle 100%">
		      <label for="select" class="col-lg-2 control-label">أختيار ملون</label>
		      <div class="col-lg-10">
		        <select class="form-control" data-style="btn-success">
					    <option value="الخيار الاول">الخيار الاول</option>
					    <option value="الخيار الثانى">الخيار الثانى</option>
					    <option value="الخيار الثالث">الخيار الثالث</option>
					    <option value="الخيار الرابع">الخيار الرابع</option>
					    <option value="الخيار الخامس">الخيار الخامس</option>
					    <option value="الخيار السادس">الخيار السادس</option>
					    <option value="الخيار السابع">الخيار السابع</option>
					    <option value="الخيار الثامن">الخيار الثامن</option>
					    <option value="الخيار التاسع">الخيار التاسع</option>
					    <option value="الخيار العاشر">الخيار العاشر</option>
						</select>
						<span class="help-block">مثال لاختيار ملون بشكل مختلف data-style.</span>
		      </div>
		    </div>

		    <div class="form-group" data-sr="wait 0.3s, then enter bottom and hustle 100%">
		      <label for="select" class="col-lg-2 control-label">أختيار ملون</label>
		      <div class="col-lg-10">
		        <select class="form-control" data-style="btn-danger">
					    <option value="الخيار الاول">الخيار الاول</option>
					    <option value="الخيار الثانى">الخيار الثانى</option>
					    <option value="الخيار الثالث">الخيار الثالث</option>
					    <option value="الخيار الرابع">الخيار الرابع</option>
					    <option value="الخيار الخامس">الخيار الخامس</option>
					    <option value="الخيار السادس">الخيار السادس</option>
					    <option value="الخيار السابع">الخيار السابع</option>
					    <option value="الخيار الثامن">الخيار الثامن</option>
					    <option value="الخيار التاسع">الخيار التاسع</option>
					    <option value="الخيار العاشر">الخيار العاشر</option>
						</select>
						<span class="help-block">مثال لاختيار ملون بشكل مختلف data-style.</span>
		      </div>
		    </div>

		    <div class="form-group" data-sr="wait 0.3s, then enter bottom and hustle 100%">
		      <label for="select" class="col-lg-2 control-label">أختيار ملون</label>
		      <div class="col-lg-10">
		        <select class="form-control" data-style="btn-warning">
					    <option value="الخيار الاول">الخيار الاول</option>
					    <option value="الخيار الثانى">الخيار الثانى</option>
					    <option value="الخيار الثالث">الخيار الثالث</option>
					    <option value="الخيار الرابع">الخيار الرابع</option>
					    <option value="الخيار الخامس">الخيار الخامس</option>
					    <option value="الخيار السادس">الخيار السادس</option>
					    <option value="الخيار السابع">الخيار السابع</option>
					    <option value="الخيار الثامن">الخيار الثامن</option>
					    <option value="الخيار التاسع">الخيار التاسع</option>
					    <option value="الخيار العاشر">الخيار العاشر</option>
						</select>
						<span class="help-block">مثال لاختيار ملون بشكل مختلف data-style.</span>
		      </div>
		    </div>

		    <div class="form-group" data-sr="wait 0.3s, then enter bottom and hustle 100%">
		      <label for="select" class="col-lg-2 control-label">أختيار ملون</label>
		      <div class="col-lg-10">
		        <select class="form-control" data-style="btn-info">
					    <option value="الخيار الاول">الخيار الاول</option>
					    <option value="الخيار الثانى">الخيار الثانى</option>
					    <option value="الخيار الثالث">الخيار الثالث</option>
					    <option value="الخيار الرابع">الخيار الرابع</option>
					    <option value="الخيار الخامس">الخيار الخامس</option>
					    <option value="الخيار السادس">الخيار السادس</option>
					    <option value="الخيار السابع">الخيار السابع</option>
					    <option value="الخيار الثامن">الخيار الثامن</option>
					    <option value="الخيار التاسع">الخيار التاسع</option>
					    <option value="الخيار العاشر">الخيار العاشر</option>
						</select>
						<span class="help-block">مثال لاختيار ملون بشكل مختلف data-style.</span>
		      </div>
		    </div>

		    <div class="form-group" data-sr="wait 0.3s, then enter bottom and hustle 100%">
		      <label for="select" class="col-lg-2 control-label">أختر نوع خط</label>
		      <div class="col-lg-10">
		        <select class="form-control bfh-fonts" data-available="Tahoma,Arial,Calibri,Helvetica">
						</select>
						<span class="help-block">مثال لاختيار خط مخصص مسبقآ data-available.</span>
		      </div>
		    </div>


		    <div class="form-group" data-sr="wait 0.3s, then enter bottom and hustle 100%">
		      <div class="col-xs-10 col-xs-pull-2">
		        <button type="reset" class="btn btn-default">أبدء من جديد ؟</button>
		        <button type="submit" class="btn btn-primary">حفظ</button>
		      </div>
		    </div>

		  </fieldset>

		</form>

	</div>



<?php require_once 'views/sidebar.php'; require_once 'views/foot.php';