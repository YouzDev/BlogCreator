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
    <title>

    </title>
    <?php
    echo $this->Html->meta('icon');
    echo $this->Html->css('bootstrap');
    echo $this->Html->css('style');
    echo $this->Html->script('script');
    ?>

    <header>
        <p>Bienvenue sur MyBlog</p>
        <div id="profil">Mon Profil <?php echo $this->Html->image('profil.png', ['alt' => "gerer"]) ?></div>
    </header>
</head>

<body>

    <div id="selection">
            <ul>
                <li><a href="#">Gerer mes blogs <?php echo $this->Html->image('gerer.png', ['alt' => "gerer"]) ?></a></li>
                <li><a href="#">Articles <?php echo $this->Html->image('article.png', ['alt' => "gerer"]) ?></a></li>
                <li><a href="#">Commentaire <?php echo $this->Html->image('post.png', ['alt' => "gerer"]) ?></a></li>
            </ul>
        </div>
        
</body>