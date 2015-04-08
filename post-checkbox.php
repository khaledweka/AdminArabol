<?php $title='مدخلات CheckBox, Radio'; require_once 'views/head.php'; ?>

	<h2 class="text-flat">رئيسية التحكم <span class="text-sm"><?php echo $title; ?></span></h2>

	<ul class="breadcrumb pb30">
		<li><a href="#"><i class="fa fa-home"></i> الرئيسية</a></li>
		<li><a href="#">صفحات الأضافه</a></li>
		<li class="active"><?php echo $title; ?></li>
	</ul>

<div class="cb-radio">
		    			<input type="radio" class="radio"> nemo
		    		</div>
	<div class="well bs-component" data-sr="wait 0s, then enter left and hustle 100%">

		<form class="form-horizontal">

		  <fieldset>

		    <legend data-sr="wait 0.3s, then enter bottom and hustle 100%"><?php echo $title; ?></legend>

		    <div class="form-group" data-sr="wait 0.3s, then enter bottom and hustle 100%">
		      <label for="inputPassword" class="col-lg-2 control-label">أختر </label>
		      <div class="col-lg-10">
		        <div class="checkbox">
		          
		          <input type="checkbox" data-style="android" data-size="normal" data-toggle="toggle" data-onstyle="success" data-offstyle="default" data-on="تفعيل " data-off="تعطيل &lt;i class='fa fa-power-off'&gt;&lt;/i&gt;" data-width="100">
							<label>
		          	تحديد الأختيار
		          </label>
		          <input type="checkbox" data-style="android" data-size="small" data-toggle="toggle" data-onstyle="info" data-offstyle="default" data-on="تفعيل" data-off="تعطيل &lt;i class='fa fa-power-off'&gt;&lt;/i&gt;" data-width="90">
							<label>
		          	تحديد الأختيار
		          </label>
		          <input type="checkbox" data-style="android" data-size="mini" data-toggle="toggle" data-onstyle="danger" data-offstyle="default" data-on="تفعيل" data-off="تعطيل" data-width="70">
							<label>
		          	تحديد الأختيار
		          </label>

		        </div>
		      </div>
		    </div>

		    <div class="form-group">

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