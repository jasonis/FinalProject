<?php require_once( 'admin/cms.php' ); ?>
<!DOCTYPE html>

<html lang='en'>
<head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kind Words || Teri Lynn Photography</title>
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
    
    <section id='kindwords' class='container-fluid'>
	<h2>
	    KIND WORDS
	</h2>
	<div class='row'>
	    <div class='col-md-6'>
		<cms:editable name='kindWords_1' type='richtext'>
		<p>Amanda V.<br/>Teri did an excellent job on the pictures of my boys:) Taking pictures 
		of a 3 month old and a 2 year is such a challenge in itself, but she 
		made it easy! Teri was soo patient and took her time and allow us 
		time for breaks too! Her talent is amazing and I can't wait to have 
		more family pictures taken by her. </p>
		</cms:editable>
		<div hidden ><cms:editable name='kindWords_image1' type='image' /></div>
		<img src="<cms:show kindWords_image1 />" alt='girl smiling' class='img-responsive col-md-12'>
		<cms:editable name='kindWords_2' type='richtext'>
		<p>Katie H.<br/>Great!!!! Thank you sooooo much Teri!!!! I greatly appreciate it!!!!! 
		The pictures are beautiful...thank you! You captured their true 
		personalities! My dad already looked at them and he said that they 
		are his fav pics ever:-) Once again thank you so much!</p>
		</cms:editable>
		<div hidden ><cms:editable name='kindWords_image2' type='image' /></div>
		<img src='<cms:show kindWords_image2 />' alt='two girls laughing' class='img-responsive col-md-12'>
	    </div>
	    <div class='col-md-6'>
		<cms:editable name='kindWords_3' type='richtext'>
		<p>Becky M.<br/>Oh my Teri! Those are so wonderful. Thank you for sharing your 
		talent with us. I can't wait to see the others. A million thank yous! </p>
		</cms:editable>
		<div hidden ><cms:editable name='kindWords_image3' type='image' /></div>
		<img src='<cms:show kindWords_image3 />' alt='two girls laughing' class='img-responsive col-md-12'>
		<cms:editable name='kindWords_4' type='richtext'>
		<p>Natasha L.<br/>...these pictures capture the fun. I love that! ! I think you could have 
		been there 3 hours and not gotten the perfect posed picture--my 
		kids aren't robots and have minds of their own (especially Ana!). 
		Instead, you got us how we are goofy and enjoying life. Thank you!</p>
		</cms:editable>
		<div hidden ><cms:editable name='kindWords_image4' type='image' /></div>
		<img src='<cms:show kindWords_image4 />' alt='two girls laughing' class='img-responsive col-md-12'>
	    </div>
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
                <a href='3' data-toggle="modal" data-target="#myModal">Contact</a>
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