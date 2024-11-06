@extends("layouts.app")
		
@section("content")
<!--start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">
		<!--breadcrumb-->
		<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-1">
			<div class="ps-3">
			</div>
		 	<div class="ms-auto pe-2"><a href="{{ url('/categories/create') }}" class="btn btn-primary radius-20 mt-2 mt-lg-0 ms-2 px-3 font-12"><i class="bx bx-plus font-12"></i>{{ __('category.add_new') }}</a></div>
		</div>
		<!--end breadcrumb-->
	  	@if(session('success'))
		    <div class="alert alert-success">
		        {{ session('success') }}
		    </div>
		@endif
		<div class="card no-bg all-contracts">
			<div class="card-body ps-0 pe-0">
				<div class="mb-3 d-flex flex-row justify-content-between">
					<div class="d-flex align-items-end gap-4">
                        <div>
                            <h6 class="mb-0 font-15 font-color-11">{{ __('category.total_categories') }} - {{ $categories_total }}</h6>
                        </div>
                    </div>
				</div>
				<div class="table-responsive bordered">
					<table class="table mb-0 table-striped contracts-list-table">
						<thead class="table-dark">
							<tr>
								<th width="30%" class="text-left ps-2">Folder Name <img src="{{ asset('assets/flags/4x3/gb.svg') }}" alt="English Flag" width="20"></th>
								<th width="30%" class="text-left ps-2">Folder Name <img src="{{ asset('assets/flags/4x3/se.svg') }}" alt="Swedish Flag" width="20"></th>
								<th width="8%" class="text-left">Folder Color</th>
								<th width="4%" class="text-left">Folder Sort</th>
								<th width="4%" class="text-center ps-2">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($categories as $category)
								<tr>
									<td class="text-left ps-2">{{ $category->name }}</td>
									<td class="text-left ps-2">{{ $category->name_sv }}</td>
									<td class="text-left ps-2"><span style="background:{{ $category->color }}" class="contracts-list-table__colorlabel"></span></td>
									<td class="text-left ps-2">{{ $category->sort }}</td>
									<td class="text-center ps-2"><a href="/categories/{{ $category->id }}" class="justify-content-center"><i class='bx bx-show fs-12rem'></i></a></td>
								</tr>
							@endforeach

						</tbody>
					</table>
				</div>
				<div class="row mt-4">
					<div class="col-sm-12 col-md-12">
						<div class="table-pagination">
							{{ $categories->links() }}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--end page wrapper -->
@endsection
@section("script")

<script>


</script>
@endsection
