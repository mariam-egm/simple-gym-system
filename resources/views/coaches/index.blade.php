@extends('layouts.dashboard')

@section('style')
<!-- Bootstrap time Picker -->
<link rel="stylesheet" href="{{ asset('plugins/timepicker/bootstrap-timepicker.min.css')}}">
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="{{ asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

@endsection

@section('content')

<table id="users-table" class="table">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>At Gym</td>
        </tr>
    </thead>
    <tbody>
    
    </tbody>
</table>

@endsection

@section('plugins')
<!-- bootstrap time picker -->
<script src="{{ asset('plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
<!-- bootstrap datepicker -->
<script src="{{ asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>


@endsection

@section('script')
<script>
    $(function () {
        //Date picker
        $('#datepicker').datepicker({
            autoclose: true
        })
        //Timepicker
        $('.timepicker').timepicker({
            showInputs: false
        })
    })

</script>
<script src="https://datatables.yajrabox.com/js/jquery.min.js"></script>
<script src="https://datatables.yajrabox.com/js/bootstrap.min.js"></script>
<script src="https://datatables.yajrabox.com/js/jquery.dataTables.min.js"></script>
<script src="https://datatables.yajrabox.com/js/datatables.bootstrap.js"></script>
<script>
    $(function () {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: 'http://localhost:8000/admin/coaches/datatables',
            columns: [
                {data: 'id'},
                {data: 'name'},
                {data: 'at_gym_id'}
            ]
        });
    })

</script>


@endsection
