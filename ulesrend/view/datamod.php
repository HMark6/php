<div class="col-mid-2">
<?php
    echo '<form action="index.php" method="post" enctype="multipart/form-data">';
    echo '  <input type="text" name="modositandoNev" class="formal-control" value="'.$_SESSION['nev'].'">';
    echo '  <input type="file" name="fileToUpload" class="formal-control" id="fileToUpload">';
    //echo '  <input type="hidden" name="id" value="'.$_SESSION['id'].'">';
    echo '  <input type="submit" class="btn btn-primary" value="MÓDOSÍTÁS">';
    echo '</form>';

?>
</div>
