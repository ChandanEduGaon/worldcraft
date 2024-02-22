@extends('admin.master')

@section('admin_content')
    <div class="card">
        <h5 class="card-header">Users</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Project</th>
                        <th>Client</th>
                        <th>Users</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <tr>
                        <td><strong>Angular Project</strong></td>
                        <td>Albert Cook</td>
                        <td>xx</td>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                        <td>
                            <i class="bx bx-edit-alt me-1 bx-hover"></i>
                            <i class="bx bx-trash me-1 bx-hover"></i>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
