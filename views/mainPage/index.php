<!DOCTYPE html>
<html lang="en">

<?php
    include("../../header/header.php");
?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

       <?php
            include("../navbar/sidebar.php");
       ?>
        <?php 
            include("../navbar/topbar.php");
        ?> 
        
        
        <?php
            $pageUrl = $_GET['url'];
            switch ($pageUrl) {
                case 'dashboard':
                        include("../home/body.php");
                    break;
                case 'dataDokter':
                        include("../dokter/body.php");
                    break;
                case 'dataPasien':
                        include("../pasien/body.php");
                    break;
                case 'dataPoli':
                        include("../poli/body.php");
                    break;
                case 'dataRumahSakit':
                        include("../rumahSakit/body.php");
                    break;
                    case 'dataBooking':
                        include("../booking/body.php");
                    break;
                default:
                    
                    break;
            }
        ?>
    





            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php 
                include("../../footer/copyright.php");
            ?>
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
    <?php
        include("../../function/logoutConfirm.php");
    ?>

   <?php 
        include("../../footer/footer.php");
   ?>

</body>

</html>