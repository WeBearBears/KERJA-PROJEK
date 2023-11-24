<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <!-- googleapis -->
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Montserrat:wght@700;800;900&display=swap"
        rel="stylesheet">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Style css -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Josefin Sans", sans-serif;
        }

        @media (max-width: 991px) {
            .sidebar {
                background-color: rgba(225, 225, 225, 0.15);
                backdrop-filter: blur(10px);
            }

            .home {
                justify-items: center;
                align-items: center;
            }
        }

        .hero {
            color: #fff;
            text-align: center;
            padding: 5rem 0;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }
    </style>
</head>

<body class="vh-100 overflow-visible">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <!-- logo -->
            <img src="Logo KAT.png" alt="logo" style="height: 7.5vh; width: 7.5vh;">
            <a class="navbar-brand fs-4" href="kerjaprojek.php">Home</a>
            <!-- toggle btn -->
            <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- sidebar -->
            <div class="sidebar offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <!-- sidebar header -->
                <!-- <div class="offcanvas-header text-white border-bottom">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">ADMIN KAT</h5>
                    <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div> -->
                <!-- sidebar body -->
                <div class="offcanvas-body d-flex flex-column flex-lg-row p-4 p-lg-0">
                    <ul class="navbar-nav justify-content-center align-items-center fs-5 flex-grow-1 pe-3">
                        <li class="nav-item mx-2">
                            <a class="nav-link active" aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="komentar.php">KOMENTAR</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- home -->
    <main class="w-100 vh-100 d-flex flex-column">
        <div class="m-3">
            <table border="3" class="table table-striped table-hover table-bordered mt-3">
                <thead>
                    <tr>
                        <th class="col">No</th>
                        <th class="col">TANGGAL</th>
                        <th class="col">NAMA</th>
                        <th class="col">EMAIL</th>
                        <th class="col">KOMENTAR</th>
                        <th class="col">AKSI</th>


                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php
                    $sql = "SELECT * FROM komentar";
                    $query = mysqli_query($conn, $sql);
                    while ($komen = mysqli_fetch_array($query)) {
                        echo "<tr>";
                        echo "<td>" . $komen['id'] . "</td>";
                        echo "<td>" . $komen['tanggal'] . "</td>";
                        echo "<td>" . $komen['nama'] . "</td>";
                        echo "<td>". $komen["email"] . "</td>";
                        echo "<td id='message'>" . $komen['komen'] . "</td>";
                        echo "<td>";
                        echo "<a href='hapus.php?id=" . $komen['id'] . "' onclick='return confirmDelete()'>Delete</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            <p class="d-flex justify-content-center align-items-center"></p>Total:
            <?php echo mysqli_num_rows($query) ?>
        </div>
    </main>
    <!-- home end -->

    <!-- status -->
    <?php if (isset($_GET['status'])): ?>
        <p>
            <?php
            if ($_GET['status'] == 'sukses') {
                echo "berhasil!";
            } else {
                echo "gagal!";
            }
            ?>
        </p>
    <?php endif; ?>
    <!-- status end -->

    <!-- footer -->
    <footer class="bottom-fix">
        <p>&copy; 2023 Penangkal Petir Solutions. All rights reserved.</p>
    </footer>
    <!-- footer end -->

    <script src="script.js"></script>

    <!-- boxicon -->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <script>
        function confirmDelete() {
            return confirm("Yakin ingin menghapus data?");
        }
        // Fungsi untuk mensensor kata-kata kasar
        function sensorKataKasar(teks) {
            // Daftar kata-kata kasar yang ingin di-sensor
            var kataKasar = ["ancuk", "ancok", "ajig", "anjay", "anjg", "anjing", "anying", "anjir", "asu", "asyu", "babangus", "babi", "bacol", "bacot", "bagong", "bajingan", "balegug", "banci", "bangke", "bangsat", "bedebah", "bedegong", "bego", "belegug", "beloon", "bencong", "bloon", "blo'on", "bodoh", "boloho", "buduk", "budug", "celeng", "cibai", "cibay", "cocot", "cocote", "cok", "cokil", "colai", "colay", "coli", "colmek", "conge", "congean", "congek", "congor", "cuk", "cukima", "cukimai", "cukimay", "dancok", "entot", "entotan", "ewe", "ewean", "gelo", "genjik", "germo", "gigolo", "goblo", "goblog", "goblok", "hencet", "henceut", "heunceut", "homo", "idiot", "itil", "jancuk", "jancok", "jablay", "jalang", "jembut", "jiancok", "jilmek", "jurig", "kacung", "kampang", "kampret", "kampungan", "kehed", "kenthu", "kentot", "kentu", "keparat", "kimak", "kintil", "kirik", "kunyuk", "kurap", "konti", "kontol", "kopet", "koplok", "lacur", "lebok", "lonte", "maho", "meki", "memek", "monyet", "ndas", "ndasmu", "ngehe", "ngentot", "nggateli", "nyepong", "ngewe", "ngocok", "pante", "pantek", "patek", "pathek", "peju", "pejuh", "pecun", "pecundang", "pelacur", "pelakor", "peler", "pepek", "puki", "pukima", "pukimae", "pukimak", "pukimay", "sampah", "sepong", "sial", "sialan", "silit", "sinting", "sontoloyo", "tai", "taik", "tempek", "tempik", "tete", "tetek", "tiembokne", "titit", "toket", "tolol", "ublag", "udik", "wingkeng"];

            // Loop melalui setiap kata-kata kasar dan ganti dengan karakter '*'
            for (var i = 0; i < kataKasar.length; i++) {
                var regex = new RegExp(kataKasar[i], "gi");
                teks = teks.replace(regex, '*');
            }

            return teks;
        }

        // Jalankan fungsi sensor setelah halaman dimuat
        document.addEventListener("DOMContentLoaded", function () {
            var messages = document.querySelectorAll('#message');
            messages.forEach(function (message) {
                // Dapatkan teks pesan
                var teksPesan = message.innerHTML;

                // Sensor kata-kata kasar
                var teksSensor = sensorKataKasar(teksPesan);

                // Terapkan teks yang sudah disensor ke dalam elemen
                message.innerHTML = teksSensor;
            });
        });
    </script>
</body>

</html>