<?php


	// class UserController extends AppController
	// {
	// 	function demo(){
	// 		$this->flash('/demo/index');
	// 	}
	// 	function register(){
	// 	    if (!empty($this->params['form'])){
	// 	      if ($this->User->save($this->params['form'])){
	// 	        $this->flash('Your registration information was accepted.', '/users/register');
	// 	      } else {
	// 	        $this->flash('There was a problem with your registration', '/users/register');
	// 	      }
	// 	    }
	//   	}
	// }

	class UsersController extends AppController {  
		//controller文件名
		//view 文件夹名
		//model文件名  
	    public $name = 'User';  
	    public $helpers = array('Html', 'Form'); 

	    public function index() {  
    		$this->set('users', $this->User->find('all'));  
		} 



		public function view($id = null) {  
		    $this->User->id = $id;  
		    $this->set('user', $this->User->read());  
		} 

		public $components = array('Flash');  
  
		public function add(){  
		    if($this->request->is('post')){  
		        if($this->User->save($this->request->data)){  
		            $this->Flash->set('新用户创建完成.'); 
		            $this->redirect(array('action' => 'index'));
		            $this->redirect(array('action' => 'index'));  
		        } else {  
		            $this->Flash->set('创建用户出错.');  
		        }  
		    }  
		} 

		public function edit($id = null) {  
	    		$this->User->id = $id;  
	    		if ($this->request->is('get')) {  
	        		$this->request->data = $this->User->read();  
	    		} else {  
	        	if ($this->User->save($this->request->data)) {  
	            	$this->Flash->set('更新成功.');  
	            	$this->redirect(array('action' => 'index'));  
	        	} else {  
	            	$this->Flash->set('更新失败.');  
	        	}  
    		}  
		}

		public function delete($id) {  
		    if ($this->request->is('get')) {  
		        throw new MethodNotAllowedException();  
		    }  
		    if ($this->User->delete($id)) {  
		        $this->Flash->set('id号为：'.$id.'的用户已经删除成功!'	);  
		        $this->redirect(array('action' => 'index'));  
    		} 
		}     


	}  




?>