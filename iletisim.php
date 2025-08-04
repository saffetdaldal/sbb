<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ad = htmlspecialchars($_POST["ad"]);
    $email = htmlspecialchars($_POST["email"]);
    $mesaj = htmlspecialchars($_POST["mesaj"]);

    echo "<h2>Mesajınız Alındı</h2>";
    echo "<p><strong>Ad:</strong> $ad</p>";
    echo "<p><strong>E-posta:</strong> $email</p>";
    echo "<p><strong>Mesaj:</strong><br>$mesaj</p>";
} else {
    echo "Form gönderilmedi.";
}
?>