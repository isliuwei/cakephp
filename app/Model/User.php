<?php




	class User extends AppModel { 
		//model文件名 
	    public $name = 'User'; 



	    public $validate = array(  
		    'username' => array(  
		        'rule' => 'notBlank'  
		    ),  
		    'password' => array(  
		        'rule' => 'notBlank'  
		    ),
		    'email' => array(  
		        'rule' => 'notBlank'  
		    )
		);
		

	}