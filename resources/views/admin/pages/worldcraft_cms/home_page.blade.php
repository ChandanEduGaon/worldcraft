@extends('admin.master')

@section('admin_content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex flex-wrap justify-content-between align-items-center">
                <div class="d-flex flex-column justify-content-center">
                    <h4 class="mb-1 mt-3">Home Content</h4>
                </div>
                <div class="d-flex align-content-center flex-wrap gap-3">
                    <a href="{{route('world_craft_admin.home.add')}}">
                        <button class="btn btn-primary">Add Home Data</button>
                    </a>
                </div>

            </div>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                <tr>
                    <th>Type</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach($home_data as $data)
                    <tr>
                        <td><strong>Angular Project</strong></td>
                        <td>Albert Cook</td>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                        <td>
                            <i class="bx bx-edit-alt me-1 bx-hover"></i>
                            <i class="bx bx-trash me-1 bx-hover"></i>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
