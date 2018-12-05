@if($topMenu)
<div id="hornav" class="container no-padding">
    <div class="row">
        <div class="col-md-12 no-padding">
            <div class="text-center visible-lg">
                <ul id="hornavmenu" class="nav navbar-nav">
                    @include(env('THEME') . '.menu-items', ['items' => $topMenu->roots()])
                </ul>
            </div>
        </div>
    </div>
</div>
@endif