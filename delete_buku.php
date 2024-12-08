<?php
include 'db.php';

if (isset($_GET['id'])) {
    try {
        $stmt = $pdo->prepare("DELETE FROM buku WHERE id_buku = ?");
        $stmt->execute([$_GET['id']]);
        
        echo json_encode(['success' => true]);
    } catch (PDOException $e) {
        http_response_code(500);
        echo json_encode(['error' => $e->getMessage()]);
    }
} 