<?php require_once 'views/head.php'; ?>

<h2 class="text-flat">رئيسية التحكم <span class="text-sm">الصفحة الرئيسية</span> <span class="date badge pull-left" data-toggle="tooltip" data-placement="bottom" title="UTC +2:00"><?php echo date('D d-M-Y g:i a'); ?></span></h2>

<ul class="breadcrumb pb30">
  <li><a href="#">الرئيسية</a></li>
  <li class="active">الصفحة الرئيسية</li>
</ul>

<div class="alert alert-info alert-dismissible" data-sr="wait 0.3s, no reset">
	<button type="button" class="close pull-left" data-dismiss="alert">×</button>
	<h3>أحصائيات Morris</h3>
	<p>دليل الإستخدام يمكنك زيارة هذا الرابط لمزيد من المعلومات <a href="http://morrisjs.github.io/morris.js/index.html" target="_blank" class="btn btn-primary btn-xs">هذا الرابط</a></p>
</div>

<div class="col-xs-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">مثال ع أحصائيات حجم كامل</h3>
		</div>
		<div class="panel-body">
			<div id="chart-full"></div>
		</div>
	</div>
</div>

<div class="col-md-6 col-xs-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">مثال ع أحصائيات #1</h3>
		</div>
		<div class="panel-body">
			<div id="chart"></div>
		</div>
	</div>
</div>

<div class="col-md-6 col-xs-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">مثال ع أحصائيات #2</h3>
		</div>
		<div class="panel-body">
			<div id="chart2"></div>
		</div>
	</div>
</div>

<div class="col-md-6 col-xs-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">مثال ع أحصائيات #3</h3>
		</div>
		<div class="panel-body">
			<div id="chart3"></div>
		</div>
	</div>
</div>

<div class="col-md-6 col-xs-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">مثال ع أحصائيات #4</h3>
		</div>
		<div class="panel-body">
			<div id="chart4"></div>
		</div>
	</div>
</div>

  <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js"></script>
  <script src="js/morris.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.min.js"></script>
 
<script type="text/javascript">

	// Chart Full
	var day_data = [
	  {"period": "2012-10-01", "الرخصة": 3407, "غير مفعل": 660},
	  {"period": "2012-09-30", "الرخصة": 3351, "غير مفعل": 629},
	  {"period": "2012-09-29", "الرخصة": 3269, "غير مفعل": 618},
	  {"period": "2012-09-20", "الرخصة": 3246, "غير مفعل": 661},
	  {"period": "2012-09-19", "الرخصة": 3257, "غير مفعل": 667},
	  {"period": "2012-09-18", "الرخصة": 3248, "غير مفعل": 627},
	  {"period": "2012-09-17", "الرخصة": 3171, "غير مفعل": 660},
	  {"period": "2012-09-16", "الرخصة": 3171, "غير مفعل": 676},
	  {"period": "2012-09-15", "الرخصة": 3201, "غير مفعل": 656},
	  {"period": "2012-09-10", "الرخصة": 3215, "غير مفعل": 622}
	];
	Morris.Line({
	  element: 'chart-full',
	  data: day_data,
	  xkey: 'period',
	  ykeys: ['الرخصة', 'غير مفعل'],
	  labels: ['الرخصة', 'مفعل'],
	  resize: true
	});

	// Chart #1
	Morris.Area({
  element: 'chart',
  data: [
    {x: '2010 Q4', y: 3, z: 7},
    {x: '2011 Q1', y: 3, z: 4},
    {x: '2011 Q2', y: null, z: 1},
    {x: '2011 Q3', y: 2, z: 5},
    {x: '2011 Q4', y: 8, z: 2},
    {x: '2012 Q1', y: 4, z: 4}
  ],
  xkey: 'x',
  ykeys: ['y', 'z'],
  labels: ['Y', 'Z'],
  resize: true
	}).on('click', function(i, row){
	  console.log(i, row);
	});

	// Chart #2
	Morris.Bar({
	  element: 'chart2',
	  data: [
	    {x: '2011 Q1', y: 3, z: 2, a: 3},
	    {x: '2011 Q2', y: 2, z: null, a: 1},
	    {x: '2011 Q3', y: 0, z: 2, a: 4},
	    {x: '2011 Q4', y: 2, z: 4, a: 3}
	  ],
	  xkey: 'x',
	  ykeys: ['y', 'z', 'a'],
	  labels: ['Y', 'Z', 'A'],
	  resize: true
	}).on('click', function(i, row){
	  console.log(i, row);
	});

	// Chart #3
	Morris.Donut({
  element: 'chart3',
  data: [
    {value: 70, label: 'foo', formatted: 'at least 70%' },
    {value: 15, label: 'bar', formatted: 'approx. 15%' },
    {value: 10, label: 'baz', formatted: 'approx. 10%' },
    {value: 5, label: 'A really really long label', formatted: 'at most 5%' }
  ],
  resize: true,
  formatter: function (x, data) { return data.formatted; }
	});

	// Chart #4
	var decimal_data = [];
	for (var x = 0; x <= 360; x += 10) {
	  decimal_data.push({
	    x: x,
	    y: Math.sin(Math.PI * x / 180).toFixed(4)
	  });
	}
	window.m = Morris.Line({
	  element: 'chart4',
	  data: decimal_data,
	  xkey: 'x',
	  ykeys: ['y'],
	  labels: ['sin(x)'],
	  parseTime: false,
	  goals: [-1, 0, 1]
	});
</script>


<?php require_once 'views/sidebar.php'; require_once 'views/foot.php';