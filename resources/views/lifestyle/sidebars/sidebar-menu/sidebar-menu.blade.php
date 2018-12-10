@if(isset($sidebarMenu))
<ul class="list-group sidebar-nav" id="sidebar-nav">
    @include(env('THEME') . '.sidebars.sidebar-menu.sidebar-menu-items', ['items' => $sidebarMenu->roots()])
</ul>
@endif