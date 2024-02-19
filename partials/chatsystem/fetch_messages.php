<?php
// Fetch messages from the database
$username = $_COOKIE['lc_username'];
$email = $_COOKIE['lc_email'];

// $pdo = new PDO("mysql:host=localhost;dbname=e-learning", "root", "");
$pdo = new PDO("mysql:host=127.0.0.1:3306;dbname=u797177118_E_learning", "u797177118_root", "elearningPlatform123");
$stmt = $pdo->query("SELECT * FROM messages WHERE (username = '$username') && (email = '$email') && (message_type = 'Live_Chat') ORDER BY id");
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  $message = htmlspecialchars($row['message']);
  $usertype = $row['user_type'];

  // Check if the message is from the user or admin
  if ($usertype === 'Anonymous' && $row['email'] === $email) {
    // User message
    echo "<div class='media media-chat media-chat-reverse'>";
    echo "<div class='media-body'>";
    echo "<p>$message</p>";
    echo "</div>";
    echo "</div>";
  } elseif ($usertype === 'Admin') {
    // Admin message
    echo "<div class='media media-chat '>";
    echo "<img class='avatar' src='https://img.icons8.com/color/36/000000/administrator-male.png' alt='' id='admin_avatar'>";
    echo "<div class='media-body'>";
    echo "<p>$message</p>";
    echo "</div>";
    echo "</div>";
  }
}
