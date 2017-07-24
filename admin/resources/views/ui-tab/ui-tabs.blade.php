<div class="row">
        <div class="col-md-2 col-sm-2"></div>
        <div class="col-md-8 col-sm-8">
            <div id="tabs">
                <ul>
                    <li><a href="#tabs-add">Add {{$subject}}</a></li>
                    <li><a href="#tabs-update">Update {{$subject}}</a></li>
                    <li><a href="#tabs-delete">Delete {{$subject}}</a></li>
                </ul>
                <div id="tabs-add">
                    @section('add_subject')
                        @show
                </div>
                <div id="tabs-update">
                    @section('update_subject')
                    @show
                </div>
                <div id="tabs-delete">
                    @section('delete_subject')
                    @show
                </div>

            </div>
        </div>
        <div class="col-md-2 col-sm-2"></div>
    </div>