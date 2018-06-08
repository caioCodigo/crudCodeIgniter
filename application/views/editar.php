<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
		<div>
			<h1>Criando um CRUD com CodeIgniter</h1>
		</div>
		<?php if ($this->session->flashdata('error') == TRUE): ?>
			<p><?php echo $this->session->flashdata('error'); ?></p>
		<?php endif; ?>
		<?php if ($this->session->flashdata('success') == TRUE): ?>
			<p><?php echo $this->session->flashdata('success'); ?></p>
		<?php endif; ?>

		<form method="post" action="<?=base_url('atualizar')?>" enctype="multipart/form-data">
				<div>
					<label>Nome:</label>
					<input type="text" name="nome" value="<?=$contato['nome']?>" required/>
				</div>
				<div>
					<label>Email:</label>
					<input type="email" name="email" value="<?=$contato['email']?>" required/>
				</div>
			<div>
				<label><em>Todos os campos são obrigatórios.</em></label>
				<input type="hidden" name="id" value="<?=$contato['id']?>"/>
				<input type="submit" value="Salvar" />
			</div>
</form>
</body>
</html>
