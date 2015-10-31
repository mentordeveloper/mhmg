@extends($layout)

@section('content-header')
<h1>
    Campaign View
    &middot;
    <small>{!! link_to_route('admin.limelight.campaign', 'Back') !!}</small>

</h1>
@stop

@section('content')
<div class="panel panel-primary">
    <!-- Default panel contents -->
    <div class="panel-heading">Campaign Info</div>
</div>
<!-- Table -->
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Campaign Detail</div>
            <!-- List group -->
            <ul class="list-group">
                
                @foreach($campaign_data as $campaign_key => $campaign_info_val)
                    
                    @foreach($campaign_info_val as $campaign_info_key => $campaign_val)
                        @if($campaign_info_key == 'extra_data')                                   
                            <?php
                            $extra_data = json_decode($campaign_val, true);
                            if(is_array($extra_data)){
                                foreach ($extra_data as $key => $val) {
                                    ?>
                                    <li class="list-group-item">
                                        <h3 class="label label-default">{{ucwords(str_replace("_"," ",$key))}}</h3>
                                        : &nbsp;{{$val}}
                                    </li>
                                    <?php
                                }
                            }
                            
                            ?>
                        @else
                                <li class="list-group-item">
                                    <span class="label label-default">{{ucwords(str_replace("_"," ",$campaign_info_key))}}</span>
                                    : &nbsp;{{$campaign_val}}
                                </li>
                        @endif
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