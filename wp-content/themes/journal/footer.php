<footer class="bg-dark text-light pt-5">
    <div class="container">


        <div class="row">
            <div class="col-6">
                <!-- Différents liens de la page -->
                <h4>Liens utiles:</h4>

                <?php wp_nav_menu( array(
				'theme_location' => 'footer-menu',
				'container' => false,
				'menu_class' => 'footer-menu'
			) ); ?>
            </div>
            <div class="col-6">
                <div class="text-center">
                    <!-- Icons réseaux Sociaux -->
                    <h3>Suivez nous sur nos réseaux sociaux:</h3>
                    <span><i class="fa-brands fa-twitter fa-2x" style="color: #00acee;"></i></span>
                    <span style="padding: 3vh;"><i class="fa-brands fa-facebook fa-2x"
                            style="color: #3b5998"></i></span>
                    <span><i class="fa-brands fa-instagram fa-2x"></i></span>
                </div>

            </div>
        </div>


        <!-- Copyright -->
        <p>&copy; <?php echo date('Y'); ?> Le Pays. Tout droits réserver.</p>
    </div>

</footer>
<?php wp_footer(); ?>
</body>

</html>