<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Brewer Junction Index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap_css.css">
</head>
 
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Brewer Junction</a>
      </div>

      <div id="navbar" class="collapse navbar-collapse">
        <?php include 'navigation.php'; ?>
      </div>
    </div>
  </nav>
  
  <div class="container">

	<section class="container below_menu_container col-xs-12">
		<h1>BREWER JUNCTION HOME PAGE</h1>
		<div class="jumbotron">
			<h2>Welcome to Brewer Junction!</h2>
			<p>Our quaint little town is home to some fine culture and a great deal of rich and invigorating history. The Brewer town family is over 5,000 strong. If you are interested in learning more about our culture, please feel free to visit any page on this site. We hope to see you there!</p>
		</div>

		<div class="alert alert-warning" role="alert">
			<strong>Attention!</strong> The annual Brew tasting festival is this Saturday at 9AM on 2nd Ave and Brew St. Come join our celebration!
		</div>

    <?php include 'footer.php'; ?>
	</section>
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>