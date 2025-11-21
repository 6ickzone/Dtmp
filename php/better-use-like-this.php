<?php
//  GOOD CODE EXAMPLE - SECURE LOGIN
// Uses PDO & Prepared Statements

try {
    // 1. Secure Database Connection (PDO)
    $pdo = new PDO("mysql:host=localhost;dbname=test_db", "root", "");
    // Enable exceptions for easier debugging
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // 2.  PREPARED STATEMENT: Separates Query and Data
        // Uses placeholders (:username)
        $sql = "SELECT * FROM users WHERE username = :username";
        $stmt = $pdo->prepare($sql);
        
        // 3. Bind Parameters (Input is automatically sanitized)
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // 4.  PASSWORD VERIFY: Validates hash (Not plain text)
        // Assumes password is stored as a hash (Bcrypt/Argon2) in DB
        if ($user && password_verify($password, $user['password'])) {
            echo "<h1>Login Successful & Secure!</h1>";
        } else {
            echo "Login Failed / Invalid Credentials.";
        }
    }

} catch(PDOException $e) {
    echo "Connection Error: " . $e->getMessage();
}
?>

<form method="POST">
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit" name="login">Login (Secure)</button>
</form>
