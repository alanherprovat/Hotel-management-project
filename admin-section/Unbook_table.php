<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"restaurant");
if($_GET['tt']=='s')
{
    $query = "update single set holder_name = null,holder_id = null
    ,holder_mobile = null,holder_address = null,
    status=0 where table_no=$_GET[tn]";
}
if($_GET['tt']=='f')
{
    $query = "update family set holder_name = null,holder_id = null
    ,holder_mobile = null,holder_address = null,
    status=0 where table_no = $_GET[tn] ";
}
if($_GET['tt']=='d')
{
    $query = "update double_t set holder_name = null,holder_id = null
    ,holder_mobile = null,holder_address = null,
    status=0 where table_no = $_GET[tn] ";
}

$query_run = mysqli_query($connection, $query);
header("location:Table.php");
?>