<?php
function add_task($task_id,$task_name,$status,$user_name,$time)
{
	global $db;
	$query = 'INSERT INTO UsersToDo
				(id, task, done, user, created)
			  VALUES
			  	(:task_id, :task_name, :status, :user_name, :time)';
}