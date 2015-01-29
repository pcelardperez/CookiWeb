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
                                                    <li class="current"><a href="index.php">Inicio<span class="arrow"></span></a>
								<ul style="display: none;" class="sub_menu">
									<li class="arrow_top"></li>
									<li><a class="subCurrent" href="http://www.freshdesignweb.com">Home Service</a></li>
									<li><a href="http://www.freshdesignweb.com">Home Responsive</a></li>
								</ul>
							</li>
							<li><a href="http://www.freshdesignweb.com">Producto</a></li>
							<li>
								<a href="http://www.freshdesignweb.com">Im&aacute;genes<span class="arrow"></span></a>
								<ul style="display: none;" class="sub_menu">
									<li class="arrow_top"></li>
									<li><a href="http://www.freshdesignweb.com">Portfolio 3 </a></li>
									<li><a href="http://www.freshdesignweb.com">Portfolio 4 </a></li>
									<li><a href="http://www.freshdesignweb.com">Portfolio Single</a></li>
									<li><a href="http://www.freshdesignweb.com">Portfolio Two</a></li>
								</ul>
							</li>
							<li>
								<a href="http://www.freshdesignweb.com">Comprar<span class="arrow"></span></a>
								<ul style="display: none;" class="sub_menu">
									<li class="arrow_top"></li>
									<li><a href="http://www.freshdesignweb.com">Design</a></li>
									<li><a href="http://www.freshdesignweb.com/category/html5">HTML5</a></li>
									<li><a href="http://www.freshdesignweb.com/category/css-html">CSS3</a>
									</li><li><a href="http://www.freshdesignweb.com/category/ajax-jquery">jQuery</a></li>
								</ul>
							</li>
                                                        <li class=" "><a href="contacto.php">Sobre Nosotros</a></li>
						</ul>
					</nav>
		</div><!-- end fdw -->
