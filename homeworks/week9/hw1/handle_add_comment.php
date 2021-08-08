<?php
  require_once('conn_hw9.php');

  if (
    empty($_POST['content'])
  ) {
    header('Location: index_hw9.php?errCode=1');
    die('資料不齊全');
  }

  
  $username = $_COOKIE['username'];
  $user_sql = sprintf(
    "select nickname from Anna3143_users where username='%s'",
    $username
  );
  $user_result = $conn->query($user_sql);
  $row = $user_result->fetch_assoc();
  $nickname = $row['nickname'];

  $content = $_POST['content'];
  $sql = sprintf(
    "insert into Anna3143_users(nickname, content) values('%s', '%s')",
    $nickname,
    $content
  );
  $result = $conn->query($sql);
  if (!$result) {
    die($conn->error);
  }
  header("Location: index_hw9.php");
?>