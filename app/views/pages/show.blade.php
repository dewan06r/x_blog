@extends('layouts.default')
				@section('show_panel')
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">All Students List</h2>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="assets/images/home/product2.jpg" alt="" />
											<h2>Md. Arif Dewan</h2>
											<p>mohakal06r@yahoo.com<br/>+8801711266873</p>
											<!--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Edit Student</a>-->
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>Md. Arif Dewan</h2>
												<p>
													View: Yes<br/>
													Create: Yes<br/>
													Edit: Yes<br/>
													Delete: Yes<br/>
												</p>
												<!--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Edit Student</a>-->
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="{{ URL::to('blockSpecificStudent') }}"><i class="fa fa-plus-square"></i>Block Student</a></li>
										<!--<li><a href="#"><i class="fa fa-plus-square"></i>Delete Student</a></li>-->
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="assets/images/home/product2.jpg" alt="" />
											<h2>Md. Arif Dewan</h2>
											<p>mohakal06r@yahoo.com<br/>+8801711266873</p>
											<!--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Edit Student</a>-->
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>Md. Arif Dewan</h2>
												<p>
													View: Yes<br/>
													Create: Yes<br/>
													Edit: Yes<br/>
													Delete: Yes<br/>
												</p>
												<!--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Edit Student</a>-->
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="{{ URL::to('blockSpecificStudent') }}"><i class="fa fa-plus-square"></i>Block Student</a></li>
										<!--<li><a href="#"><i class="fa fa-plus-square"></i>Delete Student</a></li>-->
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="assets/images/home/product2.jpg" alt="" />
											<h2>Md. Arif Dewan</h2>
											<p>mohakal06r@yahoo.com<br/>+8801711266873</p>
											<!--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Edit Student</a>-->
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>Md. Arif Dewan</h2>
												<p>
													View: Yes<br/>
													Create: Yes<br/>
													Edit: Yes<br/>
													Delete: Yes<br/>
												</p>
												<!--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Edit Student</a>-->
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="{{ URL::to('blockSpecificStudent') }}"><i class="fa fa-plus-square"></i>Block Student</a></li>
										<!--<li><a href="#"><i class="fa fa-plus-square"></i>Delete Student</a></li>-->
									</ul>
								</div>
							</div>
						</div>					
					</div>
				</div>	
				@stop