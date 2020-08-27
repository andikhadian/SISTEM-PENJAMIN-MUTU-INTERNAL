<footer class="main-footer">
    <div class="footer-left">
        Copyright &copy; 2020
        <div class="bullet"></div>
        Created By
        <a href="http://instagram.com/canastuvwxyz" target="_blank" rel="noopener noreferrer">Cindy Anatasya</a>
    </div>
    <div class="footer-right">
        BETA
    </div>
</footer>

<!-- General JS Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>assets/js/swal/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="<?= base_url() ?>assets/js/stisla.js"></script>

<!-- Template JS File -->
<script src="<?= base_url() ?>assets/js/jquery.steps.min.js"></script>
<script src="<?= base_url() ?>assets/js/scripts.js"></script>
<script src="<?= base_url() ?>assets/js/custom.js"></script>
<script>
    //DATATABLE
    $('#mytable').DataTable({
        "language": {
            "sProcessing": "Sedang Memproses...",
            "lengthMenu": "Tampilkan _MENU_ data per halaman",
            "zeroRecords": "Tidak ada data",
            "info": "Menampilkan _PAGE_ halaman dari _PAGES_",
            "infoEmpty": "Tidak ada data",
            "infoFiltered": "(difilter dari _MAX_ total data)",
            "sSearch": "Cari",
            "oPaginate": {
                "sFirst": "Pertama",
                "sPrevious": "Sebelumnya",
                "sNext": "Selanjutnya",
                "SLast": "Terakhir",
            }
        }
    });
</script>
</body>

</html>