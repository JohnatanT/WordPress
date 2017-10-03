<?php get_header(); ?>

<div class="conteudo">
	<main>
		
		<section class="meio container">
			<div class="row">
				
				<div class="noticias col-md-9">
					<?php if(have_posts()):
							while (have_posts()) :
								the_post();
							
					?>
					<h1><?php the_title(); ?></h1>
					<p>Publicado em <?php get_the_date(); ?> por <?php the_author(); ?> </p>
					<p>Categorias <?php the_category(' '); ?> </p>
					<p><?php the_tags('Tags: ', ', ' ) ?></p>
					<p><?php the_content(); ?> </p>

					<?php  
						endwhile;
						else:
					?>	
					<p>Não tem nada ainda</p>

					<?php  
						endif;
					?>

				</div>
			</div>
		</section>
		
	</main>
</div>

<?php get_footer(); ?>
