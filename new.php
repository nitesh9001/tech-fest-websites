<?php
require 'update.php';
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
error_reporting(0);
ob_start();
session_start();

define('DB_DRIVER', 'mysql');
define('DB_SERVER', 'localhost');
define('DB_SERVER_USERNAME', 'user_name');
define('DB_SERVER_PASSWORD', '');
define('DB_DATABASE', 'db_name');



$dboptions = array(
    PDO::ATTR_PERSISTENT => FALSE,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
try {
  $DB = new PDO(DB_DRIVER . ':host=' . DB_SERVER . ';dbname=' . DB_DATABASE, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, $dboptions);
} catch (Exception $ex) {
  echo $ex->getMessage();
  die;
}



if (isset($_POST["Submit"])) {
  require_once "phpmailer/class.phpmailer.php";

  $nm = trim($_POST["name"]);
  $em = trim($_POST["email"]);
   $gr=trim($_POST['gender']);
    $cn=trim($_POST['cname']);
    $yr=trim($_POST['year']);
    $no=trim($_POST['phonenumber']);
    $event=implode(",",($_POST['event']));

  $sql = "SELECT COUNT(*) AS count from student where email = :email";
  try {
    $stmt = $DB->prepare($sql);
    $stmt->bindValue(":email", $em);
    $stmt->execute();
    $result = $stmt->fetchAll();

    if ($result[0]["count"] > 0) {
      $msg = '<span style="color:white;margin-top:20px">your data already exit!<br>please click update</span>';
      $msgType = "warning";
      ?>
      <script type="text/javascript">
        setTimeout(function() {
            window.location.href = 'login.php';
        }, 8000);
    </script>
    <?php

    
    } else {
      $sql = "INSERT INTO student (name,email,gender,cname,year,phonenumber,event)
     VALUES ('$nm','$em','$gr','$cn','$yr','$no','$event')";
      $stmt = $DB->prepare($sql);
      $stmt->bindValue(":name", $nm);
      $stmt->bindValue(":email", $em);
      $stmt->bindValue(":gender", $gr);
      $stmt->bindValue(":cname", $cn);
      $stmt->bindValue(":year", $yr);
      $stmt->bindValue(":phonenumber", $no);
      $stmt->bindValue(":event", $event);

      $stmt->execute();
      $result = $stmt->rowCount();


      if ($result > 0) {
       
        $lastID = $DB->lastInsertId();

        $message .= '<html><head>
                <title>congratulation </title>
                </head>
                <body>';
        $message .= '<h1>Hi ' . $nm . '!</h1><br>';
        $message .= '<h1>Congrats! You have successfully register for yantragene 2k20.</h1>';
        // $message .= '<p><a href="'.SITE_URL.'activate.php? id=' . base64_encode($lastID) . '">CLICK TO ACTIVATE YOUR ACCOUNT</a>';
       
        $message.='<p style="font-size:15px">Phone Number : ' . $no . '</p><br>';
        $message.='<p style="font-size:15px">Gender   :' . $gr . '</p><br>';
        $message.='<p style="font-size:15px">College Name  :' . $cn . '</p><br>';
        $message.='<p style="font-size:15px">Events   :' . $event . '</p><br>';
        $message.='<p>Thankyou for participating.</p>';
        // $message="Detail";
        $message .= "</body></html>";
        

        // php mailer code starts
        $mail = new PHPMailer;

        $mail->SMTPDebug = 0;           
        $mail->IsSMTP();
        $mail->Host = "localhost"; 
        $mail->Port = 25; 
         $mail->ssl=false; 
        $mail->authentication = false;              

        $mail->Username = 'user_name';
        $mail->Password = 'your_password';

        $mail->SetFrom('user_name', 'db_name');
        $mail->AddAddress($em);

        $mail->Subject = trim("your_subject");
        $mail->MsgHTML($message);

        try {
          $mail->send();
          ?>
          <script type="text/javascript">
        setTimeout(function() {
            window.location.href = 'congrats.html';
        }, .5);
    </script>
          <?php
          $msgType = "success";
        } catch (Exception $ex) {
          $msg = $ex->getMessage();
          $msgType = "warning";
        }
      } else {
        $msg = "Failed to create User";
        $msgType = "warning";
      }
    }
  } catch (Exception $ex) {
    echo $ex->getMessage();
  }
}
//new code

if (isset($_POST["Submit1"])) {
  require_once "phpmailer/class.phpmailer.php";

  $nm = trim($_POST["name1"]);
  $em = trim($_POST["email1"]);
   $gr=trim($_POST['gender1']);
    $cn=trim($_POST['cname1']);
    $yr=trim($_POST['year1']);
    $no=trim($_POST['phonenumber1']);
    $tm=trim($_POST['tname']);
    $m1=trim($_POST['m1']);
    $m2=trim($_POST['m2']);
    $m3=trim($_POST['m3']);
    $m4=trim($_POST['m4']);

    $event=implode(",",($_POST['event']));

  $sql = "SELECT COUNT(*) AS count from team where email = :email";
  try {
    $stmt = $DB->prepare($sql);
    $stmt->bindValue(":email", $em);
    $stmt->execute();
    $result = $stmt->fetchAll();

    if ($result[0]["count"] > 0) {
      $msg = '<span style="color:white;margin-top:20px">your data already exit!<br>please click update</span>';
      // $msg="your data already exit!<br>please click update";
      $msgType = "warning";
      ?>
      <script type="text/javascript">
        setTimeout(function() {
            window.location.href = 'login.php';
        }, 10000);
    </script>
    <?php

    
    } else {
      $sql = "INSERT INTO team (name,email,gender,cname,year,number,tname,member1,member2,member3,member4,event)
     VALUES ('$nm','$em','$gr','$cn','$yr','$no','$tm','$m1','$m2','$m3','$m4','$event')";
      $stmt = $DB->prepare($sql);
      $stmt->bindValue(":name", $nm);
      $stmt->bindValue(":email", $em);
      $stmt->bindValue(":gender", $gr);
      $stmt->bindValue(":cname", $cn);
      $stmt->bindValue(":year", $yr);
      $stmt->bindValue(":phonenumber", $no);
      $stmt->bindValue(":tname", $tm);
      $stmt->bindValue(":member1", $m1);
      $stmt->bindValue(":member2", $m2);
      $stmt->bindValue(":member3", $m3);
      $stmt->bindValue(":member4", $m4);

      $stmt->bindValue(":event", $event);

      $stmt->execute();
      $result = $stmt->rowCount();


      if ($result > 0) {
       
        $lastID = $DB->lastInsertId();

        $message .= '<html><head>
                <title>congratulation </title>
                </head>
                <body>';
        $message .= '<h1>Hi ' . $nm . '!</h1><br>';
        $message .= '<h1>Congrats! You have successfully register for yantragene 2k20.</h1>';
        // $message .= '<p><a href="'.SITE_URL.'activate.php? id=' . base64_encode($lastID) . '">CLICK TO ACTIVATE YOUR ACCOUNT</a>';
       
        $message.='<p style="font-size:15px">Phone Number : ' . $no . '</p><br>';
        $message.='<p style="font-size:15px">Gender   :' . $gr . '</p><br>';
        $message.='<p style="font-size:15px">College Name  :' . $cn . '</p><br>';
        $message.='<p style="font-size:15px">Team name  :' . $tm . '</p><br>';
        $message.='<p style="font-size:15px">Member  :' . $m1 . ' ,' .$m2 . ','.$m3.',' .$m4. '</p><br>';
        $message.='<p style="font-size:15px">Events   :' . $event . '</p><br>';
        $message.='<p>Thankyou for participating.</p>';
        // $message="Detail";
        $message .= "</body></html>";
        

        // php mailer code starts
        $mail = new PHPMailer;

        $mail->SMTPDebug = 0;           
        $mail->IsSMTP();
        $mail->Host = "localhost"; 
        $mail->Port = 25; 
         $mail->ssl=false; 
        $mail->authentication = false;              

        $mail->Username = 'usrer_name';
        $mail->Password = 'password';

        $mail->SetFrom('usrer_name', 'yantragene');
        $mail->AddAddress($em);

        $mail->Subject = trim("yantragene2k20");
        $mail->MsgHTML($message);

        try {
          $mail->send();
          ?>
          <script type="text/javascript">
        setTimeout(function() {
            window.location.href = 'congrats.html';
        }, .5);
    </script>
          <?php
          $msgType = "success";
        } catch (Exception $ex) {
          $msg = $ex->getMessage();
          $msgType = "warning";
        }
      } else {
        $msg = "Failed to create User";
        $msgType = "warning";
      }
    }
  } catch (Exception $ex) {
    echo $ex->getMessage();
  }
}
?>
<?php if ($msg <> "") { ?>
  <div class="alert alert-dismissable alert-<?php echo $msgType; ?>">
    <p><?php echo $msg; ?></p>
  </div>
<?php } ?>