<section class="main-section" id="service"><!--main-section-start-->
	<div class="container">
    	<h2>Apply For WorldLotteryUSA Grand Prize Lottery Draw</h2>
    	<h6>Submit Your Email And Stand A Chance Of Being Selected To Win Grand Prize Of $1,000,000!!</h6>
        @if(Session::has("apply-raffle-status") && Session::get("apply-raffle-status") == "success") 
		<div id="l-success" class="alert alert-success">
          Application successful! Make sure you check your email frequently, if you are among the lucky 50 to be selected, you will receive an email from us. Good luck!<br>
          <span><strong>NOTE: For Outlook, Hotmail and Live email users if you don't receive our email please check your Spam folder</strong><span>
        </div>
        <script>
        	document.getElementById("l-success").scrollIntoView();
        </script>
		@endif 
		
		<div class="jumbotron text-white" style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(img/efp.png); background-size:cover;">
         <h3 class="display-3 text-white">Hello, Europe</h3>
         <p class="lead text-center">Bringing WorldLotteryUSA To Europe! </p>
         <hr class="my-4">
         <p>WorldLotteryUSA is now available in over 20 countries in Europe and we are constantly working to make more European countries eligible to apply!</p><br>
         <p class="lead">
           <a class="btn btn-primary btn-lg" href="http://www.worldlotteryusa.com" target="_blank" role="button">Learn more</a>
         </p>
        </div><br>
        	<center>
        	  <img id="l-image" class="img img-responsive" src="img/loading-2.gif" alt="Shuffling.."><br>
        	  <span id="l-text"><strong>Rolling the ballot..</strong></span>
            </center>
        	    <form method="post" action="{{url('apply-raffle')}}" id="lform">   
        	         {{ csrf_field() }}
                       <input type="hidden" name="grepo" value="{{$grepo}}">
                       <h4>Enter your lucky numbers!<span style="color:red;">*</span></h4>
                       <div class="row">
                       	<div class="col-xs-2 col-sm-2 col-md-2">
                	         <input type="text" class="form-control" name="num-1" required>
                           </div>
                           <div class="col-xs-2 col-sm-2 col-md-2">
                	         <input type="text" class="form-control" name="num-2" required>
                           </div>
                           <div class="col-xs-2 col-sm-2 col-md-2">
                	         <input type="text" class="form-control" name="num-3" required>
                           </div>
                           <div class="col-xs-2 col-sm-2 col-md-2">
                	         <input type="text" class="form-control" name="num-4" required>
                           </div>
                           <div class=" col-xs-2 col-sm-2 col-md-2">
                	         <input type="text" class="form-control" name="num-5" required>
                           </div>
                        </div><br>
                	   <h4>Enter your email address <span style="color:red;">*</span></h4>
                	   <input type="text" class="form-control" name="email" required>   
                	<em style="color: red;"><strong>Note:</strong> Clicking Submit below will link your email to your number and add your number to our ballot system for <strong>random selection</strong>. If the system selects your number, you will get a congratulatory message from us via email with instructions on how to apply for your lottery. Rest assured we do not store or sell your email address!</em>
                    <br><br>
                    <em style="color: red;"><strong>WARNING: WorldLotteryUSA Lottery Draws are not applicable to persons under the age of 18.</strong> </em>
                    <br><br>
                    <center><button id="lsubmit" class="btn btn-success btn-lg">Submit</button></center>
                </form>
            
        
        </div>
</section><!--main-section-end-->