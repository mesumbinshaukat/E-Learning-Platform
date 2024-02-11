<?php
// Fetch messages from the database
$username = $_COOKIE['lc_username'];
$email = $_COOKIE['lc_email'];

$pdo = new PDO("mysql:host=localhost;dbname=e-learning", "root", "");
$stmt = $pdo->query("SELECT * FROM messages WHERE (sender_id = 0) && (username = '$username') && (email = '$email') && (message_type = 'Live_Chat') ORDER BY id");
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  echo "<p>" . htmlspecialchars($row['message']) . "</p>";
}
// $pdo = new PDO("mysql:host=127.0.0.1:3306;dbname=u797177118_E_learning", "u797177118_root", "elearningPlatform123");
// $stmt = $pdo->query("SELECT * FROM messages WHERE sender_id = 0 ORDER BY id;");
// while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//   echo "<p>" . htmlspecialchars($row['message']) . "</p>";
// }