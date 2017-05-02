@extends('layouts.app')

@section('title')
    {{$building_info->building_name}}
@endsection

@section('header')
    {!! Html::style('admin/custom/building.css') !!}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            @include('front-end/building/pages')

            <div class="col-md-9">
                <ol class="breadcrumb" style="background: #FFF; text-align: right; margin: 30px 0">
                    <li><a href="{{url('/')}}">الرئيسية</a></li>
                    <li><a href="{{url('/all-buildings')}}">كل العقارات</a></li>
                    <li><a href="{{url('/single-building' . $building_info->id)}}">{{$building_info->building_name}}</a></li>
                </ol>

                <div class="profile-content">
                    <div class="col-md-3" style="float: right">
                        <h1>{{$building_info->building_name}}</h1>
                        <br>

                        <span>نوع العقار: {{building_type()[$building_info->building_type]}}</span>
                        <br>

                        <span>المساحة: {{$building_info->building_area}}</span>
                        <br>

                        <span>عدد الغرف: {{$building_info->rooms}}</span>
                        <br>

                        <span>نوع العملية: {{building_rent()[$building_info->building_rent]}}</span>

                        <!-- Go to www.addthis.com/dashboard to customize your tools -->
                        <div class="addthis_inline_share_toolbox" style="height: 30px">
                        </div>
                    </div>

                    <div class="col-md-9">
                        <img src="{{image_exist($building_info->image)}}" alt="صورة العقار" class="img-responsive" style="float: left">
                    </div>
                    <hr>
                    <div class="clearfix"></div>
                    <p>
                        {{$building_info->building_large_description}}
                    </p>
                </div>

                <div class="clearfix"></div>

                <div class="profile-content">
                    @include('front-end/building/share', ['allBuildings' => $same_rent])
                    @include('front-end/building/share', ['allBuildings' => $same_type])
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('footer')
    <script type="text/javascript" src="//ct5.addthis.com/js/300/addthis_widget.js#pubid=ra-58fe7ca73f354667"></script>
@endsection
