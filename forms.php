<?php
// if(isset( $_GET['name'])){
// echo $_GET['name'];
// print_r ($_GET);
// if(isset( $_REQUEST['name'])){
//     echo $_REQUEST['name'];
//     print_r ($_REQUEST);
    
// }
echo $_SERVER['SERVER_ADDR'];
echo $_SERVER['QUERY_STRING'];
if(isset($_REQUEST['submit'])){
    session_start();
    $_SESSION['name'] = $_POST['name']
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Document</title>
   <!-- <hr style=" border-color:blue"> -->
</head>
<body>
    <form action="forms.php" method="get">
    <input type="text" name ="name" placeholder="enter name">
    <input type="text" name ="age" placeholder="enter age">    
    <input type="submit">    
    </form>
    <a href="post.php?name=secondpage">click to post page</a>
   <?php echo $_REQUEST['name'];
   $kl="saman";
   $kl .="gunarathna";
   echo $kl;
   ?>
</body>
</html>