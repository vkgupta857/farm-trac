<?php
include_once 'includes/dbcon.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['f_id']) && isset($_POST['f_password']) && isset($_POST['f_submit'])) {
        $f_id = $_POST['f_id'];
        $password = $_POST['f_password'];
        $stmt = $con->prepare("Select * from farmer where f_id = ? ") or die($con->error);
        $stmt->bind_param("s", $f_id);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION['farmer'] = $f_id;
            header("location:fdash.php");
        } else {
            echo '<script>alert("User does not Exist");</script>';
            header("location:login.php");
        }
    } elseif (isset($_POST['m_id']) && isset($_POST['m_password']) && isset($_POST['m_submit'])) {
        $m_id = $_POST['m_id'];
        $m_password = $_POST['m_password'];
        $stmt = $con->prepare("Select * from mediocre where m_id = ? ");
        $stmt->bind_param("s", $m_id);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION['mediocre'] = $m_id;
            header("location:mdash.php");
        } else {
            echo '<script>alert("User does not Exist");</script>';
            header("location:login.php");
        }
    } elseif (isset($_POST['i_id']) && isset($_POST['i_password']) && isset($_POST['i_submit'])) {
        $i_id = $_POST['i_id'];
        $i_password = $_POST['i_password'];
        $stmt = $con->prepare("Select * from industrialist where i_id = ? ") or die($con->error);
        $stmt->bind_param("s", $i_id);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION['industrialist'] = $i_id;
            header("location:idash.php");
        } else {
            echo '<script>alert("User does not Exist");</script>';
            header("location:login.php");
        }
        $stmt->close();
        $con->close();
    }
}