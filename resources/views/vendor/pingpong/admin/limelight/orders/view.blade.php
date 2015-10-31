@extends($layout)

@section('content-header')
<h1>
    Order View
    &middot;
    <small>{!! link_to_route('admin.limelight.orders', 'Back') !!}</small>

</h1>
@stop

@section('content')
<div class="panel panel-primary">
    <!-- Default panel contents -->
    <div class="panel-heading">Order Info</div>
</div>
<!-- Table -->
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading">Order Info</div>
                    <!-- List group -->
                    <ul class="list-group">
                        @foreach($order_data['order_info'] as $order_key => $order_info_val)
                            @foreach($order_info_val as $order_info_key => $order_val)
                            @if($order_info_key == 'extra_data')                                   
                                <?php 
                                    $extra_data = json_decode($order_val, true);
                                    if(is_array($extra_data)){
                                        foreach($extra_data as $key=>$val){
                                        ?>
                                            <li class="list-group-item"><b>{{ucwords(str_replace("_"," ",$key))}}</b>: {{$val}}</li>
                                            <?php 
                                        }
                                    }
                                ?>
                            @else
                            <li class="list-group-item">
                                <span class="label label-default">{{ucwords(str_replace("_"," ",$order_info_key))}}</span>
                                : &nbsp;{{$order_val}}</li>
                            @endif
                            @endforeach
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading">Order Detail</div>
                    <!-- List group -->
                    <ul class="list-group">
                        @foreach($order_data['order_detail'] as $order_key => $order_detail_val)
                            @foreach($order_detail_val as $order_detail_key => $order_val)
                                
                                @if($order_info_key == 'extra_data')                                   
                                <?php 
                                    $extra_data = json_decode($order_val, true);
                                    if(is_array($extra_data)){
                                        foreach($extra_data as $key=>$val){
                                        ?>
                                            <li class="list-group-item"><b>{{ucwords(str_replace("_"," ",$key))}}</b>: {{$val}}</li>
                                            <?php 
                                        }
                                    }
                                    
                                ?>
                            @else
                            <li class="list-group-item"><b>{{ucwords(str_replace("_"," ",$order_detail_key))}}</b>: {{$order_val}}</li>
                            @endif
                            @endforeach
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">Order Items</div>
    <!-- Table -->
    <table id="order_items" class="table table-bordered table-condensed table-responsive">
        <thead>
            <tr>
                
                @foreach($order_items_key as $item_key=>$item_val)
                    <th>{{ucwords(str_replace("_"," ",$item_val))}}</th>
                @endforeach
                
            </tr>
        </thead>
        <tbody>
               
            
            @foreach($order_data['order_items'] as $order_key=>$order_item_val)
                <tr>    
                    @foreach($order_items_key as $item_key=>$item_val)
                        <td>{{$order_item_val[$item_key]}}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">Order Notes</div>
    <!-- Table -->
    <table id="order_notes" class="table table-bordered table-condensed table-striped table-responsive">
        <thead>
            <tr>
                
                @if(isset($order_data['order_notes'][0]))
                    @foreach($order_data['order_notes'][0] as $notes_key=>$notes_val)
                        <th>{{ucwords(str_replace("_"," ",$notes_key))}}</th>
                    @endforeach
                    
                @endif
                
            </tr>
        </thead>
        <tbody>
               
            
            @foreach($order_data['order_notes'] as $order_key=>$order_notes_val)
                <tr>    
                    @foreach($order_notes_val as $notes_key=>$notes_val)
                        <td>{{$notes_val}}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


@stop
@section('script')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/dt-1.10.9/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/r/dt/dt-1.10.9/datatables.min.js"></script>
<script type="text/javascript">

    $('#order_notes').DataTable({
    });
    $('#order_items').DataTable({
    });
</script>
@stop