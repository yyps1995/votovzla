<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Votovzla</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/modernizr-2.6.2.min.js"></script>
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">

	<header id="fh5co-header" class="cabecera fh5co-cover" role="banner">
		<div class="overlay"></div>
	<div id="fh5co-started">
		<div class="container">
			<br><br>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<img src="img/votovzla-logo.png">
					<h1>Votovzla</h1>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<form class="form-inline">
						<div class="col-md-6 col-sm-6 col-lg-4">
							<div class="form-group">
								<label for="text" class="sr-only">Usuario de steemit</label>
								<input type="text" class="form-control" onclick='javascript:this.select()' name=delegador id=delegador value='' type="text" placeholder="Usuario de steemit">
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-4" hidden>
							<div class="form-group">
								<input type="text" class="form-control" onclick='javascript:this.select()' name=votovzla id=votovzla value='Votovzla' type="text">
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-4" hidden>
							<div class="form-group">
								<input type="text" class="form-control" onclick='javascript:this.select()' type=text name=SP id=SP value='SP'>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-4">
							<div class="form-group">
								<label for="text" class="sr-only">Steem Power</label>
								<input type="number" class="form-control" onclick='javascript:this.select()' name=cantidad id=cantidad value='' placeholder="Steem Power">
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-4">
							<button type=button id=checkbtn class='btn btn-default btn-block' value='Delegar SP' />Delegar SP
							 </button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	</header>
	</div>
	
<script src="js/jquery.min.js"></script>
<script type="text/javascript">
      $(document).ready(function() {
          $("a[href='#top']").click(function() { $("html, body").stop().animate({ scrollTop: 0 }, "slow"); return false; });
          $("#checkbtn").click(function() {
            var delegador = $("#delegador").val().toLowerCase().trim();
            var votovzla = $("#votovzla").val().toLowerCase().trim();
            var cantidad = $("#cantidad").val().trim();
            var sp = $("#SP").val().trim();
            if (delegador=='') {
              alert('Porfavor ingrese su usuario.');
              $("#delegador").focus();
              return;
            }
            if (cantidad =='') {
              alert('Porfavor ingrese la cantidad a delegar. Pon 0 para quitar el delegado');
              $("#cantidad").focus();
              return;
            }  
            location.href="https://v2.steemconnect.com/sign/delegateVestingShares?delegator="+delegador+"&delegatee="+votovzla+"&vesting_shares="+cantidad + " " + sp+"#"; 
          });
      });
      </script>

	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countTo.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>

