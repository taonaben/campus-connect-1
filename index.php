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

	<body>
		<div class="invisible-items">
			<div id="preloader"></div>

			<div id="mobile-nav">
				<button id="close-nav" class="btn">
					<i class="bi bi-x fs-1 m-2"></i>
				</button>
				<a href="./index.html" class="text-decoration-underline">Home</a>
				<a href="./accomodation.html">Browse Accomodation</a>
				<a href="./about.html">About</a>
				<a href="./contact.html">Get In Touch</a>
				<a href="./signin.html">SignIn</a>
			</div>

			<a href="#" class="back-to-top d-flex align-items-center justify-content-center"
				><i class="bi bi-arrow-up-short"></i
			></a>
		</div>

		<!--START OF HEADER -->

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
						<a href="./index.html" class="active">Home</a>
						<a href="./accomodation.html">Accomodation</a>
						<a href="./about.html">About</a>
						<a href="./signin.html">SignIn</a>
						<a href="./profile.html" class="cart"><i class="bi bi-person-circle"></i></a>
					</nav>
				</div>
			</div>
		</header>
		<!--END OF HEADER -->

<!--START OF HERO SECTION -->
		<main class="position-relative">
			<div id="desktop-hero" class="d-none d-lg-block bg-success py-5">
				<div class="row justify-content-center py-5 align-items-center">
					<div class="col-auto me-5">
						<div class="text-center text-white">
							<h1 class="opener mb-5">Looking for Off-Campus accommodation?</h1>
							<p class="mx-auto lead" style="max-width: 30rem">
								We got you! Browse and filter
								<span class="text-warning fw-bolder">50+</span> Boarding houses and
								apartments available exclusively to students in Chinhoyi😇
							</p>
							<div class="text-center">
								<a
									href="./accomodation.html"
									class="btn btn-outline-light btn-lg rounded-pill mt-3 border-2"
								>
									Browse Accomodation<i class="bi bi-arrow-right ms-2"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="col-4" style="max-width: 450px !important">
						<div
							id="generalCarousel1"
							class="carousel slide general-carousel"
							data-bs-ride="carousel"
						>
							<div class="d-flex align-items-center">
								<div class="pe-2">
									<button
										class="btn btn-outline-light rounded-circle border-2"
										type="button"
										data-bs-target="#generalCarousel1"
										data-bs-slide="prev"
									>
										<i class="bi bi-chevron-left"></i>
									</button>
								</div>

								<!--START OF COLDSTREAM HOUSE -->
								<div class="carousel-inner" role="listbox">
									<div class="carousel-item p-1 active">
										<div class="border bg-light" style="border-radius: 20px">
											<div class="d-flex">
												<div class="w-50">
													<img
														src="./assets/img/boarding-houses/bh4.jpg"
														class="h-100 w-100 border-end border-1 border-white"
														style="
															object-fit: cover;
															border-radius: 20px 0 0 0;
														"
													/>
												</div>

												<div class="w-50 d-flex flex-wrap h-100">
													<div class="col-6 p-0">
														<img
															src="./assets/img/boarding-houses/bh9.jpg"
															class="h-100 w-100 border-end border-bottom border-1 border-white"
															style="object-fit: cover"
														/>
													</div>
													<div class="col-6 p-0">
														<img
															src="./assets/img/boarding-houses/bh6.jpg"
															class="h-100 w-100 border-bottom border-1 border-white"
															style="
																object-fit: cover;
																border-radius: 0 20px 0 0;
															"
														/>
													</div>
													<div class="col-6 p-0">
														<img
															src="./assets/img/boarding-houses/bh7.jpg"
															class="h-100 w-100 border-end border-1 border-white"
															style="object-fit: cover"
														/>
													</div>
													<div class="col-6 p-0">
														<img
															src="./assets/img/boarding-houses/bh10.jpg"
															class="h-100 w-100"
															style="object-fit: cover"
														/>
													</div>
												</div>
											</div>

											<div
												class="p-3 d-flex align-items-start justify-content-between"
											>
												<div>
													<div class="mb-3">
														<i class="bi bi-geo-alt"></i> Mzari
													</div>
													<div class="mb-3">
														<i class="bi bi-geo"></i> 5km to CUT
													</div>
													<div class="">
														<i class="bi bi-currency-dollar"></i>
														120/month
													</div>
												</div>

												<div>
													<a
														href="./view.html"
														class="btn btn-success btn-sm rounded-pill"
														>View</a
													>
												</div>
											</div>
										</div>
									</div>

									<!--END OF COLDSTREAM HOUSE -->


									<!--START OF MZARI HOUSE -->

									<div class="carousel-item p-1">
										<div class="border bg-light" style="border-radius: 20px">
											<div class="d-flex">
												<div class="w-50">
													<img
														src="./assets/img/boarding-houses/kt1.jpg"
														class="h-100 w-100 border-end border-1 border-white"
														style="
															object-fit: cover;
															border-radius: 20px 0 0 0;
														"
													/>
												</div>

												<div class="w-50 d-flex flex-wrap h-100">
													<div class="col-6 p-0">
														<img
															src="./assets/img/boarding-houses/kt2.jpg"
															class="h-100 w-100 border-end border-bottom border-1 border-white"
															style="object-fit: cover"
														/>
													</div>
													<div class="col-6 p-0">
														<img
															src="./assets/img/boarding-houses/kt3.jpg"
															class="h-100 w-100 border-bottom border-1 border-white"
															style="
																object-fit: cover;
																border-radius: 0 20px 0 0;
															"
														/>
													</div>
													<div class="col-6 p-0">
														<img
															src="./assets/img/boarding-houses/kt4.jpg"
															class="h-100 w-100 border-end border-1 border-white"
															style="object-fit: cover"
														/>
													</div>
													<div class="col-6 p-0">
														<img
															src="./assets/img/boarding-houses/kt5.jpg"
															class="h-100 w-100"
															style="object-fit: cover"
														/>
													</div>
												</div>
											</div>

											<div
												class="p-3 d-flex align-items-start justify-content-between"
											>
												<div>
													<div class="mb-3">
														<i class="bi bi-geo-alt"></i> Katanda
													</div>
													<div class="mb-3">
														<i class="bi bi-geo"></i> 4km to CUT
													</div>
													<div class="">
														<i class="bi bi-currency-dollar"></i>
														75/month
													</div>
												</div>

												<div>
													<a
														href="./view3.html"
														class="btn btn-success btn-sm rounded-pill"
														>View</a
													>
												</div>
											</div>
										</div>
									</div>

									<!--END OF MZARI HOUSE -->


									<!--START OF RAILWAY STREET HOUSE -->
									<div class="carousel-item p-1">
										<div class="border bg-light" style="border-radius: 20px">
											<div class="d-flex">
												<div class="w-50">
													<img
														src="./assets/img/boarding-houses/cold1.jpg"
														class="h-100 w-100 border-end border-1 border-white"
														style="
															object-fit: cover;
															border-radius: 20px 0 0 0;
														"
													/>
												</div>

												<div class="w-50 d-flex flex-wrap h-100">
													<div class="col-6 p-0">
														<img
															src="./assets/img/boarding-houses/cold2.jpg"
															class="h-100 w-100 border-end border-bottom border-1 border-white"
															style="object-fit: cover"
														/>
													</div>
													<div class="col-6 p-0">
														<img
															src="./assets/img/boarding-houses/cold3.jpg"
															class="h-100 w-100 border-bottom border-1 border-white"
															style="
																object-fit: cover;
																border-radius: 0 20px 0 0;
															"
														/>
													</div>
													<div class="col-6 p-0">
														<img
															src="./assets/img/boarding-houses/cold4.jpg"
															class="h-100 w-100 border-end border-1 border-white"
															style="object-fit: cover"
														/>
													</div>
													<div class="col-6 p-0">
														<img
															src="./assets/img/boarding-houses/cold5.jpg"
															class="h-100 w-100"
															style="object-fit: cover"
														/>
													</div>
												</div>
											</div>

											<div
												class="p-3 d-flex align-items-start justify-content-between"
											>
												<div>
													<div class="mb-3">
														<i class="bi bi-geo-alt"></i> Coldstream
													</div>
													<div class="mb-3">
														<i class="bi bi-geo"></i> 2km to CUT
													</div>
													<div class="">
														<i class="bi bi-currency-dollar"></i>
														90/month
													</div>
												</div>

												<div>
													<a
														href="./view2.html"
														class="btn btn-success btn-sm rounded-pill"
														>View</a
													>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!--END OF RAILWAY STREET HOUSE -->

								<div class="ps-2">
									<button
										class="btn btn-outline-light rounded-circle border-2"
										type="button"
										data-bs-target="#generalCarousel1"
										data-bs-slide="next"
									>
										<i class="bi bi-chevron-right"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<!--END OF HERO SECTION -->

<!--MOBILE NAVIGATION -->

			<div id="mobile-hero" class="d-lg-none">
				<div id="Hero" style="padding-bottom: 8rem" class="bg-success text-white">
					<div class="text-center pt-5">
						<h1 class="opener pt-5 mb-5">Looking for of campus accommodation?</h1>
						<p class="mx-auto px-3" style="max-width: 20rem">
							We got you! Browse and filter
							<span class="text-warning fw-bolder">50+</span> Boarding houses and
							apartments available exclusively to students in Chinhoyi 😇
						</p>
					</div>
				</div>

					<!--START OF COLDSTREAM HOUSE -->

				<div
					class="mx-auto p-1 bg-white shadow position-relative"
					style="width: 90%; top: -5rem; border-radius: 20px"
				>
					<div
						id="generalCarousel2"
						class="carousel slide general-carousel"
						data-bs-ride="carousel"
					>
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item p-2 active">
								<div class="border bg-light" style="border-radius: 20px">
									<div class="d-flex">
										<div class="w-50">
											<img
												src="./assets/img/boarding-houses/bh4.jpg"
												class="h-100 w-100 border-end border-light"
												style="object-fit: cover; border-radius: 20px 0 0 0"
											/>
										</div>

										<div class="w-50 d-flex flex-wrap h-100">
											<div class="col-6 p-0">
												<img
													src="./assets/img/boarding-houses/bh9.jpg"
													class="h-100 w-100 border-end border-bottom border-light"
													style="object-fit: cover"
												/>
											</div>
											<div class="col-6 p-0">
												<img
													src="./assets/img/boarding-houses/bh6.jpg"
													class="h-100 w-100 border-bottom border-light"
													style="
														object-fit: cover;
														border-radius: 0 20px 0 0;
													"
												/>
											</div>
											<div class="col-6 p-0">
												<img
													src="./assets/img/boarding-houses/bh7.jpg"
													class="h-100 w-100 border-end border-light"
													style="object-fit: cover"
												/>
											</div>
											<div class="col-6 p-0">
												<img
													src="./assets/img/boarding-houses/bh10.jpg"
													class="h-100 w-100"
													style="object-fit: cover"
												/>
											</div>
										</div>
									</div>

									<div
										class="p-3 d-flex align-items-start justify-content-between"
									>
										<div>
											<div class="mb-3">
												<i class="bi bi-geo-alt"></i> COLDSTREAM
											</div>
											<div class="mb-3">
												<i class="bi bi-geo"></i> 3km to CUT
											</div>
											<div class="">
												<i class="bi bi-currency-dollar"></i> 100/month
											</div>
										</div>

										<div>
											<a
												href="./view.html"
												class="btn btn-success btn-sm rounded-pill"
												>View</a
											>
										</div>
									</div>
								</div>
							</div>
								<!--END OF COLDSTREAM HOUSE -->

							<!--START OF MZARI HOUSE -->
							<div class="carousel-item p-2">
								<div class="border bg-light" style="border-radius: 20px">
									<div class="d-flex">
										<div class="w-50">
											<img
												src="./assets/img/boarding-houses/bh4.jpg"
												class="h-100 w-100 border-end border-light"
												style="object-fit: cover; border-radius: 20px 0 0 0"
											/>
										</div>

										<div class="w-50 d-flex flex-wrap h-100">
											<div class="col-6 p-0">
												<img
													src="./assets/img/boarding-houses/bh9.jpg"
													class="h-100 w-100 border-end border-bottom border-light"
													style="object-fit: cover"
												/>
											</div>
											<div class="col-6 p-0">
												<img
													src="./assets/img/boarding-houses/bh6.jpg"
													class="h-100 w-100 border-bottom border-light"
													style="
														object-fit: cover;
														border-radius: 0 20px 0 0;
													"
												/>
											</div>
											<div class="col-6 p-0">
												<img
													src="./assets/img/boarding-houses/bh7.jpg"
													class="h-100 w-100 border-end border-light"
													style="object-fit: cover"
												/>
											</div>
											<div class="col-6 p-0">
												<img
													src="./assets/img/boarding-houses/bh10.jpg"
													class="h-100 w-100"
													style="object-fit: cover"
												/>
											</div>
										</div>
									</div>

									<div
										class="p-3 d-flex align-items-start justify-content-between"
									>
										<div>
											<div class="mb-3">
												<i class="bi bi-geo-alt"></i> MZARI
											</div>
											<div class="mb-3">
												<i class="bi bi-geo"></i> 7km to CUT
											</div>
											<div class="">
												<i class="bi bi-currency-dollar"></i> 120/month
											</div>
										</div>

										<div>
											<a
												href="./view.html"
												class="btn btn-success btn-sm rounded-pill"
												>View</a
											>
										</div>
									</div>
								</div>
							</div>
							<!--END OF MZARI HOUSE -->


							<!--START OF RAILWAY HOUSE -->
							<div class="carousel-item p-2">
								<div class="border bg-light" style="border-radius: 20px">
									<div class="d-flex">
										<div class="w-50">
											<img
												src="./assets/img/boarding-houses/bh4.jpg"
												class="h-100 w-100 border-end border-light"
												style="object-fit: cover; border-radius: 20px 0 0 0"
											/>
										</div>

										<div class="w-50 d-flex flex-wrap h-100">
											<div class="col-6 p-0">
												<img
													src="./assets/img/boarding-houses/bh9.jpg"
													class="h-100 w-100 border-end border-bottom border-light"
													style="object-fit: cover"
												/>
											</div>
											<div class="col-6 p-0">
												<img
													src="./assets/img/boarding-houses/bh6.jpg"
													class="h-100 w-100 border-bottom border-light"
													style="
														object-fit: cover;
														border-radius: 0 20px 0 0;
													"
												/>
											</div>
											<div class="col-6 p-0">
												<img
													src="./assets/img/boarding-houses/bh7.jpg"
													class="h-100 w-100 border-end border-light"
													style="object-fit: cover"
												/>
											</div>
											<div class="col-6 p-0">
												<img
													src="./assets/img/boarding-houses/bh10.jpg"
													class="h-100 w-100"
													style="object-fit: cover"
												/>
											</div>
										</div>
									</div>

									<div
										class="p-3 d-flex align-items-start justify-content-between"
									>
										<div>
											<div class="mb-3">
												<i class="bi bi-geo-alt"></i> RAILWAY STREET
											</div>
											<div class="mb-3">
												<i class="bi bi-geo"></i> 2km to CUT
											</div>
											<div class="">
												<i class="bi bi-currency-dollar"></i> 90/month
											</div>
										</div>

										<div>
											<a
												href="./view.html"
												class="btn btn-success btn-sm rounded-pill"
												>View</a
											>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!--END OF RAILWAY HOUSE -->

						<button
							class="btn-carousel start-0"
							type="button"
							data-bs-target="#generalCarousel2"
							data-bs-slide="prev"
						>
							<i class="bi bi-chevron-left"></i>
						</button>

						<button
							class="btn-carousel end-0"
							type="button"
							data-bs-target="#generalCarousel2"
							data-bs-slide="next"
						>
							<i class="bi bi-chevron-right"></i>
						</button>
					</div>

					<div class="text-center">
						<a
							href="./accomodation.html"
							class="btn btn-success w-75 rounded-pill my-3"
						>
							Browse Accomodation
						</a>
					</div>
				</div>
			</div>
<!-- END OF MOBILE NAVIGATION -->

<!--START OF LANDLORD LISTING--> 
			<div id="features" class="container">
				<div class="row align-items-center justify-content-center my-lg-5">
					<div class="col-lg-5">
						<div class="shadow-lg p-5 text-center c-rounded-2">
							<h2 class="mb-3">Are you a landlord?</h2>
							<p class="mx-auto" style="max-width: 20rem">
								Create an account and advertise student accomodation,
								for a small listing fee per annum 😇 <br />
								<a class="btn btn-success rounded-pill mt-4" href="./inner-page.html"
									>Get Started</a
								>
							</p>
						</div>
					</div>
<!--END OF LANDLORD LISTING--> 


					<div class="col-lg-5">
						<img src="./assets/img/canva/canva (9).svg" class="w-100" />
					</div>
				</div>

				<div class="row align-items-center justify-content-center my-lg-5">
					<div class="col-lg-5 order-last order-lg-first">
						<img src="./assets/img/canva/canva (9).svg" class="w-100" />
					</div>

					<div class="col-lg-5 order-first order-lg-last">
						<div class="shadow-lg p-5 text-center c-rounded-2">
							<h2 class="mb-3">By the students. For the students.</h2>
							<p class="mx-auto" style="max-width: 20rem">
								Read more about why this site was created.

								<br />
								<a class="btn btn-success rounded-pill mt-4" href="./about.html"
									>About</a
								>
							</p>
						</div>
					</div>
				</div>
<!--END OF LANDLORD LISTING--> 

				<!-- <div class="row row-cols-1 my-5 row-cols-lg-2">
					<div class="col-5 d-none d-lg-block">
						<div class="d-flex justify-content-center align-items-center">
							<img
								src="./assets/img/canva/canva (9).svg"
								class="border mt-4"
								style="width: 25rem"
							/>
						</div>
					</div>

					<div class="col p-lg-5 border">
						<div class="shadow-lg px-lg-5 c-rounded-2" style="max-width: 30rem">
							<div id="About" class="text-center my-5 py-5">
								<h1 class="mb-3">By the students. For the students</h1>
								<p>
									Read about why this site was created and where you can find
									others like it.
									<br />
									<a class="btn btn-success rounded-pill mt-4" href="./about.html"
										>About</a
									>
								</p>
							</div>
						</div>
					</div>
				</div> -->
			</div>


<!--START OF FOOTER--> 
			<div id="CTA" class="p-4 bg-success text-center text-white">
				<h2 class="mb-4">You've made it this far 😇</h2>
				<a
					href="./accomodation.html"
					class="btn btn-outline-light border-2 btn-lg d-none d-lg-inline-block rounded-pill"
					>Browse Accomodation</a
				>
				<a
					href="./accomodation.html"
					class="btn btn-outline-light border-2 d-lg-none rounded-pill"
					>Browse Accomodation</a
				>
			</div>
		</main>

		<footer class="p-4 bg-success text-center text-white">
			<small>&copy;All Rights Reserved. Campus-Connect </small>
		</footer>

<!--END OF FOOTER--> 
	</body>
</html>
