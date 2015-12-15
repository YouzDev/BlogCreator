	<body class="couleurfond">
	<div id="contenu">
		<?php echo $this->Session->flash(); ?>

		<?php echo $this->fetch('contenu'); ?>
	</div>
	<div class="log">
		<?php echo $this->Form->create('User'); ?>
		
			<legend> Inscription </legend>
			<?php echo $this->Form->create('User'); ?>
			<?php echo $this->Form->input('login', array('label' => "Login : ")); ?>
			<?php echo $this->Form->input('nom', array('label' => "Nom : ")); ?>
			<?php echo $this->Form->input('prenom', array('label' => "Prenom : ")); ?>
			<?php echo $this->Form->input('email', array('label' => "Email : ")); ?>
			<?php echo $this->Form->input('password', array('label' => "Mot de passe : ")); ?>
			<?php echo $this->Form->input('ddn', array('label' => "Date de naissance : ")); ?>

			<?php echo $this->Form->end("S'inscrire"); ?>
	

	</div>

</body>