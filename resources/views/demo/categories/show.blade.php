@extends("layouts.app")
@section("content")
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3 border-none font-18 ps-2">{{ __('category.update_title') }}</div>
					<div class="ps-3">
					</div>
				 	<div class="ms-auto">
				 		<a href="{{ url('/categories') }}" class="btn btn-secondary pe-4 ps-4 me-0">{{ __('general.back_button') }}</a>
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
							<div class="row justify-between d-flex justify-content-between">
                   			 	<form method="POST" action="{{ route('category.update', ['id' => $category->id]) }}" class="category-form" enctype="multipart/form-data">
			                        @csrf
			                        @method('PUT')
			                        <div class="row">
										<div class="col-lg-7">
											<h5 class="d-flex align-items-center mb-4 filled-title bg-gray font-color-dark">{{ __('category.category_column') }}</h5>
											<div class="row g-3 mb-4">
		                                        
		                                       <div class="form-group col-6">
						                            <label for="name" class="pb-2">
						                                <img src="{{ asset('assets/flags/4x3/gb.svg') }}" alt="English Flag" width="20">
						                                {{ __('category.field_category_name_en') }}
						                            </label>
						                            <input type="text" value="{{ $category->name }}" name="name" id="name" class="form-control" required>
						                        </div>
						                        <div class="form-group col-6">
						                            <label for="name_swedish" class="pb-2">
						                                <img src="{{ asset('assets/flags/4x3/se.svg') }}" alt="Swedish Flag" width="20">
						                                {{ __('category.field_category_name_se') }}
						                            </label>
						                            <input type="text" value="{{ $category->name_sv }}" name="name_sv" id="name_swedish" class="form-control" required>
						                        </div>

						                        <div class="form-group col-6">
						                            <label for="sort" class="pb-2">{{ __('category.field_category_sort') }}</label>
						                            <input type="number" value="{{ $category->sort }}" name="sort" id="sort" class="form-control" required>
						                        </div>

						                        <div class="form-group col-6">
						                            <label for="color" class="pb-2">{{ __('category.field_category_color') }}</label>
						                            <input type="color" value="{{ $category->color }}" name="color" id="color" class="form-control" required>
						                        </div>
						                        <div class="form-group col-6">
						                            <label for="icon" class="pb-2 w-100">{{ __('category.field_category_icon') }}</label>
							                        @if($category->icon)
													    <img class="contract-page__icon" src="{{ asset('storage/' . $category->icon) }}" alt="{{ $category->name }}">
													@else
													    <img class="contract-page__icon" src="{{ asset('assets/images/no-image.svg') }}" alt="Placeholder Image">
													@endif
                                       				<input type="file" name="icon" id="icon" class="form-control-file">
						                        </div>
		                                       
		                                    </div>
										</div>

										<div class="col-lg-5">
											<h5 class="d-flex align-items-center mb-4 filled-title bg-gray font-color-dark">{{ __('category.subcategory_column') }}</h5>
											<div class="row g-3 mb-4">
												<div id="subcategories-container" class="subcategories-container">
													@foreach ($subcategories as $sub)
								                            <div class="subcategory-row d-flex gap-3 pb-2">
								                            	<span class="p-relative w-100"><img class="subcategory-row__flag" src="{{ asset('assets/flags/4x3/gb.svg') }}" alt="English Flag" width="20"><input value="{{ $sub->name }}" type="text" name="subcategories_name[{{ $sub->id }}]" placeholder="Name" class="form-control"></span>
													            <span class="p-relative w-100"><img class="subcategory-row__flag" src="{{ asset('assets/flags/4x3/se.svg') }}" alt="Swedish Flag" width="20"><input value="{{ $sub->name_sv }}" type="text" name="subcategories_name_sv[{{ $sub->id }}]" placeholder="Name (Swedish)" class="form-control"></span>
													            <a class="remove-subcategory btn btn-xs fs-08 px-0 py-0 pt-1"><i class='bx bx-trash-alt color-red'></i></a>
														    </div>
													@endforeach
						                        </div>
						                        <div class="d-flex justify-content-end">
	                        						<a class="btn btn-sm btn-default w-auto add-subcategory" id="add-subcategory">{{ __('category.add_subcategory') }}</a>
	                        					</div>
											</div>
										</div>
									</div>
                        		<button type="submit" class="btn btn-primary">{{ __('category.update_category') }}</button>
								</form>
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
$(document).ready(function(){
	var html = '';
	html += '<div class="subcategory-row d-flex gap-3 subcategory-row-dynamic pb-2">';
	html += '<span class="p-relative w-100"><img class="subcategory-row__flag" src="{{ asset('assets/flags/4x3/gb.svg') }}" alt="English Flag" width="20"><input type="text" name="subcategories_name[]" placeholder="Name" class="form-control"></span>';
	html += '<span class="p-relative w-100"><img class="subcategory-row__flag" src="{{ asset('assets/flags/4x3/se.svg') }}" alt="Swedish Flag" width="20"><input type="text" name="subcategories_name_sv[]" placeholder="Name (Swedish)" class="form-control"></span>';
	html += '<a class="remove-subcategory btn btn-xs fs-08 px-0 py-0 pt-1"><i class=\'bx bx-trash-alt color-red\'></i></a>';
	html += '</div>';

	$(".add-subcategory").click(function(){
		$(".subcategories-container").append(html);
	});
	$('.subcategories-container').delegate('.remove-subcategory', 'click', function() {
        $(this).parent().remove();
	});
});
</script>
@endsection
