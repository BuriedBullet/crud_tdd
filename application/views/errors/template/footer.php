<!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="<?= base_url("assets/mdb/js/jquery-3.4.1.min.js") ?>"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?= base_url("assets/mdb/js/popper.min.js") ?>"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?= base_url("assets/mdb/js/bootstrap.min.js") ?>"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?= base_url("assets/mdb/js/mdb.min.js") ?>"></script>
    
    <script type="text/javascript" src="<?= base_url("assets/mdb/js/addons/datatables.min.js") ?>"></script>
    <script type="text/javascript">
        // Animations initialization
        new WOW().init();
        $(document).ready(function () {
            $('#dtProduto').DataTable();
            $('.dataTables_length').addClass('bs-select');
        });
    </script>
</body>

</html>