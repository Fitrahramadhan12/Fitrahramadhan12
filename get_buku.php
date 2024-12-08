<?php
include 'db.php';

if (isset($_GET['id'])) {
    try {
        $stmt = $pdo->prepare("SELECT * FROM buku WHERE id_buku = ?");
        $stmt->execute([$_GET['id']]);
        $buku = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($buku) {
            // Rename id_buku to id for JavaScript compatibility
            $buku['id'] = $buku['id_buku'];
            echo json_encode($buku);
        } else {
            http_response_code(404);
            echo json_encode(['error' => 'Buku tidak ditemukan']);
        }
    } catch (PDOException $e) {
        http_response_code(500);
        echo json_encode(['error' => $e->getMessage()]);
    }
}
?> 