@extends("layouts.app")

@section("content")
<style>
    .page-wrapper {
        background-color: #f8f9fa; /* Light background */
        min-height: 100vh;
    }

    .page-content {
        padding: 20px;
    }

    .card {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: #1CB079;
        color: white;
    }

    .btn-secondary {
        background-color: #6c757d;
        border: none;
    }

    .btn-secondary:hover {
        background-color: #5a6268; /* Darker on hover */
    }

    /* Custom size for smaller input */
    .form-control-small {
        width: 50%; /* Adjust the width as needed */
        display: inline-block;
    }

    /* Margin between form and table */
    .form-group, .table {
        margin-bottom: 20px;
    }

</style>
<div class="page-wrapper">
    <div class="page-content">
        <div class="container mt-4">
            <h2 class="text-center mb-4">Permissions Management</h2>
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Manage Permissions</h5>
                </div>
                <div class="card-body">
                    <!-- Add New Permission Form -->
                    <h6>Add New Permission</h6>
                    <form action="{{ route('permissions.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Permission Name</label>
                                    <input type="text" class="form-control form-control-small @error('name') is-invalid @enderror" id="name" name="name" required value="{{ old('name') }}">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lang">Swedish Permission Name</label>
                                    <input type="text" class="form-control form-control-small @error('lang') is-invalid @enderror" id="lang" name="lang" required value="{{ old('lang') }}">
                                    @error('lang')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="group_name">Permission Type</label>
                            <select class="form-control form-control-small @error('group_name') is-invalid @enderror" id="group_name" name="group_name" required>
                                <option value="">--Select--</option>
                                <option value="USER AUTHORIZATION">{{ __('users.permission_section.users_title') }}</option>
                                <option value="CONTRACTS AND CATEGORIES">{{ __('users.permission_section.contracts_title') }}</option>
                                <option value="ARCHIVE PAGE">{{ __('users.permission_section.archive_title') }}</option>
                                <option value="CONTRACT COSTS">{{ __('users.permission_section.costs_title') }}</option>
                            </select>
                            @error('group_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Add Permission</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
