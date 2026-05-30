<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="utf-8">
	<title>Digitechflux | Contact Us</title>

    <?php
	include 'header.php';
	?>

		<section class="page-title" style="background-image: url(images/contact_banner.jpg);">
			<div class="auto-container">
				<div class="title-outer">
					<h1 class="title">Contact Us</h1>
					<ul class="page-breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li>Contact</li>
					</ul>
				</div>
			</div>
		</section>


		<section class="contact-details">
			<div class="container ">
				<div class="row">
					<div class="col-xl-7 col-lg-6">
						<div class="sec-title">
							<span class="sub-title">Contact us</span>
							<h2>Fill Up The Form</h2>
						</div>

						<form id="contact_form" name="contact_form" class
						action="https://api.web3forms.com/submit" method="POST">
							<div class="row">
							<input type="hidden" name="access_key" value="3f0f0b69-ed2e-476f-86ae-e1192707eff2">
								<div class="col-sm-6">
									<div class="mb-3">
										<input name="name" class="form-control" type="text"
											placeholder="Enter Name" required>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="mb-3">
										<input name="email" class="form-control  email" type="email"
											placeholder="Enter Email" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="mb-3">
										<input name="subject" class="form-control " type="text"
											placeholder="Enter Subject" required>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="mb-3">
										<input name="phone" class="form-control" type="text"
											placeholder="Enter Phone" required>
									</div>
								</div>
							</div>
							<div class="mb-3">
								<textarea name="message" class="form-control " rows="7"
									placeholder="Enter Message" required></textarea>
							</div>
							<div class="mb-3">
								
								<button type="submit" class="theme-btn btn-style-one"
									data-loading-text="Please wait..."><span class="btn-title">Send
										message</span></button>
								
							</div>
						</form>

					</div>
					<div class="col-xl-5 col-lg-6">
						<div class="contact-details__right">
							<div class="sec-title">
								<span class="sub-title">Contact us today!</span>
								<h2>Get in touch </h2>
								<div class="text">Have any questions regarding our services? Get in touch with us by filling out this form and our team members are ready to solve any queries you have for your digital marketing needs. </div>
							</div>
							<ul class="list-unstyled contact-details__info">
								<li>
									<div class="icon">
										<span class="fa fa-phone-alt"></span>
									</div>
									<div class="text">
										<h6>Have any question?</h6>
										<a href="tel:9451118291"> +91 9451118291</a>
									</div>
								</li>
								<li>
									<div class="icon">
										<span class="fa fa-envelope"></span>
									</div>
									<div class="text">
										<h6>Write email</h6>
										<a
											href="mailto:shailendrasoni841@gmail.com"><span
												class="__cf_email__">
                                                shailendrasoni841@gmail.com</span></a>
									</div>
								</li>
								<li>
									<div class="icon">
										<span class="fa fa-map-marker"></span>
									</div>
									<div class="text">
										<h6>Location</h6>
										<span>B-101 Gokul vraj Jb nagar Kanti nagar Andheri East</span>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

    <?php
	include 'footer.php';
	?>