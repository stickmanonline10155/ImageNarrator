@ -1,45 +1,40 @@
<?php
    session_start();

    $dbaction=$_POST['dbaction'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $link=mysqli_connect('localhost','root','','narratordb_test1');
    
    $dbaction = $_POST['dbaction'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dateCreated = date('Y-m-d'); // Get the current date and time
    $link = mysqli_connect('localhost', 'root', '', 'narratordb_test1');

    if ($dbaction == "insert") {

        mysqli_begin_transaction($link);
    

        try {
            // 透過使用者輸入的 email,password 在user表中新增一筆新的資料
            $sqlUser = "INSERT INTO user (email, password) VALUES (?, ?)";
            // Insert new data in the user table with email, password, and dateCreated
            $sqlUser = "INSERT INTO user (email, password, dateCreated) VALUES (?, ?, ?)";
            $stmtUser = mysqli_prepare($link, $sqlUser);
            //mysqli_stmt_bind_param($stmtUser, "ss", $email, $password);
            mysqli_stmt_bind_param($stmtUser, "sss", $email, $password, $dateCreated);
            mysqli_stmt_execute($stmtUser);
            $userId = mysqli_insert_id($link); // 獲得剛建立的userID
            
            // 在profile表中為此為使用者新增空值
            //$sqlProfile = "INSERT INTO profile (userID) VALUES (?)";
            //$stmtProfile = mysqli_prepare($link, $sqlProfile);
            //mysqli_stmt_bind_param($stmtProfile, "i", $userId);
            //mysqli_stmt_execute($stmtProfile);
    
            $userId = mysqli_insert_id($link); // Get the newly created userID

            
            mysqli_commit($link);

            // 使用者註冊成功後，可以根據以下兩個資料唯一識別註冊或登入的是哪一位使用者
            // Set session variables to identify the user after successful registration
            $_SESSION['userID'] = $userId;
            $_SESSION['email'] = $email;
    
            $message = "registration success";

            $message = "Registration successful";
            echo "<script type='text/javascript'>alert('$message'); location.href = '../pages-dashboard.php';</script>";
            exit;
        } catch (Exception $e) {
            // 新增失敗
            // Handle errors and rollback transaction if insertion fails
            mysqli_rollback($link);
            $message = "registration failed" . $e->getMessage();
            $message = "Registration failed: " . $e->getMessage();
            echo "<script type='text/javascript'>alert('$message'); location.href = '../pages-register.php';</script>";
        }
    }
    mysqli_close($link);

?>
