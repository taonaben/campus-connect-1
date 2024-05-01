<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta content="width=device-width, initial-scale=1.0" name="viewport" />

		<title>Campus-Connect</title>

		<!-- <link
			href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
			rel="stylesheet"
		/> -->

		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap"
			rel="stylesheet"
		/>

		<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />

		<link href="assets/css/style.css" rel="stylesheet" />

		<script defer src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script defer src="assets/js/main.js"></script>
	</head>

	<body class="bg-success">
		<div class="invisible-items">
			<div id="preloader"></div>

			<div id="mobile-nav">
				<button id="close-nav" class="btn">
					<i class="bi bi-x fs-1 m-2"></i>
				</button>
				<a href="./index.html">Home</a>
				<a href="./accomodation.html" class="text-decoration-underline"
					>Browse Accomodation</a
				>
				<a href="./about.html">About</a>
				<a href="./contact.html">Get In Touch</a>
			</div>

			<a href="#" class="back-to-top d-flex align-items-center justify-content-center"
				><i class="bi bi-arrow-up-short"></i
			></a>
		</div>

		<header class="sticky-top d-flex text-white bg-success">
			<div class="container">
				<div class="p-3 d-flex justify-content-between align-items-center">
					<a href="./index.html" id="logo" class="text-inherit mt-2">
						<h4 class="">
							<i class="bi bi-house-door-fill"></i>
							<span>C</span>ampus<span>-C</span>onnect
						</h4>
					</a>

					<button
						id="open-nav"
						type="button"
						class="d-lg-none btn btn-light rounded-circle shadow"
					>
						<i class="bi bi-list fs-5"></i>
					</button>
					<nav class="d-none d-lg-flex align-items-center">
						<a href="./index.html">Home</a>
						<a href="./accomodation.html" class="active">Accomodation</a>
						<a href="./about.html">About</a>
						
                        <a href="./signin.html">SignIn</a>
                        <a href="./profile.html" class="cart"><i class="bi bi-person-circle"></i></a>
					</nav>
				</div>
			</div>
		</header>

		<main id="view-slides" class="container py-4 pb-5 px-2">
			<div class="c-rounded-2 p-4 pb-5 p-lg-5 bg-white">
				<div class="mb-5">
					<a href="./accomodation.html" class="btn btn-sm px-3 btn-success rounded-pill">
						<i class="bi bi-arrow-left me-2"></i> Go Back
					</a>
				</div>

				<div class="row">
					<div class="col-lg">
						<div class="position-relative">
							<div class="slide">
								<div class="image-number">1 / 6</div>
								<img
									src="./assets/img/boarding-houses/cold1.jpg"
									style="width: 100%"
								/>
							</div>

							<div class="slide">
								<div class="image-number">2 / 6</div>
								<img
									src="./assets/img/boarding-houses/cold2.jpg"
									style="width: 100%"
								/>
							</div>

							<div class="slide">
								<div class="image-number">3 / 6</div>
								<img
									src="./assets/img/boarding-houses/cold3.jpg"
									style="width: 100%"
								/>
							</div>

							<div class="slide">
								<div class="image-number">4 / 6</div>
								<img
									src="./assets/img/boarding-houses/cold4.jpg"
									style="width: 100%"
								/>
							</div>

							<div class="slide">
								<div class="image-number">5 / 6</div>
								<img
									src="./assets/img/boarding-houses/cold5.jpg"
									style="width: 100%"
								/>
							</div>

							<div class="slide">
								<div class="image-number">6 / 6</div>
								<img
									src="./assets/img/boarding-houses/cold6.jpg"
									style="width: 100%"
								/>
							</div>

							<a
								class="btn btn-dark c-rounded-1 position-absolute top-50 start-0"
								onclick="plusSlides(-1)"
								>&#10094;</a
							>
							<a
								class="btn btn-dark c-rounded-1 position-absolute top-50 end-0"
								onclick="plusSlides(1)"
								>&#10095;</a
							>
						</div>

						<div class="d-flex overflowx-scroll">
							<div class="pe-1 py-1">
								<img
									class="slide-preview"
									src="./assets/img/boarding-houses/cold1.jpg"
									onclick="currentSlide(1)"
								/>
							</div>
							<div class="pe-1 py-1">
								<img
									class="slide-preview"
									src="./assets/img/boarding-houses/cold2.jpg"
									onclick="currentSlide(2)"
								/>
							</div>
							<div class="pe-1 py-1">
								<img
									class="slide-preview"
									src="./assets/img/boarding-houses/cold3.jpg"
									onclick="currentSlide(3)"
								/>
							</div>
							<div class="pe-1 py-1">
								<img
									class="slide-preview"
									src="./assets/img/boarding-houses/cold4.jpg"
									onclick="currentSlide(4)"
								/>
							</div>
							<div class="pe-1 py-1">
								<img
									class="slide-preview"
									src="./assets/img/boarding-houses/cold5.jpg"
									onclick="currentSlide(5)"
								/>
							</div>
							<div class="pe-1 py-1">
								<img
									class="slide-preview"
									src="./assets/img/boarding-houses/cold6.jpg"
									onclick="currentSlide(6)"
								/>
							</div>
						</div>
					</div>

					<div class="col-lg">
						<div class="mt-4 mt-lg-0">
							<div class="d-flex align-items-start justify-content-between mb-4">
								<div>
									<div class="mb-3">
										<i class="bi bi-geo-alt"></i>ColdStream (Railway Street)
									</div>
									<div class="mb-3"><i class="bi bi-geo"></i> 2km to CUT</div>
								</div>

								<div>
									<div class="mb-3"><i class="bi bi-person"></i> TZ</div>
									<div class="">
										<i class="bi bi-currency-dollar"></i> 90/month
									</div>
								</div>
							</div>

							<div
								class="d-flex small justify-content-center align-items-center mb-3 bg-light border p-2 c-rounded-1"
							>
								<div class="me-3 text-center">Rating</div>
								<div class="text-warning">
									<i class="bi bi-star-fill me-1"></i>
									<i class="bi bi-star-fill me-1"></i>
									<i class="bi bi-star-fill me-1"></i>
									<i class="bi bi-star-fill me-1"></i>
									<i class="bi bi-star"></i>
									
								</div>
							</div>

							<div class="p-3 border bg-light c-rounded-1">
								Ladies 2 sharing rooms. Wifi, Solar, Borehole &#9989
								<br /><br />
								<div class="mb-2">
									<i class="bi bi-telephone-fill me-2"></i> +263771234567
								</div>
								<div><i class="bi bi-whatsapp me-2"></i> +263770987645 <br /></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>

		<footer class="p-4 bg-success text-center text-white">
			<small>&copy;All Rights Reserved. Group 9</small>
		</footer>

		<script>
			var slideIndex = 1;
			showSlides(slideIndex);

			// Next/previous controls
			function plusSlides(n) {
				showSlides((slideIndex += n));
			}

			// Thumbnail image controls
			function currentSlide(n) {
				showSlides((slideIndex = n));
			}

			function showSlides(n) {
				var i;
				var slides = document.getElementsByClassName("slide");
				var slidePreviews = document.getElementsByClassName("slide-preview");
				if (n > slides.length) {
					slideIndex = 1;
				}
				if (n < 1) {
					slideIndex = slides.length;
				}
				for (i = 0; i < slides.length; i++) {
					slides[i].style.display = "none";
				}
				for (i = 0; i < slidePreviews.length; i++) {
					slidePreviews[i].className = slidePreviews[i].className.replace(" active", "");
				}
				slides[slideIndex - 1].style.display = "block";
				slidePreviews[slideIndex - 1].className += " active";
			}
		</script>
	</body>
</html>
