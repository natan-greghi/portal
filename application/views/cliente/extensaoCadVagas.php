<div class="corpo">
	<div class="cadastro-vagas">
		<div class="row">
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
				<form action="" method="POST" class="form-horizontal" role="form">
					<div class="form-group">
						<legend>Cadastrar Vagas</legend>
					</div>
					<div class="form-group">
						<label for="inputTituloVaga" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Título da Vaga</label>
						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
							<input type="text" name="tituloVaga" id="inputTituloVaga" class="form-control" placeholder="Título da Vaga" value="" required="required">
						</div>
					</div>
					<div class="form-group">
						<label for="inputCurso" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Curso</label>
						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
							<select name="vagas" id="inputCurso" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 form-control" required="required">
								<option value="">TADS</option>
								<option value="">MATE</option>
								<option value="">EDIF</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="inputVagas" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Número de Vagas</label>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
							<input type="text" name="numVagas" id="inputNumVagas" class="form-control" value="" required="required" pattern="" title="">
						</div>
					</div>

					<div class="form-group">
						<label for="textareaDescricao" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Descrição</label>
						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
							<textarea name="descricao" id="textareaDescricao" class="form-control" rows="4" required="required"></textarea>
						</div>
					</div>	

					<div class="form-group">
						<label for="textareaDescricao" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Requisitos</label>
						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
							<textarea name="descricao" id="textareaDescricao" class="form-control" rows="4" required="required"></textarea>
						</div>
					</div>	

					<div class="form-group">
						<label for="textareaDescricao" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Benefícios</label>
						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">							
							<label class="checkbox-inline">
								<input type="checkbox" id="inlineCheckbox1" value="option1"> Transporte
							</label>
							<label class="checkbox-inline">
								<input type="checkbox" id="inlineCheckbox2" value="option2"> Alimentação
							</label>
							<label class="checkbox-inline">
								<input type="checkbox" id="inlineCheckbox3" value="option3"> Auxilio Saúde
							</label>

							<label class="checkbox-inline">
								Outros
								<textarea name="descricao" id="textareaDescricao" class="form-control" rows="4" required="required"></textarea>							
							</label>

							<label class="radio-inline col-xs-3 col-sm-3 col-md-3 col-lg-3">
								<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Remunerado
								<input type="text" name="valor" id="inputValor" class=" form-control" value="" required="required" pattern="" title="">
							</label>
							<label class="radio-inline">
								<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" checked> Não Remunerado
							</label>							
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-offset-9">
							<button type="submit" class="btn btn-primary">Enviar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>