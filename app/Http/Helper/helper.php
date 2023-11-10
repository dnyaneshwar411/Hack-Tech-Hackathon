<?php

use App\Models\created_pools;
use App\Models\User;

function getUserData($id){
    $user = User::find($id);
    return $user;
}

function created_pool($id){
    $created_pool = created_pools::find($id);
    return $created_pool;
} 
?>