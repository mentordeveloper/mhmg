@extends($layout)

@section('content-header')

<h1>
    All Prospects ({!! sizeof($prospect) !!})
    &middot;

</h1>

@stop

@section('content')

<table id="all_prospect" class="table">
    <thead>
    <th>id</th>
    <th>Prospect Id</th>
    <th>Campaign Id</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Address</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Country</th>
    <th>IP</th>
    <th>Created At</th>
    <th>Updated At</th>
    <th>Action</th>
</thead>
<tbody>
    <?php
    foreach ($prospect as $key => $val) {
        ?>
        <tr>
            <td>{{$val['id']}}</td>
            <td>{{$val['prospect_id']}}</td>
            <td>{{$val['campaign_id']}}</td>
            <td>{{$val['first_name']}}</td>
            <td>{{$val['last_name']}}</td>
            <td>{{$val['address']}}</td>
            <td>{{$val['email']}}</td>
            <td>{{$val['phone']}}</td>
            <td>{{$val['country']}}</td>
            <td>{{$val['ip_address']}}</td>
            <td>{{$val['created_at']}}</td>
            <td>{{$val['updated_at']}}</td>
                             <td><a href="{!! route('admin.limelight.prospect.view', $val['prospect_id']) !!}">View Detail</a>
{{--						&middot;
						@include('admin::partials.limelight_modal', ['data' => $val, 'name' => 'limelight.order'])--}}
                    </td>
        </tr>
        <?php
    }
    ?>	
</tbody>
</table>

<div class="text-center">

</div>
@stop
@section('script')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/dt-1.10.9/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/r/dt/dt-1.10.9/datatables.min.js"></script>
<script type="text/javascript">

$('#all_prospect').DataTable({
});
</script>
@stop