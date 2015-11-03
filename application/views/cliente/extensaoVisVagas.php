<?php include_once("topoADM.php"); ?>

<div class="corpo">
	<div class="visualizar-vaga">
		<div class="row">
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
				<div class="sigla-visualizar-vaga">
					<span class="inset-text-effect">TADS</span>
				</div>
				<h1>Título da Vaga</h1>
				<div class="row visualizar-vaga-corpo">
					<form action="" method="POST" class="form-horizontal" role="form">
						<div class="form-group">
							<label for="inputCurso" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Curso</label>
							<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
								<select name="vagas" id="inputCurso" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 form-control" required="required" disabled>
									<option value="">TADS</option>
									<option value="">MATE</option>
									<option value="">EDIF</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="inputVagas" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Número de Vagas</label>
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
								<select name="vagas" id="inputVagas" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 form-control" required="required" disabled>
									<option value="">1</option>
									<option value="">2</option>
									<option value="">3</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label for="textareaDescricao" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Descrição</label>
							<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
								<textarea name="descricao" id="textareaDescricao" class="form-control" rows="4" required="required" disabled></textarea>
							</div>
						</div>	

						<div class="form-group">
							<label for="textareaDescricao" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Requisitos</label>
							<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
								<textarea name="descricao" id="textareaDescricao" class="form-control" rows="4" required="required" disabled></textarea>
							</div>
						</div>	

						<div class="form-group">
							<label for="textareaDescricao" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Benefícios</label>
							<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">							
								<label class="checkbox-inline">
									<input type="checkbox" id="inlineCheckbox1" value="option1" disabled> Transporte
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" id="inlineCheckbox2" value="option2" disabled> Alimentação
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" id="inlineCheckbox3" value="option3" disabled> Auxilio Saúde
								</label>

								<label class="checkbox-inline">
									Outros
									<textarea name="descricao" id="textareaDescricao" class="form-control" rows="4" required="required" disabled></textarea>							
								</label>

								<label class="radio-inline col-xs-3 col-sm-3 col-md-3 col-lg-3">
									<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" disabled> Remunerado
									<input type="text" name="valor" id="inputValor" class=" form-control" value="" required="required" pattern="" title="" disabled>
								</label>
								<label class="radio-inline">
									<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" checked disabled> Não Remunerado
								</label>							
							</div>
						</div>
					</form>
				</div>

			</div>
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
				<h1>Inscritos</h1>
				<form action="" method="POST" role="form">
					<div class="inscritos col-xs-8 col-sm-8 col-md-8 col-lg-8 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
						<spam class="inscritos-aprovar" align="center">
							<strong>Aprovar</strong>
							<div class="checkbox" >
								<label>
									<input class="big-checkbox" type="checkbox" value="">
								</label>
							</div>							
						</spam>
						<div class="descricao-inscrito">
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<spam>Nome: </spam>Luiz Pereira
							</div>
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<spam>Prontuário: </spam> 1310305
							</div>
						</div>
						<div class="descricao-inscrito">
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<spam>Semestre:</spam> 2º Semestre
							</div>
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<spam>Curso: </spam> TADS
							</div>
						</div>
					</div>

					<div class="inscritos col-xs-8 col-sm-8 col-md-8 col-lg-8 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
						<spam class="inscritos-aprovar" align="center">
							<strong>Aprovar</strong>
							<div class="checkbox" >
								<label>
									<input class="big-checkbox" type="checkbox" value="">
								</label>
							</div>							
						</spam>
						<div class="descricao-inscrito">
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<spam>Nome: </spam>Luiz Pereira
							</div>
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<spam>Prontuário: </spam> 1310305
							</div>
						</div>
						<div class="descricao-inscrito">
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<spam>Semestre:</spam> 2º Semestre
							</div>
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<spam>Curso: </spam> TADS
							</div>
						</div>
					</div>

					<div class="inscritos col-xs-8 col-sm-8 col-md-8 col-lg-8 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
						<spam class="inscritos-aprovar" align="center">
							<strong>Aprovar</strong>
							<div class="checkbox" >
								<label>
									<input class="big-checkbox" type="checkbox" value="">
								</label>
							</div>							
						</spam>
						<div class="descricao-inscrito">
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<spam>Nome: </spam>Luiz Pereira
							</div>
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<spam>Prontuário: </spam> 1310305
							</div>
						</div>
						<div class="descricao-inscrito">
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<spam>Semestre:</spam> 2º Semestre
							</div>
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<spam>Curso: </spam> TADS
							</div>
						</div>
					</div>
					<div class="btn-enviar col-xs-1 col-sm-1 col-md-1 col-lg-1 col-sm-offset-9 col-md-offset-9 col-lg-offset-9">
						<button type="submit" class="btn btn-success">Submit</button>	
					</div>
					
				</form>
			</div>
		</div>
	</div>
</div>
</div>
</div>
<?php include_once("rodape.php"); ?>