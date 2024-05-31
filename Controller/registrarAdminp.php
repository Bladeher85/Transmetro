<?php
include("conexiondb.php");

/*   if (!isset($_SESSION['rol'])) {
      header('Location: ../Controller/login.php');
    }
    else {
      if ($_SESSION['rol'] != 0) {
        header('Location: ../Controller/login.php');
      }
    }*/
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Transmetro Guatemala </title>

    <!-- Custom fonts for this template-->
    <link href="../Views/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../Views/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class=""></i>
                </div>
                <div class="sidebar-brand-text mx-3">Transmetro</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="../index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>SALIR</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                <h2>Menú</h2>
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="estacion1.php">
                    <i class="fas fa-users"></i>
                    <span>ESTACIONES</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="piloto1.php">
                    <i class="fas fa-map-pin"></i>
                    <span>PILOTOS</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="muni.php">
                    <i class="fas fa-map-signs"></i>
                    <span>MUNICIPALIDAD</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="../Models/bitacora.php">
                    <i class="fas fa-map-signs"></i>
                    <span>BITACORA</span></a>
            </li>
            <!-- Nav Item - Utilities Collapse Menu -->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Espacio antes de la foto del usuario -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                        </div>
                    </form>

                    <div class="topbar-divider d-none d-sm-block"></div>
                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                            TRANSMETRO GUATEMALA 2024
                            <img class="img-profile rounded-circle" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fbanderade.info%2Fwp-content%2Fuploads%2F2019%2F03%2Fbandera-actual-de-guatemala-1024x652.jpg&f=1&nofb=1&ipt=5b448e0f6590c8f3fe0d21ad363cf359b692627e527df731319d97678e23f9c9&ipo=images">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Perfil
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Cerrar sesión
                            </a>
                        </div>
                    </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="modal fade" id="addadminprofile1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Agregue Piloto</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="codigo.php" method="POST">

                                    <div class="modal-body">

                                        <div class="form-group">
                                            <label> ID Piloto</label>
                                            <input type="text" name="Id_piloto" class="form-control" placeholder="Ingrese ID de piloto">
                                        </div>
                                        <div class="form-group">
                                            <label> Nombre de piloto </label>
                                            <input type="text" name="Nombre" class="form-control" placeholder="Ingrese nombre piloto">
                                        </div>
                                        <div class="form-group">
                                            <label> Nivel academico </label>
                                            <input type="text" name="Historial_edu" class="form-control" placeholder="Ingrese nivel academico">
                                        </div>
                                        <div class="form-group">
                                            <label>Direccion</label>
                                            <input type="text" name="Direccion" class="form-control" placeholder="Ingrese direccion">
                                        </div>
                                        <div class="form-group">
                                            <label>No. Telefono</label>
                                            <input type="text" name="Telefono" class="form-control" placeholder="Ingrese numerod e telefono">
                                        </div>


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        <button type="submit" name="btn_admin1" class="btn btn-primary">Guardar Estacion</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <div class="container-fluid">

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">

                                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                    <h1 class="h3 mb-0 text-gray-800">Piloto de bus</h1>
                                    <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#addadminprofile">
                                        <i class="fas fa-user-plus"></i> Añadir piloto de bus</button>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">

                                    <?php
                                    $connection = mysqli_connect("localhost", "root", "", "transmetro_bd") or die("No se ha podido conectar al servidor de Base de datos");

                                    $registros_por_pagina = 10; // Número de registros a mostrar por página

                                    if (isset($_GET['pagina'])) {
                                        $pagina_actual = $_GET['pagina'];
                                    } else {
                                        $pagina_actual = 1;
                                    }
                                    
                                    $offset = ($pagina_actual - 1) * $registros_por_pagina;
                                    $query = "SELECT * FROM piloto LIMIT $offset, $registros_por_pagina";
                                    $query_run = mysqli_query($connection, $query);
                                    ?>
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Id Piloto</th>
                                                <th>Nombre de piloto</th>
                                                <th>Nivel academico </th>
                                                <th>Direccion</th>
                                                <th>Telefono</th>
                                                <th>EDITAR </th>
                                                <th>ELIMINAR </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            if (mysqli_num_rows($query_run) > 0) {
                                                while ($row = mysqli_fetch_assoc($query_run)) {

                                            ?>
                                                    <td> <?php echo $row['Id_piloto']; ?> </td>
                                                    <td> <?php echo $row['Nombre']; ?> </td>
                                                    <td> <?php echo $row['Historial_edu']; ?> </td>
                                                    <td> <?php echo $row['Direccion']; ?> </td>
                                                    <td> <?php echo $row['Telefono']; ?> </td>
                                                    <td>
                                                        <form action="editPiloto.php" method="POST">
                                                            <input type="hidden" name="edit_id1" value="<?php echo $row['Id_piloto']; ?>">
                                                            <button type="submit" name="edit_btn1" class="btn btn-warning"><i class="fas fa-edit"></i> EDITAR</button>
                                                        </form>
                                                    </td>
                                                    <td>
                                                        <form action="codigo.php" method="POST">
                                                            <input type="hidden" name="delete_id1" value="<?php echo $row['Id_piloto']; ?>">
                                                            <button type="submit" name="delete_btn1" class="btn btn-danger"><i class="fas fa-trash"></i>
                                                                ELIMINAR</button>
                                                        </form>
                                                    </td>
                                            <?php
                                                }
                                            } else {
                                                echo "No record Found";
                                            }
                                            $total_registros = mysqli_num_rows(mysqli_query($conexion, "SELECT * FROM piloto"));
                                            $total_paginas = ceil($total_registros / $registros_por_pagina);
                                            
                                            echo "<div class='text-center'>";
                                            
                                            if ($pagina_actual > 1) {
                                                echo "<a href='registrarAdminp.php?pagina=" . ($pagina_actual - 1) . "' class='btn btn-primary'>Regresar</a>";
                                            }
                                            
                                            if ($pagina_actual < $total_paginas) {
                                                echo "<a href='registrarAdminp.php?pagina=" . ($pagina_actual + 1) . "' class='btn btn-primary'>Siguiente página</a>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->


            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        All rights reserved Transmetro | Ingenieria de Software<i class="icon-heart" aria-hidden="true"></i> by <a href="" target="_blank">Proyecto Final</a>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Preparado para irte?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su
                    sesión
                    actual.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="../../cerrar.php">Cerrar sesión</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../Views/vendor/jquery/jquery.min.js"></script>
    <script src="../Views/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../Views/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../Views/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../Views/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../Views/js/demo/chart-area-demo.js"></script>
    <script src="../Views/js/demo/chart-pie-demo.js"></script>

</body>

</html>