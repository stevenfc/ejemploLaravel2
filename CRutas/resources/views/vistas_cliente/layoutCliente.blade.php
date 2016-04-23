<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Modus-Versus a bootstrap Website Template | Home :: w3layouts</title>
<!-- Bootstrap -->
<link href="cliente/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="cliente/css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="cliente/css/blue.css" rel="stylesheet" type="text/css" media="all" />
<!--font-Awesome-->
   	<link rel="stylesheet" href="cliente/fonts/css/font-awesome.min.css">
<!--font-Awesome-->
<!-- start plugins -->
<script type="text/javascript" src="cliente/js/jquery.min.js"></script>
<script type="text/javascript" src="cliente/js/bootstrap.js"></script>
<script type="text/javascript" src="cliente/js/bootstrap.min.js"></script>
<!--start slider -->
    <link rel="stylesheet" href="cliente/css/fwslider.css" media="all">
    <script src="cliente/js/jquery-ui.min.js"></script>
    <script src="cliente/js/css3-mediaqueries.js"></script>
    <script src="cliente/js/fwslider.js"></script>
<!--end slider -->
<!-- must have -->
<link href="cliente/css/allinone_carousel.css" rel="stylesheet" type="text/css">
<script src="cliente/js/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
<script src="cliente/js/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
<script src="cliente/js/allinone_carousel.js" type="text/javascript"></script>
<!--[if IE]><script src="js/excanvas.compiled.js" type="text/javascript"></script><![endif]-->
<!-- must have -->
	<!--<script>
		jQuery(function() {

			jQuery('#allinone_carousel_charming').allinone_carousel({
				skin: 'charming',
				width: 990,
				height: 454,
				responsive:true,
				autoPlay: 3,
				resizeImages:true,
				autoHideBottomNav:false,
				showElementTitle:false,
				verticalAdjustment:50,
				showPreviewThumbs:false,
				//easing:'easeOutBounce',
				numberOfVisibleItems:5,
				nextPrevMarginTop:23,
				playMovieMarginTop:0,
				bottomNavMarginBottom:-10
			});		
		});
	</script>-->
<!-- Owl Carousel Assets -->
<link href="cliente/css/owl.carousel.css" rel="stylesheet">
<!---<script src="js/owl.carousel.js"></script>
		<script>
			$(document).ready(function() {

				$("#owl-demo").owlCarousel({
					items : 4,
					lazyLoad : true,
					autoPlay : true,
					navigation : true,
					navigationText : ["", ""],
					rewindNav : false,
					scrollPerPage : false,
					pagination : false,
					paginationNumbers : false,
				});

			});
		</script>
		 Owl Carousel Assets -->
<!-- start circle -->
<!--<script>
(function($){
	$.fn.percentPie = function(options){

		var settings = $.extend({
			width: 100,
			trackColor: "EEEEEE",
			barColor: "E2534B",
			barWeight: 30,
			startPercent: 0,
			endPercent: 1,
			fps: 60
		}, options);

		this.css({
			width: settings.width,
			height: settings.width
		});

		var	that = this,
			hoverPolice = false,
			canvasWidth = settings.width,
			canvasHeight = canvasWidth,
			id = $('canvas').length,
			canvasElement = $('<canvas id="'+ id +'" width="' + canvasWidth + '" height="' + canvasHeight + '"></canvas>'),
			canvas = canvasElement.get(0).getContext("2d"),
			centerX = canvasWidth/2,
			centerY = canvasHeight/2,
			radius = settings.width/2 - settings.barWeight/2;
			counterClockwise = false,
			fps = 1000 / settings.fps,
			update = .01;
			this.angle = settings.startPercent;

		this.drawArc = function(startAngle, percentFilled, color){
			var drawingArc = true;
			canvas.beginPath();
			canvas.arc(centerX, centerY, radius, (Math.PI/180)*(startAngle * 360 - 90), (Math.PI/180)*(percentFilled * 360 - 90), counterClockwise);
			canvas.strokeStyle = color;
			canvas.lineWidth = settings.barWeight;
			canvas.stroke();
			drawingArc = false;
		}

		this.fillChart = function(stop){
			var loop = setInterval(function(){
				hoverPolice = true;
				canvas.clearRect(0, 0, canvasWidth, canvasHeight);

				that.drawArc(0, 360, settings.trackColor);
				that.angle += update;
				that.drawArc(settings.startPercent, that.angle, settings.barColor);

				if(that.angle > stop){
					clearInterval(loop);
					hoverPolice = false;
				}
			}, fps);
		}

		this.mouseover(function(){
			if(hoverPolice == false){
				that.angle = settings.startPercent;
				that.fillChart(settings.endPercent);
			}
		});

		this.fillChart(settings.endPercent);
		this.append(canvasElement);
		return this;
	}
}(jQuery));

$(document).ready(function() {

	$('.google').percentPie({
		width: 100,
		trackColor: "E2534B",
		barColor: "76C7C0",
		barWeight: 20,
		endPercent: .9,
		fps: 60
	});
  
  $('.moz').percentPie({
		width: 100,
		trackColor: "E2534B",
		barColor: "76C7C0",
		barWeight: 20,
		endPercent: .75,
		fps: 60
	});
  
  $('.safari').percentPie({
		width: 100,
		trackColor: "E2534B",
		barColor: "#76C7C0",
		barWeight: 20,
		endPercent: .5,
		fps: 60
	});
    
});
</script>-->
</head>
<body>
<div class="header_bg">
<div class="container">
	<div class="header">
		<div class="logo">
			<a href="index.html"><img src="cliente/images/logo.png" alt=""/></a>
		</div>
		<div class="h_menu">
		<a id="touch-menu" class="mobile-menu" href="#">Menu</a>
		<nav>
		<ul class="menu list-unstyled">
			<li class="activate"><a href="index.html">HOME</a></li>
			<li><a href="about.html">ABOUT</a></li>
			<li><a href="service.html">services</a></li>
			<li><a href="portfolio.html">PORTFOLIO</a>
			<ul class="sub-menu list-unstyled">
				<li><a href="portfolio.html">Portfolio Page</a></li>
				<li><a href="portfolio.html">Portfolio Page</a></li>
				<li><a href="portfolio.html">Portfolio Page</a>
					<ul class="list-unstyled">
						<li><a href="portfolio.html">Sub-Menu 1</a></li>
						<li><a href="portfolio.html">Sub-Menu 2</a></li>
						<li><a href="portfolio.html">Sub-Menu 3</a></li>
					</ul>
				</li>
			</ul>
			</li>
			<li><a href="blog.html">BLOG</a></li>
			<li><a href="feature.html">feature</a></li>
			<li><a href="contact.html">CONTACT</a></li>
		</ul>
		</nav>
		<script src="js/menu.js" type="text/javascript"></script>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
    <div id="fwslider"><!-- start slider -->
        <div class="slider_container">
            
            <!-- /Duplicate to create more slides -->
            <div class="slide">
                <img src="cliente/images/slider1.jpg">
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h4 class="title">Costa Rica</h4>
                        <p class="description">Pellentesque non neque egestas libero. Nam sed porta est. Vestibulum id massa eu odio rhoncus eleifend.</p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <img src="cliente/images/slider2.jpg">
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h4 class="title">Costa Rica</h4>
                        <p class="description">Pellentesque non neque egestas libero. Nam sed porta est. Vestibulum id massa eu odio rhoncus eleifend.</p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <img src="cliente/images/slider1.jpg">
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h4 class="title">Costa Rica</h4>
                        <p class="description">Pellentesque non neque egestas libero. Nam sed porta est. Vestibulum id massa eu odio rhoncus eleifend.</p>
                    </div>
                </div>
            </div>
            <!--/slide -->
        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
    </div><!--/slider -->
<div class="main_bg"><!-- start main -->
<div class="container">
	<div class="main_grid">
		<!--<div class="top_grid"><!-- start top_grid -->
				<!--<div class="col-md-10 span1_of_1">
						<h3>some of our top services</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
				</div>-->
				<!--<div class="col-md-2 span1_of_2">
					<a class="btn" href="single-page.html"></a>
				</div>-->
				<div class="clearfix"></div>
		<!--</div>-->
		<div class="span_of_4"><!-- start span_of_4 -->
			<!--<div class="col-md-3 span1_of_4">
				<div class="span4_of_list">
					<span class="active"><i class="fa fa-thumbs-o-up"></i></span>
					<h3>suspendisse</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
					<div class="read_more">
						<a class="btn btn-2 active" href="single-page.html">view more</a>
					</div>
				</div>
			</div>-->
			
			<div class="clearfix"></div>
		</div><!-- end span_of_4 -->
	</div>
</div>
</div>
<div class="main1_bg"><!-- start main1 -->
<div class="container">
	<!--<div class="main slider_text texxt-center">
		<h4>why modus versus</h4>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
</div>-->
</div>
<!-- start banner -->
<div id="bannerBg">
<div id="containingDiv">
            <div id="allinone_carousel_charming">
            	<div class="myloader"></div>
                <!-- CONTENT -->
                <ul class="allinone_carousel_list">
               	<!--	<li><img src="images/slider_pic1.jpg" alt="" class="img-responsive"/></li>-->
                   
                      
                </ul>    
          </div>
</div>
</div>
 <!-- end banner -->
</div>
<div class="main_btm"><!-- start main_btm -->
<div class="container">
	<div class="main span_of_3">
		<!--<div class="col-md-3 span1_of_3">
			<h4>why choose us?</h4>-->
			<!--<ul class="list-unstyled nav_list">
				<li><a href="#">Lorem ipsum dolor sit amet, consectetur</a></li>
				
			</ul>-->
		</div>	
		<div class="col-md-6 span1_of_3">
			<h5></h5>
				<!-- start circle -->
				<ul class="list-unstyled circle_list">
					<!--<li>
						<div class="safari chart">
						  <div class="tag">50%</div>
						</div>			
						<h4 class="style">meier</h4>			
					</li>
					<li>
						<div class="moz chart">
						  <div class="tag">75%</div>
						</div>			
						<h4 class="style">johnson</h4>			
					</li>
					<li>
						<div class="google chart">
						  <div class="tag">90%</div>
						</div>	
						<h4 class="style">junghanns</h4>					
					</li>-->
				</ul>
				<!-- end circle -->
		</div>	
		<div class="col-md-3 span1_of_3">
			<!--<h4>what client's say ?</h4>-->
			<!--<div class="clients">-->
			<!--	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos </p>-->
			<!--</div>-->
			
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="cau_hide">
	<div class="cursual"><!--  start cursual  -->
	<!--	<h4>our happy clients<span class="line"></span></h4>-->
	</div>
	<div id="owl-demo" class="owl-carousel"><!--start-img-cursual-->
		<!--<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c1.png" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c2.png" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c3.png" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c1.png" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c2.png" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c3.png" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c1.png" alt="Lazy Owl Image">
			</div>
		</div>	
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c4.png" alt="Lazy Owl Image">
			</div>
		</div>	
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c1.png" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c2.png" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c3.png" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c1.png" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c2.png" alt="Lazy Owl Image">
			</div>
		</div>-->
	</div><!--//End-img-cursual-->
	</div>
</div>
</div>
<div class="footer_bg"><!-- start footer -->
<div class="container">
	<div class="footer">
		<!--<div class="col-md-4 footer1_of_3">
			<div class="f_logo">
				<a href="index.html"><img src="images/logo.png" alt=""/></a>
			</div>		
			<p class="f_para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting</p>
			<p>Phone:&nbsp;<span>(00) 222 666 444</span></p>
			<span class="">Email:&nbsp;<a href="mailto:info@mycompany.com">info(at)mycompany.com</a></span>
		</div>-->
		<div class="col-md-2 footer1_of_3">
			<h4></h4>
			<ul class="list-unstyled f_list">
			<!--	<li><a href="#">Lorem ipsum dolor sit amet</a></li>
				<li><a href="#">Nullam nec sapien eget</a></li>
				<li><a href="#">Curabitur pellentesque</a></li>
				<li><a href="#">Mauris dictum neque</a></li>
				<li><a href="#">Lorem ipsum dolor sit</a></li>
				<li><a href="#">Nullam nec sapien</a></li>
				<li><a href="#">Curabitur mauris tempor </a></li>-->
			</ul>
		</div>
		<div class="col-md-2 footer1_of_3">
			<h4></h4>
			<ul class="list-unstyled f_list">
				<!--<li><a href="#">Lorem ipsum dolor sit amet</a></li>
				<li><a href="#">Nullam nec sapien eget</a></li>
				<li><a href="#">Curabitur pellentesque</a></li>
				<li><a href="#">Mauris dictum neque</a></li>
				<li><a href="#">Lorem ipsum dolor sit</a></li>
				<li><a href="#">Nullam nec sapien</a></li>
				<li><a href="#">Curabitur mauris tempor </a></li>-->
			</ul>
		</div>
		<div class="col-md-4 footer_of_3">
			<h4><span></span></h4>
			<!--<div class="blog_list">
				<div class="col-md-3 f_pic">
					<a href="blog.html"><img src="images/blog_pic1.jpg" alt="" class="img-responsive"/></a>	
				</div>
				<div class="col-md-9 f_text">
					<a href="blog.html"><p>Lorem Ipsum is simply dummy text of the this printing and typesetting industry.</p></a>
					<span>26, may 2014</span>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="blog_list">
				<div class="col-md-3 f_pic">
					<a href="blog.html"><img src="images/blog_pic2.jpg" alt="" class="img-responsive"/></a>
				</div>
				<div class="col-md-9 f_text">
					<a href="blog.html"><p>Lorem Ipsum is simply dummy text of the this printing and typesetting industry.</p></a>
					<span>17, June 2014</span>
				</div>
				<div class="clearfix"></div>
			</div>-->
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="footer1_bg"><!-- start footer1 -->
<div class="container">
	<div class="footer1">
		<div class="copy pull-left">
			<p class="link"><span>&#169; All rights reserved | Template by&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></span></p>
		</div>
		<div class="soc_icons pull-right">
			<ul class="list-unstyled text-center">
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-rss"></i></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
</body>
</html>