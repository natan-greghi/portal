<div class="corpo">
	<div class="cadastro-vagas">
		<div class="row">
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
				<?php echo validation_errors(); ?>

				<?php echo form_open('cadvaga/cadastrar', 'class="form-horizontal"'); ?>
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
						<?php  foreach ($cursos as $curso) :?>
							<label class="checkbox-inline">
								<input type="checkbox" name="cursos[]" id="inlineCheckbox1" value="<?php echo $curso->id ?>"> <?php echo $curso->nome_curto; ?>
							</label>
						<?php endforeach; ?>
					</div>
				</div>
				<div class="form-group">
					<label for="inputVagas" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Número de Vagas</label>
					<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
						<input type="number" min="1" name="numVagas" id="inputNumVagas" class="form-control" value="" required="required" pattern="" title="">
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
						<textarea name="requisitos" id="textareaDescricao" class="form-control" rows="4" required="required"></textarea>
					</div>
				</div>	

				<div class="form-group">
					<label for="textareaDescricao" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Benefícios</label>
					<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">	
						<?php foreach ($beneficios as $beneficio) : ?>						
							<label class="checkbox-inline">
								<input type="checkbox" name="beneficios[]" id="inlineCheckbox1" value="<?php echo $beneficio->id; ?>"> <?php echo $beneficio->nome; ?>
							</label>
						<?php endforeach; ?>

						<label class="checkbox-inline">
							Outros
							<textarea name="outros" id="textareaDescricao" class="form-control" rows="4"></textarea>							
						</label>						
					</div>
				</div>

				<div class="form-group">
					<label for="textareaDescricao" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Remuneração</label>
					<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">	
						<label class="radio-inline col-xs-3 col-sm-3 col-md-3 col-lg-3">
							<input type="radio" name="remunerado" id="remunerado" value="1" onchange="esconderValor();"> Remunerado
							<input type="number" min="1" name="valorRemunerado" id="valorRemunerado" class=" form-control" placeholder="0,00" value="" required="required" pattern="" title="" disabled>
						</label>
						<label class="radio-inline">
							<input type="radio" name="remunerado" id="inlineRadio2" onchange="esconderValor();" value="0" checked> Não Remunerado
						</label>							
					</div>
				</div>

				<div class="form-group">
					<label for="empresa" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Empresa</label>
					<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
						<select name="empresa" id="inputEmpresa" class="form-control" required="required">
							<?php foreach ($empresas as $empresa) :?>
								<option value="<?php echo $empresa->id; ?>"><?php echo $empresa->nome_fantasia;?></option>
							<?php endforeach; ?>
						</select>
					</div>
				</div>	

				<div class="form-group">
					<div class="col-sm-offset-9">
						<button type="submit" class="btn btn-primary">Enviar</button>
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>
</div>