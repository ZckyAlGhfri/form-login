<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script
        src="https://kit.fontawesome.com/64d58efce2.js"
        crossorigin="anonymous"
    ></script>
    <title>Aplikasi SPP - SMKN 1 Bojong</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="masuk-daftar">
                <form action="proses-login-siswa.php" method="post" class="sign-in-form">
                    <h2 class="title">LOGIN SISWA</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="number" name="nisn" placeholder="NISN" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="number" name="nis" placeholder="NIS" required>
                    </div>
                    <button type="submit" class="btn solid"> MASUK </button>

                    <!-- <p class="social-text">Atau Masuk Dengan Platform Sosial</p> -->
                    <div class="social-media">
                    <!-- <a href="#" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a> -->
                </div>
            </form>

            <form action="proses-login-petugas.php" method="post" class="sign-up-form">
                <h2 class="title">LOGIN PETUGAS</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <input type="submit" value="MASUK" class="btn solid">

                <!-- <p class="social-text">Atau Daftar Dengan Platform Sosial</p> -->
                <div class="social-media">
                <!-- <a href="#" class="social-icon">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="social-icon">
                    <i class="fab fa-google"></i>
                </a>
                <a href="#" class="social-icon">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="social-icon">
                    <i class="fab fa-twitter"></i>
                </a> -->
            </div>
        </form>
        </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Admin / Petugas?</h3>
                    <p> Klik tombol dibawah ini untuk login sebagai Admin / Petugas </p>
                    <button class="btn transparent" id="sign-up-btn">PETUGAS</button>
                </div>

                <img src="img/login.svg" class="image" alt="">
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <h3>Apakah anda Siswa?</h3>
                    <p> Klik tombol dibawah ini untuk login sebagai Siswa </p>
                    <button class="btn transparent" id="sign-in-btn">SISWA</button>
                </div>

                <img src="img/register.svg" class="image" alt="">
            </div>
        </div>      
    </div>
    
    <script src="js/app.js"></script>
</body>
</html>