<li class="{{ Request::is('hotels*') ? 'active' : '' }}">
    <a href="{!! route('hotelAdminIndex') !!}"><i class="fa fa-edit"></i><span>Hotels</span></a>
</li>

<li class="{{ Request::is('comments*') ? 'active' : '' }}">
    <a href="{!! route('comments.index') !!}"><i class="fa fa-edit"></i><span>Comments</span></a>
</li>

