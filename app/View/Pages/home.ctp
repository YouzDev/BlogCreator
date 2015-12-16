<body class="home">
    <header class="stylefond">
       <?php echo $this->Session->flash('auth'); ?>
       <?php echo $this->Form->create('User'); ?>
       <h1>Bienvenue Sur My Blog Creator</h1>


       <div class="connexion">
    
        <?php
        echo $this->Html->link(
            'Pas encore de compte, Inscris-toi ici !',
            '/Users/inscription/'
            );
            ?>
            <p></p><br/>
            <?php
        echo $this->Html->link('Déjà un compte ?',
            '/Users/login'
            ); ?>
            
        </div>
    </header>

    <nav>
        <div id="menu">

        </div>
    </nav>
</body>


