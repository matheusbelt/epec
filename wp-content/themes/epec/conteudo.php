<?php



/**



 * Template Name: Conteudo



 *



 * @package WordPress



 * @subpackage Elabora



 * @since Elabora 2016



 */







get_header(); ?>



	<!-- Home Page



    ==========================================-->







     <div id="tf-home" class="text-center">



      <div class="container">



      <div class="overlay">



      <div class="hero">



        <!-- Home Slider -->



        <div class="home-slider">



          <ul class="slides">



            <li>



              <h1 class="hero-h1">PROBLEMAS<br>NO SEU IMÓVEL?</h1>



            </li>



            <li>



              <h1 class="hero-h1">EPEC,<br>SOLUÇÕES EM ENGENHARIA CIVIL</h1>



            </li>



          </ul>



        </div>



	<!-- End Home Slider -->



        <p class="center"><a href="http://epec-ufsc.com.br/visita-tecnica/" class="btn btn-empty btn-lg">Agende uma visita técnica</a></p>



      </div>



    </div>



    </div>



  <!-- End Home Section -->	



	</div>







    <!-- About Us Page



    ==========================================-->



<section id="tf-about">



	<div class="overlay">



	  <div class="container-fluid">



			<div class="section-title center">



        <h2 class="text-center">Nossos Serviços</h2>



        <div class="line"></div>



			</div>



    </div> <!-- fim do titulo/ container-fluid -->		







    <div class="container">



     <div class="row">



      <div class="col-md-3 col-sm-4">



    		<div class="about-text">



    			<img src="<?php the_field('imagem_servico_01') ?>">



    		</div>                   



      </div> <!-- fim do col-md-3 com a imagem -->



    	<div class="col-md-8 col-sm-7 col-sm-offset-1">



    		<h3 class="subtitulo-section"><?php the_field('servico_01'); ?><h3>



            <p class="intro"><?php the_field('texto_servico_01'); ?></p>



    	</div> <!-- fim do col-md-8 -->



    </div> <!-- fim do primeiro row -->



     







    <!-- novo bloco de informação -->



    <div class="row servico-abaixo">



      <div class="col-md-8 col-sm-7 ">



        <h3 class="subtitulo-section"><?php the_field('servico_02'); ?><h3>



            <p class="intro"><?php the_field('texto_servico_02'); ?></p>



      </div> <!-- fim do col-md-8 -->



      <div class="col-md-3 col-md-offset-1 col-sm-4">



        <div class="about-text img-servico">



          <img src="<?php the_field('imagem_servico_02') ?>">



        </div>                   



      </div> <!-- fim do col-md-3 com a imagem -->



    </div> <!-- fim do segundo row -->











  <!-- novo bloco de informação -->



    <div class="row servico-abaixo">



      <div class="col-md-3 col-sm-4">



        <div class="about-text">



          <img src="<?php the_field('imagem_servico_03') ?>">



        </div>                   



      </div> <!-- fim do col-md-3 com a imagem -->



      <div class="col-md-8 col-sm-7 col-sm-offset-1">



        <h3 class="subtitulo-section"><?php the_field('servico_03'); ?><h3>



            <p class="intro"><?php the_field('texto_servico_03'); ?></p>



      </div> <!-- fim do col-md-8 -->



    </div> <!-- fim do terceiro row -->


  <?php if( have_rows('servicos_adicional') ): while( have_rows('servicos_adicional') ): the_row(); ?>
       <div class="row">

      <div class="col-md-3 col-sm-4">

        <div class="about-text">

          <img src="<?php the_sub_field('imagem_servico_adicional_01') ?>">

        </div>                   

      </div> <!-- fim do col-md-3 com a imagem -->

      <div class="col-md-8 col-sm-7 col-sm-offset-1">

        <h3 class="subtitulo-section"><?php the_sub_field('servico_adicional_01'); ?><h3>

            <p class="intro"><?php the_sub_field('texto_adicional_servico_01'); ?></p>

      </div> <!-- fim do col-md-8 -->

    </div> <!-- fim do primeiro row -->


    
    <div class="row servico-abaixo">

      <div class="col-md-8 col-sm-7 ">

        <h3 class="subtitulo-section"><?php the_sub_field('servico_adicional_02'); ?><h3>

            <p class="intro"><?php the_sub_field('texto_adicional_servico_02'); ?></p>

      </div> <!-- fim do col-md-8 -->

      <div class="col-md-3 col-md-offset-1 col-sm-4">

        <div class="about-text img-servico">

          <img src="<?php the_sub_field('imagem_servico_adicional_02') ?>">

        </div>                   

      </div> <!-- fim do col-md-3 com a imagem -->
    </div> <!-- fim do segundo row -->

    <?php endwhile; ?>
  <?php endif; ?>




</div><!--fim do container  -->



  </div> <!-- fim do overlay -->



</section> <!-- fim da section -->







       







	  <!-- Quem Somos -->    



  <section id="portfolio" class="section">



    <div class="container">



      <div class="title col-md-8 col-sm-10 col-xs-12">



         <div class="text-center center">



            <h2 class="font300">Quem Somos</h2>



            <div class="line"></div>



      		</div>



       </div>







       <div class="row">



         <div class="col-md-9 col-sm-8 quem-somos">



           <h3 class="subtitulo-section">Um Pouco Sobre Nós<h3>



           <p class="intro">Fazemos parte do Movimento Empresa Júnior, que é formado por <strong>organizações sem fins lucrativos</strong>, tendo nascido na França em 1967 e chego ao Brasil em 1988, contando hoje com mais de 15 mil membros. Temos como propósito a busca por um Brasil empreendedor, trabalhando para formar pessoas comprometidas e capazes de transformar o país por meio da realização de mais e melhores projetos.



           </p>



           <a href="http://epec-ufsc.com.br/empresa/" class="empresa-button"><button class="btn btn-empty btn-small">A Empresa</button></a>



         </div> <!-- fim do bloco de texto -->



         <div class="col-md-3 col-sm-4 quem-somos-img-mobile">



           <img src="<?php echo bloginfo('template_directory'); ?>/img/quem-somos-certificado.png" alt="certificado epec" class="quem-somos-img">



         </div><!--  fim da imagem -->



       </div> <!-- fim do row -->



    </div><!-- fim do container -->				



</section>



						











	<!-- Portifolio



    ========================================== -->



    <section id="tf-services">



      <div class="container-fluid bg-textura">



          <div class="section-title center">



            <h2>Portfólio</h2>



            <div class="line line-small"></div>



			    </div> 



      </div>



      <div class="container">



          <div class="row">



            <div class="col-md-9 col-md-offset-2 col-xs-12 portfolio-texto">



              <p class="intro">Os serviços são realizados por um consultor, que realiza a parte técnica, orientados e revisados por um professor especializado no assunto e gerenciados por um membro do EPEC. A empresa funciona sem fins lucrativos e todos os recursos provindos das consultorias são para o custeamento das atividades e para a capacitação dos membros.</p>



            </div>



        </div>



        <?php include(TEMPLATEPATH . "/inc/portfolio.php"); ?>



    </div>



  </section> 







 <!-- ´Números EPEC



    ==========================================-->



  <section id="tf-clients">    



    <div class="container">



			<div class="section-title center">



        <h2>Números EPEC</h2>



        <div class="line line-small"></div>



      </div> <!-- fim do titulo -->



      <div class="col-md-4 numeros-epec Opens-Sans-Light"><p><span class="destaque-numero"><?php the_field('numero_01');?></span> <span class="destaque-texto"><?php the_field('medida_01');?></span><br><?php the_field('frase_01');?></p></div>



      <div class="col-md-4 numeros-epec Opens-Sans-Light"><p><span class="destaque-numero"><?php the_field('numero_02');?></span><?php the_field('medida_02');?><br> <?php the_field('frase_02');?></p></div>



      <div class="col-md-4 numeros-epec Opens-Sans-Light"><p><span class="destaque-numero"><?php the_field('numero_03');?></span><span class="destaque-texto"><?php the_field('medida_03');?></span><br><?php the_field('frase_03');?></p></div>



    </div> <!-- fim do container -->



</section>



	



				



    <!-- Depoimentos



    ==========================================-->



    <section id="testimonials">



      <div class="container">



        <div class="row">



          <div class="text-center">



            <?php echo do_shortcode('[tmls_saved id="50"]'); ?>



          </div>



        </div>



      </div>



    </section>



	



<!-- Blog



    ==========================================-->



    <div id="tf-blog" class="text-center">



			<div class="overlay">



        <div class="container-fluid titulo-blog">



          <div class="section-title  center">



            <h2>Nosso BLOG</h2>



            <div class="line line-small "></div>



			    </div>



        </div> <!-- fim do titulo -->







        <div class="container">



        <?php $blogargs = array(



        'category__not_in' => array( 22, 21, 20 ),



        'posts_per_page' => 3,



        )



        ?>



    <?php $blog = new WP_Query( $blogargs ) ?>



				 <?php if ( $blog->have_posts() ) : while ( $blog->have_posts() ) : $blog->the_post(); ?>



          <div class="col-md-3 back-blog ">



						<a href="<?php the_permalink(); ?>"><img class="img-responsive col-md-12 col-sm-6 img-blog" src=<?php the_post_thumbnail(); ?></a>



				



                  <a href="<?php the_permalink(); ?>"><h4 class="title-blog"><?php the_title(); ?><br></h4></a>



                  <p class="text-blog"><?php the_excerpt(); ?></p>



					        <p class="bt-blog"><a class="link-blog myriad" href="<?php the_permalink(); ?>"> Leia Mais</a> </p></div>



				    <div class="col-md-1"></div>



                    </ol>



     <?php endwhile; ?>



<?php endif; ?>	



				<p class="pull-right button-blog"><a href="http://epec-ufsc.com.br/blog/" class="btn btn-empty btn-small">Ver todos</a></p>



				



            </div>



        </div>



    </div>



</div>







<!-- segundo call to action



    ============================== -->



    <section id="second-cta" class="text-center">



        <div class="container-fluid titulo-blog second-cta">



          <div class="section-title  center">



            <h2>Solucione seus Problemas agora</h2>



            <a href="http://epec-ufsc.com.br/visita-tecnica/" class="btn btn-empty btn-lg btn-second">Agende uma visita técnica</a></p>



          </div>



        </div> <!-- fim do titulo -->



    </section>



			







<?php get_footer(); ?>