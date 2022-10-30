<?php
echo "<h1>Herzlich Willkommen auf meinem Server</h1>";
$pdo = new PDO('mysql:dbname=schema-name;host=mysql', 'user', 'admin', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$query = $pdo->query('SHOW VARIABLES like "version"');

$row = $query->fetch();

echo 'MySQL version:' . $row['Value'];