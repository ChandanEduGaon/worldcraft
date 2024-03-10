@extends('admin.master')
@section('admin_content')
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Add / Edit Products</h5>
            <small class="text-muted float-end">Save will update the worldcraft's header.</small>
        </div>
        <div class="card-body">
            <form action="{{ route('world_craft_admin.add_products') }}" method="POST" enctype="multipart/form-data">@csrf
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Product name</label>
                            <input type="text" name="product_name" class="form-control" id="basic-default-fullname"
                                placeholder="Write name here..." />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Product price</label>
                            <input type="number" name="product_price" class="form-control" id="basic-default-fullname"
                                placeholder="Write price here..." />
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Product Description</label>
                    <textarea name="product_des" id="product_des" class="form-control" cols="30" rows="10"
                        placeholder="Write description here.."></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Product Docs</label>
                    <textarea name="product_doc" id="editor" cols="30" rows="10" placeholder="Write description here.."></textarea>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Product images</label>
                    <input class="form-control" type="file" name="product_files" id="formFile"  />
                </div>
                <button type="submit" class="btn btn-primary float-end w-25">Save</button>
            </form>
        </div>
    </div>
@endsection

@push('script')
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
