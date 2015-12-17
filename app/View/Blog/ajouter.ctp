<header>GESTION DES BLOG</header>

<div id="ajouter_blog">

	<?php echo $this->Form->create('Blog'); ?>

	<legend> AJOUTER UN BLOG </legend>

	<?php echo $this->Form->input('titre', array('label' => "Titre : ")); ?>
	<?php echo $this->Form->input('description', array('label' => "Description : ")); ?>
	<?php echo $this->Form->input('auteur', array('label' => "Auteur : ")); ?>

	<?php echo $this->Form->end("Ajouter"); ?>
</div>




<!-- 
<?php foreach ($Blog as $blolo) {
	echo $blolo['Blog']['description'];

}
?> -->

<div id="modifier_blog">
	<?php echo $this->Form->create('Blog'); ?>
	<legend> MODIFIER UN BLOG </legend>

	<?php echo $this->Form->input('titre', array('label' => "Titre : ")); ?>
	<?php echo $this->Form->input('description', array('label' => "Description : ")); ?>
	<?php echo $this->Form->input('auteur', array('label' => "Auteur : ")); ?>

	<?php echo $this->Form->end("Modifier"); ?>



</div>
<div id="supprimer_blog">

</div>
<legend> VOIR UN BLOG </legend>