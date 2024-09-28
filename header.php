<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-white text-gray-900 antialiased' ); ?>>

<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="min-h-screen flex flex-col">

	<?php do_action( 'tailpress_header' ); ?>

	<header>

		<div class="mx-auto container">
			<div class="lg:flex lg:justify-between lg:items-center border-b py-6">
				<div class="flex justify-between items-center">
					<div>
						<?php if ( has_custom_logo() ) { ?>
                            <?php the_custom_logo(); ?>
						<?php } else { ?>
							<a href="<?php echo get_bloginfo( 'url' ); ?>" class="font-extrabold text-lg uppercase">
								<?php echo get_bloginfo( 'name' ); ?>
							</a>

							<p class="text-sm font-light text-gray-600">
								<?php echo get_bloginfo( 'description' ); ?>
							</p>

						<?php } ?>
					</div>

					<div class="lg:hidden">
						<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
							<svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1"
								 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
									<g id="icon-shape">
										<path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"
											  id="Combined-Shape"></path>
									</g>
								</g>
							</svg>
						</a>
					</div>
				</div>

				<?php
				wp_nav_menu(
					array(
						'container_id'    => 'primary-menu',
						'container_class' => 'hidden bg-gray-100 mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
						'menu_class'      => 'lg:flex lg:-mx-4',
						'theme_location'  => 'primary',     
						'li_class_0'      => 'lg:mx-4 lg:relative group skewed-button hover:bg-red-600',
						'li_class_1'	  => 'text-gray-800 hover:text-black-700',
						'submenu_class'	  => 'lg:hidden group-hover:block lg:absolute lg:right-0 lg:rounded lg:w-48 lg:max-w-xl bg-gray-200 p-4 block',
						'fallback_cb'     => false,
					)
				);
				?>
			</div>
		</div>
	</header>

	<div id="content" class="site-content flex-grow w-full">

		<?php if ( is_front_page() ) { ?>
			 <!-- Start Photo Carousel -->
			
			
	<div class="slider w-full">
    <!-- Slide 1 -->
    <div class="slide w-full " >
		<img src= '<?php echo get_theme_mod( 'crsl_img_1' ); ?>' alt="Photo1"/>
      <h1 class="text-6xl font-bold text-blue-600 absolute bottom-0 left-1.5 right-2 text-left">
        <?php echo get_theme_mod( 'crsl_txt_1'); ?>
      </h1>
    </div>
    <!-- Slide 2 -->
    <div class="slide" >
		<img src= '<?php echo get_theme_mod( 'crsl_img_2' ); ?>' alt="Photo2"/>
      <h1 class="text-6xl font-bold text-blue-600 absolute bottom-0 left-1.5 right-2 text-left">
        <?php echo get_theme_mod( 'crsl_txt_2'); ?>
      </h1>
    </div>
	<!-- Slide 3 -->
    <div class="slide" >
		<img src= '<?php echo get_theme_mod( 'crsl_img_3' ); ?>' alt="Photo3"/>
      <h1 class="text-6xl font-bold text-blue-600 absolute bottom-0 left-1.5 right-2 p-4 text-left">
        <?php echo get_theme_mod( 'crsl_txt_3'); ?>
      </h1>
    </div>
	

	<button class="btn-slide prev"><i class="fas fa-solid fa-circle-chevron-left text-4xl text-gray-700"></i></button>
	<button class="btn-slide next"><i class="fas fa-solid fa-circle-chevron-right text-4xl text-gray-700"></i></button>
      
    </div>

    <div class="dots-container">
            <span class="dot active" data-slide="0"></span>
            <span class="dot" data-slide="1"></span>
            <span class="dot" data-slide="2"></span>
    </div>

		
  <!-- End Photo Carousel -->

			<!-- Start Hero -->
			<section class="hero min-h-screen bg-cover bg-center" style="background-image: url('https://source.unsplash.com/random');">
  <div class="container mx-auto px-4 py-16 text-center">
    <h1 class="text-6xl font-bold text-white">Welkom op onze website</h1>
    <p class="mt-4 text-2xl text-gray-300">Ontdek onze geweldige producten en diensten.</p>
    <button class="mt-8 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
      Meer weten
    </button>
	
 <!-- End Hero -->
<!-- Start Services -->
	<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4">
      <div class="p-4 md:w-1/3">
        <div class="h-full bg-gray-100 p-6 rounded-lg">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-16 h-16 text-indigo-500 mb-4" viewBox="0 0 24 24">
            <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
          </svg>
          <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Dienst 1</h2>
          <p class="leading-relaxed text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
      <div class="p-4 md:w-1/3">
        <div class="h-full bg-gray-100 p-6 rounded-lg">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-16 h-16 text-indigo-500 mb-4" viewBox="0 0 24 24">
            <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
          </svg>
          <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Dienst 2</h2>
          <p class="leading-relaxed text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
      <div class="p-4 md:w-1/3">
        <div class="h-full bg-gray-100 p-6 rounded-lg">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-16 h-16 text-indigo-500 mb-4" viewBox="0 0 24 24">
            <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
          </svg>
          <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Dienst 3</h2>
          <p class="leading-relaxed text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
    </div>
  </div>
</section>			
<!-- End Services -->

<!-- End introduction -->
		<?php } ?>

		<?php do_action( 'tailpress_content_start' ); ?>

		<main>
