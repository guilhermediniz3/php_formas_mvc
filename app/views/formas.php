<!DOCTYPE html>
<html>
	<head>
		<title>Sistema cadastro</title>
		<meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="<?php echo URL_BASE ?>assets/css/estilo.css" />
	</head>
	<body>
		<h1>Áreas da figuras geométricas</h1>
		<fieldset>
			<legend>Calculo</legend>
			<form action=" <?php echo URL_BASE . "formas/calcula " ?>" method="Post" >
				<label class="col-4">
					<small>Nome</small>
					<select name="figura">
						<option value="quadrado">quadrado</option>
						<option value ="retangulo">Retângulo</option>
						<option value="triangulo">Triângulo</option>
						<option value="circulo">Circulo</option>
					</select>
				</label>
				
				<label class="col">
					<small>Base</small>
					<input type="text" name="base" placeholder="Digite aqui">
				</label>
				<label class="col">
					<small>Altura</small>
					<input type="text" name="altura" placeholder="Digite aqui">
				</label>
				<label class="col">
					<small>Raio</small>
					<input type="text" name="raio" placeholder="Digite aqui">
				</label>
				<div class="col-12">
				<input type="submit" value="calcular">
				</div>
			</form>
			
		<fieldset class="alt">
			<legend>Resultado</legend>
			<div class="centralizar"><img src="img/triangulo.png"></div>
			<h5>Área do triângulo é área = <b>(b x a) / 2 = <?php echo isset($area) ? $area:null ?></b></h5>
		</fieldset>
		</fieldset>
        <div class="col-6 p2">
            <a href="<?php echo URL_BASE ."home"?>" class="btn">
                <i class="fal fa-arrow-circle-left""></i> Voltar
            </a>
        </div>
	</body>
</html>