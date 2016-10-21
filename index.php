<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<title>Document</title>
</head>
<header id="header">
	<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Durex</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a id="navtop" href="index.php">Accueil</a></li>
        <li><a id="navtop" href="produits.php">Produits</a></li>
        <li><a id="navtop" href="#">Qui sommes-nous</a></li>
        <li><a id="navtop" href="#">Contact</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</header>
<body>
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">A votre service</h2>
                    <hr>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-file fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Format</h4>
                    <p class="text-muted">Each of the first two days includes one four-match session of four-balls and one four-match session of foursomes. The final day is reserved for 12 singles matches.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-calculator  fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Scoring</h4>
                    <p class="text-muted">Each match is worth one point, with matches ending in a draw worth 1/2 point to each side. The first team to reach 14 ½ points wins the Ryder Cup. If the matches end in a 14-14 draw, the team holding the Ryder Cup retains it.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-flag fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Team Selection</h4>
                    <p class="text-muted">The United States will have eight players determined by points, while the European Team will have nine - the first four coming from the European Points List and the next five from the World Points List. Europe has three Captain's Picks, while the USA has four.</p><br><br><br><br>

                </div>
            </div>
        </div>
    </section>
	<section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Envoyez Moi un message ! </h2>
                    <h3 class="section-subheading text-muted">Je vous répondrais aussitôt que possible</h3><br><br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Votre Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                                <div class="col-md-6 text-center">
                                   <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Votre Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                   </div>
                                </div>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ">
                        <div class="form-group">
                                    <textarea class="form-control" rows="5" placeholder="Votre Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                        </div>
                </div>
            </div>
                <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Envoyez</button><br><br><br>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>	

</body>
</html>