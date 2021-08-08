<?php
  require_once('conn_hw9.php');
  if (
    empty($_POST['username']) ||
    empty($_POST['password']) 
  ) {
    header('Location: login.php?errCode=1');
    die();
  }
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = sprintf(
    "select * from  Anna3143_users where username='%s' and password='%s'",
    $username,
    $password
  );
  $result = $conn->query($sql);
  if (!$result) {
    die($conn->error);
  }

  if ($result->num_rows) {
    // 登入成功
    $expire = time() + 3600 * 24 * 30; // 30 day
    setcookie("username", $username, $expire);
    header("Location: index_hw9.php");
  } else {
    header("Location: login.php?errCode=2");
  }
?>