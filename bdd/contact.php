<?php 

    if (!isset($_POST)) {
        return;
    }

    try {
        $pdo = New PDO('mysql:host=localhost;dbname=formulaire;charset=utf8','root', '');
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return;
    }

    $sql = "INSERT INTO contact (nom, prenom, email, msg)
    VALUES(:nom, :prenom, :email, :msg)";

    $stmt = $pdo->prepare($sql);

    $nom = htmlspecialchars($_POST["lastname"]);
    $prenom = htmlspecialchars($_POST["name"]);
    $message = htmlspecialchars($_POST["message"]);
    $email = htmlspecialchars($_POST["email"]);

    $stmt ->bindParam(':msg', $message);
    $stmt ->bindParam(':nom', $nom);
    $stmt ->bindParam(':prenom', $prenom);
    $stmt ->bindParam(':email', $email);

    $result = $stmt->execute();

    header('location: ../contact.php');
?>