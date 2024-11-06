
@extends("layouts.app")

		@section("content")
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-end mb-1">
					<h6 class="breadcrumb-title pe-3 border-none font-14 ps-2 d-flex justify-content-center align-items-center mb-0">{{ __('adress_book.total_books') }} &nbsp; <span class="circle-number color-white bg-dark-gray">0</span></h6>
					<div class="ps-3">
					</div>
					<div class="ms-auto pe-2"><a href="#" class="btn btn-primary radius-20 mt-2 mt-lg-0 ms-2 px-3 font-12"><i class="bx bx-plus font-12"></i>{{ __('adress_book.add_button') }}</a></div>
				</div>
				<!--end breadcrumb-->

                <div class="card no-bg">
                    <div class="card-body ps-0 pe-0">
                        <div class="table-responsive bordered">
                            <table class="table mb-0 table-striped contracts-list-table">
                                <thead class="table-dark">
                                    <tr>
                                        <th width="12%" class="text-left ps-3">{{ __('adress_book.table.Company') }}</th>
                                        <th width="12%" class="text-left ps-2">{{ __('adress_book.table.number_of_Contracts') }}</th>
                                        <th width="12%" class="text-left ps-2">{{ __('adress_book.table.contact_Person') }}</th>
                                        <th width="12%" class="text-left">{{ __('adress_book.table.Title') }}</th>
                                        <th width="12%" class="text-left">{{ __('adress_book.table.telephone') }}</th>
                                        <th width="12%" class="text-left">{{ __('adress_book.table.email') }}</th>
                                        <th width="12%" class="text-left">{{ __('adress_book.table.adress') }}</th>
                                        <th width="12%" class="text-left">{{ __('adress_book.table.Website') }}</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


			</div>
		</div>
		<!--end page wrapper -->
		@endsection
