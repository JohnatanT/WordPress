<?php get_header(); ?>

<div class="conteudo">
	<main>
		<section class="slide container">
			Slide
		</section>
		<section class="servicos container">
			Serviços
		</section>
		<section class="meio container">
			<div class="row">
				<aside class="col-md-3">
					Barra lateral
				</aside>
				<div class="noticias col-md-9">
					<?php if(have_posts()):
							while (have_posts()) :
								the_post();
							
					?>
					<!-- Funciona como um inlude: Primeiro parametro é o arquivo e o segundo a especificação -->
					<?php get_template_part('content', get_post_format() ); ?>


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
		<section class="mapa container">
			Mapa
		</section>
		<div class="barra-lateral">
			<!-- Indentifica o arquivo sidebar-home.php -->
			<?php get_sidebar('home'); ?>
		</div>
	</main>
</div>

<?php get_footer(); ?>
