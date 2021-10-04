<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"hotel");
if($_GET['rt']=='a')
{
    $query = "update singlenonac set holder_name = null,holder_id = null
    ,holder_mobile = null,holder_add = null,
    in_date = null,out_date = null,status=0 where rno=$_GET[rn]";
}
if($_GET['rt']=='b')
{
    $query = "update singleac set holder_name = null,holder_id = null
    ,holder_mobile = null,holder_add = null,
    in_date = null,out_date = null,status=0 where rno = $_GET[rn] ";
}
if($_GET['rt']=='c')
{
    $query = "update doublenonac set holder_name = null,holder_id = null
    ,holder_mobile = null,holder_add = null,
    in_date = null,out_date = null,status=0 where rno = $_GET[rn] ";
}
if($_GET['rt']=='d')
{
    $query = "update doubleac set holder_name = null,holder_id = null
    ,holder_mobile = null,holder_add = null,
    in_date = null,out_date = null,status=0 where rno = $_GET[rn] ";
}
$query_run = mysqli_query($connection, $query);
header("location:./rooms.php");
?>