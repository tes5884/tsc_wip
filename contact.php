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
      <div style="margin-top: 10%" class="row">
        <div class="col-md-1"></div>
        <div class="col-md-7">
          <div class="panel panel-default">
            <div class="panel-body">
              <form name="contactform" method="post" action="php/mailer.php" class="form-horizontal" role="form">
                <div class="form-group"><!-- name -->
                  <label for="inputName" class="col-sm-2 control-label">Name</label>
                  <div class="col-md-10">
                    <input type="text" class="form-control" id="inputName" placeholder="Name">
                  </div>
                </div>
                <div class="form-group"><!-- email -->
                  <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                  </div>
                </div>
                <div class="form-group"><!-- phone -->
                  <label for="inputPhone" class="col-sm-2 control-label">Phone</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPhone" placeholder="xxx-xxx-xxxx">
                  </div>
                </div>  
                <div class="form-group"><!-- message -->
                  <label for="inputMessage" class="col-sm-2 control-label">Message</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" rows="5"></textarea>
                  </div>  
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="panel panel-default">
            <div class="panel-body">
              <address>
                <strong> TSpitz Consulting, Inc.</strong><br />
                2 Olympia Lane <br />
                Monsey, NY 10952 <br />
                <abbr title="Phone">P:</abbr> (845) 219-1762 <br />
                <abbr title="Email">E:</abbr> <a style="text-transform: lowercase" href="mailto:info@tspitzconsulting.com">info@tspitzconsulting.com</a>
              </address>
            </div>
          </div>
        </div>
        <div class="col-md-1"></div>
      </div> <!-- row -->
    </div> <!-- container -->
		<?php include('php/footer.php');?>
		<!-- js files -->	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
		<!-- end js files -->
	</body>
</html>
