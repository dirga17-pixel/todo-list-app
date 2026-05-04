<?php
// Koneksi ke database
$host = 'localhost';
$db   = 'todo_db';
$user = 'root';
$pass = ''; // Default Laragon biasanya kosong

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    // Query untuk mengambil data
    $stmt = $pdo->query("SELECT * FROM tasks ORDER BY created_at DESC");
    $tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>

<!-- Tampilan Sederhana -->
<ul>
    <?php foreach ($tasks as $task): ?>
        <li>
            <?= htmlspecialchars($task['title']) ?>
            <a href="delete_task.php?id=<?= $task['id'] ?>">Hapus</a>
        </li>
    <?php endforeach; ?>
</ul>
