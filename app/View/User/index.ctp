<?php
	
	// echo "<pre>";
	// var_dump($users);
	// echo "</pre>";


/*
	array(1) {
	  [0]=>
	  array(1) {
	    ["User"]=>
	    array(4) {
	      ["id"]=>
	      string(1) "1"
	      ["username"]=>
	      string(6) "liuwei"
	      ["password"]=>
	      string(4) "1234"
	      ["email"]=>
	      string(14) "lw.588@163.com"
	    }
	  }
	}	
*/


?> 


<h1>Users List</h1> 
<p><?php echo $this->Html->link("Add User", array('action' => 'add')); ?></p> 
<table>  
    <tr>  
        <th>ID</th>  
        <th>Name</th>
        <th>Password</th>    
        <th>Email</th>
        <th>Operate</th>

    </tr>  
  
<!-- Here is where we loop through our $users array, printing out user info -->  
  
    <?php foreach ($users as $user): ?>  
    <tr>  
        <td><?php echo $user['User']['id']; ?></td>
        <!-- <td><?php echo $user['User']['username']; ?></td>  -->   
        <td>  
            <?php 
            	echo $this->Html->link($user['User']['username'],  
				array('controller' => 'users', 'action' => 'view', $user['User']['id'])); 
			?>  
        </td>  
        
        <td><?php echo $user['User']['password']; ?></td> 
        <td><?php echo $user['User']['email']; ?></td>
        <td>
	        <?php echo $this->Html->link('View', array('controller' => 'users', 'action' => 'view', $user['User']['id'])); ?>
	        <?php echo $this->Html->link('Edit', array('controller' => 'users', 'action' => 'edit', $user['User']['id'])); ?> 
	        <?php echo $this->Form->postLink(  
                'Delete',  
                array('action' => 'delete', $user['User']['id']),  
                array('confirm' => 'Are you sure?'));  
            ?> 
        </td>


    </tr>  
    <?php endforeach; ?>  
</table>  








