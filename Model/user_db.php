<?php
function get_user_tasks($useraccount_id,$user_id) 
{
	global  $db;
	$query = 'SELECT * FROM UsersAccount, UsersToDo
			  WHERE UsersAccount.id = UsersToDo.user';
	$statement = $db->prepare($query);
	$statement->execute();
	return $statement;
}

?>