<?php $title='مدخلات Input, Textarea'; require_once 'views/head.php'; ?>

	<h2 class="text-flat">رئيسية التحكم <span class="text-sm"><?php echo $title; ?></span></h2>

	<ul class="breadcrumb pb30">
		<li><a href="#"><i class="fa fa-home"></i> الرئيسية</a></li>
		<li><a href="#">قالب المدخلات</a></li>
		<li class="active"><?php echo $title; ?></li>
	</ul>


	<div class="well bs-component" data-sr="wait 0s, then enter left and hustle 100%">

		<form class="form-horizontal">

		  <fieldset>

		    <legend data-sr="wait 0.3s, then enter left and hustle 100%"><?php echo $title; ?></legend>

		    <div class="form-group" data-sr="wait 0.6s, then enter bottom and hustle 100%">
		      <label for="inputUser" class="col-lg-2 control-label">أسم المستخدم</label>
		      <div class="col-lg-10 input-grup">
		      	<i class="fa fa-user"></i>
		        <input type="text" class="form-control text-right" placeholder="اسم المستخدم">
		        <span class="help-block">هذا سطر لمحتوى اضافى لتعريف بى الانبوت الخاص به .</span>
		      </div>
		    </div>

				<div class="form-group" data-sr="wait 0.6s, then enter bottom and hustle 100%">
		      <label for="inputUser" class="col-lg-2 control-label">غير مسموح</label>
		      <div class="col-lg-10 input-grup">
		      	<i class="fa fa-user"></i>
		        <input type="text" class="form-control text-right" disabled="" placeholder="لا يسمح بالتعديل">
		        <span class="help-block">مثال iNputt غير مسموح بالتعديل .</span>
		      </div>
		    </div>

		    <div class="form-group" data-sr="wait 0.3s, then enter bottom and hustle 100%">
		      <label for="inputPassword" class="col-lg-2 control-label">كلمة المرور </label>
		      <div class="col-lg-10 input-grup">
		      	<i class="fa fa-lock"></i>
		        <input type="password" class="form-control text-right" placeholder="كلمة المرور">
		      </div>
		    </div>

		    <div class="form-group" data-sr="wait 0.3s, then enter bottom and hustle 100%">
		      <label for="inputPassword" class="col-lg-2 control-label">رقم الهاتف </label>
		      <div class="col-lg-10 input-grup2">
		      	<i class="fa fa-phone-square"></i>
		        <input type="text" class="form-control phone-number" placeholder="+2 999-99999-999">
		      </div>
		    </div>

		    <div class="form-group zindexupp" data-sr="wait 0.3s, then enter bottom and hustle 100%">
		      <label for="inputDate" class="col-lg-2 control-label"> تاريخ ميلادك</label>
		      <div class="col-lg-10">
		      	<div class="bfh-datepicker" data-min="01-15-2013" data-format="d-m-y" data-max="today" data-name="data_row"></div>
		      </div>
		    </div>

		    <div class="form-group" data-sr="wait 0.3s, then enter bottom and hustle 100%">
		      <label for="inputCountNumber" class="col-lg-2 control-label">عدد أكس</label>
		      <div class="col-lg-10 input-grup2">
		      	<i class="fa fa-sort-numeric-asc"></i>
		        <input type="text" class="form-control text-right bfh-number" data-min="0" data-max="100">
		      </div>
		    </div>

		    <div class="form-group" data-sr="wait 0.3s, then enter bottom and hustle 100%">
		      <label for="inputCountSlide" class="col-lg-2 control-label">عدد أكس</label>
		      <div class="col-lg-10">
		        <div class="bfh-slider" data-name="sliderInput" data-min="5" data-max="25" data-value="12"></div>
		      </div>
		    </div>

		    <div class="form-group zindexup" data-sr="wait 0.3s, then enter bottom and hustle 100%">
		      <label for="inputColorPick" class="col-lg-2 control-label">أختر لونآ</label>
		      <div class="col-lg-10 input-grup">
		      	<i class="fa fa-eyedropper"></i>
		        <div class="bfh-colorpicker" data-name="colorpicker2" data-color="#FFFFFF"></div>
		      </div>
		    </div>
				
<!-- 				<div class="form-group">
					<label for="post_img" class="col-xs-2 control-label">رفع صورة</label>
					<div class="col-md-2 col-xs-12">
						<div id="post_img" class="upload-img"><span class="glyphicon glyphicon-picture"></span></div>
						<input type="file" class="upload-img image-preview-input-1" id="post_img" name="post_img" placeholder="عنوان الموضوع هنا">
					</div>
					<div class="col-md-6 col-xs-12">
						<a class="image-preview" id="image-preview-1" data-toggle="lightbox" href="#demoLightbox"></a>
					</div>
				</div> -->

				<div class="form-group" data-sr="wait 0.3s, then enter bottom and hustle 100%">
		      <label for="textArea" class="col-lg-2 control-label">محتوى نصى</label>
		      <div class="col-lg-10">
		        <textarea class="form-control" rows="5"></textarea>
		        <span class="help-block">هذا سطر لمحتوى اضافى لتعريف بى الانبوت الخاص به .</span>
		      </div>
		    </div>

		    <div class="form-group" data-sr="wait 0.3s, then enter bottom and hustle 100%">
		      <label for="textArea" class="col-lg-2 control-label">محتوى Html</label>
		      <div class="col-lg-10">
		        <textarea class="form-control" rows="3" id="ckeditort"></textarea>
		        <span class="help-block">هذا سطر لمحتوى اضافى لتعريف بى الانبوت الخاص به .</span>
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