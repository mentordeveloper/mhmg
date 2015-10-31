@extends($layout)

@section('content-header')

<h1>
    All Customers ({!! sizeof($customers) !!})
    &middot;
    <!--<small>{!! link_to_route('admin.articles.create', 'Add New') !!}</small>-->

</h1>

@stop

@section('content')

<table id="all_customers" class="table">
    <thead>
    <th>id</th>
    <th>customer_id</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Order Count</th>
    <th>Created At</th>
    <th>Updated At</th>
    <th>Action</th>
</thead>
<tbody>
    <?php
    foreach ($customers as $key => $val) {
        ?>
        <tr>
            <td>{{$val['id']}}</td>
            <td>{{$val['customer_id']}}</td>
            <td>{{$val['first_name']}}</td>
            <td>{{$val['last_name']}}</td>
            <td>{{$val['email']}}</td>
            <td>{{$val['phone']}}</td>
            <td>{{$val['order_count']}}</td>
            <td>{{$val['created_at']}}</td>
            <td>{{$val['updated_at']}}</td>
                 <td><a href="{!! route('admin.limelight.customer.view', $val['customer_id']) !!}">View Detail</a>
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

$('#all_customers').DataTable({
});
</script>

@stop