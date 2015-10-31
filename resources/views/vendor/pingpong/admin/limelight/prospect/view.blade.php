@extends($layout)

@section('content-header')
<h1>
    Prospect View
    &middot;
    <small>{!! link_to_route('admin.limelight.prospect', 'Back') !!}</small>

</h1>
@stop

@section('content')
<div class="panel panel-primary">
    <!-- Default panel contents -->
    <div class="panel-heading">Prospect Info</div>
</div>
<!-- Table -->
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Prospect Detail</div>
            <!-- List group -->
            <ul class="list-group">
                
                @foreach($prospect_data as $prospect_key => $prospect_info_val)
                    
                    @foreach($prospect_info_val as $prospect_info_key => $prospect_val)
                        
                            <li class="list-group-item">
                                <span class="label label-default">{{ucwords(str_replace("_"," ",$prospect_info_key))}}</span>
                                : &nbsp;{{$prospect_val}}
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