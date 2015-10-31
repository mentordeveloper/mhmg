@extends($layout)

@section('content-header')
<h1>
    Customer View
    &middot;
    <small>{!! link_to_route('admin.limelight.customer', 'Back') !!}</small>

</h1>
@stop

@section('content')
<div class="panel panel-primary">
    <!-- Default panel contents -->
    <div class="panel-heading">Customer Info</div>
</div>
<!-- Table -->
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Customer Detail</div>
            <!-- List group -->
            <ul class="list-group">
                
                @foreach($customer_data as $customer_key => $customer_info_val)
                    
                    @foreach($customer_info_val as $customer_info_key => $customer_val)
                        
                            <li class="list-group-item">
                                <span class="label label-default">{{ucwords(str_replace("_"," ",$customer_info_key))}}</span>
                                : &nbsp;{{$customer_val}}
                            </li>
                        
                    @endforeach
                @endforeach
            </ul>
        </div>
    </div>
</div>
</div>




@stop
@section('script')

@stop