<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version());
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex">
    <link rel="stylesheet" type="text/css" href="css/tabulous.css">
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.3.0/build/cssreset/reset-min.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <?php echo $this->Session->flash('auth'); ?>
    <?php $user = $this->Session->read(); ?> 

    <?php
    echo $this->Html->meta('icon');
    echo $this->Html->css('bootstrap');
    echo $this->Html->css('style');
    echo $this->Html->script('script');
    echo $this->Html->script('tabulous');
    echo $this->Html->script('js.js');
    ?>
</head>
<body>
 <header>
    <p>Bienvenue sur My Creator Blog</p>
    <div id="profil">Déconnexion <?php echo $this->Html->image('close.png', ['alt' => "gerer"]) ?></div>
    <?php if(AuthComponent::user('id')) { ?>
    
    <?php } ?>
</header>
<div id="wrapper">
    <?php if(AuthComponent::user('id')) { ?>
    <div id="tabs">
        <ul>
            <li><a href="#tabs-1">Mon Profil <?php echo $this->Html->image('profil.png', ['alt' => "gerer"]) ?></a></li>
            <li><a href="#tabs-2">Gerer mes blogs <?php echo $this->Html->image('gerer.png', ['alt' => "gerer"]) ?></a></li>
            <li><a href="#tabs-3">Mes amis <?php echo $this->Html->image('friend.png', ['alt' => "gerer"]) ?></a></li>
        </ul>
        <div id="tabs_container">
            <div id="tabs-1">
                <?php if(AuthComponent::user('id')) { ?>

<<<<<<< HEAD
<h1><?php echo "Bonjour " . $this->Html->link(AuthComponent::user('login'), array('action' => 'edit', 'controller' => 'users')); ?></h1>
            <h1><?php echo "Bonjour " . $this->Html->link(AuthComponent::user('prenom'), array('action' => 'edit', 'controller' => 'users')); ?></h1>
           <!--      <?php foreach($users as $user) {
                    echo $user['User']['nom'];
                }
                ?> -->
=======
                <h1><?php echo "Bonjour " . $this->Html->link(AuthComponent::user('login'), array('action' => 'edit', 'controller' => 'users')); ?></h1>
                <h1><?php echo "Bonjour " . $this->Html->link(AuthComponent::user('prenom'), array('action' => 'edit', 'controller' => 'users')); ?></h1>

>>>>>>> 9893b848313a69405e5cc432407e6b56eec3ff14
                <?php echo $this->Form->create('User'); ?>

                <?php echo __('Modifier information du compte'); ?>
                <?php
                echo $this->Form->input('id'); ?>

                <input type="text" id="" name="" value="Nom"/>
                <input type="text" id="" name="" value="<?php echo $this->Html->link(AuthComponent::user('prenom')); ?>"/>
                <input type="text" id="" name="" value="Email"/>
                <input type="text" id="" name="" value="Login"/>
                <input type="text" id="" name="" value="Mot De Passe"/>
                <input type="date" id="" name="" value="Date"/>
                <input type="text" id="" name="" value="Adresse"/>
                <button type="submit">Valider</button>

            </div>
            <?php } ?>
            <div id="tabs-2">
                <button type="submit"><?php
                echo $this->Html->link(
                    'CRÉER UN NOUVEAU BLOG',
                    '/Blog/ajouter/'
                    );
                    ?></button>


                </div>
                <div id="tabs-3">
                    <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem.</p><p> Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodaleseros massa ut dolor.Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolorMorbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolorMorbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolorMorbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolorMorbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolorMorbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolorMorbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget.</p>
                </div>
            </div>
        </div>
<<<<<<< HEAD
        <?php } ?>
        <script type="text/javascript" src="js/tabulous.js"></script>
        <script type="text/javascript" src="js/js.js"></script>
    </body>
    </html>
=======
    </div>

    <script type="text/javascript" src="js/tabulous.js"></script>
    <script type="text/javascript" src="js/js.js"></script>
</body>
</html>
>>>>>>> 9893b848313a69405e5cc432407e6b56eec3ff14
