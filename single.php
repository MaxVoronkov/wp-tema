<?php
get_header();

?>


<body class="page">  
		<div class="wrap">
			<div class="wrap_header">
				<a href="/en" class="logo">
					<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="logo"></div>
					<span>Quarantine Travel</span>
				</a>
				<a href="" class="lang">EN</a>
			</div>
		</div>
    <div class="wrap_page">
			<div class="wrap_ttl2">
				<h1><?php the_title();?><span>Дата открытия въезда</span></h1>
			 <div class="date">
<?php

$date = get_post_meta(get_the_ID(), 'open_date', true);
echo $date;
    


 ?>	
			 </div>
			</div>
			<div class="slider_js">
<?php

 if(have_posts()){ while (have_posts()) {the_post(); 
  //images название вашего произвольного поля
        $image_array = get_post_meta( get_the_ID(), 'slider_image', false ); //images название вашего произвольного поля
    
    if ( $image_array ) {
        foreach ( $image_array as $image ) {
        $fullimg = pods_image_url( $image['ID'], 'large');
        echo '<img src="'.  $fullimg . '">';
        }
    } 
} 
 }

 ?>

			</div>
			<div class="cnt">
				<div class="wrap_ttl">
					<h1><?php the_title();?></h1>
				 <div class="date"><span>Дата открытия въезда</span>
<?php

$date = get_post_meta($post->ID, 'open_date', true);
echo $date;
       
 ?>	

				 </div>
				</div>
				
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );


		endwhile; // End of the loop.
		    
		?>

				<div class="compra_wrap">
					<a href="" class="comprar">ВЫБРАТЬ САМЫЙ ДЕШЁВЫЙ БИЛЕТ</a>
					<a href="" class="share">
						<svg  viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g filter="url(#filter0_i)">
							<circle cx="30" cy="30" r="30" fill="#FF5631"/>
							</g>
							<path d="M36.625 33.5C35.2773 33.5 34.0469 33.9688 33.1094 34.7305L27.0742 30.9805C27.1328 30.6875 27.25 30.1016 27.25 29.75C27.25 29.457 27.1328 28.8711 27.0742 28.5781L33.1094 24.8281C34.0469 25.5898 35.2773 26 36.625 26C39.7305 26 42.25 23.5391 42.25 20.375C42.25 17.2695 39.7305 14.75 36.625 14.75C33.4609 14.75 31 17.2695 31 20.375C31 20.8438 31 21.2539 31.1172 21.6055L25.082 25.3555C24.1445 24.5938 22.9141 24.125 21.625 24.125C18.4609 24.125 16 26.6445 16 29.75C16 32.9141 18.4609 35.375 21.625 35.375C22.9141 35.375 24.1445 34.9648 25.082 34.2031L31.1172 37.9531C31.0586 38.2461 31 38.832 31 39.125C31 42.2891 33.4609 44.75 36.625 44.75C39.7305 44.75 42.25 42.2891 42.25 39.125C42.25 36.0195 39.7305 33.5 36.625 33.5Z" fill="white"/>
							<defs>
							<filter id="filter0_i" x="0" y="-5" width="60" height="65" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"/>
							<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
							<feOffset dy="-5"/>
							<feGaussianBlur stdDeviation="5"/>
							<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
							<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0"/>
							<feBlend mode="normal" in2="shape" result="effect1_innerShadow"/>
							</filter>
							</defs>
							</svg>
							
					</a>
				</div>
				<svg width="57" height="56" class="rect1" viewBox="0 0 57 56" fill="none" xmlns="http://www.w3.org/2000/svg">
					<g filter="url(#filter0_d)">
					<path d="M25.3679 23.4114L25.867 23.3814L26.1425 22.9642L33.4228 11.9377L40.7607 49.1781L12.1785 24.2031L25.3679 23.4114Z" stroke="#FF5631" stroke-width="2" stroke-linecap="square"/>
					</g>
					<defs>
					<filter id="filter0_d" x="0.74231" y="0.226685" width="55.6314" height="55.6314" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
					<feFlood flood-opacity="0" result="BackgroundImageFix"/>
					<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
					<feOffset/>
					<feGaussianBlur stdDeviation="2"/>
					<feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 0.337255 0 0 0 0 0.192157 0 0 0 1 0"/>
					<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
					<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
					</filter>
					</defs>
				</svg>
				<svg width="57" height="56" class="rect2" viewBox="0 0 57 56" fill="none" xmlns="http://www.w3.org/2000/svg">
					<g filter="url(#filter0_d)">
					<path d="M25.3679 23.4114L25.867 23.3814L26.1425 22.9642L33.4228 11.9377L40.7607 49.1781L12.1785 24.2031L25.3679 23.4114Z" stroke="#FF5631" stroke-width="2" stroke-linecap="square"/>
					</g>
					<defs>
					<filter id="filter0_d" x="0.74231" y="0.226685" width="55.6314" height="55.6314" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
					<feFlood flood-opacity="0" result="BackgroundImageFix"/>
					<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
					<feOffset/>
					<feGaussianBlur stdDeviation="2"/>
					<feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 0.337255 0 0 0 0 0.192157 0 0 0 1 0"/>
					<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
					<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
					</filter>
					</defs>
				</svg>
				<svg width="375" height="362" class="line_svg4" viewBox="0 0 375 362" fill="none" xmlns="http://www.w3.org/2000/svg">
					<g filter="url(#filter0_d12)">
					<path d="M0 16C61.8333 28.8333 183.3 84.7 174.5 205.5C165.7 326.3 304.5 349.5 375 346" stroke="#FF5631" stroke-dasharray="8 5"/>
					</g>
					<defs>
					<filter id="filter0_d12" x="-15.1016" y="0.510437" width="405.126" height="361.316" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
					<feFlood flood-opacity="0" result="BackgroundImageFix"/>
					<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
					<feOffset/>
					<feGaussianBlur stdDeviation="7.5"/>
					<feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 0.337255 0 0 0 0 0.192157 0 0 0 1 0"/>
					<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
					<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
					</filter>
					</defs>
					</svg>
					
					
			</div>
			<svg width="1437" height="290" class="line_svg3" viewBox="0 0 1437 290" fill="none" xmlns="http://www.w3.org/2000/svg">
				<g filter="url(#filter0_d99)">
				<path d="M16 274C97.6667 177.5 329.2 9.49973 610 97.4997C961 207.5 1045 240.5 1169.5 152.5C1294 64.4997 1424.5 12 1457 16" stroke="#FF5631" stroke-dasharray="8 5"/>
				</g>
				<defs>
				<filter id="filter0_d99" x="0.618347" y="0.286621" width="1471.44" height="289.036" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
				<feFlood flood-opacity="0" result="BackgroundImageFix"/>
				<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
				<feOffset/>
				<feGaussianBlur stdDeviation="7.5"/>
				<feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 0.337255 0 0 0 0 0.192157 0 0 0 1 0"/>
				<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
				<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
				</filter>
				</defs>
				</svg>
		</div>



<?php

get_footer();

?>

