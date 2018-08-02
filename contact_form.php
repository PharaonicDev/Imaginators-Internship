   <div id="contact">
		<div class="footer">
			<div class="container">
				
		
				<div class="row">
					<div class="col-xs-12 col-md-4 col-sm-12 col-lg-4  touch-us">
						<div class=" data-contact">
						<h1>Get In Touch</h1>
				        <hr>
				<p class="title">Our team is pleased to get in touch with you for assistance. Feel free to ask for anything, at anytime. </p>

					<ul>
								<li>
									<img src="images/phone.png" class="img-responsive" alt="phone.png"><p> + 20 1282 999 395									
								
								</li>
								<li>
									<img src="images/distance.png" class="img-responsive" alt="phone.png"><p> Floor 3 Office #G336- Downtown Cairo ,Egypt</p> </li>
								<li>
									<img src="images/email.png" class="img-responsive" alt="phone.png"> <p>contact@imginators.com </p></li>
							</ul>
					</div></div>

				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
						<div class="col-xs-12 col-md-8 col-sm-12 col-lg-8  touch-us">
						<div class="box-1">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<input name="name" value="<?php echo $name; ?>" class="form-control" type="text" id="yourname" placeholder=" Name" required=""> </div>
								       <div class="error"><?php echo $name_error;?></div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input name="email" value="<?php $email;?> " type="email" class="form-control" id="youremail" placeholder=" Email" required=""> </div>
								       <div class="error"><?php echo $email_error;?></div>
								 </div>
							</div>
							<div class="form-group">
								<input name="subject" value="<?php $subject; ?>" type="text" class="form-control" id="yoursubject" placeholder=" Subject"  required=""> </div>
							     <div class="error"><?php echo $subject_error; ?></div>
							<div class="form-group">
								<textarea name="form_message" value="<?php $subject; ?>" class="form-control" placeholder="Enter Message" rows="3" aria-required="true"></textarea>
							   <div class="error"><?php echo $subject_error; ?></div>
							</div>
							<button type="submit" class="btn btn-default " data-loading-text="Please wait...">Send Message</button>
						</div>
					</div>

				</form>
					
				</div>
				<div class="row">
					
							
					
				</div>
			</div>
		</div>
	</div>