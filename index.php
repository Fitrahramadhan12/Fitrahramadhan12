<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>PERPUSTAKAAN UNIVERSITAS WIDYATAMA</title>
<style>
body {
  margin: 0:
  padding: 0:
  font-family: Ariel, sans-serif;
  background: #f0f0f0:
}
header {
  background: linear-gradient(to right, #00a6a6, #0070b8);
  color: white;
  text-align: center;
  padding: 20px 0;
}
h1 {
  margin: 1;
}
.site-footer {
  background: linear-gradient(to right, #00a6a6, #0070b8);
  padding: 20px 0;
  color: white;
  text-align: center;
  margin-top: 30px;
}

.footer-content {
  max-width: 800px;
  margin: 0 auto;
  padding: 0 20px;
}

.footer-content p {
  margin: 10px 0;
  line-height: 1.6;
}

.quote {
  font-style: italic;
  font-size: 1.1em;
  margin: 15px 0 !important;
}

.copyright {
  font-size: 0.9em;
  opacity: 0.9;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #00a6a6;
}
li {
  float: left;
}
li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
li a:hover, .dropdown:hover .dropbtn {
  background-color: #0070b8;
}
li.dropdown {
  display: inline-block;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px #00a6a6;
  z-index: 1;
}
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}
.dropdown-content a:hover {background-color: #f1f1f1;}
.dropdown:hover .dropdown-content {
  display: block;
}

.box-style {
    border: 1px solid #ccc;
    padding: 20px;
    border-radius: 8px;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin: 20px;
}

.modern-box {
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin: 20px;
}

.input-group input, .input-group select, .input-group button {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
}

.book-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}

.book-card {
    flex: 1 1 calc(33.333% - 40px);
    box-sizing: border-box;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin: 10px;
    max-width: 300px;
}

.book-content h3 {
    margin: 0 0 10px;
    font-size: 1.2em;
}

.book-details p {
    margin: 5px 0;
}

.book-actions {
    margin-top: 10px;
    display: flex;
    justify-content: space-between;
}
</style>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
    <h1>PERPUSTAKAAN UNIVERSITAS WIDYATAMA</h1>
</header>
<nav>
	<ul>
		<li>
			<a href="javascript:void(0)" class="dropbtn">Home</a>
		</li>
		<li class="dropdown">
			<a href="javascript:void(0)" class="dropbtn">Layanan</a>
			<div class="dropdown-content">
				<a href="Formulir Anggota Perpustakaan.html">Formulir Anggota Perpustakaan</a>
				<a href="Tabel Bahan Buku.html">Tabel Bahan Buku</a>
				<a href="Pemesanan Buku.html">Pemesanan Buku</a>
				<a href="Perpanjangan Peminjaman Buku.html">Perpanjangan Peminjaman Buku</a>
			</div>
		</li>
		<li class="dropdown">
			<a href="javascript:void(0)" class="dropbtn">Menu</a>
			<div class="dropdown-content">
				<a href="Modul 4.html">Perpustakaan Suka Baca</a>
				<a href="Pameran Buku.html">Perpustakaan Online</a>
			</div>
		</li>
		<li class="dropdown">
			<a href="javascript:void(0)" class="dropbtn">Materi</a>
			<div class="dropdown-content">
				<a href="">Modul 1</a>
				<a href="">Modul 3</a>
				<a href="Modul 6.html">Modul 6</a>
        <a href="http://localhost/fitrah/">Modul 7</a>
        <a href="http://localhost/fitrah/">Modul 8</a>
			</div>
		</li>
	</ul>
</nav>
<?php include 'db.php'; ?>

<main>
<div class="learning-list modern-box">
    <?php
    for ($i = 1; $i <= 1000; $i++) {
        $colorClass = ($i % 2 == 0) ? 'even' : 'odd';
        echo "<div class='learning-item $colorClass'>";
        echo "<span class='number'>$i</span>";
        echo "<span class='text'>Ini adalah hari ke-$i belajar PHP</span>";
        echo "</div>";
    }
    ?>
</div>
</main>

<section class="calculator-section modern-box">
    <form id="calculatorForm" onsubmit="calculate(event)">
        <div class="calculator-container">
            <h2>Kalkulator</h2>
            <div class="input-group">
                <input type="number" name="num1" required placeholder="Bilangan Pertama">
            </div>
            <div class="input-group">
                <select name="operator" required>
                    <option value="">Pilih Operasi</option>
                    <option value="+">Penjumlahan (+)</option>
                    <option value="-">Pengurangan (-)</option>
                    <option value="*">Perkalian (×)</option>
                    <option value="/">Pembagian (÷)</option>
                </select>
            </div>
            <div class="input-group">
                <input type="number" name="num2" required placeholder="Bilangan Kedua">
            </div>
            <button type="submit">Hitung</button>
        </div>
    </form>
    <div id="resultContainer"></div>
</section>

<section class="login-section modern-box">
    <form id="loginForm" onsubmit="handleLogin(event)">
        <div class="login-container">
            <h2>Login</h2>
            <div class="input-group">
                <input type="text" name="username" id="username" placeholder="Username">
            </div>
            <div class="input-group">
                <input type="password" name="password" id="password" placeholder="Password">
            </div>
            <button type="submit">Login</button>
            <div id="loginMessage" class="message"></div>
        </div>
    </form>
</section>

<main>
<div class="data-container modern-box">
    <div class="table-header">
        <h2>Katalog Perpustakaan</h2>
        <button class="add-btn" onclick="showAddForm()">
            <i class="fas fa-plus"></i> Tambah Buku Baru
        </button>
    </div>
    
    <div class="book-grid">
        <?php
        $stmt = $pdo->query("SELECT id_buku as id, judul, pengarang as penulis, tahun_terbit as tahun, penerbit as genre FROM buku");
        while ($row = $stmt->fetch()) {
            echo "<div class='book-card'>";
            echo "<div class='book-content'>";
            echo "<h3>{$row['judul']}</h3>";
            echo "<div class='book-details'>";
            echo "<p><strong>Penulis:</strong> {$row['penulis']}</p>";
            echo "<p><strong>Tahun:</strong> {$row['tahun']}</p>";
            echo "<p><strong>Genre:</strong> {$row['genre']}</p>";
            echo "</div>";
            echo "</div>";
            echo "<div class='book-actions'>";
            echo "<button class='edit-btn' onclick=\"editData({$row['id']})\"><i class='fas fa-edit'></i> Edit</button>";
            echo "<button class='delete-btn' onclick=\"deleteData({$row['id']})\"><i class='fas fa-trash'></i> Hapus</button>";
            echo "</div>";
            echo "</div>";
        }
        ?>
    </div>
</div>

<div id="formContainer" class="modern-box" style="display:none;">
    <h2 id="formTitle">Tambah Buku</h2>
    <form id="dataForm" onsubmit="submitForm(event)">
        <input type="hidden" name="id" id="bookId">
        <div class="input-group">
            <input type="text" name="judul" id="judul" placeholder="Judul" required>
        </div>
        <div class="input-group">
            <input type="text" name="penulis" id="penulis" placeholder="Penulis" required>
        </div>
        <div class="input-group">
            <input type="number" name="tahun" id="tahun" placeholder="Tahun" required>
        </div>
        <div class="input-group">
            <input type="text" name="genre" id="genre" placeholder="Genre" required>
        </div>
        <button type="submit">Simpan</button>
        <button type="button" onclick="hideForm()">Batal</button>
    </form>
</div>
</main>

<footer class="site-footer">
  <div class="footer-content">
    <p>Terimakasih sudah mengunjungi web yang telah saya buat. Jika ada kesalahan mohon dimengerti, karna saya masih pemula.</p>
    <p class="quote">"Tidak ada kata terlambat untuk belajar"</p>
    <p class="copyright">&copy; 2024 Perpustakaan Fitrah Ramadhan. All Rights Reserved.</p>
  </div>
</footer>
<script>
function calculate(e) {
    e.preventDefault();
    
    const form = document.getElementById('calculatorForm');
    const formData = new FormData(form);
    
    fetch('calculate.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById('resultContainer').innerHTML = data;
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

function handleLogin(e) {
    e.preventDefault();
    
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const messageDiv = document.getElementById('loginMessage');
    
    // Check for empty fields
    if (!username || !password) {
        messageDiv.className = 'message error';
        messageDiv.textContent = 'Input tidak lengkap. Harap isi username dan password!';
        return;
    }
    
    const formData = new FormData();
    formData.append('username', username);
    formData.append('password', password);
    
    fetch('login.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        messageDiv.textContent = data;
        if (data === 'Login sukses!') {
            messageDiv.className = 'message success';
            // Optional: redirect after successful login
            // window.location.href = 'dashboard.php';
        } else {
            messageDiv.className = 'message error';
        }
    });
}

function showAddForm() {
    document.getElementById('formTitle').textContent = 'Tambah Buku';
    document.getElementById('dataForm').reset();
    document.getElementById('formContainer').style.display = 'block';
}

function editData(id) {
    fetch(`get_buku.php?id=${id}`)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            document.getElementById('formTitle').textContent = 'Edit Buku';
            document.getElementById('bookId').value = data.id;
            document.getElementById('judul').value = data.judul;
            document.getElementById('penulis').value = data.penulis;
            document.getElementById('tahun').value = data.tahun;
            document.getElementById('genre').value = data.genre;
            document.getElementById('formContainer').style.display = 'block';
        })
        .catch(error => {
            alert('Error: ' + error.message);
        });
}

function deleteData(id) {
    if (confirm('Apakah Anda yakin ingin menghapus buku ini?')) {
        fetch(`delete_buku.php?id=${id}`, { method: 'POST' })
            .then(() => location.reload());
    }
}

function submitForm(e) {
    e.preventDefault();
    const formData = new FormData(document.getElementById('dataForm'));
    fetch('save_buku.php', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.text();
    })
    .then(() => {
        hideForm();
        location.reload();
    })
    .catch(error => {
        alert('Error: ' + error.message);
    });
}

function hideForm() {
    document.getElementById('formContainer').style.display = 'none';
}
</script>
</body>
</html>
