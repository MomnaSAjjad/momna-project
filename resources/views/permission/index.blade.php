@extends("layouts.app")

@section("content")
<div class="page-wrapper">
    <div class="page-content">
        <div class="container mt-4 position-relative">
            <h2 class="text-center mb-4">Permissions List</h2>

            <!-- Button on the top-right side -->
            <a href="{{ route('permissions.create') }}" class="btn btn-primary" style="position: absolute; top: 20px; right: 20px;">Add New Permission</a>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">All Permissions</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Permission Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($permissions as $index => $permission)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $permission->name }}</td>
                                    <td>
                                        <!-- Action buttons (Edit/Delete) can be added here -->
                                        <form action="{{ route('permissions.destroy', $permission->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this permission?');">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
