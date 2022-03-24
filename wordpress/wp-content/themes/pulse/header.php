<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>  
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <header class="header">
        <section class="div first-header">
            <a class="link" href="https://www.epitech-it.es/">Barcelone </a>
            <a class="link" href="https://www.epitech-it.de/"> - Berlin </a>
            <a class="link" href="https://www.epitech.eu/fr/ecole-informatique-bordeaux/"> - Bordeaux </a>
            <a class="link" href="https://www.epitech-it.be/"> - Bruxelles </a>
            <a class="link" href="<?php echo home_url( '/' ); ?>"> - Cotonou </a>
            <a class="link" href="https://www.epitech.eu/fr/ecole-informatique-lille/"> - Lille </a>
            <a class="link" href="https://www.epitech.eu/fr/ecole-informatique-lyon/"> - Lyon </a>
            <a class="link" href="https://www.epitech.eu/fr/ecole-informatique-marseille/"> - Marseille </a>
            <a class="link" href="https://www.epitech.eu/fr/ecole-informatique-montpellier/"> - Montpellier </a>
            <a class="link" href="https://www.epitech.eu/fr/ecole-informatique-mulhouse/"> - Mulhouse </a>
            <a class="link" href="https://www.epitech.eu/fr/ecole-informatique-nancy/"> - Nancy </a>
            <a class="link" href="https://www.epitech.eu/fr/ecole-informatique-nantes/"> - Nantes </a>
            <a class="link" href="https://www.epitech.eu/fr/ecole-informatique-nice/"> - Nice </a>
            <a class="link" href="https://www.epitech.eu/fr/ecole-informatique-paris/"> - Paris </a>
            <a class="link" href="https://www.epitech.eu/fr/ecole-informatique-rennes/"> - Rennes </a>
            <a class="link" href="https://www.epitech.eu/fr/ecole-informatique-saint-andre/"> - Saint André </a>
            <a class="link" href="https://www.epitech.eu/fr/ecole-informatique-strasbourg/"> - Strasbourg </a>
            <a class="link" href="https://www.epitech.al/"> - Tirana </a>
            <a class="link" href="https://www.epitech.eu/fr/ecole-informatique-toulouse/"> - Toulouse </a>
        </section>

        <section class="div second-header" id="responsivity">
            <a class="logo" href="<?php echo home_url( '/' ); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" width="45px" alt="Logo">
            </a>
            <div class="dropdown">
                <button class="dropbtn capitalize">l'école
                <span class="material-icons">keyboard_arrow_down</span>
                </button>
                <div class="dropdown-content">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn capitalize">nos formations
                <span class="material-icons">keyboard_arrow_down</span>
                </button>
                <div class="dropdown-content">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
            </div>
            <a class="capitalize" href="<?php echo home_url( '/contact' ); ?>">actualités</a>   
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>         
            <a class="capitalize button-blue" href="<?php echo home_url( '/contact' ); ?>">
                nous contacter &nbsp;
                <span class="material-icons">
                    mail_outline
                </span>
            </a>
        </section>
        <?php
            echo "
                <script type=\"text/javascript\">
                    function myFunction() {
                        var x = document.getElementById('responsivity');
                        if (x.className === 'second-header') {
                            x.className += ' responsive;
                        } else {
                            x.className = 'second-header';
                        }
                    }
                </script>
            ";
        ?>
    </header>