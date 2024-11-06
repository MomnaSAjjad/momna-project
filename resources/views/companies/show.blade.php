@extends("layouts.app")
@section("content")
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3 border-none font-18 ps-2">{{ __('company.title') }}</div>
                    <div class="ps-3">
                    </div>
                    <div class="ms-auto">
                        <a href="{{ url('/companies') }}" class="btn btn-secondary pe-4 ps-4 me-0">{{ __('general.back_button') }}</a>
                        <button id="submitForm" class="btn btn-primary radius-20 mt-2 mt-lg-0 ms-2 px-3">{{ __('general.save_button') }}</button>
                    </div>
                </div>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="col-lg-12">
                    <div class="card card-bordered">
                        <div class="card-body p-5">
                            <form method="POST" action="{{ route('companies.update', ['id' => $company->id]) }}" id="CompanyForm" class="company-form" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row justify-between d-flex justify-content-between">
                                    <div class="col-lg-6">
                                        <h5 class="d-flex align-items-center mb-4 filled-title bg-gray font-color-dark">{{ __('company.company_info_title') }}</h5>
                                        <div class="row g-3 mb-4">
                                            <div class="col-6 col-lg-6 ps-4">
                                                <label for="Title" class="form-label"><span class="font-color-7">*</span> {{ __('company.fields.company_name') }}</label>
                                                <input type="text" required name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $company->name }}" id="Company" placeholder="Company">
                                                @error('name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-6 col-lg-6 ps-4">
                                                <label for="Email" class="form-label"><span class="font-color-7">*</span> {{ __('company.fields.email') }}</label>
                                                <input type="text" required name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $company->email }}" id="Email" placeholder="Email">
                                                @error('email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-6 col-lg-6 ps-4">
                                                <label for="Country" class="form-label"><span class="font-color-7">*</span> {{ __('company.fields.country') }}</label>
                                                <select class="form-select @error('country') is-invalid @enderror" name="country" id="Country" aria-label=".form-select-sm example">
                                                    <option {{ $company->country === 'Sweden' ? 'selected' : '' }} value="Sweden">{{ __('general.sweden') }}</option>
                                                </select>
                                                @error('country')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-6 col-lg-6 ps-4">
                                                <label for="Title" class="form-label"><span class="font-color-7">*</span> {{ __('company.fields.region') }}</label>
                                                <select class="form-select @error('region') is-invalid @enderror" name="region" id="Region" aria-label=".form-select-sm example">
                                                    @foreach($regions as $region)
                                                        <option {{ $company->region === $region ? 'selected' : '' }} value="{{ $region }}" >{{ $region }}</option>
                                                    @endforeach
                                                </select>
                                                @error('region')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-6 col-lg-6 ps-4">
                                                <label for="City" class="form-label"><span class="font-color-7">*</span> {{ __('company.fields.city') }}</label>
                                                <input type="text" required name="city" class="form-control @error('city') is-invalid @enderror" value="{{ $company->city }}" id="City" placeholder="City">
                                                @error('city')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-6 col-lg-6 ps-4">
                                                <label for="Postcode" class="form-label">{{ __('company.fields.postcode') }}</label>
                                                <input type="text" name="postcode" class="form-control" id="Postcode" value="{{ $company->postcode }}" placeholder="Postcode">
                                            </div>
                                            <div class="col-6 col-lg-6 ps-4">
                                                <label for="VatId" class="form-label"><span class="font-color-7">*</span> {{ __('company.fields.vat_nr') }}</label>
                                                <input type="text" class="form-control @error('vat_id') is-invalid @enderror" name="vat_id" value="{{ $company->vat_id }}" id="VatId" placeholder="Vat Nr">
                                                @error('vat_nr')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                           <!--  <div class="col-6 col-lg-6 ps-4">
                                                <label for="Owner" class="form-label"><span class="font-color-7">*</span> {{ __('company.fields.owner') }}</label>
                                                <input type="text" name="owner_id" class="form-control" id="Owner" placeholder="Choose Owner">
                                            </div> -->
                                            <div class="col-6 col-lg-6 ps-4">
                                                <label for="Status" class="form-label">{{ __('general.status') }}</label>
                                                <select class="form-select" name="status" id="Status" >
                                                    <option value="0" {{ $company->status === '0' ? 'selected' : '' }}>{{ __('general.inactive') }}</option>
                                                    <option value="1" selected {{ $company->status === '1' ? 'selected' : '' }}>{{ __('general.active') }}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h5 class="d-flex align-items-center mb-4 filled-title bg-gray font-color-dark">{{ __('company.company_users_title') }}</h5>
                                        <div class="row g-3 mb-4">
                                            <div class="card no-bg">
                                                <div class="card-body ps-0 pe-0 pt-0">
                                                    <div class="table-responsive bordered">
                                                        <table class="table mb-0 table-striped contracts-list-table">
                                                            <thead class="table-dark">
                                                                <tr>
                                                                    <th width="12%" class="text-left ps-3">{{ __('users.table.name') }}</th>
                                                                    <th width="12%" class="text-left ps-2">{{ __('users.table.position') }}</th>
                                                                    <th width="12%" class="text-left ps-2">{{ __('users.table.region') }}</th>
                                                                    <th width="12%" class="text-left ps-2">{{ __('users.table.user_type') }}</th>
                                                                    <th width="5%" class="text-center">{{ __('users.table.status') }}</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            @forelse($users as $user)
                                                                <tr>
                                                                    @if ($user->user_type == 1)
                                                                        <td><a href="/customer/{{ $user->id }}">{{ $user->name }}</a></td>
                                                                    @else
                                                                        <td><a href="/users/{{ $user->id }}">{{ $user->name }}</a></td>
                                                                    @endif
                                                                    <td>{{ $user->position }}</td>
                                                                    <td>{{ $user->region }}</td>
                                                                    <td>
                                                                        @if ($user->user_type == 1)
                                                                            {{ __('users.type.owner') }}
                                                                        @elseif ($user->status == 2)
                                                                            {{ __('users.type.admin') }}
                                                                        @elseif ($user->status == 3)
                                                                            {{ __('users.type.manager') }}
                                                                        @elseif ($user->status == 0)
                                                                            {{ __('users.type.superuser') }}
                                                                        @endif
                                                                    </td>
                                                                    <td>@if ($user->status == 1)
                                                                            {{ __('users.status.active') }}
                                                                        @elseif ($user->status == 0)
                                                                            {{ __('users.status.inactive') }}
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                            @empty
                                                                <tr>
                                                                    <td colspan="5" class="text-center">{{ __('company.company_users_not_found') }}. <a class="d-flex justify-content-center" id=""><i class='bx bx-plus'></i> {{ __('users.add_button') }}</a></td>
                                                                </tr>
                                                            @endforelse
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>

</div>
<!--end page wrapper -->
@endsection
@section("script")
<script>
document.getElementById('submitForm').addEventListener('click', function() {
    document.getElementById('CompanyForm').submit();
});
</script>
@endsection
