<?php require_once( 'admin/cms.php' ); ?>
<!DOCTYPE html>

<html lang='en'>
<head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pricing || Teri Lynn Photography</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
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
    
    <section id='pricingtable' class='container-fluid'>
	<h2>PHOTO SESSION PRICING</h2>
	<ul class='row'>
	    <div class='col-md-4'>
	    <h3>Essentials</h3>
	    <li class='essential'>
		<div class="top">
		  <h4>WEDDING</h4>
		  <div class="circle">$997</div>
		</div>
		<cms:editable name='pricing_wed_essential' type='richtext'>
		  <div class="bottom">
		  <p>Up to 3 hours</p>
		  <p>Over 100 high res images on DVD</p>
		  <p>11x14 wall print</p>
		  <p>Private online gallery</p>
		</div>
		</cms:editable>
		<div class="sign">
		    <a href='#' class='button'><button type="submit" class="float-shadow" data-toggle="modal" data-target="#myModal">SCHEDULE</button></a>
		</div>
	    </li>
	    </div>
	    <div class='col-md-4'>
	    <h3>Plus</h3>
	    <li class='plus'>
		<div class="top">
		  <h4>WEDDING</h4>
		  <div class="circle">$1697</div>
		</div>
		<cms:editable name='pricing_wed_plus' type='richtext'>
		<div class="bottom">
		  <p>Up to 6 hours</p>
		  <p>200 to 300 high res images on DVD</p>
		  <p>11x14 &amp; 8x10 Wall Prints</p>
		  <p>Private online gallery</p>
		</div>
		</cms:editable>
		<div class="sign">
		    <a href='#' class='button'><button type="submit" class="float-shadow" data-toggle="modal" data-target="#myModal">SCHEDULE</button></a>
		</div>
	    </li>
	    </div>
	    <div class='col-md-4'>
	    <h3>Luxury</h3>
	    <li class='luxury'>
		<div class="top">
		  <h4>WEDDING</h4>
		  <div class="circle">$1997</div>
		</div>
		<cms:editable name='pricing_wed_luxury' type='richtext'>
		<div class="bottom">
		  <p>Up to 8 hours</p>
		  <p>300 to 400 high res images on DVD</p>
		  <p>16x20 Wall Print</p>
		  <p>Private online gallery</p>
		</div>
		</cms:editable>
		<div class="sign">
		    <a href='#' class='button'><button type="submit" class="float-shadow" data-toggle="modal" data-target="#myModal">SCHEDULE</button></a>
		</div>
	    </li>
	    </div>
	</ul>
	
	<ul class='row'>
	    <div class='col-md-4'>
	    <li class='essential'>
		<div class="top">
		  <h4>HIGH SCHOOL SENIOR</h4>
		  <div class="circle">$75</div>
		</div>
		<cms:editable name='pricing_senior_essential' type='richtext'>
		  <div class="bottom">
		  <p>Up to 1 hour</p>
		  <p>One outfit</p>
		  <p>One location</p>
		</div>
		</cms:editable>
		<div class="sign">
		    <a href='#' class='button'><button type="submit" class="float-shadow" data-toggle="modal" data-target="#myModal">SCHEDULE</button></a>
		</div>
	    </li>
	    </div>
	    <div class='col-md-4'>
	    <li class='plus'>
		<div class="top">
		  <h4>HIGH SCHOOL SENIOR</h4>
		  <div class="circle">$100</div>
		</div>
		<cms:editable name='pricing_senior_plus' type='richtext'>
		<div class="bottom">
		  <p>Up to 2 hours</p>
		  <p>Two outfits</p>
		  <p>One location</p>
		</div>
		</cms:editable>
		<div class="sign">
		    <a href='#' class='button'><button type="submit" class="float-shadow" data-toggle="modal" data-target="#myModal">SCHEDULE</button></a>
		</div>
	    </li>
	    </div>
	    <div class='col-md-4'>
	    <li class='luxury'>
		<div class="top">
		  <h4>HIGH SCHOOL SENIOR</h4>
		  <div class="circle">$150</div>
		</div>
		<cms:editable name='pricing_senior_luxury' type='richtext'>
		<div class="bottom">
		  <p>Up to 4 hours</p>
		  <p>Unlimited outfits</p>
		  <p>Unlimited locations</p>
		</div>
		</cms:editable>
		<div class="sign">
		    <a href='#' class='button'><button type="submit" class="float-shadow" data-toggle="modal" data-target="#myModal">SCHEDULE</button></a>
		</div>
	    </li>
	    </div>
	</ul>	
    </section>
    
    <section class='container-fluid cyo'>
	<h2>CREATE YOUR OWN SESSION</h2>
	<cms:editable name='pricing_createYourOwn' type='richtext'>
	<ul class='cyosubheading'>
	    <li>
		<h3>Outdoors - $45</h3>
	    </li>
	    <li>
		<h3>Studio Setup on Location - $65</h3>
	    </li>
	</ul>
	<ul class='cyobody'>
	    <li>
		Session time (typically 1-2 hours for basic session and about 4 hours for newborn)
	    </li>
	    <li>
		Up to 5 people ($15 for each additional person)
	    </li>
	    <li>
		Pre-shoot consultation - In person or by phone
	    </li>
	    <li>
		Post-shoot processing and file preparation
	    </li>
	    <li>
		Private, password-protected online gallery for viewing your photographs
	    </li>
	    <li>
		Color correction and retouching on all pictures. Each photograph is a work of art
	    </li>
	    <li>
		In-Person Viewing and Ordering session
	    </li>
	    <li>
		Does not include prints
	    </li>
	</ul>
	</cms:editable>
	<!--
	<div class="cyoSchedule">
	    <a href='#' class='button'><button type="submit" class="" data-toggle="modal" data-target="#myModal">SCHEDULE</button></a>
	</div>-->
    </section>
    
    <ul id="collapse">
	<h2>PHOTO SESSION PRICING</h2>
	<li class='essential-collapse'>Essentials
	    <ul>
		<li><h4>WEDDING</h4>
		    <ul>
			<li>$997</li>
			<p>Up to 3 hours</p>
			<p>Over 100 high res images on DVD</p>
			<p>11x14 wall print</p>
			<p>Private online gallery</p>
		    </ul>
		</li>
		<li><h4>HIGH SCHOOL SENIOR</h4>
		    <ul>
			<li>$75</li>
			<p>Up to 1 hour</p>
			<p>One outfit</p>
			<p>One location</p> 
		    </ul>
		</li>
	    </ul>
	</li>
	<li class='plus-collapse'>Plus
	    <ul>
		<li><h4>WEDDING</h4>
		    <ul>
			<li>$1697</li>
			<p>Up to 6 hours</p>
			<p>200 to 300 high res images on DVD</p>
			<p>11x14 &amp; 8x10 Wall Prints</p>
			<p>Private online gallery</p>
		    </ul>
		</li>
		<li><h4>HIGH SCHOOL SENIOR</h4>
		    <ul>
			<li>$100</li>
			<p>Up to 2 hours</p>
			<p>Two outfits</p>
			<p>One location</p>
		    </ul>
		</li>
	    </ul>
	</li>
	<li class='luxury-collapse'>Luxury
	    <ul>
		<li><h4>WEDDING</h4>
		    <ul>
			<li>$1997</li>
			<p>Up to 8 hours</p>
			<p>300 to 400 high res images on DVD</p>
			<p>16x20 Wall Print</p>
			<p>Private online gallery</p>
		    </ul>
		</li>
		<li><h4>HIGH SCHOOL SENIOR</h4>
		    <ul>
			<li>$150</li>
			<p>Up to 4 hours</p>
			<p>Unlimited outfits</p>
			<p>Unlimited locations</p>
		    </ul>
		</li>
	    </ul>
	</li>
    </ul>
    
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
                          src="http://www.google.com/recaptcha/api/challenge?k=6Ld5kfoSAAAAAHTIPTb80gjKuixHFGULdkZYGyWl">
                        </script>
                        <noscript>
                           <iframe src="http://www.google.com/recaptcha/api/noscript?k=6Ld5kfoSAAAAAHTIPTb80gjKuixHFGULdkZYGyWl"
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