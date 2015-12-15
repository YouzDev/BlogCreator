<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 */
class User extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'user';
	public $validate = array(
	'login' => array(
		array(   
			'rule' => 'alphanumeric', 
			'required' => true,
			'allowEmpty' => false, 
			'message' => "Votre pseudo n'est pas valide"

			),
		array(
			'rule' => 'isUnique',
			'message' => 'Ce pseudo est deja pris'
			)
		),

	'password' => array(
			'rule' => 'notEmpty',
			'message' => 'Vous devez entrer un mot de passe',
			'allowEmpty' => false
			),

	'email' => array(
		array(  
			'rule' => 'email', 
			'required' => true,
			'allowEmpty' => false, 
			'message' => "Votre email n'est pas valide"
			),
		 array(
		'rule' => 'isUnique',
		'message' => 'Cet email est deja pris'
		)
		)
	
);

}
