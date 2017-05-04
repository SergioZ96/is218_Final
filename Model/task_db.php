<?php
function add_task($task_id,$task_name,$status,$user_id,$time_made)
{
	global $db;
	$query = 'INSERT INTO UsersToDo
				(id, task, done, user, created)
			  VALUES
			  	(:task_id, :task_name, :status, :user_id, :time_made)';
	$statement = $db->prepare($query);
	$statement->bindValue(':task_id', $task_id);
	$statement->bindValue(':task_name', $task_name);
	$statement->bindValue(':status', $status);
	$statement->bindValue(':user_id', $user_id);
	$statement->bindValue(':time_made', $time_made);
	$statement->execute();
	$statement->closeCursor();
}

function delete_task($task_id,$user_name)
{
	global $db;
	$query = 'DELETE FROM UsersToDo
			  WHERE id = :task_id 
			  AND WHERE user = :user_id';
	$statement = $db->prepare($query);
	$statement->bindValue(':task_id', $task_id);
	$statement->bindValue(':user_id', $user_id);
	$statement->execute();
	$statement->closeCursor();
}

function edit_task($task_id,$task_name,$user_id)
{
	global $db;
	$query = 'DELETE FROM UsersToDo
			  WHERE id = :task_id
			  AND WHERE user = :user_id';
	$statement = $db->prepare($query);
	$statement->bindValue(':task_id', $task_id);
	$statement->bindValue(':task_name', $task_name);
	$statement->bindValue(':user_id', $user_id);
	$statement->execute();
	$statement->closeCursor();
}

?>