<?php include_once 'functions.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input dan Tampilkan Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form">
    <h2>Input Data User</h2>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>
        
        <button type="su bmit">Submit</button>
    </form>
    </div>

    <div class="tabel">
    <h2>Data User</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <?php
        $no = 1; // Inisialisasi nomor urut mulai dari 1
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $no++ . "</td>"; // Menampilkan nomor urut dan increment
                echo "<td>" . $row['nama_user'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No data found</td></tr>";
        }
        ?>
    </table>
    </div>
</body>
</html>

<?php
$conn->close();
?>