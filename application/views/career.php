<div class="container page_container">
	<div class="page-header">
		<h1 class="light">Career</h1>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<img src="<?php echo HTTP_IMAGES_PATH; ?>career.jpg" height="" width="100%" />
		</div>
		
		<div class="col-sm-6">
			<br>
			<blockquote>
				No matter where you are in your career, chances are you're in need of a little motivation to get to the next step—to go for the job you'll actually love waking up for, to ask for that promotion, or to just push through a rough day.
				<footer>
					<cite>
						The Team
					</cite>
				</footer>
			</blockquote>
		</div>
		
	</div>
	<hr>
	<br>
	<div class="page-header text-center">
	  <h3 class="light">Application Form</h3>
	</div>
</div>

<div class="container">
	<div class="row">		
		<div class="col-sm-6 col-sm-offset-3">
			<div class="text-info pull-right">All fields are required</div>
			<div class="clearfix"></div>
			<form class="form-horizontal" action="<?php echo HTTP_BASE_URL ?>career_submit" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label class="control-label col-sm-2" for="Name">Name:</label>
					<div class="col-sm-10">
						<input type="text" name="name" class="form-control" id="Name" placeholder="Name">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="email">Email:</label>
					<div class="col-sm-10">
						<input type="email" name="email" class="form-control" id="email" placeholder="Email Address">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="for">Position:</label>
					<div class="col-sm-10">
						<select id="for" name="position[]" class="form-control" multiple="multiple" required>
							<option value="programming">Programming</option>
							<option value="Designer">Designer</option>
							<option value="3DmodelAnimator">3D Model Animator</option>
							<option value="WebDeveloper">Web Developer</option>
							<option value="ModelArtist">Model Artist</option>
							<option value="other">Any Other field</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Phone:</label>
					<div class="col-sm-10">          
						<input type="text" nmae="contact" class="form-control" id="Pno" placeholder="Contact Number">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Address:</label>
					<div class="col-sm-10">
						<textarea type="text" name="address" class="form-control" id="Address" rows="5" placeholder="Current Address" required maxlength="300"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Resume:</label>
					<div class="col-sm-10">          
						<input type="file" name="resume" id="Resume" accept=".doc,.docx,.pdf" required>
						<div class="text-info">Only .doc, .docx and .pdf files are allowed. Max file size: 2MB</div>
					</div>
				</div>
				
				<div class="form-group">        
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-default"><i class="fa fa-check"></i> Apply</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>