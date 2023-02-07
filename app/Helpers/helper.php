<?php
     function userFullName(){
        return auth()->user()->prenom . " " . auth()->user()->nom;
    }

    function getROleName(){
        $roleName = "";
        $i = 0;

        foreach(auth()->user()->role as $role){
            $roleName .= $role->nom;

            if($i < sizeof(auth()->user()->role)-1){
                $roleName .= ",";
            }
            $i++;
        }
        return $roleName;
    }