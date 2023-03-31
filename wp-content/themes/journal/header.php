<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/css/main.css">
    <!-- Lien Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Lien FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>

    <!-- Style -->
    <style>
    header {
        background-color: #8BD1DF;


    }

    #navbarNav {
        justify-content: center;
        justify-content: space-evenly !important;

    }

    #navbar {
        padding-top: 2vh;
        display: flex !important;


    }


    #nav ul li {
        display: inline-block;
        margin-right: 7vh;


    }


    #nav ul li a {
        font-family: Roboto, 'Bold';
        color: black;
        font-size: 35px;
        text-decoration: none;

    }

    #nav ul li a:hover {
        color: #4A4A4A;

    }

    main {
        padding-top: 5vh;
    }

    .footer-menu ul li a {
        color: darkblue;
        font-weight: bold;

    }

    .footer-menu ul li a:hover {
        color: white;
    }

    .footer-menu ul {

        list-style: none;
    }

    .footer-menu ul li a {
        text-decoration: none;
    }
    </style>
</head>

<body <?php body_class(); ?>>
    <header>
        <!-- NavBar bootstrap -->
        <nav class="navbar navbar-expand-lg navbar-light test ">
            <!-- Logo qui permet de retourner à la page d'accueil -->
            <a class="navbar-brand pl-5" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/logo2.png" alt="My Site Logo" width="150">
            </a>
            <!-- Burger responsive -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" style="justify-content: end;" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Affichage des différentes pages dans la navbar -->
            <div class="collapse navbar-collapse " id="navbarNav">
                <?php wp_nav_menu( array(
						'theme_location' => 'header-menu',
						'container' => false,
						'menu_class' => 'd-lg-inline',
						'menu_id' => 'nav'
					) ); ?>
            </div>

        </nav>

    </header>

    <!DOCTYPE html>