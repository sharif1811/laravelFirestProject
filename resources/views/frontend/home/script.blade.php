<script type="text/javascript" src="{{ asset('/frontend/assets/') }}/js/jquery-1.9.0.min.js"></script> 
<script src="{{ asset('/frontend/assets/') }}/js/jquery.openCarousel.js" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('/frontend/assets/') }}/js/easing.js"></script>
<script type="text/javascript" src="{{ asset('/frontend/assets/') }}/js/move-top.js"></script>
<script type="text/javascript" src="{{ asset('/frontend/assets/') }}/js/navigation.js"></script>



<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href="{{ asset('/frontend/assets/') }}/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="{{ asset('/frontend/assets/') }}/js/jquery-1.9.0.min.js"></script> 
<script src="{{ asset('/frontend/assets/') }}/js/jquery.openCarousel.js" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('/frontend/assets/') }}/js/easing.js"></script>
<script type="text/javascript" src="{{ asset('/frontend/assets/') }}/js/move-top.js"></script>
<script src="{{ asset('/frontend/assets/') }}/js/easyResponsiveTabs.js" type="text/javascript"></script>
<link href="{{ asset('/frontend/assets/') }}/css/easy-responsive-tabs.css" rel="stylesheet" type="text/css" media="all"/>
 <script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });
   </script>		
<link rel="stylesheet" href="{{ asset('/frontend/assets/') }}/css/etalage.css">
<script src="{{ asset('/frontend/assets/') }}/js/jquery.etalage.min.js"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>
	  <script src="{{ asset('/frontend/assets/') }}/js/star-rating.js" type="text/javascript"></script>