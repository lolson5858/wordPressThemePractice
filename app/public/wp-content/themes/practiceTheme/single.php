<!--this is going to be very similar to the front-page.php, but I'll add
functionality to allow it to sort posts by type(articles, pictures, videos, etc)
    <?php
      get_header();
    ?>
   
		<article class="content px-3 py-5 p-md-5">
	    

    <?php
        if( have_posts() ){

          while( have_posts()){

            the_post();
            get_template_part( 'template-parts/content', 'article' );

          }

        }
    ?>

	  </article>
	  
    <!-- connections to js files made in functions.php-->
    <?php
      get_footer();
    ?>

