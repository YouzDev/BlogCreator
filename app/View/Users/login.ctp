	<body class="couleurfond">

		<div class="log">
			

			<legend> Connexion </legend>
			<?php echo $this->Form->create('User'); ?>

			<?php echo $this->Form->input('login', array('label' => "Login : ")); ?>
			<?php echo $this->Form->input('password', array('label' => "Mot de passe : ")); ?>

			<p></p><br/>
			<?php echo $this->Form->end("Connexion"); ?>
			<p></p><br/>
			<p><?php echo $this->Html->link("S'inscrire", "/Users/inscription") ?></p>
		</div>
	</body>
