<?php
  require_once("conn_hw11.php");

  function getUserFromUsername($username) {
    global $conn;
    $sql = sprintf(
      "select * from Anna3143_users where username = '%s'",
      $username
    );
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    return $row; // username, id, nickname, role
  }

  function escape($str) {
    return htmlspecialchars($str, ENT_QUOTES);
  }

?>
