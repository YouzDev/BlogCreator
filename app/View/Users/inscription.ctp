<div class="log">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Inscription'); ?></legend>
	<?php
		echo $this->Form->input('nom');
		echo $this->Form->input('prenom');
		echo $this->Form->input('email');
		echo $this->Form->input('login');
		echo $this->Form->input('password');
		echo $this->Form->input('ddn');
		echo $this->Form->input('avatar');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Envoyer')); ?>
</div>