<div class="container page_container" id="contact" >

	<div class="page-header">
	  <h3 class="light">Contact Us</h3>
	</div>
	<div class="row" style="padding:20px;">
		<div class="col-sm-4" style="padding:20px;">
			<div class="text-" style="padding-bottom: 20px;">
				<h4><span class="light">24 X 7 Help</span></h4>
			</div>
			<div class="row">
				<p><span class="light glyphicon glyphicon-earphone"></span> +91-8107391324</p>
			</div>
			<div class="row">
				<p><span class="light glyphicon glyphicon-earphone"></span> +91-8107426181</p>
			</div>
			<div class="row">
				<p><span class="light glyphicon glyphicon-envelope"></span> support@thelefteye.in</p>
			</div>
			<div class="row">
				<p><span class="light glyphicon glyphicon-map-marker"></span> Jalori Gate - Jodhpur</p>
			</div>
		</div>
		<div class="col-sm-4" style="padding:20px;">
			<div class="footer-social-icons">
				<h4 class="_14"><span class="light">Follow us on</h4>
				<ul class="social-icons">
					<li><a href="https://www.facebook.com/thelefteye2017/" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
					<li><a href="https://twitter.com/thelefteye2017" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
					<li><a href="https://www.youtube.com/channel/UC8e49D6-yav3BaF0b2a17-g" class="social-icon"> <i class="fa fa-youtube"></i></a></li>
					<li><a href="http://linkedin.com/in/the-left-eye-8b155013a" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
					<li><a href="https://plus.google.com/115761206632051195113" class="social-icon"> <i class="fa fa-google-plus"></i></a></li>
				</ul>
			</div>
		</div>

		<div class="col-sm-4" style="padding:20px;">
			<div class="text-center text-capitalize">
				<h4><span class="light">Submit Query</span></h4>
			</div>
			<div class="form">
				<form action="<?php echo HTTP_BASE_URL; ?>contact_submit" method="post">
					<div class="form-group">
						<label for="name">Name:</label>
						<input type="text" class="form-control" name="name" id="name" placeholder="Name" maxlength="100" required>
					</div>
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="email" class="form-control" name="email" id="email" placeholder="Email Address" maxlength="200" required>
					</div>
					<div class="form-group">
						<label for="query">Query:</label>
						<textarea class="form-control" id="message_input" name="message" placeholder="Enter your message here..." required maxlength="2000"></textarea>
					</div>
					<br>
					<div class="form-group">
						<button type="submit" class="btn btn-default btn-block"><i class="fa fa-paper-plane"></i> Send Message</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
