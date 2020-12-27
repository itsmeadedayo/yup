<?php

function emptyInputSignup($name,$email,$username,$pwd,$pdwRepeat) {
$result;
if(empty($name) || empty($email) || empty($username) || empty($password) || empty($name)){
  $result= true;

}
  else{
    $result= false;
  }
  return $result;
}

function invalidUid($username) {
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
      $result= true;
    
    }
      else{
        $result= false;
      }
      return $result;
    }

    function invalidEmail($email) {
        $result;
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
          $result= true;
        
        }
          else{
            $result= false;
          }
          return $result;
        }


            function pwdMatch($pwd, $pwdRepeat){
                $result;
        
        
                if ($pwd !== $pwdRepeat){
                  $result = true;
                }
                  else{
                    $result= false;
                  }
                  return $result;
                }

                

        function uidExists($conn, $username, $email) {
                $sql = "SELECT * from users WHERE usersUid = ? OR usersEmail =?;";
              $stmt= msqli_stmt_init($conn);

              if(!mysqli_stmt_prepare($stmt,$sql)){

                header("location:../signup.php?error=stmtfailed");
              exit();
           }
            
           mysqli_stmt_bind_param($stmt,"ss", $username, $email);
           mysqli_stmt_execute($stmt);

           $resultData = mysqli_stmt_get_result($stmt);

           if($row = mysqli_fetch_assoc($resultData)){
            return $row;
        }
        else{
            $result = false;
            return $result;
        }

        mysqli_stmt_close($stmt);
            }

            function createUsername($conn, $name, $email, $username, $pwd) {
                $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?,?,?,?);";
              $stmt= mysqli_stmt_init($conn);

              if(!mysqli_stmt_prepare($stmt,$sql)){

                header("location:../signup.php?error=stmtfailed");
              exit();
           }

         $hashedpwd = password_hash($pwd_PASSWORD_DEFAULT);


           mysqli_stmt_bind_param($stmt,"ssss", $name, $username, $email,$pwd, $hashedpwd);
           mysqli_stmt_execute($stmt);
           mysqli_stmt_close($stmt);
           header("location: ../signup.php?error=none");
           exit();
        }

        function emptyInputLogin($username,$pwd) {
          $result;
          if(empty($username) || empty($pwd)){
            $result= true;
          
          }
            else{
              $result= false;
            }
            return $result;
          }
          
        function loginUser($conn, $username, $pwd){
           $uidExists = uidExists($conn, $username, $username);
        if($uidExists ===false){
          header("location:../login.php?error=wronglogin");
          exit();
        }
   $pwdHashed = $uidExists["usersPwd"];
   $checkpwd = password_verify($pwd, $pwdHashed);

   if($checkpwd ===false){
    header("location:../login.php?error=wronglogin");
              exit();
   }
   else if ($uidExists ===true){
    session_start();
    $_SESSION["userid"] = $uidExists["usersid"];
    $_SESSION["userid"] = $uidExists["usersid"];
    header("location:../index.php");
    exit();

   }
        }