@extends('admin.master')
@section('admin_content')
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Header Content</h5>
            <small class="text-muted float-end">Save will update the worldcraft's header.</small>
        </div>
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Site title</label>
                    <input type="text" class="form-control" id="basic-default-fullname" placeholder="John Doe" />
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Site logo</label>
                    <input class="form-control" type="file" id="formFile" />
                </div>
                <button type="submit" class="btn btn-primary float-end w-25">Save</button>
            </form>
        </div>
    </div>
@endsection
