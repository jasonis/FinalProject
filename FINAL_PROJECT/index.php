<?php require_once( 'admin/cms.php' ); ?>
<!DOCTYPE html>

<html lang='en'>
<head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home || Teri Lynn Photography</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrapValidator.min.css"/>
    <link href='css/main.css' rel='stylesheet' type='text/css'>
        
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
  
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>

<body>

    <header  id='fixed-header' class="navbar-inverse navbar-default navbar-fixed-top example" role="navigation">
        
        <div class='container'>
            <h1>
                <a href='index.php'><img src='images/logo.jpg' class='img-responsive' alt='text heading for Teri Lynn Photography'></a>
            </h1>
	    <div class="navbar-header">
	        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
		    <span class="sr-only">Toggle navigation</span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
	        </button>
	        <a href="#" class="navbar-brand scroll-top"></a>
	    </div>
            <ul id='main-nav' class='collapse navbar-collapse' role='tablist'>
                <li>
                    <a href='index.php'>Home</a>
                </li>
                <li>
                    <a href='portfolio.php'>Portfolio</a>
                </li>
                <li>
                    <a href='pricing.php'>Pricing</a>
                </li>
                <li>
                    <a href='#' data-toggle="modal" data-target="#myModal">Contact</a>
                </li>
            </ul>
        </div>
	
    </header>

    <section id='ctaphoto' class="container">
        <div class='row'>
            <img class='img-responsive col-md-12' src='images/sleepycover.jpg' alt='baby in fathers arm'>
        </div>
    </section>

    <section id='whyme' class='container-fluid'>
        <h2>
            Why Me
        </h2>
        <div class='row'>
            <div class='col-md-4'>
                <img id='mainphoto' class='img-responsive' src='images/handshake.jpg' alt='image of two hands shaking'>
                <p>Personal</p>
            </div>
            <div class='col-md-4'>
                <img class='img-responsive' src='images/portrait.jpg' alt='image of a portrait'>
                <p>Professional</p>
            </div>
            <div class='col-md-4'>
                <img class='img-responsive' src='images/piggybank.jpg' alt='image of a piggy bank'>
                <p>Affordable</p>
            </div>
        </div><!-- end .row -->
    </section>
    
    <section id='recentprojects' class='container-fluid'>
        <h2>
            Recent Projects
        </h2>
	<div hidden >
	    <cms:editable name='recentprojects_1' type='image' />
	    <cms:editable name='recentprojects_2' type='image' />
	    <cms:editable name='recentprojects_3' type='image' />
	    <cms:editable name='recentprojects_4' type='image' />
	    <cms:editable name='recentprojects_5' type='image' />
	    <cms:editable name='recentprojects_6' type='image' />
	</div>
        <div class='row'>
            <img alt='recent photo shoot' class='img-responsive col-md-4' src='<cms:show recentprojects_1 />'>
            <img alt='recent photo shoot' class='img-responsive col-md-4' src='<cms:show recentprojects_2 />'>
            <img alt='recent photo shoot' class='img-responsive col-md-4' src='<cms:show recentprojects_3 />'>
        </div>
        <div class='row'>
            <img alt='recent photo shoot' class='img-responsive col-md-4' src='<cms:show recentprojects_4 />'>
            <img alt='recent photo shoot' class='img-responsive col-md-4' src='<cms:show recentprojects_5 />'>
            <img alt='recent photo shoot' class='img-responsive col-md-4' src='<cms:show recentprojects_6 />'>
        </div>
	
    </section>
    
    <section id='aboutme' class='container-fluid'>
        <h2>
            About Me
        </h2>
        <div class='row'>
	    <cms:editable name='about_me_1' type='richtext'>
	    <p class='col-md-4'>I'm a wife and mother to 2 little ones - Evan 
	    born in 2007 and Abigail born in 2010. I have 
	    always had a love of photography as long as I 
	    can remember (thanks to good ole' Dad!) and 
	    as the years went on I kept studying and 
	    practicing. Especially after Evan was born, that 
	    was an awesome motivation to improve my 
	    photography. I realized that I had a gift and I 
	    wanted to share with other people who would 
	    benefit from it. After the birth of Abigail, we made 
	    the decision for me to pursue my business, and 
	    it's one of the best decisions we ever made. I 
	    haven't looked back since. I love doing what I 
	    do!! I am quite the perfectionist when it comes 
	    to my art, so you can rest assured that you will 
	    get nothing but my best each and every time. </p>
	    </cms:editable>
	    <div class='col-md-4'>
		<div hidden >
		    <cms:editable name='selfie' type='image' />
		</div>
		<img class='img-responsive' alt='photo of teri' src='<cms:show selfie />'>
		<cms:editable name='about_me_2' type='richtext'>
		<p>I treat your photos the way I would my own - with 
		care and attention to detail. I look at every client 
		as a new friend. I want to get to know you and 
		what makes you "tick". I can't wait to hear from 
		you!!</p>
		</cms:editable>
	    </div>
	    
	    <div class="sign">
		<a href='#' class='button'><button type="submit" class="float-shadow" data-toggle="modal" data-target="#myModal">SCHEDULE</button></a>
	    </div>
        
	    <ul class='col-md-4'>
		<h3>
		Random Facts
		</h3>
		<cms:editable name='about_me_random_facts' type='richtext'>
		<li>
		    I try to keep up writing in my kids' journals - it doesn't always work out that way though.
		</li>
		<li>
		    I love power tools - more than my husband, even - does that mean that I know how to use them all?....nope!
		</li>
		<li>
		    I can draw - even though I don't do it that much anymore.
		</li>
		<li>
		    I adore my morning coffee!
		</li>
		<li>
		    I am not afraid to say "I love you"....like all the time!
		</li>
		<li>
		    I can't drink milk out of a plastic glass - hmmm - don't ask - just a weird quirk.
		</li>
		<li>
		    I was in the high school color guard and we won state championships in 1997!
		</li>
		<li>
		    I thrive on learning new things, not just photography related either
		</li>
		</cms:editable>
	    </ul>
        </div><!-- end .row -->
    </section>
    
    <!-- style for captcha  -->
    <script type="text/javascript">
    var RecaptchaOptions = {
       theme : 'blackglass'
    };
    </script>
    
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">CONTACT ME</h4>
          </div>
          <div class="modal-body">
            <form id='loginForm' method="post" role='form'>
                <div class="row">
                    <div class="form-group col-xs-12 floating-label-form-group">
                      <input id='name' class="form-control" type="text" name="name" placeholder="NAME" required autofocus='on'>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-xs-12 floating-label-form-group">
                      <input id='email' class="form-control" type="email" name="email" placeholder="EMAIL" >
                    </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12 floating-label-form-group">
                    <textarea type="text" placeholder="MESSAGE" name="message" class="form-control" rows="5" required></textarea>
                  </div>
                </div>
                <div class="row">
                    <div class="form-group col-xs-12 floating-label-form-group">                   
                        <!-- script for captcha -->
                        <script type="text/javascript"
                          src="http://www.google.com/recaptcha/api/challenge?k=6LexjfkSAAAAAMh3aiaztOHEF9X_1L_PYDzRVVh2">
                        </script>
                        <noscript>
                           <iframe src="http://www.google.com/recaptcha/api/noscript?k=6LexjfkSAAAAAMh3aiaztOHEF9X_1L_PYDzRVVh2"
                              height="300" width="500" frameborder="0"></iframe><br>
                           <textarea name="recaptcha_challenge_field" rows="3" cols="40">
                           </textarea>
                           <input type="hidden" name="recaptcha_response_field"
                               value="manual_challenge">
                        </noscript>           
                    </div>
                </div><!-- end .row -->
                <div class=" form-group modal-footer">
                  <button type="submit" class="btn btn-primary">SUBMIT</button>
                </div>
            
            </form>
          </div><!-- end .modal-body  -->
        </div><!-- end .modal-content  --> 
      </div><!-- end .modal-dialog  -->
    </div><!-- end .modal  -->

    
    <footer>
        <ul id='footerpages'>
            <li>
                <a href='kindwords.php'>Kind Words</a>
            </li>
            <li>
                <a href='faq.php'>FAQ</a>
            </li>
            <li>
                <a href='#' data-toggle="modal" data-target="#myModal">Contact</a>
            </li>
        </ul>
        
        <ul id='footerlinks'>
            <li>
                <a href='http://www.facebook.com'><img src='images/facebook-square.jpg' width='25px' height='25px'/></a>
            </li>
            <li>
                <a href='http://www.pinterest.com'><img src='images/pinterest.jpg' width='25px' height='25px' /></a>
            </li>
            <li>
                <a href='http://www.instagram.com'><img src='images/instagram.jpg' width='25px' height='25px' /></a>
            </li>
        </ul>
        <p>2014 Eye Squared Media</p>
    </footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrapValidator.min.js"></script>
<script type='text/javascript' src='js/main.js'></script>
</body>
</html>
<?php COUCH::invoke(); ?>