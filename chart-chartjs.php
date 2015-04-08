<?php require_once 'views/head.php'; ?>

<h2 class="text-flat">رئيسية التحكم <span class="text-sm">الصفحة الرئيسية</span> <span class="date badge pull-left" data-toggle="tooltip" data-placement="bottom" title="UTC +2:00"><?php echo date('D d-M-Y g:i a'); ?></span></h2>

<ul class="breadcrumb pb30">
  <li><a href="#">الرئيسية</a></li>
  <li class="active">الصفحة الرئيسية</li>
</ul>


<div class="alert alert-info alert-dismissible" data-sr="wait 0.3s, no reset">
	<button type="button" class="close pull-left" data-dismiss="alert">×</button>
	<h3>أحصائيات Chart Js</h3>
	<p>دليل الإستخدام يمكنك زيارة هذا الرابط لمزيد من المعلومات <a href="http://www.chartjs.org/docs/" target="_blank" class="btn btn-primary btn-xs">هذا الرابط</a></p>
</div>

<div class="col-xs-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">مثال ع أحصائيات حجم كامل</h3>
		</div>
		<div class="panel-body">
			<canvas id="Chart-Full" height="100px"></canvas>
		</div>
	</div>
</div>

<div class="col-md-6 col-xs-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">مثال ع أحصائيات #1</h3>
		</div>
		<div class="panel-body">
			<canvas id="chart-area" height="200px" />
		</div>
	</div>
</div>

<div class="col-md-6 col-xs-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">مثال ع أحصائيات #2</h3>
		</div>
		<div class="panel-body">
			<canvas id="radar" height="200px"></canvas>
		</div>
	</div>
</div>

<div class="col-md-6 col-xs-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">مثال ع أحصائيات #3</h3>
		</div>
		<div class="panel-body">
			<canvas id="ChartBar" height="200px" />
		</div>
	</div>
</div>

<div class="col-md-6 col-xs-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">مثال ع أحصائيات #4</h3>
		</div>
		<div class="panel-body">
			<canvas id="polar" height="200px" />
		</div>
	</div>
</div>

 
<script type="text/javascript">

		// Chart Full
		var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
		var lineChartData = {
			labels : ["January","February","March","April","May","June","July"],
			datasets : [
				{
					label: "My First dataset",
					fillColor : "rgba(220,220,220,0.2)",
					strokeColor : "rgba(220,220,220,1)",
					pointColor : "rgba(220,220,220,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(220,220,220,1)",
					data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
				},
				{
					label: "My Second dataset",
					fillColor : "rgba(151,187,205,0.2)",
					strokeColor : "rgba(151,187,205,1)",
					pointColor : "rgba(151,187,205,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(151,187,205,1)",
					data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
				}
			]

		}

	// Chart Pie
			var doughnutData = [
				{
					value: 300,
					color:"#F7464A",
					highlight: "#FF5A5E",
					label: "Red"
				},
				{
					value: 50,
					color: "#46BFBD",
					highlight: "#5AD3D1",
					label: "Green"
				},
				{
					value: 100,
					color: "#FDB45C",
					highlight: "#FFC870",
					label: "Yellow"
				},
				{
					value: 40,
					color: "#949FB1",
					highlight: "#A8B3C5",
					label: "Grey"
				},
				{
					value: 120,
					color: "#4D5360",
					highlight: "#616774",
					label: "Dark Grey"
				}

			];



		// Chart Radar
		var radarChartData = {
		labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
		datasets: [
			{
				label: "My First dataset",
				fillColor: "rgba(220,220,220,0.2)",
				strokeColor: "rgba(220,220,220,1)",
				pointColor: "rgba(220,220,220,1)",
				pointStrokeColor: "#fff",
				pointHighlightFill: "#fff",
				pointHighlightStroke: "rgba(220,220,220,1)",
				data: [65,59,90,81,56,55,40]
			},
			{
				label: "My Second dataset",
				fillColor: "rgba(151,187,205,0.2)",
				strokeColor: "rgba(151,187,205,1)",
				pointColor: "rgba(151,187,205,1)",
				pointStrokeColor: "#fff",
				pointHighlightFill: "#fff",
				pointHighlightStroke: "rgba(151,187,205,1)",
				data: [28,48,40,19,96,27,100]
			}
		]
	};

	// Chart Bar
	var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
	var barChartData = {
		labels : ["January","February","March","April","May","June","July"],
		datasets : [
			{
				fillColor : "rgba(220,220,220,0.5)",
				strokeColor : "rgba(220,220,220,0.8)",
				highlightFill: "rgba(220,220,220,0.75)",
				highlightStroke: "rgba(220,220,220,1)",
				data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
			},
			{
				fillColor : "rgba(151,187,205,0.5)",
				strokeColor : "rgba(151,187,205,0.8)",
				highlightFill : "rgba(151,187,205,0.75)",
				highlightStroke : "rgba(151,187,205,1)",
				data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
			}
		]

	}

		// Chart Polar
			var polarData = [
				{
					value: 300,
					color:"#F7464A",
					highlight: "#FF5A5E",
					label: "Red"
				},
				{
					value: 50,
					color: "#46BFBD",
					highlight: "#5AD3D1",
					label: "Green"
				},
				{
					value: 100,
					color: "#FDB45C",
					highlight: "#FFC870",
					label: "Yellow"
				},
				{
					value: 40,
					color: "#949FB1",
					highlight: "#A8B3C5",
					label: "Grey"
				},
				{
					value: 120,
					color: "#4D5360",
					highlight: "#616774",
					label: "Dark Grey"
				}

			];



	window.onload = function(){

		// Chart Full
		var ctx = document.getElementById("Chart-Full").getContext("2d");
		window.myLine = new Chart(ctx).Line(lineChartData, {
			responsive: true
		});

		// Chart Bar
		var ctx = document.getElementById("ChartBar").getContext("2d");
		window.myBar = new Chart(ctx).Bar(barChartData, {
			responsive : true
		});

		// Chart Pie
		var ctxx = document.getElementById("chart-area").getContext("2d");
		window.myDoughnut = new Chart(ctxx).Doughnut(doughnutData, {responsive : true});

		// Chart Radar
		window.myRadar = new Chart(document.getElementById("radar").getContext("2d")).Radar(radarChartData, {
			responsive: true
		});

		// Chart Polar
		var ctx = document.getElementById("polar").getContext("2d");
				window.myPolarArea = new Chart(ctx).PolarArea(polarData, {
					responsive:true
				});

	}

</script>
<script src="js/chartjs.min.js"></script>


<?php require_once 'views/sidebar.php'; require_once 'views/foot.php';