<?php
echo '  <form method="post" enctype="multipart/form-data"">
<input type="file" name="file" id="file" />
<input type="submit" name="submit" value="Submit" />
</form>';

if(isset($_FILES['file'])) {
    echo $_FILES['file']['name'];
    echo "<br>";
    echo $_FILES['file']['size'];
}

?>