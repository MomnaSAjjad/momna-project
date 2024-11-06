@extends("layouts.app")

		@section("content")
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-end mb-1">
					<h6 class="breadcrumb-title pe-3 border-none font-14 ps-2 d-flex justify-content-center align-items-center mb-0">{{ __('users.total_users') }} &nbsp; <span class="circle-number color-white bg-dark-gray">0</span></h6>
					<div class="ps-3">
					</div>
					<div class="ms-auto pe-2"><a href="{{ url('/users/create') }}" class="btn btn-primary radius-20 mt-2 mt-lg-0 ms-2 px-3 font-12"><i class="bx bx-plus font-12"></i>{{ __('users.add_button') }}</a></div>

					{{-- @can('user-create')
					<div class="ms-auto pe-2"><a href="{{ url('/users/create') }}" class="btn btn-primary radius-20 mt-2 mt-lg-0 ms-2 px-3 font-12"><i class="bx bx-plus font-12"></i>{{ __('users.add_button') }}</a></div>
					@endcan --}}
				</div>
				<!--end breadcrumb-->

                <div class="card no-bg">
                    <div class="card-body ps-0 pe-0">
                        <div class="table-responsive bordered">
                            <table class="table mb-0 table-striped contracts-list-table">
                                <thead class="table-dark">
                                    <tr>
                                        <th width="12%" class="text-left ps-3">{{ __('users.table.name') }}</th>
                                        <th width="12%" class="text-left ps-2">{{ __('users.table.position') }}</th>
                                        <th width="12%" class="text-left ps-2">{{ __('users.table.company') }}</th>
                                        <th width="12%" class="text-left ps-2">{{ __('users.table.region') }}</th>
                                        <th width="12%" class="text-left">{{ __('users.table.telephone') }}</th>
                                        <th width="12%" class="text-left">{{ __('users.table.email') }}</th>
                                        <th width="10%" class="text-left">{{ __('users.table.user_type') }}</th>
                                        <th width="5%" class="text-left">{{ __('users.table.status') }}</th>
                                        <th width="10%" class="text-left">{{ __('users.table.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td class="text-left ps-3">
                                            <a class="font-weight-400 align-items-center" href="{{ url('/users/edit', $user->id) }}">
                                                {{ $user->name }}
                                            </a>
                                        </td>
                                        <td class="text-left">{{ $user->position }}</td>
                                        <td class="text-left">{{ $user->company }}</td>
                                        <td class="text-left">{{ $user->region }}</td>
                                        <td class="text-left">
                                            <div class="gap-2 d-flex">{{ $user->telephone }}</div>
                                        </td>
                                        <td class="text-left">
                                            <a href="mailto:{{ $user->email }}" class="gap-2 d-flex">{{ $user->email }}</a>
                                        </td>
                                        <td class="text-left">
                                            {{ $user->user_type == 2 ? 'Admin' : 'User' }}
                                        </td>
                                        <td class="text-left">
                                            <div class="d-flex justify-content-start align-items-center gap-1">
                                                <span class="price-container {{ $user->status == 1 ? 'income' : 'costs' }}">
                                                    {{ $user->status == 1 ? 'Active' : 'Inactive' }}
                                                </span>
                                            </div>
                                        </td>

                                        <td class="text-left">
                                            <!-- Delete button inside form -->
                                            @can('user-delete')
                                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete this user?')">
                                                    Delete
                                                </button>
                                            </form>
                                            @endcan
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
		<!--end page wrapper -->
		@endsection
