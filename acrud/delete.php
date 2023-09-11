<?php
//database conection  file
include('dbconnection.php');
//Code for deletion
if(isset($_GET['delid']))
{
$rid=intval($_GET['delid']);
$profilepic=$_GET['ppic'];
$ppicpath="profilepics"."/".$profilepic;
$sql=mysqli_query($con,"delete from tblusers where ID=$rid");
// $sql = "DELETE FROM tblusers WHERE ID=$rid";
// mysqli_query($conn, $sql);
unlink($ppicpath);
echo "<script>alert('Data deleted');</script>"; 
echo "<script>window.location.href = 'index.php'</script>";     
} 
?>