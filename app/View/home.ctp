<body>

     <?php echo $this->Session->flash('auth'); ?>
     


<?php echo $this->Form->create('User'); ?>

<?php echo $this->Form->input('login', array('label' => "Login : ")); ?>
<?php echo $this->Form->input('password', array('label' => "Mot de passe : ")); ?>

<?php echo $this->Form->end("Connexion"); ?>






<?php echo $this->Html->link('Déjà un compte ?',
            '/Users/login'
            ); ?>
    
        <?php
        echo $this->Html->link(
            'Pas encore de compte, Inscrit-toi ici',
            'inscription/'
            );
            ?>
    

    <nav>
        <div id="menu">
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Voir les Blogs</a></li>
            </ul>
        </div>
    </nav>
</body>


