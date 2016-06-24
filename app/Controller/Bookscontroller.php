<?php


	



	class BooksController extends AppController {  
		//controller文件名
		//view 文件夹名
		//model文件名  
	    public $name = 'Books';  
	    public $helpers = array('Html', 'Form'); 




	    public function index() {  
    		$this->set('books', $this->Book->find('all'));  
		}  
	}  




?>