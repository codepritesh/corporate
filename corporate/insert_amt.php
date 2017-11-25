<?php
include_once("function.php");
if(isset($_POST['submit'])){
$scheme=htmlentities($_POST['scheme']);
            if($scheme==1){
                            $amt=htmlentities($_POST['fixed']);
                            if($amt!=''){
                                         $shm="Fixed Deposit";
                                         $amount=1000 * $amt;
					         $chk= mysql_query("SELECT * from `set_deposit_amt` where  `scheme_id`='$scheme' and `amount`='$amount'")or die(mysql_error());
					         echo  $rchk=mysql_num_rows($chk);
					         if($rchk>0){
					         $msg="This is already Exist..";
					         }else{
                                         echo "INSERT INTO `set_deposit_amt` set `scheme`='$shm', `scheme_id`='$scheme', `amount`='$amount'";
                                     mysql_query("INSERT INTO `set_deposit_amt` set `scheme`='$shm', `scheme_id`='$scheme', `amount`='$amount'");
                                         $msg="Successfully Submitted.";
                                        }
			              }
                            else{
                                 $msg="Please Insert the Amount for Selected Scheme.";
                                }
            }
            elseif($scheme==2){
                                echo $amt1=htmlentities($_POST['rd']);
                                if($amt1!=''){
                                                $shm="Recurring Deposit";
                                                 $amount=100 * $amt1;
						 $chk= mysql_query("SELECT * from `set_deposit_amt` where  `scheme_id`='$scheme' and `amount`='$amount'");
					 $rchk=mysql_num_rows($chk);
					 if($rchk>0){
					  $msg="This is already Exist..";
					 }else{
                                                 echo "INSERT INTO `set_deposit_amt` set `scheme`='$shm', `scheme_id`='$scheme', `amount`='$amount'";
                                          mysql_query("INSERT INTO `set_deposit_amt` set `scheme`='$shm', `scheme_id`='$scheme', `amount`='$amount'");
                                             $msg="Successfully Submitted.";
                                                }
				}
                                else{
                                    $msg="Please Insert the Amount for Selected Scheme.";
                                   }
			  }
			elseif($scheme==3){               
                                echo $amt2=htmlentities($_POST['daily']);
                                if($amt2!=''){
                                                $shm="Daily Deposit";
                                                 $amount=10 * $amt2;
						                 $chk= mysql_query("SELECT * from `set_deposit_amt` where  `scheme_id`='$scheme' and `amount`='$amount'");
					                     $rchk=mysql_num_rows($chk);
					           if($rchk>0){
					           $msg="This is already Exist..";
					                       }
									else{
                                                 echo "INSERT INTO `set_deposit_amt` set `scheme`='$shm', `scheme_id`='$scheme', `amount`='$amount'";
                                          mysql_query("INSERT INTO `set_deposit_amt` set `scheme`='$shm', `scheme_id`='$scheme', `amount`='$amount'");
                                             $msg="Successfully Submitted.";
                                           }
				                         }
                                else{
                                    $msg="Please Insert the Amount for Selected Scheme.";
                                   }
                               }
				 elseif($scheme==4){               
                                echo $amt3=htmlentities($_POST['compulsory']);
                                if($amt3!=''){
                                                $shm="Compulsory Deposit";
                                                 //$amount=50 * $amt3;
						                 $chk= mysql_query("SELECT * from `set_deposit_amt` where  `scheme_id`='$scheme' and `amount`='$amt3'");
					                     $rchk=mysql_num_rows($chk);
					           if($rchk>0){
					           $msg="This is already Exist..";
					                       }
									else{
                                               // echo "INSERT INTO `set_deposit_amt` set `scheme`='$shm', `scheme_id`='$scheme', `amount`='$amt3'";
                                          mysql_query("UPDATE `set_deposit_amt` set `scheme`='$shm', `scheme_id`='$scheme', `amount`='$amt3' WHERE `scheme_id`='$scheme'");
                                             $msg="Successfully Updated.";
                                           }
				                         }
                                else{
                                    $msg="Please Insert the Amount for Selected Scheme.";
                                   }
                               }
}
header("location:deposit_amtscheme.php?msg=$msg");
?>