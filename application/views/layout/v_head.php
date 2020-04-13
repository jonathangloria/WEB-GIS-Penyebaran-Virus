<head>
      
      
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GIS Penyebaran Virus By : Divianis, Jonathan Imago, & Maria Sancti</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?= base_url() ?>template/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="<?= base_url() ?>template/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="<?= base_url() ?>template/assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    
    <link href="<?= base_url() ?>template/assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">

<!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?= base_url() ?>template/assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?= base_url() ?>template/assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>template/assets/js/jquery.metisMenu.js"></script>

    <!-- TABLE STYLE PAGING & SEARCH SCRIPTS -->
    <script src="<?= base_url() ?>template/assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="<?= base_url() ?>template/assets/js/dataTables/dataTables.bootstrap.js"></script>
        
    <script>
        $(document).ready(function () {
                $('#dataTables-example').dataTable({
                dom: 'Blfrtip',
                buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
            });
        });
    </script>

    <!-- CUSTOM SCRIPTS -->
    <script src="<?= base_url() ?>template/assets/js/custom.js"></script>


    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
	<script src="template/assets/js/leaflet.ajax.js"></script>

</head>