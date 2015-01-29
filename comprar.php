<!DOCTYPE html>
 
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="css/menu.css"/>
        <link type="text/css" rel="stylesheet" href="css/general.css"/>
        <title>CookiCat: Comprar</title>
    </head>
    
    <body id="body_fondo">
        <div id="wrapper">
            <div>
            <div id="menu_navegacion">
                
                <?php /*
                //phpinfo();
                include_once './template/menu.php';*/
                ?><!--<ul>
<!--<ul>
    <li><a href="index.php">Inicio</a></li>
    <li><a href="contacto.php">Contacto</a></li>
</ul>
-->
<script src="js/jquery-1.7.2.min.js"></script>
<!--  javaScript -->
<script>  
<!--  // building select nav for mobile width only -->
$(function(){
	// building select menu
	$('<select />').appendTo('nav');

	// building an option for select menu
	$('<option />', {
		'selected': 'selected',
		'value' : '',
		'text': 'Elegir página...'
	}).appendTo('nav select');

	$('nav ul li a').each(function(){
		var target = $(this);

		$('<option />', {
			'value' : target.attr('href'),
			'text': target.text()
		}).appendTo('nav select');

	});

	// on clicking on link
	$('nav select').on('change',function(){
		window.location = $(this).find('option:selected').val();
	});
});

// show and hide sub menu
/*
 * $(function(){
	$('nav ul li').hover(
		function () {
			//show its submenu
			$('ul', this).slideDown(150);
		}, 
		function () {
			//hide its submenu
			$('ul', this).slideUp(150);	
                    }
		
	);
});
*/
//end
</script>
<!-- end -->
</head>
<body>
<div class="container">
			<!-- freshdesignweb top bar -->
            <div class="freshdesignweb-top">
               <!-- <a href="index.php">Inicio</a> -->
               <!-- <span class="right">
                    <a href="http://www.freshdesignweb.com/drop-down-responsive-menu-with-css3-and-jquery.html">
                        <strong>Back to the freshdesignweb Article</strong>
                    </a>
                </span>-->
                <div class="clr"></div>
            </div><!--/ freshdesignweb top bar -->
     <!-- start header here-->
	<header>
		<div id="fdw">
				<!--nav-->
					<nav>
						<ul id="menu_g">
                                                    <li ><a href="index.php">Inicio<span class="arrow"></span></a>
							</li>
                                                        <li><a href="producto.php">Producto</a></li>
                                                        <li><a href="imagenes.php">Im&aacute;genes<span class="arrow"></span></a>
								
							<li class="current">
                                                            <a href="comprar.php">Comprar<span class="arrow"></span></a>
							</li>
                                                        <li ><a href="contacto.php">Sobre Nosotros</a></li>
						</ul>
					</nav>
		</div><!-- end fdw -->
            </div>
                </div>
                <!-- CONTENIDO PRINCIPAL DE LA PAGINA -->
                <!-- CONTENIDO PRINCIPAL DE LA PAGINA -->
                <!-- CONTENIDO PRINCIPAL DE LA PAGINA -->
            <div id="cuerpo_principal">
                <div id="cont_cuerpo_principal">
                    <p>Comprameeeeeeeeeee!</p>
                </div>
            </div>
        </div>
    </body>
        <!--FOOTER DE LA PAGINA -->
    <!--FOOTER DE LA PAGINA -->
    <!--FOOTER DE LA PAGINA -->
    <footer>
        <div id="pie">
            <center>
            <p>Copyright © 2015 Pedro Celard. All Rights Reserved</p>
            </center>
        </div>
    </footer>
    
</html>