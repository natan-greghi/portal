<div class="corpo">
	<div class="row emp-nao-aprovadas">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 empresas">
			<h1>Vagas a serem aprovadas</h1>
		</div>
		<div class="row">
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-lg-offset-2">
				<?php foreach ($vagasNaoAprovadas as $vaga) : ?>
					<!-- ################ Vagas ################## -->

					<div class="vagas">
						<a href="#">
							<div class="sigla">
								<span class="inset-text-effect"><?php echo $vaga->sigla_curso; ?></span>
							</div>
							<div class="vaga-descri">
								<h3><?php echo $vaga->titulo; ?></h3>
								<p> <?php echo $vaga->cidade . '-' . $vaga->sigla; ?></p>
							</div>
							<spam class="num-vagas"><?php echo $vaga->numero_vagas; ?></spam>
						</a>
						<div class="btn-group-vertical empresaBotao" role="group" aria-label="...">
							<button type="button" class="btn btn-default">Editar</button>
							<div class="btn-group btn-group-justified" role="group" aria-label="...">
								<div class="btn-group" role="group">
									<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
								</div>
								<div class="btn-group" role="group">
									<button type="button" onClick="window.location='<?php echo site_url('extvagas/aprovarVaga/'.$vaga->id)?>'" class="btn btn-default"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
								</div>
							</div>
						</div>
					</div>
					<!-- ################ Fim Vagas ################## -->
				<?php endforeach; ?>
			</div>
		</div>
	</div>
	<div class="divisao col-xs-12 col-sm-12 col-md-12 col-lg-12"></div>
	<div class="row emp-aprovadas">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 empresas">
			<h1>Vagas em Aberto</h1>
		</div>
		<div class="row">
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-lg-offset-2">
				<!-- ################ Vagas ################## -->

				<div class="vagas">
					<a href="#">
						<div class="sigla">
							<span class="inset-text-effect">TADS</span>
						</div>
						<div class="vaga-descri">
							<h3>Programador Chefe</h3>
							<p> Campos Do Jordão - IFSP</p>
						</div>
						<spam class="num-vagas">2</spam>
						<spam class="num-inscritos">20</spam>
					</a>
					<div class="btn-group-vertical empresaBotao" role="group" aria-label="...">
						<button type="button" class="btn btn-default">Editar</button>
						<div class="btn-group btn-group-justified" role="group" aria-label="...">
							<div class="btn-group" role="group">
								<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
							</div>
						</div>
					</div>
				</div>

				<!-- ################ Fim Vagas ################## -->
				<!-- ################ Vagas ################## -->

				<div class="vagas">
					<a href="#">
						<div class="sigla">
							<span class="inset-text-effect">TADS</span>
						</div>

						<div class="vaga-descri">
							<h3>Programador Chefe</h3>
							<p> Campos Do Jordão - IFSP</p>
						</div>

						<spam class="num-vagas">2</spam>
						<spam class="num-inscritos">20</spam>
					</a>
					<div class="btn-group-vertical empresaBotao" role="group" aria-label="...">
						<button type="button" class="btn btn-default">Editar</button>
						<div class="btn-group btn-group-justified" role="group" aria-label="...">
							<div class="btn-group" role="group">
								<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
							</div>
						</div>
					</div>
				</div>

				<!-- ################ Fim Vagas ################## -->

			</div>
		</div>
	</div>
</div>
</div>