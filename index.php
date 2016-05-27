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
		
<!-- Gibt es mindestens einen Beitrag? -->
<?php if ( have_posts() ) : ?>

<!-- Dann nacheinander alle Beiträge ausgeben: -->
<?php while ( have_posts() ) : the_post(); ?>

<!-- Hier den Beitrag anzeigen -->
<article>
		<header>
			 <!-- Seine Überschrift -->
			 <h1> <a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a> </h1>
			 <!-- Sein Autor -->
			 Verfasst von <?php the_author_posts_link(); ?>
			 <!-- Sein Veröffentlichungsdatum -->
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
  <p>Es gibt keine Beiträge!</p>
<?php endif; ?>