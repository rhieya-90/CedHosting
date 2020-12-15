<?php 
include ("../config.php");
$query = new Query;
$message="";
    if(isset($_POST["submit"])){
        $f_name=isset($_POST["f_name"])? $_POST["f_name"] :"";
        $l_name=isset($_POST["l_name"])? $_POST["l_name"] :"";
        $email=isset($_POST["email"])? $_POST["email"] :"";
        $mobile=isset($_POST["mobile"])? $_POST["mobile"] :"";
        $pass=isset($_POST["pass"])? $_POST["pass"] :"";
        $c_pass=isset($_POST["c_pass"])? $_POST["c_pass"] :"";
        $question=isset($_POST["question"])? $_POST["question"] :"";
        $answer=isset($_POST["answer"])? $_POST["answer"] :"";
        $name=$f_name." ".$l_name;
         $password = md5($pass);
         $verificationKey=md5(time().$name);

                $user = $query->fetchRecord('tbl_user','',['email'=>$email]);
           if($user == 0) {
                    $result = $query->insertRecord('tbl_user',['name'=>$name,'email'=>$email,'mobile'=>$mobile,'password'=>$password,'is_admin'=>0,'security_question'=>$question,'security_answer'=>$answer]);
                    if($result) {
                        $message = "Registration Successfull!";
                        ?>
                            <script>
                                alert($message);
                            </script>
                        <?php
                        $to=$email;
                        $subject="Email Verification";
                        $msg="<a href='http://localhost/CedHosting/web/verification.php?vkey=$verificationKey,email=$email'>Verify Account</a>";
                        $headers = 'From:shona941538@gmail.com' . "\r\n";                         
                        mail($to,$subject,$msg,$headers);
                    } else {
                        $message = "Registration Failed! Try again.";
                   
                        ?>
                            <script>
                                alert($message);
                            </script>
                        <?php
                    }
            } else {
                $message = "User Already Registered! Please login!";

                        ?>
                            <script>
                                alert($message);
                            </script>
                        <?php
            }
    }
if(isset($_POST['login'])){
    $email=isset($_POST['email'])? $_POST['email'] :"";
    $mobile=isset($_POST['mobile'])? $_POST['mobile'] :"";
     $user = $query->fetchRecord('tbl_user','',['email'=>$email]);
     if($user == 0) {
                    $message = "Username or Password is wrong!.";
                    ?>
                    <script>
                        alert($message);
                    </script>
                    <?php

    } else {
        if($user[0]['email_approved'] == 1) {
            
            ?>
            <script>
                alert($message);
            </script>
            <?php
                    
        } else{
            header("verification.php");
        }
}
}
?>