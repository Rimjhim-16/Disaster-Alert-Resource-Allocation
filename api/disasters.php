<?php
header("Content-Type: application/json");
require_once "../config/database.php";

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $stmt = $pdo->query("SELECT * FROM disasters ORDER BY severity DESC, created_at DESC");
    echo json_encode($stmt->fetchAll());
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = json_decode(file_get_contents("php://input"), true);

    if (!isset($data["title"], $data["location"], $data["severity"])) {
        http_response_code(400);
        echo json_encode(["error" => "title, location and severity are required"]);
        exit;
    }

    $stmt = $pdo->prepare(
        "INSERT INTO disasters (title, location, severity) VALUES (?, ?, ?)"
    );
    $stmt->execute([
        $data["title"],
        $data["location"],
        (int)$data["severity"]
    ]);

    echo json_encode([
        "message" => "Disaster alert created",
        "id" => $pdo->lastInsertId()
    ]);
    exit;
}

http_response_code(405);
echo json_encode(["error" => "Method not allowed"]);
?>
