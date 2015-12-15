<body class="home">
    <header class="stylefond">
       <?php echo $this->Session->flash('auth'); ?>
       <?php echo $this->Form->create('User'); ?>
       <h1>Bienvenue Sur My Blog Creator</h1>


       <div class="connexion">
        <?php echo $this->Form->create('User'); ?>
        <?php echo $this->Form->input('login', array('label' => "Login : ")); ?>
        <?php echo $this->Form->input('password', array('label' => "Mot de passe : ")); ?>
        <?php echo $this->Form->end("Se connecter"); ?>
        <?php
        echo $this->Html->link(
            'Pas encore de compte, Inscrit-toi ici !',
            '/Users/inscription/'
            );
            ?>
        </div>
    </header>

    <nav>
        <div id="menu">
            <p>ICI AFFICHAGE DES BLOGS EXISTANT</p>

        </div>
    </nav>
</body>


