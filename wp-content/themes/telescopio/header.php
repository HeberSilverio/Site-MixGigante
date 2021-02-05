<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mix Gigante</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
         <!-- faixa no topo para menu social e search -->          
        
        <section class="menu-area">
            <div class="container">
                <div class="row">
                    <section class="logo col-md-2 col-12 text-left">
                        <img src="https://mixgigante.com.br/uploads/logo.png" alt="">
                    </section>
                    <nav class="menu col-md-10 text-right">
                        <?php wp_nav_menu( array( 'theme_location' => 'my_main_menu') ); ?>
                    </nav>
                </div>
            </div>  
        </section>
    </header>

    <!-- header
	<header class="section header">
		<div class="grid">
			<-- brand 
			<a href="#" class="brand" title="Mix Gigante">
				<img src="https://mixgigante.com.br/uploads/logo.png" alt="Mix Gigante"/>
			</a> -->
			<!-- menu mobile 
			<a href="#" title="Menu" class="menu showMenu">
				<i class="fa fas fa-bars"></i>
			</a>
			<!-- nav 
			<nav>
				<!-- mask 
				<div class="mask showMenu"></div>
				<!-- close -->
				<!-- <a href="#" title="Fechar" class="close showMenu">
					<i class="fa fas fa-window-close"></i>
				</a>
				<ul>
					<li>
						<a href="#" title="Home">
							Home
						</a>
					</li>
					<li>
						<a href="#" title="Quem Somos">
							Quem Somos
						</a>
					</li>
					<li>
						<a href="#" title="Portfólio">
							Portfólio
						</a>
					</li>
					<li>
						<a href="#" title="Produtos">
							Produtos
						</a>
					</li>
					<li>
						<a href="#" title="Clientes">
							Clientes
						</a>
					</li>
					<li>
						<a href="#" title="Seja Representante">
							Seja Representante
						</a>
					</li>
					<li>
						<a href="#" title="Blog">
							Blog
						</a>
					</li>
					<li>
						<a href="#" class="btn" title="Inscreva-se">
							Solicite um Orçamento
						</a>
					</li>
				</ul>
			</nav>
		</div>
	</header> -->