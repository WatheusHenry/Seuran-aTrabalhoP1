-- Codigo vulneravel

$username = $_POST['username'];
$query = "SELECT * FROM users WHERE username = '$username'";

-- Codigo reslvido
$stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
$stmt->execute(['username' => $username]);
