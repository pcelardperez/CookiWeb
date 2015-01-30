<!DOCTYPE html>
 
<html>
    <head>
        <meta charset="UTF-8">
        
        <!--etiquetas meta basicas para posicionamiento seo -->
        <meta name="description" content="Recetas cocina">
        <meta name="keywords" content="sweets, caramelos, cocina, recetas, arguiñano, michelin, coock, gatitos"><!-- palabras claves para buscadores -->
        <meta name="author" content="Pedgrooooooo">
        
        <link type="text/css" rel="stylesheet" href="css/menu.css"/>
        <link type="text/css" rel="stylesheet" href="css/general.css"/>
        <link href='icos/gatito-gif.gif' rel='shortcut icon' type='image/gif'> <!-- ponemos un iconito en la pestaña web -->
        <title>CookiCat: Inicio</title>
        
        <!--  javaScript -->
                <script src="js/jquery-1.7.2.min.js"></script>
                <script type="text/javascript" src="js/menuTlf.js" >No se puede ejecutar javascript!!!</script>  
                    
    </head>
    
    <body id="body_fondo">
        <div id="wrapper">
            <div>
                <div id="menu_navegacion">  
        
                    <div class="container">
			
                        <div id="fdw">
				<!--nav-->
                                <?php include_once './template/menu.php'; ?>
                        </div><!-- end fdw -->
                                        

                    </div>
                </div>
                <!-- CONTENIDO PRINCIPAL DE LA PAGINA -->
            <div id="cuerpo_principal">
                <div id="cont_cuerpo_principal">
                    <p>Contactameee!</p>
                </div>
            </div>
        </div>
    </body>
    
        <!--FOOTER DE LA PAGINA -->
        
    <footer>
        <div id="pie">
            <center><p>Copyright © 2015 Pedro Celard. All Rights Reserved</p></center>
        </div>
        
        <!--script para estableces al elemento li[0](eq(0) indica el numero del elemento) la clase current que pinta las letritas -->
        <script type="text/javascript">
            $("li").eq(4).addClass('current');
        </script>
    </footer>
    
</html>

