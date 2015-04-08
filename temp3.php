<?php $title='عضو جديد'; require_once 'views/head.php'; ?>

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
		      <label for="inputName" class="col-lg-2 control-label">أسمك بالكامل</label>
		      <div class="col-lg-10 input-grup">
		      	<i class="fa fa-users"></i>
		        <input type="text" class="form-control text-right">
		      </div>
		    </div>

				<div class="form-group" data-sr="wait 0.6s, then enter bottom and hustle 100%">
		      <label for="inputUser" class="col-lg-2 control-label">أسم المستخدم</label>
		      <div class="col-lg-10 input-grup">
		      	<i class="fa fa-user"></i>
		        <input type="text" class="form-control text-right">
		      </div>
		    </div>

		    <div class="form-group" data-sr="wait 0.6s, then enter bottom and hustle 100%">
		      <label for="inputMail" class="col-lg-2 control-label">البريد الإلكتروني</label>
		      <div class="col-lg-10 input-grup">
		      	<i class="fa fa-send"></i>
		        <input type="text" class="form-control text-right">
		      </div>
		    </div>

		    <div class="form-group" data-sr="wait 0.3s, then enter bottom and hustle 100%">
		      <label for="inputPassword" class="col-lg-2 control-label">كلمة المرور </label>
		      <div class="col-lg-10 input-grup">
		      	<i class="fa fa-unlock-alt"></i>
		        <input type="password" class="form-control text-right">
		      </div>
		    </div>

		    <div class="form-group" data-sr="wait 0.3s, then enter bottom and hustle 100%">
		      <label for="inputPassword" class="col-lg-2 control-label">رقم الهاتف </label>
		      <div class="col-lg-10 input-grup2">
		      	<i class="fa fa-phone-square"></i>
		        <input type="text" class="form-control phone-number text-left" placeholder="+2 999-99999-999">
		      </div>
		    </div>

		    <div class="form-group zindexupp" data-sr="wait 0.3s, then enter bottom and hustle 100%">
		      <label for="inputDate" class="col-lg-2 control-label"> تاريخ ميلادك</label>
		      <div class="col-lg-10">
		      	<div class="bfh-datepicker" data-min="01-15-2013" data-format="d-m-y" data-max="today" data-name="data_row"></div>
		      </div>
		    </div>

		    <div class="form-group" data-sr="wait 0.3s, then enter bottom and hustle 100%">
		      <label for="select1" class="col-lg-2 control-label">أختر بلدك</label>
		      <div class="col-lg-10">
						<select class="form-control" data-title="أختر بلدك">
							<?php require_once 'country.php'; ?>
						</select>
		      </div>
		    </div>

		    <div class="form-group" data-sr="wait 0.3s, then enter bottom and hustle 100%">
		      <label for="inputPassword" class="col-lg-2 control-label">أختر </label>
		      <div class="col-lg-10">
		        <div class="checkbox">
		          
		          <input type="checkbox" data-style="android" data-size="normal" data-toggle="toggle" data-onstyle="success" data-offstyle="default" data-on="آنثي &lt;i class='fa fa-female'&gt;&lt;/i&gt;" data-off="ذكر &lt;i class='fa fa-male'&gt;&lt;/i&gt;" data-width="100">
							<label>
		          	تحديد الأختيار
		          </label>

		        </div>
		      </div>
		    </div>


		    <div class="form-group" data-sr="wait 0.3s, then enter bottom and hustle 100%">
		      <label for="textArea" class="col-lg-2 control-label">من أنا</label>
		      <div class="col-lg-10">
		        <textarea class="form-control" rows="3" id="ckeditort"></textarea>
		        <span class="help-block">أكتب وصف مختصر عنك.</span>
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