<?php



// Fetch contact meta info into an associative array
$contactInfo = [];
$result = $conn->query("SELECT meta_field, meta_value FROM contacts");

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $contactInfo[$row['meta_field']] = $row['meta_value'];
    }
}
?>

<header class="header">
		<!-- Topbar -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-5 col-12"
						style="white-space: nowrap; display: flex; flex-direction: row; justify-content: space-between; align-items: center;">

						<!-- Contact Links -->
						<ul class="top-link" style="list-style: none; padding: 0; margin: 0;">
							<li style="display: inline; margin-right: 10px; "><a style="font-size: 10px;"
									href="#">Home</a></li>
							<li style="display: inline; margin-right: 10px;"><a style="font-size: 10px;"
									href="Agric/">QRL Farms</a></li>
							<li style="display: inline; margin-right: 10px;"><a style="font-size: 10px;"
									href="Media/">Podcast</a></li>
									<li style="display: inline; margin-right: 10px;"><a style="font-size: 10px;"
									href="blog.php">Blog</a></li>
						</ul>
						<!-- End Contact Links -->

						<!-- Top Contact -->
						<ul class="top-contact" style="list-style: none; padding: 0; margin: 0;">
							<li style="display: inline;">
								<i class="fa fa-envelope"></i>
								<a href="mailto:<?= htmlspecialchars($contactInfo['email'] ?? '') ?>
" style="font-size: 10px;"><?= htmlspecialchars($contactInfo['email'] ?? '') ?>
</a>
							</li>
						</ul>
						<!-- End Top Contact -->

					</div>
				</div>
			</div>
			<!-- End Topbar -->
			<hr>

			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-12">
								<!-- Logo -->
								<div class="logo">
									<a href="index.php"><img src="Layer_x0020_1-2.png" alt="QR Limited Logo"
											style="width: 170px; height: auto;"></a>
								</div>
								<!-- End Logo -->
								<!-- Mobile Nav -->
								<div class="mobile-nav"></div>
								<!-- End Mobile Nav -->
							</div>
							<div class="col-lg-7 col-md-9 col-12" style="float: right;">
								<!-- Main Menu -->
								<div class="main-menu">
									<nav class="navigation">
										<ul class="nav menu">
											<li class="active">
												<a href="index.php">Home</a>

											</li>
                                            <li><a href="Agric/">QRL Farms</a></li>
                                            <li><a href="Media/">Podcast</a></li>
											<!-- <li>
												<a href="#">Sectors <i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
												
												</ul>
											</li> -->

											<li class="">
												<a href="blog.php">Blog</a>

											</li>
										</ul>
									</nav>
								</div>
								<!-- End Main Menu -->
							</div>
							<div class="col-lg-2 col-12">
								<!-- Book Appointment Button -->
								<div class="get-quote">
									<!-- Add this to your HTML body -->
									<div id="contactModal" class="modal">
										<div class="modal-content">
											<span class="close" onclick="closeModal()">&times;</span>
											<h2>Contact QRLimited</h2>
											<form class="contact-form">
												<div class="form-group">
													<input type="text" name="name" placeholder="Your Name" required>
												</div>
												<div class="form-group">
													<input type="email" name="email" placeholder="Email Address"
														required>
												</div>
												<div class="form-group">
													<input type="tel" name="phone" placeholder="Phone Number">
												</div>
												<div class="form-group">
													<select name="subject" required>
														<option value="">Select Inquiry Type</option>
														<option>Agriculture Partnership</option>
														<option>Media Collaboration</option>
														<option>Product Inquiry</option>
														<option>General Question</option>
													</select>
												</div>
												<div class="form-group">
													<textarea placeholder="Your Message" rows="5" required></textarea>
												</div>
												<button type="submit" class="btn">Send Message</button>
											</form>
										</div>
									</div>

									<!-- Add this CSS -->
									<style>
										.modal {
											display: none;
											position: fixed;
											z-index: 1000;
											left: 0;
											top: 0;
											width: 100%;
											height: 100%;
											overflow: auto;
											background-color: rgba(0, 0, 0, 0.8);
										}

										.modal-content {
											background-color: #fff;
											margin: 5% auto;
											padding: 30px;
											border-radius: 8px;
											width: 90%;
											max-width: 600px;
											position: relative;
											animation: modalOpen 0.3s;
										}

										@keyframes modalOpen {
											from {
												transform: scale(0.8);
												opacity: 0
											}

											to {
												transform: scale(1);
												opacity: 1
											}
										}

										.close {
											position: absolute;
											right: 25px;
											top: 15px;
											color: #aaa;
											font-size: 28px;
											font-weight: bold;
											cursor: pointer;
										}

										.close:hover {
											color: #1A76D1;
										}

										.contact-form .form-group {
											margin-bottom: 20px;
										}

										.contact-form input,
										.contact-form select,
										.contact-form textarea {
											width: 100%;
											padding: 12px;
											border: 1px solid #ddd;
											border-radius: 4px;
											font-size: 16px;
										}

										.contact-form textarea {
											resize: vertical;
										}

										@media (max-width: 768px) {
											.modal-content {
												margin: 10% auto;
												padding: 20px;
											}
										}
									</style>

									<!-- Add this JavaScript -->
									<script>
										function openModal() {
											document.getElementById('contactModal').style.display = 'flex';
										}

										function closeModal() {
											document.getElementById('contactModal').style.display = 'none';
										}

										// Close modal when clicking outside
										window.onclick = function (event) {
											const modal = document.getElementById('contactModal');
											if (event.target == modal) {
												closeModal();
											}
										}
									</script>

									<!-- Update your existing Contact Us button -->
									<a href="#" class="btn" onclick="openModal()">Contact Us</a>
								</div>
								<!-- End Book Appointment Button -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Header Inner -->
	</header>

<style>
	.single-slider {
    transition: transform 0.3s ease;
}

.single-slider:hover {
    transform: scale(1.01);
}

.hero-slider {
    overflow: hidden;
    border-radius: 10px;
}
</style>