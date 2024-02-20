<?php
session_start();
// Fetch messages from the database
$username = $_SESSION["lv_username"];
$email = $_SESSION["lv_email"];

$pdo = new PDO("mysql:host=localhost;dbname=e-learning", "root", "");
$stmt = $pdo->query("SELECT * FROM messages WHERE (username = '$username') AND (email = '$email') AND (message_type = 'Live_Chat') ORDER BY id");
  
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  $message = htmlspecialchars($row['message']);
  $usertype = $row['user_type'];
  
  // Check if the message is from the user or admin
  if ($usertype === 'Anonymous' && $row['email'] === $email) {
      // User message
      echo "<div class='media media-chat'>";
      echo "<div class='media-body'>";
      echo "<p>$message</p>";
      echo "</div>";
      echo "</div>";
  } elseif ($usertype === 'Admin') {
      // Admin message
      echo "<div class='media media-chat media-chat-reverse'>";
      echo "<img class='avatar' src='https://img.icons8.com/color/36/000000/administrator-male.png' alt='' id='admin_avatar'>";
      echo "<div class='media-body'>";
      echo "<p>$message</p>";
      echo "</div>";
      echo "</div>";
  }
}
