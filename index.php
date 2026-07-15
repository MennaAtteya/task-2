<?php
$title = "SB Admin 2 - Dashboard";
$content = "pages/dashboard-content.php";
$activePage = "dashboard";
$extraJs = '
    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
';
include "includs/layout.php";
?>