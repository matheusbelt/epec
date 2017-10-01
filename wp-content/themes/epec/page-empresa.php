<?php
/**
 *
 * Template Name: Empresa
 * @package WordPress
 * @subpackage Elabora
 * @since Elabora 2017
 */
 get_header(); ?>

<header id="empresa" class="text-center">
		<div class="container">
			<div class="overlay">
				<div class="hero hero-small">
	              <h1>A EMPRESA</h1>
 
      			</div>
    		</div>
    	</div>
  <!-- End Home Section -->	
	</header><!-- .page-header -->

	<section class="empresa-apresentacao">
	<div class="container">
		<div class="col-xs-12 col-md-8 col-md-offset-2">
			<p class="empresa-p">O Escritório Piloto de Engenharia Civil (EPEC) é uma empresa júnior formada por graduandos de Engenharia Civil da UFSC, fundada em 1994. A empresa hoje trabalha, principalmente, na área de patologias de edificações (problemas como infiltrações, fissuras e corrosão de armadura), acompanhamento de obras e na manutenção predial, mas já realizou dos mais diversos projetos na área de Engenharia Civil. <br/>Fazemos parte do Movimento Empresa Júnior, que é formado por <strong>organizações sem fins lucrativos</strong>, tendo nascido na França em 1967 e chego ao Brasil em 1988, contando hoje com mais de 15 mil membros. Temos como propósito a busca por um Brasil empreendedor, trabalhando para formar pessoas comprometidas e capazes de transformar o país por meio da realização de mais e melhores projetos. </p>
		</div>
	</div>
			<div class="container-fluid bg-valores">
				<div class="container">
				<h2 class="letter-white">VALORES</h2>
				<p class="letter-gray"><?php the_field('valores'); ?></p>
			
				<h2 class="letter-white">MISSÃO</h2>
				<p class="letter-gray"><?php the_field('missao'); ?></p>
			
				<h2 class="letter-white">VISÃO</h2>
				<p class="letter-gray"><?php the_field('visao'); ?></p>
				</div>
			</div>
	
	<div class="text-center">
		<img src="<?php echo bloginfo('template_directory'); ?>/img/logo-maior.png" alt="EPEC LOGO" class="img-responsive logo-empresa">
	</div>
	<div class="container-fluid bg-textura bg-inscricao">
	<div class="container">
		<div class="row">
			<h1>INSCREVA-SE</h1>
			<div class="col-md-6 col-xs-12">
				<div class="line line-inscricao"></div>
			</div>
		</div>
		<div class="row inscricao">
			<div class="col-md-6">
				<h2>Consultor</h2>
				<p>Cansado de ficar preso ao conteúdo transmitido em sala de aula? O consultor do EPEC tem a chance de colocar o conhecimento em prática realizando consultorias. O serviço é remunerado e tem carga horária flexível, faça sua inscrição que entraremos em contato! </p>
			</div>
			<div class="col-md-6 col-xs-12 formulario-visita" id="form-consultor">
						<?php echo do_shortcode('[wpforms id="40"]'); ?>
			</div>
		</div>
	</div> <!-- fim do container -->
	</div> <!-- fim do container-fluid -->
	</section>
<?php get_footer(); ?>