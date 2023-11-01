@extends('admin.layout.core')
@section('content')
<div class="container-fluid py-4">
   
<h6>Selamat Datang Admin <a href=" #">{{ Auth::user()->name }}</a>.</h6>
<div id="table-container"></div>


</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function updateTable(page = {{$page}}) {
        $.ajax({
            url: '/saklar?page=' + page, // Sesuaikan dengan rute yang tepat
            method: 'get',
            success: function (response) {
                $('#table-container').html(response);
                $('.pagination a').each(function () {
                    var page = $(this).attr('href').split('page=')[1];
                    $(this).attr('href', 'javascript:void(0)');
                    $(this).click(function () {
                        updateTable(page);
                    });
                });
            }
        });
    }

    $(document).ready(function () {
        updateTable(); // Memuat tabel saat halaman dimuat

        // Memperbarui tabel setiap detik
        setInterval(function () {
            var currentPage = $('#table-container').find('.pagination .active .page-link').html();
            updateTable(currentPage);
        }, 1000);
    });
</script>
   
@endsection