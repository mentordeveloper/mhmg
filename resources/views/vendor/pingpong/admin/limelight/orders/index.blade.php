@extends($layout)

@section('content-header')
	
	<h1>
		All Orders ({!! sizeof($orders) !!})
		&middot;
		<small>{!! link_to_route('admin.articles.create', 'Add New') !!}</small>
		
	</h1>
	
@stop

@section('content')

<table id="orders_all" class="table">
		<thead>
			<th>id</th>
			<th>Name</th>
			<th>email</th>
			<th>Order Total</th>
			<th>Created At</th>
			<th>Updated At</th>
			<th>Action</th>
		</thead>
		<tbody>
		<?php
                
                foreach($orders as $key=>$val){
                    
                    $extra_data = json_decode($val['extra_data'], true);
                    $name = $extra_data['first_name'].' '.$extra_data['last_name'];
                    ?>
                    <tr>
                    <td>{{$val['order_id']}}</td>
                    <td>{{$name}}</td>
                    <td>{{$val['email_address']}}</td>
                    <td>{{$val['order_total']}}</td>
                    <td>{{$val['created_at']}}</td>
                    <td>{{$val['updated_at']}}</td>
                    <td><a href="{!! route('admin.limelight.order.view', $val['order_id']) !!}">View Detail</a>
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

$('#orders_all').DataTable( {
} );
</script>
@stop