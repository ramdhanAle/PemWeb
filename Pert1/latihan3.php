<?php
//form get
$nama = "";
$alamat = "";

if (isset($_GET['proses'])) {
    $nama = $_GET['nama'] ?? "";
    $alamat = $_GET['alamat'] ?? "";
}
?>

<h3>Form Get</h3>
<form method="get">
    <label>Nama</label><br>
    <input type="text>" name="nama"><br>

    <label>Alamat</label><br>
    <input name="alamat"></textarea><br>

    <input type="submit" name="proses" value="Submit">
</form>

<hr>

<?php
$username = '';
$password = '';

if (isset($_POST['proses'])) {
    $username = $_POST['username'] ?? "";
    $password = $_POST['password'] ?? "";
}
?>

<h3>Form Post</h3>
<form method="post">
    <label>Username</label><br>
    <input type="text>" name="username"><br>

    <label>Password</label><br>
    <input type="password" name="password"><br>

    <input type="submit" name="proses" value="Submit">
</form>

<?php if (isset($_POST['proses'])) : ?>
    <p>
        <strong>Hasil Metode POST:</strong>
        Hello <?= htmlspecialchars($username) ?>, your password is <?= htmlentities($password) ?>.
    </p>
<?php endif; ?>