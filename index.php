<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<style>
		.navbar-brand{
			font-size: 1.7em;
		}
		#topContainer{
			background-image: url("img/9517678801_e88628fb97_h.jpg");
			width: 100%;
			height: 400px;
			background-size: cover;
		}
		#toprow{
			padding-top: 200px;
			text-align: center;
		}
		#topContainer h1{
			color: white;
			font-size: 50px;
		}
		#topContainer p{
			color: white;
			font-size: 20px;
		}
		.marginTop{
			margin-top: 30px;
		}
		.center{
			text-align: center;
		}
		.titleMarginTop{
			margin-top: 50px;
		}
		.footer{
			background-color: #B0D1FB;
			margin-top: 30px;
			width: 100%;
		}
		.appStoreImage{
			width:250px;
		}
	</style>
	
  </head>
  <body>
    
	<div class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button> 
				<a class="navbar-brand">my App</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
				<li class="active"><a href="#home">Home</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#dowload">Dowload App</a></li>
				</ul>
				<form class="navbar-form navbar-right">
					<div class="form-group">
						<input type="email" placeholder="Email" class="form-control"/> 
					</div>
					<div class="form-group">
						<input type="password" placeholder="Password" class="form-control"/> 
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success">Log In</button> 
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="container contentContainer" id="topContainer">
	<div class="row">
	<div class="col-md-6 col-md-offset-3" id="toprow">
		<h1>My Awesome App</h1>
		<p>Some Information About The App</p>

				<form class="marginTop">
					<div class="input-group">
					<span class="input-group-addon">@</span>
						<input type="email" placeholder="Email" class="form-control"/> 
						
					</div>
					<input type="submit" class="btn btn-success marginTop btn-lg" /> 
					
				</form>
</div>
</div>
	</div>
	
	<div class="container">
		<div class="row center titleMarginTop">
			<h1>Why This App Awesome</h1>
			<p>Some Information About The App</p>
		</div>
		
		<div class="row">
			<div class="col-md-4">
				<h2> <span class="glyphicon glyphicon-music"></span>Header</h2>
				<p>A bief description of one of the best features of your app
					A bief description of one of the best features of your app
					A bief description of one of the best features of your app.
				</p>
				<button class="btn btn-success titleMarginTop">Read More..</button>
			</div>
			<div class="col-md-4">
				<h2> <span class="glyphicon glyphicon-off"></span>Header</h2>
				<p>A bief description of one of the best features of your app
					A bief description of one of the best features of your app
					A bief description of one of the best features of your app.
				</p>
				<button class="btn btn-success titleMarginTop">Read More..</button>
			</div>
			<div class="col-md-4">
				<h2> <span class="glyphicon glyphicon-pencil"></span>Header</h2>
				<p>A bief description of one of the best features of your app
					A bief description of one of the best features of your app
					A bief description of one of the best features of your app.
				</p>
				<button class="btn btn-success titleMarginTop">Read More..</button>
			</div>
		</div>
		
		
	</div>
	<div class="container contentContainer footer">
		<div class=" row center">
			<h1>Dowload App</h1>
			<p>A bief description of one of the best features of your app.	
				</p>
				<a href=""><img src="img/app-store-icon.png" class="appStoreImage"/></a>
		</div>
	</div>
	
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.12.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
	<script>
	  
	  $(".contentContainer").css("height",$(window).height());
	</script>
	
  </body>
</html>
<!-- 

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
    </div>
  </div>
</nav>

 -->
<!-- 

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
  <h1>My First Bootstrap Page</h1>
  <p>This is some text.</p> 
</div>

</body>
</html>

 -->



