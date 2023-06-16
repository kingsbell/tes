<!DOCTYPE html>
<html>
<head>
  <title>Form Login</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
  <h2>Form Login</h2>

  <form id="loginForm" action="login.php" method="POST">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username"><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br><br>

    <input type="submit" id="loginBtn" value="Login" disabled>
  </form>

  <script>
    $(document).ready(function() {
      // Fungsi untuk menguji koneksi
      function testConnectivity() {
        $.ajax({
          url: 'https://www.google.com',
          type: 'HEAD',
          success: function() {
            // Aktifkan tombol login jika koneksi stabil
            $('#loginBtn').prop('disabled', false);
          },
          error: function() {
            // Nonaktifkan tombol login jika koneksi tidak stabil
            $('#loginBtn').prop('disabled', true);
          }
        });
      }

      // Panggil fungsi untuk menguji koneksi saat halaman dimuat
      testConnectivity();

      // Panggil fungsi untuk menguji koneksi saat pengguna mengisi form
      $('#username, #password').on('input', testConnectivity);
    });
  </script>
</body>
</html>
