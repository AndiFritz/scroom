<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/time.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<link href="css/bootstrap-switch.css" rel="stylesheet">
	<script src="js/bootstrap-switch.js"></script>
	<script type="text/javascript" src="js/switches.js"></script>
	 <link href="docs/css/highlight.css" rel="stylesheet">
	<script type="text/javascript">
		$(document).ready(function(){
			showTime();
			
		});

		$(window).load(function(){
    		$("input.toggle").bootstrapSwitch();
		});


		$("[name='games-on']").bootstrapSwitch();
	</script>


</head>
<body>

	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">
	        Secret-Room-Checklist
	      </a>
	    </div>
	  </div>
	</nav>

	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-5">
			<h3>Bei Ankunft:</h3>
		</div>
  		<div class="col-md-6">
  		</div>
	</div>

	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-1">
			<div id="time"></time></div>

		</div>
		<div class="col-md-4">
			<button type="button" class="btn btn-warning">Einstempeln</button>
		</div>
  		<div class="col-md-6">
  		</div>
	</div>
	<div class="row">
		<div class="col-md-12"><h1></h1></div>
	</div>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-1">
			<p>Spiele eingeschaltet:<p>
		</div>
		<div class="col-md-4">
			<div class="switch switch-blue">
			    <input type="radio" class="switch-input" name="view2" value="week2" id="week2" checked>
			    <label for="week2" class="switch-label switch-label-off">Nein</label>
			    <input type="radio" class="switch-input" name="view2" value="month2" id="month2">
			    <label for="month2" class="switch-label switch-label-on">Ja</label>
			    <span class="switch-selection"></span>
			</div>
		</div>

	</div>

	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-1">
			<p>XY eingeschaltet:</p>
		</div>
		<div class ="col-md-4">
			<div class="switch switch-blue">
			    <input type="radio" class="switch-input" name="view2" value="week2" id="week2" checked>
			    <label for="week2" class="switch-label switch-label-off">Nein</label>
			    <input type="radio" class="switch-input" name="view2" value="month2" id="month2">
			    <label for="month2" class="switch-label switch-label-on">Ja</label>
			    <span class="switch-selection"></span>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-1"><div>
		<div class="col-md-1">
			<h3>Heutige Gruppen</h3>
		</div>
	</div>
</body>




</html>


