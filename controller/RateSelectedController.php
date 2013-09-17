<?php

var_dump($_POST);
$ids=unserialize($_POST["ids"]);
foreach ($ids as $id)
{
    echo $_POST[$id];
}

?>
