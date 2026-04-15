<section class="topo">
	<div id="logo">
		<img src="img/logo.gif">
	</div>
	<div id="menu">
		<ul class="nav">
			<?php if(!isset($_COOKIE['variable']['administrador'])){//não esta logado?>
				<li><a href="login.php"
					>Login</a></li>
					<li><a href="sobre.php"
						>sobre</a></li>
						<?php
		}else{//esta logado
			if(!isset($_COOKIE['nivel'])&& $_COOKIE['nivel']==1){
				?>
				<li> Administradores
					<ol>
						<li><a href="cadastraradmin.php"
							>Cadastrar</a></li>
							<li><a href="buscaradin.php"
								>Listar</a></li>
								<li><a href="listaradmin.php"
									>Buscar</a></li>

								</ol>
							</li>
							<?php } ?>
							<li>Fabricante
								<ol>
									<li><a href="cadastrarfab.php"
										>Cadastrar</a></li>
										<li><a href="listarfab.php"
										>Listar</a></li>
										<li><a href="buscarfab.php"
										>Buscar</a></li>

                              <li>Produto
								<ol>
									<li><a href="cadastrarpro.php"
										>Cadastrar</a></li>
										<li><a href="listarpro.php"
										>Listar</a></li>
										<li><a href="buscarpro.php"
										>Buscar</a></li>

									</ol>
								</li>
					<?php }  ?>
					</ul>

				</div>
		</section>