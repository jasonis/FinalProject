<?php require_once( 'admin/cms.php' ); ?>
<!DOCTYPE html>

<html lang='en'>
<head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta id='viewport' name='viewport' content='width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0' />
    <title>Portfolio || Teri Lynn Photography</title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">   
    <link rel='stylesheet' type='text/css' href='includes/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css' />
    <link href='css/main.css' rel='stylesheet' type='text/css'>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/classie.js"></script>
    
    
    
    <script type='text/javascript' src='includes/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.js'></script>
    <script src="js/bootstrap.min.js"></script>

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
    
    <div id='portfolio' class='gallery'>
	<div class='sorting'>
	    <div class='sorting-buttons'>
		<h2>
		    PORTFOLIO
		</h2>
		<ul>
		    <li>
			<a href='#' class='button sortLink selected' data-keyword='all'><button type="submit">ALL</button></a>
		    </li>
		    <li>
			<a href='#' class='button sortLink' data-keyword='families'><button type="submit">FAMILIES</button></a>
		    </li>
		    <li>
			<a href='#' class='button sortLink' data-keyword='engagement'><button type="submit">ENGAGEMENT</button></a>
		    </li>
		    <li>
			<a href='#' class='button sortLink' data-keyword='newborn'><button type="submit">NEWBORN</button></a>
		    </li>
		    <li>
			<a href='#' class='button sortLink' data-keyword='seniors'><button type="submit">H.S.SENIORS</button></a>
		    </li>
		    <li>
			<a href='#' class='button sortLink' data-keyword='children'><button type="submit">CHILDREN</button></a>
		    </li>
		</ul>
		<div class='clear_both'></div>
	    </div><!-- end .sorting-buttons -->
	</div>
		
	<div class='photos'>
	    <div class='thumbnail_container'>
		<div hidden >
		    <cms:editable name='portfolio_image1' type='image' label='wedding' />
		    <cms:editable name='portfolio_image2' type='image' label='children' />
		    <cms:editable name='portfolio_image3' type='image' label='seniors' />
		    <cms:editable name='portfolio_image4' type='image' label='seniors' />
		    <cms:editable name='portfolio_image5' type='image' label='seniors' />
		    <cms:editable name='portfolio_image6' type='image' label='seniors' />
		    <cms:editable name='portfolio_image7' type='image' label='children' />
		    <cms:editable name='portfolio_image8' type='image' label='families' />
		    <cms:editable name='portfolio_image9' type='image' label='children' />
		    <cms:editable name='portfolio_image10' type='image' label='families' />
		    <cms:editable name='portfolio_image11' type='image' label='seniors' />
		    <cms:editable name='portfolio_image12' type='image' label='newborn' />
		    <cms:editable name='portfolio_image13' type='image' label='wedding' />
		    <cms:editable name='portfolio_image14' type='image' label='children' />
		    <cms:editable name='portfolio_image15' type='image' label='seniors' />
		    <cms:editable name='portfolio_image16' type='image' label='wedding' />
		</div>
		<a class='thumbnail' title='This is a caption for a childs photo'href='images/port1.jpg' data-keywords='wedding'><img class='img-responsive' src='<cms:show portfolio_image1 />'/></a>					
		<a class='thumbnail' title='This is a caption for a childs photo'href='images/port2.jpg' data-keywords='children families'><img class='img-responsive' src='<cms:show portfolio_image2 />'/></a>					
		<a class="thumbnail" title="This is a caption for a senior photo." href='images/port3.jpg' data-keywords="seniors"><img class='img-responsive' src='<cms:show portfolio_image3 />'/></a>
		<a class="thumbnail" title="This is a caption for a senior photo." href='images/port4.jpg' data-keywords="seniors"><img class='img-responsive' src='<cms:show portfolio_image4 />'/></a>
		<a class="thumbnail" title="This is a caption for a senior photo" href='images/port5.jpg' data-keywords="seniors"><img class='img-responsive' src='<cms:show portfolio_image5 />'/></a>
		<a class="thumbnail" title="This is a caption for a senior photo" href='images/port6.jpg' data-keywords="seniors"><img class='img-responsive' src='<cms:show portfolio_image6 />'/></a>
		<a class="thumbnail" title="This is a caption for a childs photo" href='images/port7.jpg' data-keywords="children families"><img class='img-responsive' src='<cms:show portfolio_image7 />'/></a>
		<a class="thumbnail" title="This is a caption for a family photo" href='images/port8.jpg' data-keywords="families"><img class='img-responsive' src='<cms:show portfolio_image8 />'/></a>
		<a class="thumbnail" title="This is a caption for a childs photo" href='images/port9.jpg' data-keywords="children families"><img class='img-responsive' src='<cms:show portfolio_image9 />'/></a>
		<a class="thumbnail" title="This is a caption for a family photo" href='images/port10.jpg' data-keywords="families"><img class='img-responsive' src='<cms:show portfolio_image10 />'/></a>
		<a class="thumbnail" title="This is a caption for a senior photo" href='images/port11.jpg' data-keywords="seniors"><img class='img-responsive' src='<cms:show portfolio_image11 />'/></a>
		<a class="thumbnail" title="This is a caption for a newborn photo" href='images/port12.jpg' data-keywords="newborn families"><img class='img-responsive' src='<cms:show portfolio_image12 />'/></a>
		<a class="thumbnail" title="This is a caption for a wedding photo" href='images/port13.jpg' data-keywords="wedding engagement"><img class='img-responsive' src='<cms:show portfolio_image13 />'/></a>
		<a class="thumbnail" title="This is a caption for a childs photo" href='images/port14.jpg' data-keywords="children families"><img class='img-responsive' src='<cms:show portfolio_image14 />'/></a>
		<a class="thumbnail" title="This is a caption for a senior photo" href='images/port15.jpg' data-keywords="seniors"><img class='img-responsive' src='<cms:show portfolio_image15 />'/></a>
		<a class="thumbnail" title="This is a caption for a wedding photo" href='images/port16.jpg' data-keywords="wedding engagement"><img class='img-responsive' src='<cms:show portfolio_image16 />'/></a> 
	    </div>
		
	</div>
    </div>

    
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

<!-- Include all compiled plugins (below), or include individual files as needed -->

    <script type="text/javascript" src="js/bootstrapValidator.min.js"></script>
    <script type='text/javascript' src='js/main.js'></script>
</body>
</html>
<?php COUCH::invoke(); ?>