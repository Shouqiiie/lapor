<!DOCTYPE html>
<html>
<title>Halaman Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px;" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
  <a href="../admin/index.php" class="w3-bar-item w3-button">Dashboard</a>
  <a href="../admin/laporan.php" class="w3-bar-item w3-button">Data Laporan</a>
  <a href="../logout.php" class="w3-bar-item w3-button">Logout</a>
</div>

<div class="w3-main" style="margin-left:200px">
<div class="w3-blue">
  <button class="w3-button w3-blue w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
    <h1>Halaman Admin</h1>
  </div>
</div>

<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
     
</body>
</html>