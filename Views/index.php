<?php

include '../Models/Config/config.php';
include 'components/Modals.php';
<<<<<<< HEAD
    
=======

// $id = $_SESSION['id'];
$id = 2;


>>>>>>> d7705398bd400ea3bd1c5ccdfe2cedaf0b449561
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
<<<<<<< HEAD
    <title>Dashboard - Quick Choice Menu</title>
    <link href="assets/img/every/logo.ico" rel="icon">
    <link href="assets/img/every/logo.ico" rel="apple-touch-icon">
=======
    <title>Dashboard - SB Admin</title>
>>>>>>> d7705398bd400ea3bd1c5ccdfe2cedaf0b449561
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<<<<<<< HEAD

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="#">Start Bootstrap</a>
=======
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
>>>>>>> d7705398bd400ea3bd1c5ccdfe2cedaf0b449561
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
<<<<<<< HEAD
        <button type="button" class="btn btn-danger col-10 m-2 text-center" data-bs-toggle="modal"
                            data-bs-target="#Partager">
                            <i class="fas fa-plus"></i> Partager qr
        </button>
=======
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                        class="fas fa-search"></i></button>
            </div>
        </form>
>>>>>>> d7705398bd400ea3bd1c5ccdfe2cedaf0b449561
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
<<<<<<< HEAD
                    <li><a class="dropdown-item" href="../Models/edit/edit_profile.php">Settings</a></li>
=======
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
>>>>>>> d7705398bd400ea3bd1c5ccdfe2cedaf0b449561
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
<<<<<<< HEAD
                    <li><a class="dropdown-item" href="../Models/auth/logout.php">Logout</a></li>
=======
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
>>>>>>> d7705398bd400ea3bd1c5ccdfe2cedaf0b449561
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
<<<<<<< HEAD
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>

                        <button type="button" class="btn btn-danger col-10 m-2 text-center" data-bs-toggle="modal"
                            data-bs-target="#New_Cat">
                            <i class="fas fa-plus"></i> Nouvelle Catégorie
                        </button>

                        <button type="button" class="btn btn-secondary col-10 m-2 text-center" data-bs-toggle="modal"
                            data-bs-target="#Sup_Cat">
                            <span><i class="fas fa-trash"></i> Supprimer Catégorie</span>
                        </button>
=======
                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard <? echo $_SESSION['id'] ;?>
                        </a>
>>>>>>> d7705398bd400ea3bd1c5ccdfe2cedaf0b449561
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div class="card bg-primary text-white mb-4">
<<<<<<< HEAD
                                <div class="card-body justify-content-between d-flex">
                                    <h4> Repas </h4>
                                    <h5>
                                        <?php
                                            $repas = "SELECT COUNT(*) FROM meals WHERE id_from_admin = $id"; 
                                            $result_repas = mysqli_query($conn, $repas);
                                            $row_repas = mysqli_fetch_row($result_repas);   
                                            echo $row_repas[0];
                                        ?>
                                    </h5>
=======
                                <div class="card-body">Repas</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
>>>>>>> d7705398bd400ea3bd1c5ccdfe2cedaf0b449561
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card bg-warning text-white mb-4">
<<<<<<< HEAD
                                <div class="card-body justify-content-between d-flex">
                                    <h4> Catégories </h4>
                                    <h5>
                                        <?php
                                            $cat = "SELECT COUNT(*) FROM categories WHERE id_from_admin = $id"; 
                                            $result_cat = mysqli_query($conn, $cat);
                                            $row_cat = mysqli_fetch_row($result_cat);   
                                            echo $row_cat[0];
                                        ?>
                                    </h5>
=======
                                <div class="card-body">Articles</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
>>>>>>> d7705398bd400ea3bd1c5ccdfe2cedaf0b449561
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card bg-success text-white mb-4">
<<<<<<< HEAD
                                <div class="card-body justify-content-between d-flex">
                                    <h4> Visites </h4>
                                    <h5>
                                        <?php
                                            $cat = "SELECT COUNT(*) FROM menu WHERE id_from_admin = $id"; 
                                            $result_cat = mysqli_query($conn, $cat);
                                            $row_cat = mysqli_fetch_row($result_cat);   
                                            echo $row_cat[0];
                                        ?>
                                    </h5>
                                </div>
=======
                                <div class="card-body">Views de Menu</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
>>>>>>> d7705398bd400ea3bd1c5ccdfe2cedaf0b449561
                        </div>
                    </div>

                    <div class="text-end">
                        <button type="button" class="btn btn-danger mt-3 mb-3" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            <i class="fas fa-plus"></i> Ajouter
                        </button>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            DataTable Example
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
<<<<<<< HEAD
                                        <th>Image</th>
                                        <th>Position</th>
                                        <th>Discription</th>
                                        <th>Prix</th>
                                        <th>Action</th>
=======
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Age</th>
>>>>>>> d7705398bd400ea3bd1c5ccdfe2cedaf0b449561
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
<<<<<<< HEAD
                                        <th>Image</th>
                                        <th>Position</th>
                                        <th>Discription</th>
                                        <th>Prix</th>
                                        <th>Action</th>
=======
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Age</th>
>>>>>>> d7705398bd400ea3bd1c5ccdfe2cedaf0b449561
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    $meal = "SELECT * FROM meals WHERE id_from_admin = $id";
                                    $result = mysqli_query($conn, $meal);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $id_meal = $row['id'];
                                        $img = $row['img'];
                                        $name = $row['name'];
                                        $description = $row['discretion'];
                                        $price = $row['prix'];
                                        ?>
                                        <tr>
                                            <td>
<<<<<<< HEAD
                                                <img src="assets/img/meals/<?php echo $img; ?>"
=======
                                                <img src="https://via.placeholder.com/50"
>>>>>>> d7705398bd400ea3bd1c5ccdfe2cedaf0b449561
                                                    style="height: 50px; border-radius: 40%;">
                                            </td>
                                            <td><?php echo $name; ?></td>
                                            <td><?php echo $description; ?></td>
                                            <td><?php echo $price; ?></td>
                                            <td class="text-center">
<<<<<<< HEAD
                                                <a href="../Models/delet/delete_meal.php?id=<?php echo $id_meal; ?>"
                                                    class="btn btn-danger">
=======
                                                <a href="../Models/delet/delete_meal.php?id=<?php echo $id_meal; ?>" class="btn btn-danger">
>>>>>>> d7705398bd400ea3bd1c5ccdfe2cedaf0b449561
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                                <a href="../Models/edit/edit_meal.php?id=<?php echo $id_meal; ?>"
                                                    class="btn btn-secondary">
                                                    <i class="fas fa-pen"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Ahmed & Driss</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
<<<<<<< HEAD
    <script>
    document.addEventListener('DOMContentLoaded', function () {
    const qrLink = 'http://localhost/menu-rest/Views/menu/View/index.php?id=<?php echo $id;?>';
    const qrcodeContainer = document.getElementById('qrcode');
    const qrLinkInput = document.getElementById('qr-link');
    const copyLinkBtn = document.getElementById('copy-link-btn');
    const downloadSvgBtn = document.getElementById('download-svg-btn');
    const downloadPdfBtn = document.getElementById('download-pdf-btn');
    const printBtn = document.getElementById('print-btn');

    // Initialize QR code
    const qrcode = new QRCode(qrcodeContainer, {
        text: qrLink,
        width: 250,
        height: 250,
    });

    qrLinkInput.value = qrLink;

    copyLinkBtn.addEventListener('click', function () {
        qrLinkInput.select();
        document.execCommand('copy');
        alert('Link copied to clipboard!');
    });

    document.getElementById('Partager').addEventListener('shown.bs.modal', function () {
        qrcode.makeCode(qrLink);
    });

    // Download as SVG
    downloadSvgBtn.addEventListener('click', function () {
        const svg = qrcodeContainer.querySelector('canvas').toDataURL('image/png');
        const link = document.createElement('a');
        link.href = svg;
        link.download = 'qrcode.png';
        link.click();
    });

    // Download as PDF
    downloadPdfBtn.addEventListener('click', function () {
        const { jsPDF } = window.jspdf;
        const doc = new jsPDF();
        const qrCanvas = qrcodeContainer.querySelector('canvas');
        const qrDataUrl = qrCanvas.toDataURL('image/png');
        
        doc.addImage(qrDataUrl, 'PNG', 15, 40, 180, 180);
        doc.save('qrcode.pdf');
    });

    // Print QR code
    printBtn.addEventListener('click', function () {
        const printWindow = window.open('', '_blank');
        printWindow.document.write('<html><head><title>Print QR Code</title></head><body>');
        printWindow.document.write('<img src="' + qrcodeContainer.querySelector('canvas').toDataURL() + '"/>');
        printWindow.document.write('</body></html>');
        printWindow.document.close();
        printWindow.print();
    });
});


    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>

=======
>>>>>>> d7705398bd400ea3bd1c5ccdfe2cedaf0b449561
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>