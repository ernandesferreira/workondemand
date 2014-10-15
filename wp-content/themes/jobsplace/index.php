<?php get_header(); ?>
<video autoplay loop poster="polina.jpg" id="bgvid" muted>
	<source src="<?php echo get_template_directory_uri();?>/assets/videos/night.webm" type="video/webm">
	<source src="<?php echo get_template_directory_uri();?>/assets/videos/night_stroll.mp4" type="video/mp4">
</video>
<div class="mascara_home"></div>
<div class="faixa-super">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-xs-4">
				<div class="rede-social"></div>
			</div>
			<div class="col-lg-8 col-md-8 col-xs8">
				<div class="login_home">
					<form class="form-inline" role="form" method="POST" action="<?php echo home_url('/wp-login.php'); ?>">
						<div class="input_logar col-lg-8 col-md-8 col-xs-8">
	                        <div class="form-group">
	                            <label class="sr-only" for="exampleInputEmail2">Usuário</label>
	                            <input name="log" type="text" class="form-control" id="exampleInputEmail2" placeholder="Usuário">
	                        </div>
	                        <div class="form-group">
	                            <label class="sr-only" for="exampleInputPassword2">Password</label>
	                            <input name="pwd" type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
	                        </div>
	                        <div class="checkbox">
	                            <label>
	                                <input name="remenberme" type="checkbox">Remember me
	                            </label>
	                        </div>
	                    </div>
                        <div class="bt-submit col-lg-4 col-md-4 col-xs-4">
	                        <div class="box_btn">
	                        	<button type="submit" class="btn btn-success">Logar</button>
	                        </div>
                        </div>
                    </form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container_home">
	
</div>
<div class="front">
	<div class="container">
		<div class="box_home">
			<div class="row">
				 <div class="col-lg-12 col-md-12 col-xs-12 box_logo">
					 <div>
						<div class="logo_home"> work	<div class="sub_logo">ON DEMAND</div></div>
					</div>
					<div class="slogan">
						<p> 
							MARQUE SUA PRESENÇA E FAÇA A DIFERENÇA
						</p>
					</div>
					<div class="progress-demo bt-cadastro">
	                    <button class="ladda-button" data-color="mint" data-style="expand-right" data-size="xl">
	                    	<span class="ladda-label">Começar</span>
	                    	<span class="ladda-spinner"></span>
	                    </button>
	                </div>
				</div>
				<!-- CADASTRO QUE IRA APARECER EM UM MODAL

				<div class="col-lg-6 col-md-6 col-xs-6 box_cadastro">
					<div class="col-lg-12">
						<span class="span_title"> Abra uma conta </span>
					</div>
					<div class="form-group">
						<div class="col-lg-6">
							<input type="text" class="form-control input-lg" placeholder="Nome">
						</div>
						<div class="col-lg-6">
							<input type="text" class="form-control input-lg" placeholder="Sobrenome">
						</div>
						<div class="col-lg-12">
							<input type="email" class="form-control input-lg" placeholder="Email">
						</div>
						<div class="col-lg-12">
							<input type="email" class="form-control input-lg" placeholder="Confirme Email">
						</div>
						<div class="col-lg-12">
							<input type="password" class="form-control input-lg" placeholder="Senha">
						</div>
						<div class="col-lg-12">
							<label> Data de Nascimento </label>
						</div>
						<div class="col-lg-12">
	                            <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012" id="dpYears" class="input-group date">
	                                <span class="input-group-addon add-on entypo-calendar"></span>
	                                <input type="text" value="12-02-2012" class="form-control" id="ssn2">
	                            </div>
						</div>
						<div class="col-lg-12">
							<div class="radio">
	                            <label>
	                                <input type="radio" name="sexo" id="feminino" value="feminino" checked="">Feminino
	                            </label>
	                            <label>
	                                <input type="radio" name="sexo" id="masculino" value="masculino" checked="">Masculino
	                            </label>
	                        </div>
						</div>
						<div class="col-lg-12 col-md-12 col-xs-12">
							<div class="col-lg-3">
								<div class="btn_comecar">
									<a href="#" class="plan-button">Cadastrar</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				-->
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>