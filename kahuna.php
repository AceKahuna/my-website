<html>
<body>

<form action="kahuna.php" method="GET"> <!--THE INPUT FORM-->
    <input type="text" name="comment" placeholder="First name">
    <input type="submit" name="submit" placeholder="submit">
    <br>
    <input type="text" name="delete" placeholder="First comment">
    <input type="submit" name="del" placeholder="delete">
    <br>
    <input type="text" name="update" placeholder="Update"> <!--to update data two fields are required-->
    <input type="text" name="new_information" placeholder="Enter new details">
    <input type="submit" name="updated" placeholder="Update">



<?php
/*HOW TO ADD DATA*/
if(isset($_GET['submit'])) {

    $connect = mysqli_connect("localhost", "root", "", "revision_db");
    $comment = $_GET['comment'];
    $inser = mysqli_query($connect, "INSERT INTO `whatever`(`id`,`comment`) values(null,'$comment')");

    if ($inser) {
        echo $comment;
    }
}
?>
<!--HOW TO DELETE DATA-->
<?php
if(isset($_GET['del'])){

$connect=mysqli_connect("localhost","root","","revision_db");
$deleted=$_GET['delete'];
$del=mysqli_query($connect,"DELETE FROM `whatever` WHERE id=$deleted");

}
?>
    <!--how to update a database-->
    <?php
    if(isset($_GET['updated'])){

      $connect=mysqli_connect("localhost","root","","revision_db");
      $update=$_GET['update'];
      $new=$_GET['new_information'];
        $update=mysqli_query($connect,"UPDATE `whatever` SET `id`=$update,`comment`=$new WHERE id=$update");


    }





    ?>


</form>
</body>
</html>








