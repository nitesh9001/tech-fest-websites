<?php
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
error_reporting(0);
ob_start();
session_start();

define('DB_DRIVER', 'mysql');
define('DB_SERVER', 'localhost');
define('DB_SERVER_USERNAME', 'yantragene');
define('DB_SERVER_PASSWORD', 'nDr2020');
define('DB_DATABASE', 'yantragene');



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



if (isset($_POST["update"])) {
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
      // $msg = '<span style="color:white;margin-top:20px">Email already exist</span>';
      // $msgType = "warning";
      $sql="UPDATE student SET phonenumber='".$_POST['phonenumber']."',event='".implode(",",($_POST['event']))."' WHERE email='".$_POST['email']."'";
      $stmt=$DB->prepare($sql);
      $stmt->bindValue(":phonenumber", $no);
      $stmt->bindValue(":event", $event);
      $stmt->execute();
      $result = $stmt->rowCount();
      if ($result>0) {
        // $msg="successfully updated";
        // $msgType="warning";

      }else{
        echo "data not updated";
      }


      if ($result > 0) {
       
        $lastID = $DB->lastInsertId();

        $message .= '<html><head>
                <title>congratulation </title>
                </head>
                <body>';
        $message .= '<h1>Hi ' . $nm . '!</h1><br>';
        $message .= '<h1>Congrats! You have successfully updated data for yantragene 2k20.</h1>';
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

        $mail->Username = 'yantragene2020@gmail.com';
        $mail->Password = 'nDrfgiet2020';

        $mail->SetFrom('yantragene2020@gmail.com', 'yantragene');
        $mail->AddAddress($em);

        $mail->Subject = trim("yantragene2k20");
        $mail->MsgHTML($message);        

        try {
          $mail->send();
          ?>
          <script type="text/javascript">
        setTimeout(function() {
            window.location.href = 'congrt2.html';
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

if (isset($_POST["update1"])) {
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
      // $msg = '<span style="color:white;margin-top:20px">Email already exist</span>';
      // $msgType = "warning";
      $sql="UPDATE team SET number='".$_POST['phonenumber1']."',member1='".$_POST['m1']."',member2='".$_POST['m2']."',member3='".$_POST['m3']."',member4='".$_POST['m4']."',event='".implode(",",($_POST['event']))."' WHERE email='".$_POST['email1']."'";
      $stmt=$DB->prepare($sql);
      $stmt->bindValue(":phonenumber", $no);
      $stmt->bindValue(":member1", $m1);
      $stmt->bindValue(":member2", $m2);
      $stmt->bindValue(":member3", $m3);
      $stmt->bindValue(":member4", $m4);      
      $stmt->bindValue(":event", $event);
      $stmt->execute();
      $result = $stmt->rowCount();
      if ($result>0) {
        // $msg="successfully updated";
        // $msgType="warning";

      }else{
        echo "data not updated";
      }


      if ($result > 0) {
       
        $lastID = $DB->lastInsertId();

        $message .= '<html><head>
                <title>congratulation </title>
                </head>
                <body>';
        $message .= '<h1>Hi ' . $nm . '!</h1><br>';
        $message .= '<h1>Congrats! You have successfully updated data for yantragene 2k20.</h1>';
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

        $mail->Username = 'yantragene2020@gmail.com';
        $mail->Password = 'nDrfgiet2020';

        $mail->SetFrom('yantragene2020@gmail.com', 'yantragene');
        $mail->AddAddress($em);

        $mail->Subject = trim("yantragene2k20");
        $mail->MsgHTML($message); 

        try {
          $mail->send();
          ?>
          <script type="text/javascript">
        setTimeout(function() {
            window.location.href = 'congrt2.html';
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
    <!-- <p><?php  $msg; ?></p> -->
  </div>
<?php }
 ?>