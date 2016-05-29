<!DOCTYPE html>
<html>
	<head>
		<?php get_header(); ?>
	</head>
	<body>
		<h1><a href="<?php echo esc_url( home_url( '/' ) );?>" rel="home"><?php
		bloginfo( 'name' ); ?></a></h1>
		<p><?php bloginfo( 'description' ); ?></p>
		<img src="<?php bloginfo('stylesheet_directory'); ?>/logo.png alt="Logo" >
		<?php wp_nav_menu( array('theme_location' => 'mainmenu') );  ?>
				
		<!-- Gibt es mindestens einen Beitrag? -->
		<?php if ( have_posts() ) : ?>

		<!-- Dann nacheinander alle Beitraege ausgeben: -->
		<?php while ( have_posts() ) : the_post(); ?>

		<!-- Hier den Beitrag anzeigen -->
		<article>
				<header>
					 <!-- Seine ueberschrift -->
					 <h1> <a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a> </h1>
					 <!-- Sein Autor -->
					 Verfasst von <?php the_author_posts_link(); ?>
					 <!-- Sein Veoeffentlichungsdatum -->
					 am <?php the_date(); ?>
					 <!-- Die Kategorie des Beitrags -->
					 <?php the_category(); ?>
				</header>
					<!-- Zeige den Inhalt an -->
					<?php the_content(); ?>
					<!-- Hinweis auf Kommentare -->
					<p> <?php comments_popup_link('Kein Kommentar abgegeben', 'Ein Kommentar	vorhanden', '% Kommentare vorhanden', '', 'Kommentare geschlossen'); ?> </p>
			</article>
		<?php endwhile; ?>

		 <!-- Sofern es keinen Beitrag gibt, darauf hinweisen: -->
		 <?php else : ?>
		  <p>Es gibt keine Beitraege!</p>
		<?php endif; ?>

		<?php wp_footer(); ?>

</body>
</html>
