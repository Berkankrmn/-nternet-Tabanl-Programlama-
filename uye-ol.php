<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Üye Ol | GüncelSpor</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<header class="header">
    <div class="logo">Güncel<span>Spor</span></div>
    <nav class="menu">
        <a href="index.php">Ana Sayfa</a>
        <a href="futbol.php">Futbol</a>
        <a href="basketbol.php">Basketbol</a>
        <a href="voleybol.php">Voleybol</a>
    </nav>
</header>

<div class="form-container">
    <h2>Üye Ol</h2>
    <?php if (!empty($mesaj)) echo $mesaj; ?>
    <form method="POST" action="">
        <input type="text" name="kullanici" placeholder="Kullanıcı Adı" required>
        <input type="email" name="email" placeholder="E-posta" required>
        <input type="password" name="sifre" placeholder="Şifre" required>
        <button type="submit">Kaydol</button>
    </form>
    <p>Zaten hesabın var mı? <a href="giris.php">Giriş Yap</a></p>
</div>

<footer>
    © 2025 GüncelSpor - Tüm Hakları Saklıdır.
</footer>

</body>
</html>
