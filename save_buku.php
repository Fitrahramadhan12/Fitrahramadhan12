<?php
include 'db.php';

try {
    if (isset($_POST['id']) && !empty($_POST['id'])) {
        // Update existing book
        $stmt = $pdo->prepare("UPDATE buku SET 
            judul = ?,
            pengarang = ?,
            tahun_terbit = ?,
            penerbit = ?
            WHERE id_buku = ?");
        
        $stmt->execute([
            $_POST['judul'],
            $_POST['penulis'],
            $_POST['tahun'],
            $_POST['genre'], // Using genre field as penerbit
            $_POST['id']
        ]);
    } else {
        // Insert new book
        $stmt = $pdo->prepare("INSERT INTO buku (judul, pengarang, tahun_terbit, penerbit) 
            VALUES (?, ?, ?, ?)");
        
        $stmt->execute([
            $_POST['judul'],
            $_POST['penulis'],
            $_POST['tahun'],
            $_POST['genre'] // Using genre field as penerbit
        ]);
    }
    
    echo json_encode(['success' => true]);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
} 