<?php

use HTML\Table;

include "namespace.php";
$Table = new HTML\Table();
//$Table  = new Table();   this is another way
$Table->title="HTML FUNCTION";
$Table->numRow=5;
$Table->message();
?>