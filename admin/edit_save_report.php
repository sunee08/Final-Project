<?php

session_start();

if(empty($submit))
{

require '../db/connect.php';

$pay_id=$_POST['pay_id'];
$status_pay=$_POST['status_pay'];
$adminID=$_POST['adminID'];


$sql = "UPDATE  payment SET  pay_id = '$pay_id',
                          status_pay  = '$status_pay',
                         adminID ='".$_SESSION["id"]."'
                          WHERE pay_id  = '$pay_id'";


                    if(mysql_query($sql)){
                    
                    echo "<script>window.open('report_tech.php','_self')</script>";
                    }
                    else{
                    echo "<script>alert('fail')</script>";
                    echo "<script>window.open('','_self')</script>";
                    
                    }
                    }
                    ?>