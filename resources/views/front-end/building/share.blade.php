@if(count($allBuildings) > 0)
    @foreach($allBuildings as $building)
        <div class="col-sm-6 col-md-4 pull-right">
            <div class="thumbnail" >
                <img src="{{image_exist($building->image)}}" class="img-responsive">
                <div class="caption">
                    <div class="row">
                        <div class="text-center">
                            <h3>{{$building->building_name}}</h3>
                        </div>
                        <hr>

                        <span class="pull-right">المساحة: {{$building->building_area}}</span>
                        <span class="pull-left">العملية: {{building_rent()[$building->building_rent]}}</span>
                        <div class="clearfix"></div>

                        <span class="pull-right">نوع العقار: {{building_type()[$building->building_type]}}</span>
                        <hr style="margin: 30px 0">
                    </div>

                    <p style="margin-bottom: 50px; text-align: right">
                        {{str_limit($building->building_small_description, 50)}}
                    </p>

                    <div class="row">
                        <div class="col-md-12" style="margin-bottom: 10px">
                            <a href="#" class="btn btn-success btn-product">السعر: {{$building->building_price}} جنيه</a>
                        </div>

                        @if($building->status == 0)
                        <div class="col-md-6 pull-left">
                            <span class="btn btn-danger btn-sm">في انتظار التفعيل</span>
                        </div>

                        <div class="col-md-6 pull-right">
                            <span><a class="btn btn-success btn-sm" href="{{url('user/edit/building/' . $building->id)}}"
                               style="width: 97px;">تعديل العقار</a></span>
                        </div>

                        @else
                        <div class="col-md-12">
                            <a href="{{url('single-building/' . $building->id)}}" class="btn btn-primary btn-product">تفاصيل اكثر</a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@else
    <div class="alert alert-danger text-center">لا يوجد عقارات حاليا</div>
@endif