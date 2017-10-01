<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BeOnePage
 */

?>

	<?php $home = get_page_by_title('Home'); ?>
    <nav id="footer">
        <div class="container">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <h3 class="footer-title">O EPEC</h3>
                <p class="text-footer"> Escritório Piloto de Engenharia Civil (EPEC), uma empresa júnior formada por graduandos de Engenharia Civil da UFSC, fundada em 1994. </p>
            </div>
		
			<div class="pull-left  col-md-4 col-sm-12 col-xs-12">
                <h3 class="footer-title">CONTATO</h3>
				<p class="text-footer"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tel.1.png" alt="telefone"><?php the_field('telefone', $home); ?></p>
				<p class="text-footer"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/msg.1.png" alt="email"></i> <?php the_field('email', $home);?></p>
			</div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <h3 class="footer-title">REDES SOCIAIS</h3>
                <ul class="footer-social text-center">
                    <li class="icon"><a href="https://www.facebook.com/epec.ej/" target="_blank"><i id="ft" class="fa fa-facebook"></i></a></li>
                    <li class="icon"><a href="https://www.instagram.com/epec_ej/" target="_blank"><i id="ft" class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
		</div> <!-- fim do container -->
				<div class="text-center ">
					<p class="footer-brand"> Todos os direitos reservados © <?php the_date('Y'); ?> | <?php bloginfo('name'); ?> Desenvolvido por <a href="https://www.facebook.com/elabora.ej/"><u>Elabora - Conteúdo Criativo </u></a></p>
            </div>
    </nav>
	

<?php wp_footer(); ?>

</body>
</html>