<?php

if (isset($_GET['name'])) {

    echo "Hello <strong>".$_GET['name']."</strong>";
}
else{
    echo " <span style='color:red' >pleas Enter Name</span>";
}