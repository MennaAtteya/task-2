<?php
$title = "SB Admin 2 - Tables";
$content = "pages/tables-content.php";
$activePage = "tables";
$footerYear = "2020";
$extraCss = '
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
';
$extraJs = '
    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
';
include "includs/layout.php";
?>