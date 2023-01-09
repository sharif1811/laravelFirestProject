<div class="header">
  	  		<div class="wrap">
				<div class="header_top">
					<div class="logo">
						<a href="index.html"><img src="images/logo.png" alt="" /></a>
					  </div>
						    <div class="header_top_right">
							  <!-- <div class="search_box">
									<span>Search</span>
									<form>
										<input type="text" value=""><input type="submit" value="">
									</form>
					     		<div class="clear"></div>
					     	    </div> -->

								<div class="header-registar">
									<ul class="display-flex">

										<li><a href="#">Check Out</a></li>
										<li><a href="{{ url('/user/login') }}">User Login</a></li>
										<li><a href="{{ url('/user/registration') }}">User Registration</a></li>
										@if(session()->has('vendorId'))
										<li><a href="{{ url('/vendor/dashboard') }}" class="badge badge-success">{{ session()->get('vendorName') }}</a></li>
										<li><a href="{{ url('/vendor/logout') }}"class="badge badge-danger" onclick="return confirm('Are You Sure? You Want to log out ?')">Log Out</a></li>
										@else
										<li><a href="{{ url('/vendor/login') }}">Vendor Login</a></li>
										<li><a href="{{ url('/vendor/registar') }}">Vendor Registar</a></li>
										@endif

									</ul>
								</div>

					        </div>
			            <div class="clear"></div>
  		            </div>     
  		    <div class="navigation">
  		    	<a class="toggleMenu" href="#">Menu</a>
					<ul class="nav">
						<li>
							<a href="{{ url('/') }}">Home</a>
						</li>
						@foreach($catagories as $catagory)
							<li  class="test">
								<a href="#">{{ $catagory->name }}</a>
								<ul>
								@foreach($catagory->subcatagory as $subcatagory)
									
										<li><a href="#">{{ $subcatagory->name }}</a></li>
									
								@endforeach
								</ul>

							</li>
						@endforeach

					</ul>
					 <span class="left-ribbon"> </span> 
      				 <span class="right-ribbon"> </span>    
  		    </div>
  		     <div class="header_bottom">
			   <div class="slider-text">
			   	<h2>Lorem Ipsum Placerat <br/>Elementum Quistue Tunulla Maris</h2>
			   	<p>Vivamus vitae augue at quam frigilla tristique sit amet<br/> acin ante sikumpre tisdin.</p>
			   	<a href="#">Sitamet Tortorions</a>
	  	      </div>
	  	      <div class="slider-img">
	  	      	<img src="images/slider-img.png" alt="" />
	  	      </div>
	  	     <div class="clear"></div>
	      </div>
   		</div>
   </div>