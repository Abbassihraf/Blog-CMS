<?php 

function validateTopic($topic){
    $errors=array();

    if (empty($topic['name'])){
        array_push($errors, 'Name is required');
    }

   $existingTopic = selectOne('topics', ['email' => $user['email']]);
   if (isset($existingTopic)){
       array_push($errors, 'Name already exists');
   }
    return $errors;
}


?>