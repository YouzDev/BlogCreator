<body>
    <header>
               <?php echo $this->Session->flash('auth'); ?>
       <?php echo $this->Form->create('User'); ?>
        <input required="required" id="pseudo_connexion" name="data[User][login]" type="text" maxlength="255" class="form-control" placeholder="Identifiant..." />
        <input required="required" id="UserPassword" name="data[User][mdp]" type="password" maxlength="255" class="form-control" placeholder="Mot de passe..." />
        <div class="btn-connexion">
            <?php echo $this->Form->button('', array('type' => 'submit','class' => '','escape' => false,'formnovalidate' => true)); ?>
        </div>

     
            


        <div class="inscription">
        <?php
                echo $this->Html->link(
                    'Pas encore de compte, Inscrit-toi ici',
                    '/Users/inscription/'
                    );
        ?>
    </div>
    </header>

    <nav>
        <div id="menu">
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Blogs</a></li>
                <li><a href="#">Profils</a></li>
                <li><a href="#">Chat</a></li>
                <li><a href="#">plus</a></li>
            </ul>
        </div>
    </nav>
</body>

   
        