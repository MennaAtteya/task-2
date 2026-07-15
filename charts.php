<?php
$title = "SB Admin 2 - Charts";
$content = "pages/charts-content.php";
$activePage = "charts";
$footerYear = "2020";
$extraJs = '
    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="js/demo/chart-bar-demo.js"></script>
';
include "includs/layout.php";
?>