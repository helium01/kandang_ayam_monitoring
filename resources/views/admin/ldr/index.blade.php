@extends('admin.layout.core')
@section('content')
<div class="container-fluid py-4">
   
<h6>Selamat Datang Admin <a href=" #">{{ Auth::user()->name }}</a>.</h6>
<table id="realtime-table" class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Node 1</th>
        </tr>
    </thead>
    <tbody id="table-body">
        <!-- Data will be dynamically loaded here -->
    </tbody>
</table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function updateTable() {
        $.ajax({
            url: '/api/ldrs', // Your URL here
            method: 'get',
            success: function(response) {
                console.log(response);
                var data = response; // Assuming the response is in the format { data: [] }
                var tableBody = $('#table-body');
                tableBody.empty(); // Clear the table body before updating
                console.log(data);
                // Iterate through the data and add rows to the table
                data.forEach(function(item) {
                    var row = `<tr><td>${item.id}</td><td>${item.node1}</td></tr>`;
                    tableBody.append(row);
                });
            }
        });
    }

    // Update the table every second
    $(document).ready(function() {
        updateTable(); // Load the table when the document is ready
        setInterval(updateTable, 1000); // Update the table every second
    });
</script>
@endsection