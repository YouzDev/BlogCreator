<body>

     <?php echo $this->Session->flash('auth'); ?>
     <?php echo $this->Form->create('User'); ?>
     <input required="required" id="pseudo_connexion" name="data[User][login]" type="text" maxlength="255" class="form-control" placeholder="Identifiant..." />
     <input required="required" id="UserPassword" name="data[User][mdp]" type="password" maxlength="255" class="form-control" placeholder="Mot de passe..." />
     <div class="btn-connexion">
        <?php echo $this->Form->button('', array('type' => 'submit','class' => '','escape' => false,'formnovalidate' => true)); ?>
    </div>





    
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


