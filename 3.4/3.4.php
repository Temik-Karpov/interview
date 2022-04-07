<?php
session_start();
$folder = @opendir("./images");

while ($file = readdir($folder))
{
    $parts = explode(".", $file);

    if($parts[1] == "jpg" || $parts[1] == "png")
    {
        echo '<img src="'."./images".'/'.$file.'" width="100" height="100"/>';
    }
}
closedir($folder);
?>

<form enctype="multipart/form-data" method="post" action="check_image.php">
    <label>Enter your image:</label>
    <input type="file" placeholder="image..." name="image"><br>
    <button type="submit">Send</button>
</form>
<p><? if(isset($_SESSION["success"])) echo $_SESSION["success"] ?></p>


