@extends('admin.master')
@section('admin_content')
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Home Content</h5>
            <small class="text-muted float-end">Save will update the WorldCraft home.</small>
        </div>
        <div class="card-body">
            <form method="post" action="{{route('world_craft_admin.home.add.data')}}" enctype="multipart/form-data"  >
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="home_content_type">Site type</label>
                    <select class="form-control" name="home_content_type" id="home_content_type">
                        <option value="">-- Select Home Type --</option>
                        <option value="slider">Slider</option>
                        <option value="features">Features</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="title">Site title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="John Doe"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="short-description">Site short-description</label>
                    <textarea rows="4" name="short_description" type="text" class="form-control" id="short-description"
                              placeholder="Write Short-description"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="description">Site description</label>
                    <textarea rows="4" type="text" name="description" class="form-control" id="description"
                              placeholder="Write Description"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="url">Site Url(optional)</label>
                    <input type="text" name="url" class="form-control" id="url" placeholder="link"/>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Site logo(as required)</label>
                    <input class="form-control" name="file" type="file" id="formFile"/>
                </div>
                <button type="submit" class="btn btn-primary float-end w-25">Save</button>
            </form>
        </div>
    </div>
@endsection
