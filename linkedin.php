
<form action="" method="get">
Enter Link:<input type="text" name="link" placeholder="link" autocomplete="off" required><br>
<input type="submit" value="ok">
</form>
<?php
error_reporting(0);
if (!empty($l = $_GET['link'])) {
    echo "<a href='https://www.linkedin.com/sharing/share-offsite/?url=".$l."' target='_blank'>Post</a>";    
}
//&hashtag=%23AquiVaElHashtag
?>
