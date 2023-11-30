<?php

require_once 'model/osztaly.php';

$id = $_GET['id'];
$data = $osztaly->getUser($id);

echo $data;

?>

<div class="col-mid-6">
    <h3>Név</h3>
    <img src="">
    <p>3. sor 5. hely</p>
</div>