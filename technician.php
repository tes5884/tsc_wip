<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="icon" href="favicon.ico" />
		<title>TSpitz Consulting, Inc.</title>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body id="home">
			<!-- navbar start -->
			<?php include('php/navbar.php');?>
			<!-- navbar end -->	
    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div style="margin-top: 10%" class="panel panel-default">
            <div align="center" class="panel-body">
              <script
                id = "jwEmbed"
                src = "http://tscinc.co:8008/technician/embed.js"
                configuration = "online*,offline,applet"
                showAppName = "yes"
                showImage = "no"
                type = "text/javascript">
              </script>
            </div>
          </div>
        </div>
        <div class="col-md-2"></div>
      </div> <!-- row -->    
    </div> <!-- container -->
		<?php include('php/footer.php');?>
		<!-- js files -->	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
		<!-- end js files -->
	</body>
</html>
