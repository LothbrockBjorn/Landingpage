<!DOCTYPE html>
<html>
<head>
	<title>Landing Page Design Manga</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>
<body>
	<div class="wrapper">
	<header>
		<div class="logo">
			<img src="img/logo.png">
		</div>
		<div class="menu">
			<ul>
				<li><a href="">About</a></li>
				<li><a href="">Portfolio</a></li>
				<li><a href="">Contact</a></li>
			</ul>
		</div>
	</header>

	<div class="slider-wrap">
		<!-- Slider main container -->
		<div class="swiper-container">
		  <!-- Additional required wrapper -->
		  <div class="swiper-wrapper">
		    <!-- Slides -->
		    <div class="swiper-slide">
		    	<div class="slide-left">
		    		<h6 class="element">01</h6>
		    			<h1 class="element">Solo Leveling.</h1>
		    			<p class="element">Ten years ago, "the Gate" appeared and connected the real world with the realm of magic and monsters. To combat these vile beasts, ordinary people received superhuman powers and became known as "Hunters." Twenty-year-old Sung Jin-Woo is one such Hunter, but he is known as the "World's Weakest," owing to his pathetic power compared to even a measly E-Rank. Still, he hunts monsters tirelessly in low-rank Gates to pay for his mother's medical bills. </p>
		    		<a class="element" href="">Read More</a>
			    </div>
			    <div class="slide-right">
			    	<img src="img/slide-1.png">	
			    </div> 
			</div>

			<div class="swiper-slide">
		    	<div class="slide-left">
		    		<h6 class="element">02</h6>
		    			<h1 class="element">Sword Art Online.</h1>
		    			<p class="element">In the year 2022, virtual reality has progressed by leaps and bounds, and a massive online role-playing game called Sword Art Online (SAO) is launched. With the aid of "NerveGear" technology, players can control their avatars within the game using nothing but their own thoughts.</p>
		    		<a class="element" href="">Read More</a>
			    </div>
			    <div class="slide-right">
			    	<img src="img/slide-2.jpg">	
			    </div> 
			</div>

			<div class="swiper-slide">
		    	<div class="slide-left">
		    		<h6 class="element">03</h6>
		    			<h1 class="element" style="font-size: 45px;">Kimitsu No Yaiba.</h1>
		    			<p class="element">Ever since the death of his father, the burden of supporting the family has fallen upon Tanjirou Kamado's shoulders. Though living impoverished on a remote mountain, the Kamado family are able to enjoy a relatively peaceful and happy life. One day, Tanjirou decides to go down to the local village to make a little money selling charcoal. On his way back, night falls, forcing Tanjirou to take shelter in the house of a strange man, who warns him of the existence of flesh-eating demons that lurk in the woods at night.</p>
		    		<a class="element" href="">Read More</a>
			    </div>
			    <div class="slide-right">
			    	<img src="img/slide-3.jpg">	
			    </div> 
			</div>

			  <!-- If we need navigation buttons -->
			  <div class="swiper-button-prev"><img src="img/arrow-left.png"></div>
			  <div class="swiper-button-next"><img src="img/arrow-right.png"></div>
			</div>
		</div>
	</div>
	</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){

		const swiper = new Swiper('.swiper-container', {
		  // Optional parameters
		  loop: true,
		  effect: 'fade',
		  speed: 1500,

		  // Navigation arrows
		  navigation: {
		    nextEl: '.swiper-button-next',
		    prevEl: '.swiper-button-prev',
		  },
		});

		swiper.on('slideChangeTransitionStart', function(){

		anime({
		  targets: '.swiper-slide-active .slide-right img',
		  scaleX: [1.2, 1],
		  opacity: [0, 1],
		  easing: 'easeInOutQuart'
		});

		anime({
		  targets: '.swiper-slide-active .slide-left .element',
		  translateY: [50, 0],
		  opacity: [0, 1],
			 delay: anime.stagger(150, {start: 500}),
		  easing: 'easeInOutQuart'
		});

		});


		anime({
		  targets: 'header',
		  scaleX: [0, 1],
		  translateX: [-400, 0],
		  opacity: [0, 1],
		  easing: 'easeInOutQuart'
		});

		anime({
		  targets: '.logo img',
		  rotate: 360,
		  opacity: [0, 1],
		  delay: 500,
		  easing: 'easeInOutQuart'
		});

		anime({
		  targets: '.menu li',
		  translateY: [50, 0],
		  opacity: [0, 1],
			 delay: anime.stagger(200, {start: 700}),
		  easing: 'easeInOutQuart'
		});

		anime({
		  targets: '.slide-right img',
		  translateY: [1.2, 1],
		  opacity: [0, 1],
			 delay: anime.stagger(200, {start: 2000, from: 'last'}),
		  easing: 'easeInOutQuart'
		});

		anime({
		  targets: '.swiper-slide-active .slide-left .element',
		  translateY: [50, 0],
		  opacity: [0, 1],
			 delay: anime.stagger(200, {start: 1700}),
		  easing: 'easeInOutQuart'
		});

		anime({
		  targets: '.swiper-button-prev',
		  translateY: [310, 310],
		  translateX: [380, 480],
		  opacity: [0, 1],
			 delay: 3000,
		  easing: 'easeInOutQuart'
		});

		anime({
		  targets: '.swiper-button-next',
		  translateY: [310, 310],
		  translateX: [-651, -751],
		  opacity: [0, 1],
			 delay: 3000,
		  easing: 'easeInOutQuart'
		});

	});	
</script>
</body>
</html>
