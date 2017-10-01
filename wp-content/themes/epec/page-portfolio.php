<?php
/**
 *
 * Template Name: Portfolio
 * @package WordPress
 * @subpackage Elabora
 * @since Elabora 2017
 */
 get_header(); ?>

<header id="portfolio" class="text-center">
	<div class="container">
		<div class="overlay">
			<div class="hero hero-small">
              <h1>PORTFOLIO</h1>

  			</div>
		</div>
	</div>
  <!-- End Home Section -->	
</header><!-- .page-header -->

	<section class="empresa-apresentacao">
	<div class="container">
		<div class="col-xs-12 col-md-8 col-md-offset-2">
			<p class="empresa-p">Somos o Escritório Piloto de Engenharia Civil (<strong>EPEC</strong>), uma empresa júnior formada por graduandos de Engenharia Civil da UFSC, fundada em 1994. A empresa hoje trabalha, principalmente, na área de patologias de edificações (problemas como infiltrações, fissuras e corrosão de armadura), acompanhamento de obras e na manutenção predial, mas já realizou dos mais diversos projetos na área de Engenharia Civil. </p>
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

		<div class="row inscricao">
			<div class="col-md-6">
				<h2>Trainee</h2>
				<p>O processo seletivo do EPEC ocorre em três etapas: uma palestra onde explicamos aos futuros treinees o funcionamento da empresa, uma dinâmica em grupo e uma entrevista individual. Após isso, os selecionados passam por treinamentos dentro da empresa, onde são transmitidos os conhecimentos sobre nossos processos e produtos. Não perca a chance de obter ainda durante no início da sua graduação conhecimento técnico, sobre o mercado de trabalho, entender o funcionamento de uma empresa e ainda ver suas ideias saindo do papel. Venha fazer a diferença!</p>
			</div>
			<div class="col-md-6 col-xs-12 formulario-visita" id="form-trainee">
						<?php echo do_shortcode('[wpforms id="39"]'); ?>
			</div>
		</div>
	</div> <!-- fim do container -->
	</div> <!-- fim do container-fluid -->
	</section>
<?php get_footer(); ?>