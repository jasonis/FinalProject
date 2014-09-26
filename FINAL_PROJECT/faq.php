<?php require_once( 'admin/cms.php' ); ?>

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

    	
    <section id='faq' class='container-fluid'>
		
	<ul id="collapse-faq">
	    <h2>FREQUENTLY ASKED QUESTIONS</h2>
	    <li class='odd-collapse'><span>What should I wear?</span>
		<ul>
		    <li>
			<p>This is completely dependent on who you are.
			I suggest you stick to clothes that make you feel
			comfortable and confident.  If you're not one to dress up,
			don't feel obligated to do so!  Just wear what you like.</p>
		    </li>		 
		</ul>
	    </li>
	    <li class='even-collapse'><span>What is an initial consultation?</span>
		<ul>
		    <li>
			<p>An initial consultation is for my new clients.
			    We will meet up and go over what I have to offer you.
			    It's sort of like an interview... where you interview me.
			    I can answer all your questions; go over prices and retainer
			    fees, etc.  It's just for you to get a taste of who I am and
			    what I do.  There is no obligation to hire me on that day.
			    For those that do commission me, we can go right into the pre-session
			    consultation, or schedule it for a later date - that's completely up to you!</p>
		    </li>		 
		</ul>
	    </li>
	    <li class='odd-collapse'><span>When do I pay for my pictures?</span>
		<ul>
		    <li>
			<p>Payments are required at your Viewing and Ordering Session.
			    I do offer payment plans for purchases over $300 that will extend
			    payments over 2-6 weeks.</p>
		    </li>		 
		</ul>
	    </li>
	    <li class='odd-collapse'><span>What is a proofing session and when do we do that?</span>
		<ul>
		    <li>
			<p>Your proofing session will take place about 1-2 weeks after your session.
			It's when you get to finally SEE all your pictures!  It's fun and exciting for
			you and for me!  I love to do in-person proofing sessions so I can share in your
			excitement while looking at your photographs.  I put a lot of work into each and
			every one of your portraits and it is so nice to see you enjoying  them.  :-)
			I will come to your house to do the session.  It's a place where you're comfortable
			and it gives me a chance to give you advice on print sizes and even where they will
			go!  Don't worry - I am not a pushy sales person!!!  Quite the contrary, I am just
			there to make sure you know all your options, give suggestions, and answer any questions
			you have.  I only want you to purchase things that mean something to you and that you will
			adore.  Ordering typically takes place at the proofing session, as well, so please make
			sure that all the "decision-makers" in the family are present.   There is no minimum
			purchase required.  If you need extra time to think about your order, that's fine!
			Please have orders placed within 48 hours of the proofing.</p>
		    </li>		 
		</ul>
	    </li>
	    <li class='odd-collapse'><span>I'm interested in a payment plan, how does it work?</span>
		<ul>
		    <li>
			<p>I try to make my services affordable for anyone - that's why I decided to offer
			payment plans.  It helps you get the products you want while being easier on your
			budget.  I would hate for someone to walk away wishing they could get more!  Payment
			plans range anywhere from 2-6 weeks.  They are available for any purchases over $300.
			Your total purchase will be divided into the number of weeks you desire.  You will
			receive your products after the balance is paid in full. </p>
		    </li>		 
		</ul>
	    </li>
	    <li class='odd-collapse'><span>When should I schedule my newborn session?</span>
		<ul>
		    <li>
			<p>To ensure a spot, you should contact me about two months before your little one is due.
			I will pencil in your due date as the session date and then change it accordingly.  It's
			very important that we do your baby's session while they are younger than 2 weeks old.
			The ideal time is 3-10 days old.  There is a very limited time frame to get all those super
			adorable curled, sleepy baby shots.  After 2 weeks, newborns tend to lose their natural curl
			and don't stay asleep as easily. </p>
		    </li>		 
		</ul>
	    </li>
	    <li class='odd-collapse'><span>When will you publish our private, online gallery?</span>
		<ul>
		    <li>
			<p>You will receive your online gallery link and password at your proofing session.
			It will be online for 7 days to allow time for family and friends to order.
			There is a $25 re-hosting fee to extend the gallery for an additional 7 days.</p>
		    </li>		 
		</ul>
	    </li>
	</ul>

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