@extends('frontend.master')
@section('content')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

  <div class="main">
      <div class="content">
    	        <div class="content_top">
    	        	<div class="wrap">
		          	   <h3>Latest Products</h3>
		          	</div>
		          	<div class="line"> </div>
		          	<div class="wrap">
		          	 <div class="ocarousel_slider">  
	      				<div class="ocarousel example_photos" data-ocarousel-perscroll="3">
			                <div class="ocarousel_window">
			                   <a href="#" title="img1"> <img src="{{ asset('/frontend/assets/') }}/images/latest-product-img1.jpg" alt="" /><p>Nuncvitae</p></a>
			                   <a href="#" title="img2"> <img src="{{ asset('/frontend/assets/') }}/images/latest-product-img2.jpg" alt="" /><p>Suspendiss</p></a>
			                   <a href="#" title="img3"> <img src="{{ asset('/frontend/assets/') }}/images/latest-product-img3.jpg" alt="" /><p>Phasellus ferm</p></a>
			                   <a href="#" title="img4"> <img src="{{ asset('/frontend/assets/') }}/images/latest-product-img4.jpg" alt="" /><p>Veldignissim</p></a>
			                   <a href="#" title="img5"> <img src="{{ asset('/frontend/assets/') }}/images/latest-product-img5.jpg" alt="" /><p>Aliquam interd</p></a>
			                   <a href="#" title="img6"> <img src="{{ asset('/frontend/assets/') }}/images/latest-product-img6.jpg" alt="" /><p>Sapien lectus</p></a>
			                   <a href="#" title="img1"> <img src="{{ asset('/frontend/assets/') }}/images/latest-product-img1.jpg" alt="" /><p>Nuncvitae</p></a>
			                   <a href="#" title="img2"> <img src="{{ asset('/frontend/assets/') }}/images/latest-product-img2.jpg" alt="" /><p>Suspendiss</p></a>
			                   <a href="#" title="img3"> <img src="{{ asset('/frontend/assets/') }}/images/latest-product-img3.jpg" alt="" /><p>Phasellus ferm</p></a>
			                   <a href="#" title="img4"> <img src="{{ asset('/frontend/assets/') }}/images/latest-product-img4.jpg" alt="" /><p>Veldignissim</p></a>
			                   <a href="#" title="img5"> <img src="{{ asset('/frontend/assets/') }}/images/latest-product-img5.jpg" alt="" /><p>Aliquam interd</p></a>
			                   <a href="#" title="img6"> <img src="{{ asset('/frontend/assets/') }}/images/latest-product-img6.jpg" alt="" /><p>Sapien lectus</p></a>
			                </div>
			               <span>           
			                <a href="#" data-ocarousel-link="left" style="float: left;" class="prev"> </a>
			                <a href="#" data-ocarousel-link="right" style="float: right;" class="next"> </a>
			               </span>
					   </div>
				     </div>  
				   </div>    		
    	       </div>
    	  <div class="content_bottom">
    	    <div class="wrap">
    	    	<div class="content-bottom-left">
    	    		<div class="categories">
						   <ul>
						  	   <h3>Browse All Categories</h3>
							      <li><a href="#">Appliances</a></li>
							      <li><a href="#">Sports Equipments</a></li>
							      <li><a href="#">Computers & Electronics</a></li>
							      <li><a href="#">Office supplies</a></li>
							      <li><a href="#">Health & Beauty</a></li>
							       <li><a href="#">Home & Garden</a></li>
							       <li><a href="#">Apparel</a></li>
							       <li><a href="#">Toys & Games</a></li>
							       <li><a href="#">Automotive</a></li>
						  	 </ul>
						</div>		
						<div class="buters-guide">
						<h3>Buyers Guide</h3>
						<p><span>We want you to be happy with your purchase.</span></p>	
						<p>So we're committed to giving you all the tools to make the right decision with minimum fuss. </p>
					  </div>	
					  <div class="add-banner">
					  	<img src="{{ asset('/frontend/assets/') }}/images/camera.png" alt="" />
					  	<div class="banner-desc">
					  		<h4>Electronics</h4>
					  	    <a href="#">More Info</a>
					  	</div>
					  	<div class="clear"></div>
					  </div>
					    <div class="add-banner add-banner2">
					  	<img src="{{ asset('/frontend/assets/') }}/images/computer.png" alt="" />
					  	<div class="banner-desc">
					  		<h4>Computers</h4>
					  	    <a href="#">More Info</a>
					  	</div>
					  	<div class="clear"></div>
					  </div>
    	    	</div>
    	    	
    	    	<div class="content-bottom-right">
    	    	<h3>New Arrybels</h3>
	            <div class="section group">



				<div class="container">

					<div class="row">
					@foreach($newProduct as $product)

						<div class="col-md-3 my-2">
							<div class="card shadow">
								<div class="card-header">

								</div>
								<div class="card-body">
									<div class="grid_1_of_4 {{ asset('/product/'.$product->image) }}">
									<h4 ><a class="mb-2" href="preview.html">All Products </a></h4>
									<a href="preview.html"><img src="{{ asset('/product/'.$product->image) }}" alt="" width=150 height=100 /></a>
									<div class="price-details">
									<div class="price-number">
											<p class="text-center"><span class="rupees ">$ {{$product->price}} </span></p>
											<p class="text-center" >{{ $product->color->name }}</p>
									</div>
												<div class="add-cart">								
													<h4><a href="preview.html">More Info</a></h4>
										
												</div>
											<div class="clear"></div>
									</div>
	
								</div>
								</div>

							</div>
						</div>
						@endforeach

					</div>
				</div>

				<div class="container">
				<h3>Hot Products</h3>

					<div class="row">
					@foreach($hotProduct as $product)

						<div class="col-md-3 my-2">
							<div class="card shadow">
								<div class="card-header">

								</div>
								<div class="card-body">
									<div class="grid_1_of_4 {{ asset('/product/'.$product->image) }}">
									<h4 ><a class="mb-2" href="preview.html">All Products </a></h4>
									<a href="preview.html"><img src="{{ asset('/product/'.$product->image) }}" alt="" width=150 height=100 /></a>
									<div class="price-details">
									<div class="price-number">
											<p class="text-center"><span class="rupees ">$ {{$product->price}} </span></p>
											<p class="text-center" >{{ $product->color->name }}</p>
									</div>
												<div class="add-cart">								
													<h4><a href="preview.html">More Info</a></h4>
										
												</div>
											<div class="clear"></div>
									</div>
	
								</div>
								</div>

							</div>
						</div>
						@endforeach

					</div>
				</div>

				<div class="container">
				<h3>Discount Products</h3>

					<div class="row">
					@foreach($discountProduct as $product)

						<div class="col-md-3 my-2">
							<div class="card shadow">
								<div class="card-header">

								</div>
								<div class="card-body">
									<div class="grid_1_of_4 {{ asset('/product/'.$product->image) }}">
									<h4 ><a class="mb-2" href="preview.html">All Products </a></h4>
									<a href="preview.html"><img src="{{ asset('/product/'.$product->image) }}" alt="" width=150 height=100 /></a>
									<div class="price-details">
									<div class="price-number">
											<p class="text-center"><span class="rupees ">$ {{$product->price}} </span></p>
											<p class="text-center" >{{ $product->color->name }}</p>
									</div>
												<div class="add-cart">								
													<h4><a href="preview.html">More Info</a></h4>
										
												</div>
											<div class="clear"></div>
									</div>
	
								</div>
								</div>

							</div>
						</div>
						@endforeach

					</div>
				</div>
</div>
			    <div class="product-articles">
			      <h3>Browse All Categories</h3>
			      <ul>
			      	<li>
			      <div class="article">
			      	<p><span>Aenean vitae massa dolor</span></p>
			      	<p>Phasellus in quam dui. Nunc ornare, tellus rutrum porttitor imperdiet, dui leo molestie nisl, sit amet dignissim nibh magna pharetra quam. Nunc ultrices pellentesque massa, ac adipiscing dui rutrum id. In cursus augue non erat faucibus eu condimentum dolor molestie.</p>
			      	<p><a href="#">+ Read Full article</a></p>
			      </div>
			      </li>
			      <li>
			       <div class="article">
			      	<p><span>Phasellus sollicitudin consectetur</span></p>
			      	<p>Cras aliquam, odio ac consectetur tincidunt, eros nunc fermentum augue, quis rutrum ante lectus ac lectus. Fusce sed tellus orci, et feugiat urna. Integer et dictum leo. Nulla consectetur tempus orci sed consequat. Mauris cursus est a sapien venenatis faucibus. Etiam sagittis convallis volutpat.</p>
			      	<p><a href="#">+ Read Full article</a></p>
			      </div>
			      </li>
			      </ul>
			    </div>
		      </div>
		      <div class="clear"></div>
		   </div>
         </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>


@endsection