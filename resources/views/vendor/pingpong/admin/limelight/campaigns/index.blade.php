@extends($layout)

@section('content-header')

<h1>
    All Campaigns ({!! sizeof($campaigns) !!})
    &middot;
</h1>

@stop

@section('content')

<table id="all_campaigns" class="table">
    <thead>
    <th>Campaign Id</th>
    <th>Name</th>
    <th>Description</th>
    <th>Products Name</th>
    <th>Created At</th>
    <th>Updated At</th>
    <th>Action</th>
</thead>
<tbody>
    <?php
    foreach ($campaigns as $key => $val) {
        ?>
        <tr>

            <td>{{$val['campaign_id']}}</td>
            <td>{{$val['campaign_name']}}</td>
            <td>{{$val['campaign_description']}}</td>
            <td>{{$val['Product_name']}}</td>
            <td>{{$val['created_at']}}</td>
            <td>{{$val['updated_at']}}</td>
            <td><a href="{!! route('admin.limelight.campaign.view', $val['campaign_id']) !!}">View Detail</a>
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

$('#all_campaigns').DataTable({
});
</script>

@stop