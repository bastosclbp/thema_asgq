<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://kit.fontawesome.com/5e94c598ae.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/asgq-ico.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/grid.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" />
    <title><?php bloginfo('name'); ?> <?php wp_title('-'); ?></title>

    <!-- Inicio Wordpress Header -->
    <?php wp_head(); ?>
    <!-- Final Wordpress Header -->

</head>

<!-- Site Icons: https://fontawesome.com/v5.15/icons?d=gallery&p=2&m=free -->

<body>
    <!-- Barra Governo -->
    <div id="barra-brasil" style="
        width: 0;
        background: #7f7f7f;
        height: 20px;
        padding: 0 0 0 10px;
        display: block;
      ">
        <ul id="menu-barra-temp" style="list-style: none">
            <li style="
            display: inline;
            float: left;
            padding-right: 10px;
            margin-right: 10px;
            border-right: 1px solid #ededed;
          ">
                <a href="http://brasil.gov.br" style="
              font-family: sans, sans-serif;
              text-decoration: none;
              color: white;
            ">Portal do Governo Brasileiro</a>
            </li>
            <li>
                <a style="
              font-family: sans, sans-serif;
              text-decoration: none;
              color: white;
            " href="http://epwg.governoeletronico.gov.br/barra/atualize.html">Atualize sua Barra de Governo</a>
            </li>
        </ul>
    </div>
    <!-- Header ASOCEA -->
    <div style="background: no-repeat center center url('https://servicos.decea.mil.br/portal/barra/bg.cfm?refresh=9C5E6046-0B40-4CDD-B8C2-043FC6B73115') #005288;"
        class="header_asocea">
        <div class="container dom">
            <div class="grid-6">
                <a href="http://www.asocea.aer.mil.br/"
                    title="Assessoria de Segurança Operacional do Controle do Espaço Aéreo"><img class="dom_asocea"
                        src="<?php echo get_template_directory_uri(); ?>/img/dom_asocea_shadow_site_logo.png" alt="DOM ASOCEA" />
                    <p class="p_asocea">
                        Assessoria de Segurança Operacional do Controle do Espaço Aéreo
                    </p>
                </a>
            </div>
        </div>
    </div>
    <!-- Header ASGQ -->
    <div class="container">
        <header>
            <div class="grid-8 logo_asgq">
                <a href="../asgq/home/">
                    <img class="asgq" src="<?php echo get_template_directory_uri(); ?>/img/Logo-ASGQ.svg" alt="LOGO ASGQ"
                        title="Assessoria do Sistema de Gestão da Qualidade" />
                </a>
            </div>
            <!-- Início Menu -->
            <?php include(TEMPLATEPATH . "/inc/header-nav.php") ?>
        </header>
        
    </div>