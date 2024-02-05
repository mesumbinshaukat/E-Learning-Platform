<?php
// Fetch messages from the database
$pdo = new PDO("mysql:host=localhost;dbname=e-learning", "root", "");
$stmt = $pdo->query("SELECT * FROM messages WHERE sender_id = 0 ORDER BY id;");
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  echo "<p>" . htmlspecialchars($row['message']) . "</p>";
}
?>
