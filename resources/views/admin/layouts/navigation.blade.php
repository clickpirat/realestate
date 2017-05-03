<li class="active treeview">
    <a href="{{url('adminpanel/sitesettings')}}">
        <i class="fa fa-dashboard pull-right"></i>
        <span style="margin-right: 25px">إعدادات الموقع</span>
    </a>
</li>

{--Users--}
<li class="treeview">
    <a href="#">
        <i class="fa fa-users pull-right"></i>
        <span style="margin-right: 25px"> <i class="fa fa-angle-right pull-left"></i>الاعضاء</span>


        <span class="clearfix"></span>
    </a>

    <ul class="treeview-menu">
        <li><a href="{{url('adminpanel/users/create')}}"><i class="fa fa-circle-o"></i> اضف عضو</a></li>
        <li><a href="{{url('adminpanel/users')}}"><i class="fa fa-circle-o"></i> كل الاعضاء</a></li>
    </ul>
</li>

{--Buildings--}
<li class="treeview">
    <a href="#">
        <i class="fa fa-users pull-right"></i>
        <span style="margin-right: 25px"> <i class="fa fa-angle-right pull-left"></i>العقارات</span>


        <span class="clearfix"></span>
    </a>

    <ul class="treeview-menu">
        <li><a href="{{url('adminpanel/building/create')}}"><i class="fa fa-circle-o"></i> اضف عقار</a></li>
        <li><a href="{{url('adminpanel/building')}}"><i class="fa fa-circle-o"></i> كل الاعقارات</a></li>
    </ul>
</li>

{--Messages--}
<li class="treeview">
    <a href="{{url('adminpanel/contact')}}">
        <i class="fa fa-users pull-right"></i>
        <span style="margin-right: 25px">الرسائل</span>
    </a>
</li>