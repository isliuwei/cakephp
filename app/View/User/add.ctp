



<h1>Add User</h1>  
<?php  
    echo $this->Form->create('User');  
    echo $this->Form->input('username');
    echo $this->Form->input('password',array('type' => 'password'));
    echo $this->Form->input('email',array('type' => 'email'));

    //echo $this->Form->input('content', array('rows' => '3')); 

    echo $this->Form->end('Register');  
?>  