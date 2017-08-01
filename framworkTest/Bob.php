<?php 
class Bob{

///////////////// VERIF CONTENU D'UNE VARIABLE /////////////////
function whatThat($yourVar){
    if(!empty($yourVar)){
        echo 'Something inside.';
        if(is_dir($yourVar)){
            return 'Folder';
        }if(is_file($yourVar)){
            return 'File';
        }if(is_int($yourVar)){
            return 'Numeric';
        }if(is_string($yourVar)){
            return 'String';
        }if(is_object($yourVar)){
            return 'Objet';
        }if(is_array($yourVar)){
            return 'Array';
        }if(is_bool($yourVar)){
            return 'Booléen';
        }
    }else{
    echo 'Nothing inside.';
    }
}

/////////////////// Afficher un tableau ////////////////
function diplayArray($array){
    echo '<pre>';
    var_dump($array);
    echo'</pre>';
}

}
?>