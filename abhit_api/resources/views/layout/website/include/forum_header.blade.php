<section class="knowledge-header-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 p0">
                <div class="knowledge-logo"><img src="{{asset('asset_website/img/home/logo.png')}}" class="w100"></div>
            </div>
            <div class="col-lg-7 p0">
                <ul class="list-inline knowledge-header-list">
                    <li><a href="{{route('website.dashboard')}}">Home</a></li>
                    <li><input type="text" class="form-control" id="search" onkeyup="myFunction()" placeholder="Search Course">
                    </li>
                    <li><a data-toggle="modal" data-target="#add-post-modal" class="add-post" style="cursor: pointer">Add Post</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>