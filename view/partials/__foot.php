
<script src="http://<?=$_SERVER['HTTP_HOST']?>/plugins/jquery/jquery.min.js"></script>
<script src="http://<?=$_SERVER['HTTP_HOST']?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="http://<?=$_SERVER['HTTP_HOST']?>/dist/js/adminlte.min.js"></script>

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script>

    $(function () {
        $('#example').DataTable({
                "pageLength": 5,
                "lengthMenu": [[5, 10, 50], [5, 10, 50]]
            }
        );
    });

</script>
</body>
</html>