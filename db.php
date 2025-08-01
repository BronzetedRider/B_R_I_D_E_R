<?php
$host = 'serverless-eastus.sysp0000.db3.skysql.com';
$port = 4027;
$db   = 'userdb';
$user = 'dbpbf01881211';
$pass = '@Brider2007'; 

$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_SSL_CA       => '/etc/ssl/certs/ca-certificates.crt', // Render has this
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "✅ Connected to SkySQL!";
} catch (PDOException $e) {
    echo "❌ Connection failed: " . $e->getMessage();
}
?>
