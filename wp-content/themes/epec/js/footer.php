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

	
    <nav id="footer">
        <div class="container">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <h3 class="footer-title">A EPEC</h3>
                <p class="text-footer"> UFPB – Campus I Centro de Ciências Sociais Aplicadas Bloco dos Centro Acadêmicos Sala da EJA Consultoria 1º Andar<br>João Pessoa/PB – CEP: 58050-725</p> <br>
            </div>
		
			<div class="pull-left  col-md-4 col-sm-12 col-xs-12">
                <h3 class="footer-title">CONTATO</h3>
				<p class="text-footer"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tel.1.png" alt="telefone">(83) 9 8610-8264</p>
				<p class="text-footer"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/msg.1.png" alt="email"></i> atendimento@ejaconsultoria.com.br</p>
			</div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <h3 class="footer-title">REDES SOCIAIS</h3>
                <ul class="footer-social text-center">
                    <li class="icon"><a href="https://www.facebook.com/epec.ej/" target="_blank"><i id="ft" class="fa fa-facebook"></i></a></li>
                    <li class="icon"><a href="https://www.instagram.com/epec_ej/" target="_blank"><i id="ft" class="fa fa-instagram"></i></a></li>
                    <li class="icon"><a href="#"><a href="#"><i id="ft" class="fa fa-vimeo-square" target="_blank"></i></a></li>
                    <li class="icon"><a href="https://plus.google.com/113294466295152632485/about" target="_blank"><i id="ft" class="fa fa-google-plus"></i></a></li>
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