<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="default">
	<meta http-equiv="Content-Security-Policy" content="default-src * 'self' 'unsafe-inline' 'unsafe-eval' data: gap:">

	<link rel="icon" href="<?= base_url('assets/'); ?>images/favicon.png">
	<title><?= $this->config->item('app_name') . " | " . $title; ?></title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/framework7.bundle.css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css">

</head>

<body>

	<div id="app">

		<div class="view view-main view-init ios-edges" data-url="/">
			<div class="page page-home page-with-subnavbar">
				<div class="toolbar tabbar tabbar-labels toolbar-bottom">
					<div class="toolbar-inner">
						<a href="#tab-home" class="tab-link tab-link-active">
							<i class="fas fa-home"></i>
							<span class="tabbar-label">Home</span>
						</a>
						<a href="#tab-wishlist" class="tab-link">
							<i class="fas fa-heart"></i>
							<span class="tabbar-label">Wishlist</span>
						</a>
						<a href="#tab-brand" class="tab-link">
							<i class="fas fa-star"></i>
							<span class="tabbar-label">Official Brand</span>
						</a>
						<a href="#tab-cart" class="tab-link">
							<i class="fas fa-shopping-cart"></i>
							<span class="tabbar-label">Cart</span>
						</a>
						<a href="#tab-account" class="tab-link">
							<i class="fas fa-user"></i>
							<span class="tabbar-label">Account</span>
						</a>
					</div>
				</div>
				<div class="tabs">
					<div id="tab-home" class="tab tab-home tab-active">
						<!-- home -->

						<!-- navbar home -->
						<div class="navbar navbar-home">
							<div class="navbar-inner">
								<div class="left">
									<a href="#" class="panel-open" data-panel="left">
										<i class="fas fa-align-left"></i>
									</a>
								</div>
								<div class="title">
									<form class="searchbar searchbar-init" data-search-container=".search-list" data-search-in=".item-title">
										<div class="searchbar-inner">
											<div class="searchbar-input-wrap">
												<input type="search" placeholder="Search for products for stores">
												<i class="searchbar-icon"></i>
												<span class="input-clear-button"></span>
											</div>
											<span class="searchbar-disable-button">Cancel</span>
										</div>
									</form>
								</div>
								<div class="right">
									<a href="/notification/">
										<i class="fas fa-bell"></i>
										<span></span>
									</a>
								</div>
							</div>
						</div>
						<!-- end navbar home -->

						<!-- sidebarbar or panel -->
						<div class="panel-backdrop"></div>
						<div class="panel panel-left panel-cover sidebar">
							<div class="user-view">
								<img src="<?= base_url('assets/'); ?>images/user-buyer6.png" alt="">
								<div class="title-name">
									<h5>Fardanz Track</h5>
									<p><i class="fas fa-map-marker-alt"></i> Melbourne</p>
								</div>
							</div>
							<div class="list media-list">
								<ul>
									<li>
										<a href="/wishlist/" class="item-link panel-close item-content">
											<div class="item-media">
												<i class="fas fa-heart"></i>
											</div>
											<div class="item-inner">
												<div class="item-title-row">
													<div class="item-title">Wishlist</div>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a href="/notification/" class="item-link panel-close item-content">
											<div class="item-media">
												<i class="fas fa-bell"></i>
											</div>
											<div class="item-inner">
												<div class="item-title-row">
													<div class="item-title">Notification</div>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a href="/transaction/" class="item-link panel-close item-content">
											<div class="item-media">
												<i class="fas fa-credit-card"></i>
											</div>
											<div class="item-inner">
												<div class="item-title-row">
													<div class="item-title">Transaction</div>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a href="/settings/" class="item-link panel-close item-content">
											<div class="item-media">
												<i class="fas fa-cog"></i>
											</div>
											<div class="item-inner">
												<div class="item-title-row">
													<div class="item-title">Settings</div>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a href="/faq/" class="item-link panel-close item-content">
											<div class="item-media">
												<i class="fas fa-question"></i>
											</div>
											<div class="item-inner">
												<div class="item-title-row">
													<div class="item-title">Help Center</div>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a href="#" class="item-link panel-close item-content">
											<div class="item-media">
												<i class="fas fa-sign-out-alt"></i>
											</div>
											<div class="item-inner">
												<div class="item-title">Logout</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- end sidebarbar or panel -->

						<!-- slider -->
						<div class="slider">
							<div class="swiper-container swiper-init swiper-container-horizontal" data-space-between="10" data-slides-per-view="auto">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="content">
											<div class="mask"></div>
											<img src="<?= base_url('assets/'); ?>images/banner1.png" alt="">
										</div>
									</div>
									<div class="swiper-slide">
										<div class="content">
											<div class="mask"></div>
											<img src="<?= base_url('assets/'); ?>images/banner3.png" alt="">
										</div>
									</div>
									<div class="swiper-slide">
										<div class="content">
											<div class="mask"></div>
											<img src="<?= base_url('assets/'); ?>images/banner2.png" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end slider -->

						<!-- cateogries -->
						<div class="categories segments no-pd-b">
							<div class="container">
								<div class="section-title">
									<h3>Categories</h3>
								</div>
								<div class="row">
									<div class="col-20">
										<div class="content">
											<a href="/categories-details/">
												<div class="icon">
													<i class="fas fa-mobile-alt"></i>
												</div>
												<span>Phone</span>
											</a>
										</div>
									</div>
									<div class="col-20">
										<div class="content">
											<a href="/categories-details/">
												<div class="icon">
													<i class="fas fa-tshirt"></i>
												</div>
												<span>T-Shirt</span>
											</a>
										</div>
									</div>
									<div class="col-20">
										<div class="content">
											<a href="/categories-details/">
												<div class="icon">
													<i class="fas fa-basketball-ball"></i>
												</div>
												<span>Sports</span>
											</a>
										</div>
									</div>
									<div class="col-20">
										<div class="content">
											<a href="/categories-details/">
												<div class="icon">
													<i class="fas fa-tools"></i>
												</div>
												<span>Tools</span>
											</a>
										</div>
									</div>
									<!-- <div class="col-20">
										<div class="content all-categories-link">
											<a href="/all-categories/">
												<div class="icon">
													<i class="fas fa-angle-right"></i>
												</div>
												<span>See All</span>
											</a>
										</div>
									</div> -->
								</div>
							</div>
						</div>
						<!-- end cateogries -->

						<!-- latest product -->
						<div class="latest-product segments no-pd-b">
							<div class="container">
								<div class="section-title">
									<h3>Latest</h3>
								</div>
								<div class="row">
									<?php
									foreach ($event as $e) : ?>
										<div class="col-50 margin-top">
											<div class="content content-shadow-product">
												<a href="/product-details/">
													<div class="image">
														<img src="<?= base_url('assets/dist/img/event/') . $e['event_image']; ?>" alt="product">
													</div>
													<div class="text">
														<p class="title-product title-product-center"><?= $e['event_name']; ?></p>
														<p class="price">$80.00</p>
													</div>
												</a>
											</div>
										</div>
									<?php endforeach; ?>
								</div>
							</div>
						</div>
						<!-- end latest product -->

						<!-- flash sale -->
						<div class="flash-sale segments no-pd-b">
							<div class="container">
								<div class="section-title">
									<h3>Flash Sale</h3>
								</div>
								<div data-space-between="15" data-slides-per-view="auto" class="swiper-container swiper-init">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="content content-shadow-product">
												<a href="/product-details/">
													<div class="image">
														<img src="<?= base_url('assets/'); ?>images/product1.png" alt="flash-sale">
													</div>
													<div class="text">
														<p>7 sold</p>
														<span class="notifi-line"></span>
														<p class="price">$49.00</p>
													</div>
												</a>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="content content-shadow-product">
												<a href="/product-details/">
													<div class="image">
														<img src="<?= base_url('assets/'); ?>images/product2.png" alt="flash-sale">
													</div>
													<div class="text">
														<p>7 sold</p>
														<span class="notifi-line"></span>
														<p class="price">$49.00</p>
													</div>
												</a>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="content content-shadow-product">
												<a href="/product-details/">
													<div class="image">
														<img src="<?= base_url('assets/'); ?>images/product3.png" alt="flash-sale">
													</div>
													<div class="text">
														<p>7 sold</p>
														<span class="notifi-line"></span>
														<p class="price">$49.00</p>
													</div>
												</a>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="content content-shadow-product">
												<a href="/product-details/">
													<div class="image">
														<img src="<?= base_url('assets/'); ?>images/product4.png" alt="flash-sale">
													</div>
													<div class="text">
														<p>7 sold</p>
														<span class="notifi-line"></span>
														<p class="price">$49.00</p>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end flash sale -->

						<!-- banner -->
						<div class="banner segments-bottom">
							<div class="container">
								<div class="content-image">
									<img src="<?= base_url('assets/'); ?>images/banners.jpg" alt="">
								</div>
							</div>
						</div>
						<!-- end banner -->

						<!-- popular product -->
						<div class="popular-product product segments-bottom">
							<div class="container">
								<div class="section-title">
									<h3>Popular Product
										<a href="#" class="see-all-link">See All</a>
									</h3>
								</div>
								<div class="row">
									<div class="col-50">
										<div class="content content-shadow-product">
											<a href="/product-details/">
												<div class="image">
													<img src="<?= base_url('assets/'); ?>images/product1.png" alt="product">
												</div>
												<div class="text">
													<p class="title-product title-product-center">Elegant Blue t-Shirt</p>
													<p class="price">$80.00</p>
												</div>
											</a>
										</div>
									</div>
									<div class="col-50">
										<div class="content content-shadow-product">
											<a href="/product-details/">
												<div class="image">
													<img src="<?= base_url('assets/'); ?>images/product2.png" alt="product">
												</div>
												<div class="text">
													<p class="title-product title-product-center">Elegant Blue t-Shirt</p>
													<p class="price">$80.00</p>
												</div>
											</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-50">
										<div class="content content-shadow-product">
											<a href="/product-details/">
												<div class="image">
													<img src="<?= base_url('assets/'); ?>images/product3.png" alt="product">
												</div>
												<div class="text">
													<p class="title-product title-product-center">Elegant Blue t-Shirt</p>
													<p class="price">$80.00</p>
												</div>
											</a>
										</div>
									</div>
									<div class="col-50">
										<div class="content content-shadow-product">
											<a href="/product-details/">
												<div class="image">
													<img src="<?= base_url('assets/'); ?>images/product4.png" alt="product">
												</div>
												<div class="text">
													<p class="title-product title-product-center">Elegant Blue t-Shirt</p>
													<p class="price">$80.00</p>
												</div>
											</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-50">
										<div class="content content-shadow-product">
											<a href="/product-details/">
												<div class="image">
													<img src="<?= base_url('assets/'); ?>images/product5.png" alt="product">
												</div>
												<div class="text">
													<p class="title-product title-product-center">Elegant Blue t-Shirt</p>
													<p class="price">$80.00</p>
												</div>
											</a>
										</div>
									</div>
									<div class="col-50">
										<div class="content content-shadow-product">
											<a href="/product-details/">
												<div class="image">
													<img src="<?= base_url('assets/'); ?>images/product6.png" alt="product">
												</div>
												<div class="text">
													<p class="title-product title-product-center">Elegant Blue t-Shirt</p>
													<p class="price">$80.00</p>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end popular product -->

						<!-- end home -->
					</div>
					<div id="tab-wishlist" class="tab tab-wishlist">
						<!-- wishlist -->

						<!-- navbar -->
						<div class="navbar navbar-page">
							<div class="navbar-inner">
								<div class="left"></div>
								<div class="title">
									Wishlist
								</div>
								<div class="right"></div>
							</div>
						</div>
						<!-- end navbar -->

						<div class="wishlists segments">
							<div class="container">
								<div class="row">
									<div class="col-50">
										<div class="content content-shadow-product">
											<a href="/product-details/">
												<div class="love-button">
													<i class="fas fa-heart"></i>
												</div>
												<div class="image">
													<img src="<?= base_url('assets/'); ?>images/product1.png" alt="product">
												</div>
												<div class="text">
													<p class="title-product title-product-center">Elegant Blue t-Shirt</p>
													<p class="price">$80.00</p>
												</div>
											</a>
										</div>
									</div>
									<div class="col-50">
										<div class="content content-shadow-product">
											<a href="/product-details/">
												<div class="love-button">
													<i class="fas fa-heart"></i>
												</div>
												<div class="image">
													<img src="<?= base_url('assets/'); ?>images/product2.png" alt="product">
												</div>
												<div class="text">
													<p class="title-product title-product-center">Elegant Blue t-Shirt</p>
													<p class="price">$80.00</p>
												</div>
											</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-50">
										<div class="content content-shadow-product">
											<a href="/product-details/">
												<div class="love-button">
													<i class="fas fa-heart"></i>
												</div>
												<div class="image">
													<img src="<?= base_url('assets/'); ?>images/product3.png" alt="product">
												</div>
												<div class="text">
													<p class="title-product title-product-center">Elegant Blue t-Shirt</p>
													<p class="price">$80.00</p>
												</div>
											</a>
										</div>
									</div>
									<div class="col-50">
										<div class="content content-shadow-product">
											<a href="/product-details/">
												<div class="love-button">
													<i class="fas fa-heart"></i>
												</div>
												<div class="image">
													<img src="<?= base_url('assets/'); ?>images/product4.png" alt="product">
												</div>
												<div class="text">
													<p class="title-product title-product-center">Elegant Blue t-Shirt</p>
													<p class="price">$80.00</p>
												</div>
											</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-50">
										<div class="content content-shadow-product">
											<a href="/product-details/">
												<div class="love-button">
													<i class="fas fa-heart"></i>
												</div>
												<div class="image">
													<img src="<?= base_url('assets/'); ?>images/product5.png" alt="product">
												</div>
												<div class="text">
													<p class="title-product title-product-center">Elegant Blue t-Shirt</p>
													<p class="price">$80.00</p>
												</div>
											</a>
										</div>
									</div>
									<div class="col-50">
										<div class="content content-shadow-product">
											<a href="/product-details/">
												<div class="love-button">
													<i class="fas fa-heart"></i>
												</div>
												<div class="image">
													<img src="<?= base_url('assets/'); ?>images/product6.png" alt="product">
												</div>
												<div class="text">
													<p class="title-product title-product-center">Elegant Blue t-Shirt</p>
													<p class="price">$80.00</p>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- end wishlist -->
					</div>
					<div id="tab-brand" class="page-content tab">
						<!-- official brand -->

						<!-- navbar -->
						<div class="navbar navbar-page">
							<div class="navbar-inner">
								<div class="left"></div>
								<div class="title">
									Official Brand
								</div>
								<div class="right"></div>
							</div>
						</div>
						<!-- end navbar -->

						<div class="official-brand">

							<!-- slider brand -->
							<div class="slider-brand segments-bottom">
								<div class="container">
									<div data-pagination='{"el": ".swiper-pagination"}' data-space-between="10" class="swiper-container swiper-init swiper-container-horizontal">
										<div class="swiper-pagination"></div>
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<div class="content">
													<div class="mask"></div>
													<img src="<?= base_url('assets/'); ?>images/brand1.png" alt="">
												</div>
											</div>
											<div class="swiper-slide">
												<div class="content">
													<div class="mask"></div>
													<img src="<?= base_url('assets/'); ?>images/brand2.png" alt="">
												</div>
											</div>
											<div class="swiper-slide">
												<div class="content">
													<div class="mask"></div>
													<img src="<?= base_url('assets/'); ?>images/brand3.png" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end slider brand -->

							<!-- popular brand -->
							<div class="popular-brand segments-bottom">
								<div class="container">
									<div class="section-title">
										<h3>Populars Brand <a href="#" class="see-all-link">See All</a></h3>
									</div>

									<div class="row">
										<div class="col-25">
											<div class="content">
												<a href="#"><img src="<?= base_url('assets/'); ?>images/trip.png" alt=""></a>
											</div>
										</div>
										<div class="col-25">
											<div class="content">
												<a href="#"><img src="<?= base_url('assets/'); ?>images/wobag.png" alt=""></a>
											</div>
										</div>
										<div class="col-25">
											<div class="content">
												<a href="#"><img src="<?= base_url('assets/'); ?>images/john.png" alt=""></a>
											</div>
										</div>
										<div class="col-25">
											<div class="content">
												<a href="#"><img src="<?= base_url('assets/'); ?>images/alya.png" alt=""></a>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-25">
											<div class="content">
												<a href="#"><img src="<?= base_url('assets/'); ?>images/green.png" alt=""></a>
											</div>
										</div>
										<div class="col-25">
											<div class="content">
												<a href="#"><img src="<?= base_url('assets/'); ?>images/zona.png" alt=""></a>
											</div>
										</div>
										<div class="col-25">
											<div class="content">
												<a href="#"><img src="<?= base_url('assets/'); ?>images/beauty.png" alt=""></a>
											</div>
										</div>
										<div class="col-25">
											<div class="content">
												<a href="#"><img src="<?= base_url('assets/'); ?>images/fitbro.png" alt=""></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end popular brand -->

							<!-- banner -->
							<div class="banner segments-bottom">
								<div class="container">
									<div class="content-image">
										<img src="<?= base_url('assets/'); ?>images/banners.jpg" alt="">
									</div>
								</div>
							</div>
							<!-- end banner -->

							<!-- product brand -->
							<div class="product-brand segments-bottom product">
								<div class="container">
									<div class="section-title">
										<h3>All Product Brands <a href="#" class="see-all-link">See All</a></h3>
									</div>
									<div class="row">
										<div class="col-50">
											<div class="content content-shadow-product">
												<a href="/product-details/">
													<div class="image">
														<img src="<?= base_url('assets/'); ?>images/product1.png" alt="product">
													</div>
													<div class="text">
														<p class="title-product title-product-center">Elegant Blue t-Shirt</p>
														<p class="price">$80.00</p>
													</div>
												</a>
											</div>
										</div>
										<div class="col-50">
											<div class="content content-shadow-product">
												<a href="/product-details/">
													<div class="image">
														<img src="<?= base_url('assets/'); ?>images/product2.png" alt="product">
													</div>
													<div class="text">
														<p class="title-product title-product-center">Elegant Blue t-Shirt</p>
														<p class="price">$80.00</p>
													</div>
												</a>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-50">
											<div class="content content-shadow-product">
												<a href="/product-details/">
													<div class="image">
														<img src="<?= base_url('assets/'); ?>images/product3.png" alt="product">
													</div>
													<div class="text">
														<p class="title-product title-product-center">Elegant Blue t-Shirt</p>
														<p class="price">$80.00</p>
													</div>
												</a>
											</div>
										</div>
										<div class="col-50">
											<div class="content content-shadow-product">
												<a href="/product-details/">
													<div class="image">
														<img src="<?= base_url('assets/'); ?>images/product4.png" alt="product">
													</div>
													<div class="text">
														<p class="title-product title-product-center">Elegant Blue t-Shirt</p>
														<p class="price">$80.00</p>
													</div>
												</a>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-50">
											<div class="content content-shadow-product">
												<a href="/product-details/">
													<div class="image">
														<img src="<?= base_url('assets/'); ?>images/product5.png" alt="product">
													</div>
													<div class="text">
														<p class="title-product title-product-center">Elegant Blue t-Shirt</p>
														<p class="price">$80.00</p>
													</div>
												</a>
											</div>
										</div>
										<div class="col-50">
											<div class="content content-shadow-product">
												<a href="/product-details/">
													<div class="image">
														<img src="<?= base_url('assets/'); ?>images/product6.png" alt="product">
													</div>
													<div class="text">
														<p class="title-product title-product-center">Elegant Blue t-Shirt</p>
														<p class="price">$80.00</p>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end product brand -->

						</div>
						<!-- end official brand -->
					</div>
					<div id="tab-cart" class="page-content tab">
						<!-- cart -->

						<!-- navbar -->
						<div class="navbar navbar-page">
							<div class="navbar-inner">
								<div class="left"></div>
								<div class="title">
									Shopping Cart
								</div>
								<div class="right"></div>
							</div>
						</div>
						<!-- end navbar -->

						<!-- content cart -->
						<div class="cart segments">
							<div class="container">
								<div class="content">
									<div class="row">
										<div class="col-10">
											<div class="content-checkbox">
												<label class="checkbox">
													<input type="checkbox">
													<i class="icon-checkbox"></i>
												</label>
											</div>
										</div>
										<div class="col-20">
											<div class="content-image">
												<img src="<?= base_url('assets/'); ?>images/product1.png" alt="">
											</div>
										</div>
										<div class="col-40">
											<div class="content-text">
												<p class="title-product">The latest brand</p>
												<p class="price">$49.00</p>
											</div>
										</div>
										<div class="col-30 align-self-center">
											<div class="number-goods">
												<div class="stepper stepper-small stepper-init">
													<div class="stepper-button-minus"></div>
													<div class="stepper-input-wrap">
														<input type="text" value="0" readonly>
													</div>
													<div class="stepper-button-plus"></div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="content">
									<div class="row">
										<div class="col-10">
											<div class="content-checkbox">
												<label class="checkbox">
													<input type="checkbox">
													<i class="icon-checkbox"></i>
												</label>
											</div>
										</div>
										<div class="col-20">
											<div class="content-image">
												<img src="<?= base_url('assets/'); ?>images/product1.png" alt="">
											</div>
										</div>
										<div class="col-40">
											<div class="content-text">
												<p class="title-product">The latest brand</p>
												<p class="price">$49.00</p>
											</div>
										</div>
										<div class="col-30 align-self-center">
											<div class="number-goods">
												<div class="stepper stepper-small stepper-init">
													<div class="stepper-button-minus"></div>
													<div class="stepper-input-wrap">
														<input type="text" value="0" readonly>
													</div>
													<div class="stepper-button-plus"></div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="content">
									<div class="row">
										<div class="col-10">
											<div class="content-checkbox">
												<label class="checkbox">
													<input type="checkbox">
													<i class="icon-checkbox"></i>
												</label>
											</div>
										</div>
										<div class="col-20">
											<div class="content-image">
												<img src="<?= base_url('assets/'); ?>images/product1.png" alt="">
											</div>
										</div>
										<div class="col-40">
											<div class="content-text">
												<p class="title-product">The latest brand</p>
												<p class="price">$49.00</p>
											</div>
										</div>
										<div class="col-30 align-self-center">
											<div class="number-goods">
												<div class="stepper stepper-small stepper-init">
													<div class="stepper-button-minus"></div>
													<div class="stepper-input-wrap">
														<input type="text" value="0" readonly>
													</div>
													<div class="stepper-button-plus"></div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="content">
									<div class="row">
										<div class="col-10">
											<div class="content-checkbox">
												<label class="checkbox">
													<input type="checkbox">
													<i class="icon-checkbox"></i>
												</label>
											</div>
										</div>
										<div class="col-20">
											<div class="content-image">
												<img src="<?= base_url('assets/'); ?>images/product1.png" alt="">
											</div>
										</div>
										<div class="col-40">
											<div class="content-text">
												<p class="title-product">The latest brand</p>
												<p class="price">$49.00</p>
											</div>
										</div>
										<div class="col-30 align-self-center">
											<div class="number-goods">
												<div class="stepper stepper-small stepper-init">
													<div class="stepper-button-minus"></div>
													<div class="stepper-input-wrap">
														<input type="text" value="0" readonly>
													</div>
													<div class="stepper-button-plus"></div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="content">
									<div class="row">
										<div class="col-10">
											<div class="content-checkbox">
												<label class="checkbox">
													<input type="checkbox">
													<i class="icon-checkbox"></i>
												</label>
											</div>
										</div>
										<div class="col-20">
											<div class="content-image">
												<img src="<?= base_url('assets/'); ?>images/product1.png" alt="">
											</div>
										</div>
										<div class="col-40">
											<div class="content-text">
												<p class="title-product">The latest brand</p>
												<p class="price">$49.00</p>
											</div>
										</div>
										<div class="col-30 align-self-center">
											<div class="number-goods">
												<div class="stepper stepper-small stepper-init">
													<div class="stepper-button-minus"></div>
													<div class="stepper-input-wrap">
														<input type="text" value="0" readonly>
													</div>
													<div class="stepper-button-plus"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- divider -->
							<div class="divider-space-content"></div>
							<!-- end divider -->

							<!-- wrap total cart -->
							<div class="wrap-total-cart">
								<div class="container">
									<div class="content-total">
										<ul>
											<li>
												<p>Total</p>
											</li>
											<li>
												<h6>$150</h6>
											</li>
										</ul>
									</div>
									<div class="content-button">
										<a href="/checkout/" class="button primary-button"><i class="fas fa-shopping-bag"></i>Checkout</a>
									</div>
								</div>
							</div>
							<!-- end wrap total cart -->
						</div>
						<!-- end content cart -->

						<!-- end cart -->
					</div>
					<div id="tab-account" class="page-content tab">
						<!-- account buyer -->

						<!-- content account -->
						<div class="account-buyer segments">
							<div class="container">
								<div class="header-account">
									<img src="<?= base_url('assets/'); ?>images/user-buyer6.png" alt="">
									<div class="title-name">
										<h5>Fardanz Track</h5>
										<p><i class="fas fa-map-marker-alt"></i>Melbourne</p>
									</div>
								</div>
							</div>

							<!-- divider space -->
							<div class="divider-space-content"></div>
							<!-- end divider space -->

							<div class="account-menu">
								<div class="list media-list">
									<ul>
										<li>
											<a href="/wishlist/" class="item-link item-content">
												<div class="item-media">
													<i class="fas fa-heart"></i>
												</div>
												<div class="item-inner">
													<div class="item-title-row">
														<div class="item-title">Wishlist</div>
													</div>
												</div>
											</a>
										</li>
										<li>
											<a href="/notification/" class="item-link item-content">
												<div class="item-media">
													<i class="fas fa-bell"></i>
												</div>
												<div class="item-inner">
													<div class="item-title-row">
														<div class="item-title">Notification</div>
													</div>
												</div>
											</a>
										</li>
										<li>
											<a href="/transaction/" class="item-link item-content">
												<div class="item-media">
													<i class="fas fa-credit-card"></i>
												</div>
												<div class="item-inner">
													<div class="item-title-row">
														<div class="item-title">Transaction</div>
													</div>
												</div>
											</a>
										</li>
										<li>
											<a href="/settings/" class="item-link item-content">
												<div class="item-media">
													<i class="fas fa-cog"></i>
												</div>
												<div class="item-inner">
													<div class="item-title-row">
														<div class="item-title">Settings</div>
													</div>
												</div>
											</a>
										</li>
										<li>
											<a href="/faq/" class="item-link item-content">
												<div class="item-media">
													<i class="fas fa-question"></i>
												</div>
												<div class="item-inner">
													<div class="item-title-row">
														<div class="item-title">Help Center</div>
													</div>
												</div>
											</a>
										</li>
										<li>
											<a href="#" class="item-link item-content">
												<div class="item-media">
													<i class="fas fa-sign-out-alt"></i>
												</div>
												<div class="item-inner">
													<div class="item-title">Logout</div>
												</div>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- end  content account -->

						<!-- end account buyer -->
					</div>
				</div>
			</div>
		</div>
	</div>

	</div>

	<script src="<?= base_url('assets/'); ?>js/framework7.bundle.min.js"></script>
	<script src="<?= base_url('assets/'); ?>js/routes.js"></script>
	<script src="<?= base_url('assets/'); ?>js/app.js"></script>

</body>

</html>