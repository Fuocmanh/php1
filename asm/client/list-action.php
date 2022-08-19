<?php 
                                require('include/connect.php');
                               
                                if (isset($_POST['condition'])) {
                                    // khai bao bien
                                    // xu ly img
                                    $id=$_POST['id'];
                                    $sql = "UPDATE `bill` SET `condition`=1 WHERE `bill_id`=$id";
                                    $conn->query($sql);
                                }
header('location: list-bill.php');
