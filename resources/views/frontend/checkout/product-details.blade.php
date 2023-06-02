@extends('frontend.master')
@push('style')
	</style>
@endpush
@section('content')
<div class="main">
   	 <div class="wrap">
   	 	<div class="preview-page">
   	 	       <div class="section group">
				<div class="cont-desc span_1_of_2">
					<ul class="back-links">
						<li><a href="#">Home</a> ::</li>
						<li><a href="#">Product Page</a> ::</li>
						<li>Product Name</li>
						<div class="clear"> </div>
					</ul>
				  <div class="product-details">	
					<div class="grid {{ asset('/frontend/assets/') }}/images_3_of_2">
							<ul id="etalage">
                                @foreach (json_decode($product->multi_image) as $gallery )
                                    <li>
                                        <a href="optionallink.html">
                                            <img class="etalage_thumb_image" src= "{{ asset('/gallery/'.$gallery) }}" />
                                            <img class="etalage_source_image" src="{{ asset('/gallery/'.$gallery) }}" title="" />
                                        </a>
                                    </li>
                                @endforeach
						</ul>
				     </div>
				   <div class="desc span_3_of_2">
					<h2>Best quelity Motorsycle </h2>
					<p>OverView:{{ $product->long_des }}</p>					
					<div class="price">
						<p>Price: <span>$ {{ $product->price }}</span></p>
					</div>
					<div class="available">
						<ul>
						  <li><span>Name:{{ $product->name }}</span></li>
					    </ul>
					</div>
				<div class="share-desc">
					<div class="share">
										
					</div>
					<form action="{{url('/add/to/cart')}}" method="post">
											@csrf
											<input type="hidden" name="vendor_id" value="{{$product->vendor_id}}">
											<input type="hidden" name="product_id" value="{{$product->id}}">
											<input type="hidden" name="price" value="{{$product->price}}">
											<div class="price-number">
											<a href="{{ url('/product/detailes/'.$product->id) }}"><p class="text-center" >{{ $product->name }}</p></a>
											<p class="text-center"><span class="rupees ">$ {{$product->price}} </span></p>
											<p class="text-center" >{{ $product->color->name }}</p>
											<input type="number" name="qty" value="1" min="1">
									</div>
									<div class="add-cart">								
												@if(auth()->check())
												@if ($product->qty>0)
												<button type="submit" class="btn btn-block btn-primary" >Buy Now</button>
												@else
												<a href="#">Stack Out</a>
												@endif
													@else
													<h4><a href="{{ url('/login') }}">Add To Cart</a></h4>
												@endif	
									</div>
									<div class="clear"></div>
									</form>
			
					<div class="clear"></div>
				</div>
				 <div class="wish-list">
				 	<ul>
				 		<li class="wish"><a href="#">Add to Wishlist</a></li>
				 	    <li class="compare"><a href="#">Add to Compare</a></li>
				 	</ul>
				 </div>
				 <div class="colors-share">
				 	<div class="color-types">
				 		<h4>Available Colors</h4>
				 		<form class="checkbox-buttons">
							<ul>
								<li><input id="r1" name="r1" type="radio"><label for="r1" class="grey"> </label></li>
								<li><input id="r2" name="r1" type="radio"><label for="r2" class="blue"> </label></li>
								<li><input id="r3" name="r1" type="radio"><label class="white" for="r3"> </label></li>
								<li><input id="r4" name="r1" type="radio"><label class="black" for="r4"> </label></li>
							</ul>
						 </form>
				 	</div>
				 	<div class="social-share">
				 		<h4>Share Product</h4>
				 			  <ul>
									<li><a class="share-face" href="#"> </a></li>
									<li><a class="share-twitter" href="#"> </a></li>
									<li><a class="share-google" href="#"> </a></li>
									<li><a class="share-rss" href="#"> </a></li>
									<div class="clear"> </div>
						    </ul>
				 	</div>
				 	<div class="clear"></div>
				 </div>
			</div>
			<div class="clear"></div>
		  </div>
		<div class="product_desc">	
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li>Specifications</li>
					<li>product Tags</li>
					<li>Product Reviews</li>
					<div class="clear"></div>
				</ul>
				<div class="resp-tabs-container">
					<div class="product-specifications">
						<ul>
		                  <li><span class="specification-heading">Body type</span> <span>Metal</span><div class="clear"></div></li>
		                  <li><span class="specification-heading">Spin Speed (rpm)</span> <span>0/400/800/1000/1200</span><div class="clear"></div></li>
		                  <li><span class="specification-heading">Machine weight (kg)</span> <span>75</span><div class="clear"></div></li>
		                  <li><span class="specification-heading">Wash System</span> <span>Tumble wash</span><div class="clear"></div></li>
		                  <li><span class="specification-heading">Door diameter (mm)</span> <span>300</span><div class="clear"></div></li>
		                  <li><span class="specification-heading">Dimensions (w*d*h) without packing</span> <span>595x595x850</span><div class="clear"></div></li>
		                  <li><span class="specification-heading">Power Supply</span> <span>230V, 50Hz, 16Amps</span><div class="clear"></div></li>
		                  <li><span class="specification-heading">Motor (Watts)</span> <span>440 for Wash/490 for Spin</span><div class="clear"></div></li>
		                  <li><span class="specification-heading">Drum basket</span> <span>stainless steel</span><div class="clear"></div></li>
		                  <li><span class="specification-heading">Adjustable Feet</span> <span>4 </span><div class="clear"></div></li>
		                </ul>
				 	</div>
				 
				   <div class="product-tags">
						 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
					<h4>Add Your Tags:</h4>
					<div class="input-box">
						<input type="text" value="">
					</div>
					<div class="button"><span><a href="#">Add Tags</a></span></div>
			    </div>	

				<div class="review">
					<h4>Lorem ipsum Review by <a href="#">Finibus Bonorum</a></h4>
					 <ul>
					 	<li>Price : <div class="rating-stars"><div class="rating" data-rating-max="5"> </div> </div>
						</li>
					 	<li>Value : <div class="rating-stars"><div class="rating" data-rating-max="5"> </div> </div></li>
					 	<li>Quality : <div class="rating-stars"><div class="rating" data-rating-max="5"> </div> </div></li>
					 </ul>
					 @if(auth()->check())
					 @foreach ($product->reviews as $review)
					 <h4>{{ $review->user->name ?? 'no name found' }}</h4>
					 <p>{{ $review->message }}</p>
					 @endforeach
					 @endif


					 <!-- Inspired by: https://codepen.io/jamesbarnett/pen/vlpkh -->

				  <div class="your-review">
				  	 <h4>How Do You Rate This Product?</h4>
				  	  <p>Write Your Own Review?</p>
					  @if (auth()->check())
					  <form action="{{ url('/review/store') }}" method="post">
						@csrf
						<div class="rating">
						<input type="hidden" name="product_id" value="{{$product->id}}">
							<input type="radio" id="star5" name="rating" value="1" />
							<label class="star" for="star5" title="Awesome" aria-hidden="true"></label>
							<input type="radio" id="star4" name="rating" value="2" />
							<label class="star" for="star4" title="Great" aria-hidden="true"></label>
							<input type="radio" id="star3" name="rating" value="3" />
							<label class="star" for="star3" title="Very good" aria-hidden="true"></label>
							<input type="radio" id="star2" name="rating" value="4" />
							<label class="star" for="star2" title="Good" aria-hidden="true"></label>
							<input type="radio" id="star1" name="rating" value="5" />
							<label class="star" for="star1" title="Bad" aria-hidden="true"></label>
						</div>
						<div class="form-group">
							<textarea name="message" placeholder="Mention Your Comment"></textarea>
						</div>
						<button type="submit" class="btn btn-danger btn-lg btn-block mt-3">Submit</button>

					    </form>
						@else
						<a href="{{ url('/user/login') }}" style="height:50px; width:150px; background-color:green; display:inline-block; text-align:center; color:white; font-size:22px;">Login</a>
					    @endif

				  	 </div>			
				  	  <script type="text/javascript">
								/* place inside document ready function */
								$(".rating").starRating({
								minus: true // step minus button
							});
					  </script>	
				</div>
			  </div>
		    </div>
	    </div>
      </div>
				   <div class="rightsidebar span_3_of_1 sidebar">
					<h3>Popular Products</h3>
					<ul class="popular-products">
						<li>
							 <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
							  <a href="preview.html"><img src="{{ asset('/frontend/assets/') }}/images/product-img2.jpg" alt="" /></a>
							  <div class="price-details">
						       <div class="price-number">
									<p><span class="rupees line-through">$899.95 </span> &nbsp; <span class="rupees">$839.93 </span></p>
							    </div>
							       		<div class="add-cart">								
											<h4><a href="preview.html">More Info</a></h4>
									     </div>
									 <div class="clear"></div>
							</div>					 
						</li>
						<li>
							 <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
							  <a href="preview.html"><img src="{{ asset('/frontend/assets/') }}/images/product-img3.jpg" alt="" /></a>
							  <div class="price-details">
						       <div class="price-number">
									<p><span class="rupees line-through">$899.95 </span> &nbsp; <span class="rupees">$839.93 </span></p>
							    </div>
							       		<div class="add-cart">								
											<h4><a href="preview.html">More Info</a></h4>
									     </div>
									 <div class="clear"></div>
							</div>					 
						</li>
						<li>
							 <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
							  <a href="preview.html"><img src="{{ asset('/frontend/assets/') }}/images/product-img4.jpg" alt="" /></a>
							  <div class="price-details">
						       <div class="price-number">
									<p><span class="rupees line-through">$899.95 </span> &nbsp; <span class="rupees">$839.93 </span></p>
							    </div>
							       		<div class="add-cart">								
											<h4><a href="preview.html">More Info</a></h4>
									     </div>
									 <div class="clear"></div>
							</div>					 
						</li>
				     </ul>
				    
      				   <div class="community-poll">
      				 	<h3>Community POll</h3>
      				 	<p>What is the main reason for you to purchase products online?</p>
      				 	<div class="poll">
      				 		<form>
      				 			<ul>
									<li>
									<input type="radio" name="vote" class="radio" value="1">
									<span class="label"><label>More convenient shipping and delivery </label></span>
									</li>
									<li>
									<input type="radio" name="vote" class="radio" value="2">
									<span class="label"><label for="vote_2">Lower price</label></span>
									</li>
									<li>
									<input type="radio" name="vote" class="radio" value="3">
									<span class="label"><label for="vote_3">Bigger choice</label></span>
									</li>
									<li>
									<input type="radio" name="vote" class="radio" value="5">
									<span class="label"><label for="vote_5">Payments security </label></span>
									</li>
									<li>
									<input type="radio" name="vote" class="radio" value="6">
									<span class="label"><label for="vote_6">30-day Money Back Guarantee </label></span>
									</li>
									<li>
									<input type="radio" name="vote" class="radio" value="7">
									<span class="label"><label for="vote_7">Other.</label></span>
									</li>
									</ul>
      				 		</form>
      				 	</div>
      				 </div>
					</div>
 		 		   </div>
 		 		</div>
   	 		</div>
   	 		<div class="content_top">
    	        	<div class="wrap">
		          	   <h3>Recently Viewed</h3>
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
        </div>
		<!--content-->
@endsection