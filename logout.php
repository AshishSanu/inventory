<?php 

require_once 'php_action/core.php';
require_once 'php_action/db_connect.php';
// remove all session variables

$sessionId=$_SESSION['sessionId'];

                               $sessionSql="update sessions set user_status='offline' WHERE session_id='$sessionId'";
                               
                               
                                if($connect->query($sessionSql)){
                                    $sql = "select session_start_time, last_update_time from sessions where session_id='$sessionId'";
                                    $res = $connect->query($sql);
                                   //var_dump($res);
                                    if($res->num_rows == 1){
                                        $value = $res->fetch_assoc();
                                        $starttime = new DateTime($value['session_start_time']);
                                        $onlineTime = $starttime->diff(New DateTime($value['last_update_time']));
                                        echo $onlineTime->h .":". $onlineTime->m . ":".$onlineTime->s;
                                        
                                    }
                                    
                                   session_unset(); 

// destroy the session 
session_destroy(); 

//header('location: http://localhost:8085/inventory/index.php');	
                                }
                                else {
                                   // console.log("some error");
                                    $errors[] = "Session is failed to upload" . $sessionSql;	
                                }


?>