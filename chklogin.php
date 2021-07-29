<?php
session_start();
if (isset($_POST['urs'])) {
    //connection
    include("conn.php");
    //รับค่า user & m_password
    $urs = mysqli_real_escape_string($conn, $_POST['urs']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
    //query 
    $sql = "SELECT * FROM tbl_member 
                  WHERE  urs='" . $urs . "' 
                  AND  pass='" . $pass . "' ";

    // echo $sql;

    // exit;

    $result = mysqli_query($conn, $sql);



    // echo mysqli_num_rows($result);

    // exit;


    if (mysqli_num_rows($result) == 1) {

        $row = mysqli_fetch_array($result);
        Header("Location: admin/");

    } else {
        echo "<script>";
        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");";
        echo "window.history.back()";
        echo "</script>";
    }
} else {


    Header("Location: login.php"); //user & m_password incorrect back to login again

}
