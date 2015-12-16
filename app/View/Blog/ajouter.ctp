<div id="ajouter_blog">

<?php echo $this->Form->create('Blog'); ?>
		
			<legend> AJOUTER UN BLOG </legend>

			<?php echo $this->Form->input('titre', array('label' => "Titre : ")); ?>
			<?php echo $this->Form->input('description', array('label' => "Description : ")); ?>
			<?php echo $this->Form->input('auteur', array('label' => "Auteur : ")); ?>

			<?php echo $this->Form->end("Ajouter"); ?>

		


<!-- 
<?php foreach ($Blog as $blolo) {
	echo $blolo['Blog']['description'];

}
?> -->
</div>