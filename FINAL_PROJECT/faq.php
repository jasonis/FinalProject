<?php require_once( 'admin/cms.php' ); ?>
<cms:template title='blog' clonable='1'>
    <cms:editable name='blog_content' type='richtext' />

</cms:template>
<cms:if k_is_page >
<!DOCTYPE html>

<html lang='en'>
<head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FAQ || Teri Lynn Photography</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href='css/main.css' rel='stylesheet' type='text/css'>
        
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
        
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>

<body>
    <header class="navbar-inverse navbar-default navbar-fixed-top example" role="navigation">
        <div class="navbar-header">
	        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
		    <span class="sr-only">Toggle navigation</span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
	        </button>
	        <a href="#" class="navbar-brand scroll-top"></a>
        </div>
        <div class='container'>
        <h1>
            <a href='index.php'><img src='images/logo.jpg'  class='img-responsive' alt='text heading for Teri Lynn Photography'></a>
        </h1>
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
                <a href='contact.php' data-toggle="modal" data-target="#myModal">Contact</a>
            </li>
        </ul>
        </div>
    </header>
    
    <section id='faq' class='container-fluid'>
	<h2>
	    FREQUENTLY ASKED QUESTIONS
	</h2>
	<cms:show blog_content />
	
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

<cms:else />
<!DOCTYPE html>

<html lang='en'>
<head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FAQ || Teri Lynn Photography</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href='css/main.css' rel='stylesheet' type='text/css'>
        
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
        
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>

<body>
    <header class="navbar-inverse navbar-default navbar-fixed-top example" role="navigation">
        <div class="navbar-header">
	        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
		    <span class="sr-only">Toggle navigation</span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
	        </button>
	        <a href="#" class="navbar-brand scroll-top"></a>
        </div>
        <div class='container'>
        <h1>
            <a href='index.php'><img src='images/logo.jpg'  class='img-responsive' alt='text heading for Teri Lynn Photography'></a>
        </h1>
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
                <a href='contact.php' data-toggle="modal" data-target="#myModal">Contact</a>
            </li>
        </ul>
        </div>
    </header>
    
    <section id='faq' class='container-fluid'>
	<h2>
	    FREQUENTLY ASKED QUESTIONS
	</h2>
        <div>
            <ul>
                <li><span>What should I wear?</span>
                    <ul>
                        <li>This is completely dependent on who you are.
                        I suggest you stick to clothes that make you feel
                        comfortable and confident.  If you're not one to dress up,
                        don't feel obligated to do so!  Just wear what you like.</li>
                    </ul>
                </li>
            </ul>
            <ul>
                <li><span>What is an initial consultation?</span>
                    <ul>
                        <li>An initial consultation is for my new clients.
                        We will meet up and go over what I have to offer you.
                        It's sort of like an interview... where you interview me.
                        I can answer all your questions; go over prices and retainer
                        fees, etc.  It's just for you to get a taste of who I am and
                        what I do.  There is no obligation to hire me on that day.
                        For those that do commission me, we can go right into the pre-session
                        consultation, or schedule it for a later date - that's completely up to you!</li>
                    </ul>
                </li>
            </ul>
            <ul>
                <li><span>When do I pay for my pictures?</span>
                    <ul>
                        <li>Payments are required at your Viewing and Ordering Session.
                        I do offer payment plans for purchases over $300 that will extend
                        payments over 2-6 weeks.</li>
                    </ul>
                </li>
            </ul>
        </div>
	
	
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
</cms:if>
<?php COUCH::invoke(); ?>