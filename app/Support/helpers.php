<?php

function isAdmin($user){
    if(is_numeric($user)){

    } else {
        if ($user->is_admin) {
            return true;
        }
        return false;
    }
}
