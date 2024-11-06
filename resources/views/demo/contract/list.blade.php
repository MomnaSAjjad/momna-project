@extends("layouts.app")
		
		@section("content")
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<!-- <div class="breadcrumb-title pe-3 border-none font-18">Contracts</div> -->
					<div class="ps-3">
					</div>
				 	<!-- <div class="ms-auto"><a href="{{ url('/contract/register') }}" class="btn btn-purple radius-30 mt-2 mt-lg-0"><i class="bx bx-plus"></i>Add Contract</a></div> -->
				</div>
				<!--end breadcrumb-->
			  
				<div class="card card-bordered mb-5">
					<div class="card-body pt-4">
						<div class="d-lg-flex align-items-center mb-3 mt-3 gap-3 justify-content-between search-bar">
							<div class="search-bar__left d-flex flex-column">
								<div class="d-grid gap-4 mb-4 grid-columns-5">
									<div class="position-relative w-100">
										<label>Category</label>
										<select class="form-select" aria-label=".form-select-sm example">
											<option disabled selected hidden value="">Select</option>
	                                        <option value="0">Company Cars</option>
                                            <option value="1">IT</option>
                                            <option value="2">Office</option>
                                            <option value="3">Insurances</option>
                                            <option value="4">Service Agreements</option>
                                            <option value="5">Employment Contracts</option>
                                            <option value="6">Staff</option>
                                            <option value="7">Subscriptions</option>
                                            <option value="8">Cooperation Agreements</option>
										</select>
									</div>
									<div class="position-relative w-100">
										<label>Type</label>
										<select class="form-select" aria-label=".form-select-sm example">
											<option disabled selected hidden value="">Select</option>
											<option value="1">Leasing</option>
											<option value="2">Cloud Services</option>
											<option value="3">Rental Agreement</option>
											<option value="4">Car Insurance</option>
											<option value="5">Accounting</option>
											<option value="6">Permanent Employment</option>
											<option value="7">Mobile Phones</option>
											<option value="8">Music Streaming</option>
											<option value="9">Consultant Agreement</option>
										</select>
									</div>
									<div class="position-relative w-100">
										<label>Contract</label>
										<input type="text" class="form-control pe-4 radius-20" placeholder="Search"> <span class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
									</div>
									<div class="position-relative w-100">
										<label>Counterparty</label>
										<select class="form-select w-100" aria-label=".form-select-sm example">
											<option disabled selected hidden value="">Select</option>
											<option value="1">Volvo Finans</option>
											<option value="2">Amazon Web</option>
											<option value="3">Fastigheter AB</option>
											<option value="4">Trygg Hansa</option>
											<option value="5">Ekonomi AB</option>
											<option value="6">Telenor</option>
											<option value="7">Spotify</option>
											<option value="8">Techbolaget AB</option>
										</select>
									</div>
									
									<div class="position-relative w-100">
										<label>Contract Manager</label>
										<select class="form-select w-100" aria-label=".form-select-sm example">
											<option disabled selected hidden value="">Select</option>
											<option value="1">Martina Falk</option>
											<option value="2">Daniel Andersson</option>
											<option value="3">David Karlsson</option>
										</select>
									</div>
								</div>
								<div class="d-grid gap-4 mb-2 grid-columns-5 mt-3">
									<div class="position-relative w-100">
										<label>Department</label>
										<select class="form-select" aria-label=".form-select-sm example">
											<option disabled selected hidden value="">Select</option>
	                                        <option value="1">Development</option>
	                                        <option value="2">Executive</option>
	                                        <option value="3">Finance</option>
	                                        <option value="4">HR</option>
	                                        <option value="5">IT</option>
	                                        <option value="6">Marketing</option>
	                                        <option value="7">Procurement</option>
	                                        <option value="8">Production</option>
	                                        <option value="9">Sales</option>
										</select>
									</div>
									<div class="position-relative w-100">
										<label>Region</label>
										<select class="form-select" aria-label=".form-select-sm example">
											<option disabled selected hidden value="">Select</option>
	                                        <option value="1">Blekinge</option>
	                                        <option value="2">Dalarna</option>
	                                        <option value="3">Gotland</option>
	                                        <option value="4">Gävleborg</option>
	                                        <option value="5">Halland</option>
	                                        <option value="6">Jämtland</option>
	                                        <option value="7">Jönköping</option>
	                                        <option value="8">Kalmar</option>
	                                        <option value="9">Kronoberg</option>
	                                        <option value="10">Norrbotten</option>
	                                        <option value="11">Skåne</option>
	                                        <option value="12">Stockholm</option>
	                                        <option value="13">Sörmland</option>
	                                        <option value="14">Uppsala</option>
	                                        <option value="15">Värmland</option>
	                                        <option value="16">Västerbotten</option>
	                                        <option value="17">Västernorrland</option>
	                                        <option value="18">Västmanland</option>
	                                        <option value="19">Örebro län</option>
	                                        <option value="20">Östergötland</option>
	                                        <option value="21">Götaland</option>
										</select>
									</div>
									<div class="position-relative w-100">
										<label>Amount</label>
										<select class="form-select w-100" aria-label=".form-select-sm example">
											<option disabled selected hidden value="">Select</option>
											<option value="1">Cost</option>
											<option value="1">Income</option>
										</select>
									</div>
									<div class="position-relative w-100">
										<label>Payment Period</label>
										<select class="form-select" aria-label=".form-select-sm example">
											<option disabled selected hidden value="">Select</option>
											<option value="1">Month</option>
											<option value="2">Quarter</option>
											<option value="3">Year</option>
											<option value="4">One Time</option>
										</select>
									</div>
									<div class="d-flex justify-content-center">
										<button type="button" class="btn btn-default px-2 w-10rem pt-2 pb-2 btn-bordered hover-scaled fs-07">Search</button>
									</div>
								</div>
							</div>
							<!-- <div class="search-bar__right">
								<button type="button" class="btn btn-primary px-5 w-auto">Search</button>
							</div> -->
						</div>
					</div>
				</div>
				<div class="card no-bg all-contracts">
					<div class="card-body ps-0 pe-0">
						<div class="mb-3 d-flex flex-row justify-content-between">
							<div class="d-flex align-items-center gap-4">
                                <div class="static-demo-data-def" style="display:none;">
                                    <h6 class="mb-0 font-15 font-color-11">Total 42 Active Contracts</h6>
                                </div>
                                <div class="d-flex align-items-center gap-3">
                                	<div class="static-demo-data d-flex align-items-center gap-3">
	                                	<h6 class="mb-0 font-color-11 border-type-2 border px-2 py-40 rounded font-type-2 fs-08">HR / 1 Contract</h6>  
	                                	<span class="font-color-7 fs-08">Total Costs 299 SEK</span>
	                                	<span class="font-color-3 fs-08">Total Income 0 SEK</span>
	                                </div>
	                                <a class="remove-static-demo"> Reset</a>
                                </div>
                               	<ul class="list-group list-group-flush flex-row d-none">
                               		<li class="list-group-item d-flex bg-transparent justify-content-between align-items-center ps-2 pe-2 border-none pb-0 pt-0">
                                        <a class="badge border-type-3 btn w-100 font-type-3 font-11 gap-2 justify-content-between pe-3 ps-3 bg-color-3 list-badges active">Subscriptions <b>14</b></a>
                                    </li>
                                    <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center ps-2 pe-2 border-none pb-0 pt-0">
                                        <a class="badge border-type-8 btn w-100 font-type-8 font-11 gap-2 justify-content-between pe-3 ps-3 bg-color-8 list-badges">IT <b>11</b></a>
                                    </li>
                                    <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center ps-2 pe-2 border-none pb-0 pt-0">
                                        <a class="badge border-type-10 btn w-100 font-type-10 font-11 gap-2 justify-content-between pe-3 ps-3 bg-color-10 list-badges ">Leasing <b>10</b></a>
                                    </li>
                                    <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center ps-2 pe-2 border-none pb-0 pt-0">
                                        <a class="badge border-type-6 btn w-100 font-type-6 font-11 gap-2 justify-content-between pe-3 ps-3 bg-color-6 list-badges ">Office <b>6</b></a>
                                    </li>
                                    <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center ps-2 pe-2 border-none pb-0 pt-0">
                                        <a class="badge border-type-1 btn w-100 font-type-1 font-11 gap-2 justify-content-between pe-3 ps-3 bg-color-1 list-badges ">Employments <b>5</b></a>
                                    </li>
                                    <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center ps-2 pe-2 border-none pb-0 pt-0">
                                        <a class="badge border-type-2 btn w-100 font-type-2 font-11 gap-2 justify-content-between pe-3 ps-3 bg-color-2 list-badges ">Staff <b>4</b></a>
                                    </li>
                                    <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center ps-2 pe-2 border-none pb-0 pt-0">
                                        <a class="badge border-type-5 btn w-100 font-type-5 font-11 gap-2 justify-content-between pe-3 ps-3 bg-color-5 list-badges ">Company Car <b>2</b></a>
                                    </li>
                                    <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center ps-2 pe-2 border-none pb-0 pt-0">
                                        <a class="badge border-type-4 btn w-100 font-type-4 font-11 gap-2 justify-content-between pe-3 ps-3 bg-color-4 list-badges ">Service Agreements <b>3</b></a>
                                    </li>
                                </ul>
                            </div>

							<div class="d-flex justify-content-end export-btns">
								<button type="button" class="btn btn-secondary px-3 w-auto pt-2 pb-2 font-11 bg-white font-color-dark export-button d-flex align-items-center"><i class='bx bxs-file-export font-color-3 font-16 pe-1'></i> Export</button>
								<a data-bs-toggle="modal" data-bs-target="#EditColumnsPopup" class="btn btn-secondary px-3 w-auto pt-2 pb-2 font-11 bg-white font-color-dark">Edit Columns</a>
							</div>
						</div>
						
						<div class="table-responsive bordered">
							<table class="table mb-0 table-striped contracts-list-table">
								<thead class="table-dark">
									<tr>
										<th width="1%" class="text-left pt-1 px-3">
											<div class="d-flex align-items-center justify-content-center">
												<div>
													<input class="form-check-input me-0 w-1rem h-1rem" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" type="checkbox" value="" aria-label="...">
												</div>
												<!-- <div class="ms-2 d-none">
													<span class="mb-0 font-13"><i class='bx bx-chevron-down'></i></span>
												</div> -->
											</div>
										</th>
										<th width="16%" class="text-left ps-2"><div class="d-flex justify-content-between align-items-center">Category<span><i class='bx bx-chevron-down fs-1rem'></i></span></div></th>
										<th width="16%" class="text-left ps-2">Type</th>
										<th width="14%" class="text-left">Counterparty</th>
										<th width="18%" class="text-left">Contract</th>
										<th width="11%" class="text-left ps-2">Notice Period</th>
										<th width="11%" class="text-left">End Date</th>
										<th width="8%" class="text-left ps-2">Amount</th>
										<!-- <th width="8%" class="text-left ps-2">Payment Period</th> -->
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="table-font-color-1 text-left border-right-gray">
											<div class="d-flex align-items-center justify-content-center">
												<div>
													<input class="form-check-input me-0" type="checkbox" value="" name="selected[]" aria-label="...">
												</div>
											</div>
										</td>
										<td class="text-left ps-2 border-right-gray"><span class="border-type-5 border px-2 py-40 rounded font-type-5">Company Cars</span></td>
										<td class="text-left ps-2">Leasing</td>
                                        <td class="text-left">Volvo Finans</td>
										<td class="text-left"><a href="/contract/ending/red" class="gap-2"><i class='bx bx-file-blank'></i> Car | Johanna Väst</a></td>
										<!-- <td class="text-left">June 10, 2020</td> -->
										<td class="text-left">
											<div class="d-flex flex-column contracts-expiring__due">
                                                <span><span class="font-color-7 mb-1">8 Days</span></span>
                                                <span>Nov 29, 2023</span>
                                            </div>
										</td>
										<td class="text-left">
											<div class="d-flex justify-content-start align-items-center gap-2 ps-0">
                                                    Nov 29, 2023
                                            </div>
                                        </td>
										<td class="text-left ps-2"><div class="d-flex justify-content-start align-items-center gap-1 font-color-7"><span class="costs">4 850 SEK</span></div></td>
										</td>
									</tr>
									<tr>
										<td class="table-font-color-1 text-left border-right-gray">
											<div class="d-flex align-items-center justify-content-center">
												<div>
													<input class="form-check-input me-0" type="checkbox" value="" name="selected[]" aria-label="...">
												</div>
											</div>
										</td>
										<td class="text-left ps-2 border-right-gray"><span class="border-type-8 border px-2 py-40 rounded font-type-8">IT</span></td>
										<td class="text-left ps-2">Cloud Services</td>
                                        <td class="text-left">Amazon Web</td>
										<td class="text-left"><a href="/contract/ending/red" class="gap-2"><i class='bx bx-file-blank'></i> Servers <i class='bx bxs-bell font-color-11 fs-08'></i></a></td>
										<!-- <td class="text-left">June 10, 2020</td> -->
										<td class="text-left">
											<div class="d-flex flex-column contracts-expiring__due">
                                                <span><span class="font-color-7 mb-1">9 Days</span></span>
                                                <span>Dec 29, 2023</span>
                                            </div>
										</td>
										<td class="text-left">
											<div class="d-flex justify-content-start align-items-center gap-2 ps-0">
                                                    Dec 29, 2023
                                            </div>
                                        </td>
										<td class="text-left ps-2"><div class="d-flex justify-content-start align-items-center gap-1 font-color-7"><span class="costs">399 USD</span></div></td>
										</td>
									</tr>
									<tr>
										<td class="table-font-color-1 text-left border-right-gray">
											<div class="d-flex align-items-center justify-content-center">
												<div>
													<input class="form-check-input me-0" type="checkbox" value="" name="selected[]" aria-label="...">
												</div>
											</div>
										</td>
										<td class="text-left ps-2 border-right-gray"><span class="border-type-6 border px-2 py-40 rounded font-type-6">Office</span></td>
										<td class="text-left ps-2">Rental Agreement</td>
                                        <td class="text-left">Fastigheter AB</td>
										<td class="text-left"><a href="/contract/ending/red" class="gap-2"><i class='bx bx-file-blank'></i> Office | Stockholm</a></td>
										<!-- <td class="text-left">June 10, 2020</td> -->
										<td class="text-left ps-2">
											<div class="d-flex flex-column contracts-expiring__due">
                                                <span><span class="font-color-7 mb-1">10 Days</span></span>
                                                <span>Dec 12, 2023</span>
                                            </div>
										</td>
										<td class="text-left">
											<div class="d-flex justify-content-start align-items-center gap-2 ps-0">
                                                    Dec 12, 2024
                                            </div>
                                        </td>
										<td class="text-left ps-2"><div class="d-flex justify-content-start align-items-center gap-1 font-color-7"><span class="costs">17 500 SEK</span></div></td>
										</td>
									</tr>
									
									<tr>
										<td class="table-font-color-1 text-left border-right-gray">
											<div class="d-flex align-items-center justify-content-center">
												<div>
													<input class="form-check-input me-0" type="checkbox" value="" name="selected[]" aria-label="...">
												</div>
											</div>
										</td>
										<td class="text-left ps-2 border-right-gray"><span class="border-type-12 border px-2 py-40 rounded font-type-12">Insurances</span></td>
										<td class="text-left ps-2">Car Insurance</td>
                                        <td class="text-left">Trygg Hansa</td>
										<td class="text-left"><a href="/contract/ending/red" class="gap-2"><i class='bx bx-file-blank'></i> Volvo  | Ronny Karlsson</a></td>
										<!-- <td class="text-left">June 10, 2020</td> -->
										<td class="text-left">
											<div class="d-flex flex-column contracts-expiring__due">
                                                <span><span class="font-color-7 mb-1">21 Days</span></span>
                                                <span>May 10, 2024</span>
                                            </div>
										</td>
										<td class="text-left">
											<div class="d-flex justify-content-start align-items-center gap-2 ps-0">
                                                    May 10, 2024
                                            </div>
                                        </td>
										<td class="text-left ps-2"><div class="d-flex justify-content-start align-items-center gap-1 font-color-7"><span class="costs">650 SEK</span></div></td>
										</td>
									</tr>
									<tr>
										<td class="table-font-color-1 text-left border-right-gray">
											<div class="d-flex align-items-center justify-content-center">
												<div>
													<input class="form-check-input me-0" type="checkbox" value="" name="selected[]" aria-label="...">
												</div>
											</div>
										</td>
										<td class="text-left ps-2 border-right-gray"><span class="border-type-4 border px-2 py-40 rounded font-type-4">Service Agreements</span></td>
										<td class="text-left ps-2">Accounting</td>
                                        <td class="text-left">Ekonomi AB</td>
										<td class="text-left"><a href="/contract/ending/red" class="gap-2"><i class='bx bx-file-blank'></i> Redovisning 24 <i class='bx bxs-bell font-color-11 fs-08'></i></a></td>
										<!-- <td class="text-left">June 10, 2020</td> -->
										<td class="text-left">
											<div class="d-flex flex-column contracts-expiring__due">
                                                <span><span class="font-color-7 mb-1">25 Days</span></span>
                                                <span>May 10, 2024</span>
                                            </div>
										</td>
										<td class="text-left">
											<div class="d-flex justify-content-start align-items-center gap-2 ps-0">
                                                    May 10, 2024
                                            </div>
                                        </td>
										<td class="text-left ps-2"><div class="d-flex justify-content-start align-items-center gap-1 font-color-7"><span class="costs">7 000 USD</span></div></td>
										</td>
									</tr>
									<tr>
										<td class="table-font-color-1 text-left border-right-gray">
											<div class="d-flex align-items-center justify-content-center">
												<div>
													<input class="form-check-input me-0" type="checkbox" value="" name="selected[]" aria-label="...">
												</div>
											</div>
										</td>
										<td class="text-left ps-2 border-right-gray"><span class="border-type-1 border px-2 py-40 rounded font-type-1">Employment Contracts</span></td>
										<td class="text-left ps-2">Permanent Employment</td>
                                        <td class="text-left"></td>
										<td class="text-left"><a href="/contract/ending/orange" class="gap-2"><i class='bx bx-file-blank'></i> Erik Andersson <i class='bx bxs-bell font-color-11 fs-08'></i></a></td>
										<td class="text-left">
											<div class="d-flex flex-column contracts-expiring__due">
                                                <span><span class="font-color-6 mb-1">30 Days</span></span>
                                                <span>May 10, 2024</span>
                                            </div>
										</td>
										<td class="text-left">
                                        </td>
										<td class="text-left"><div class="d-flex justify-content-center align-items-center gap-1 py-1"></div></td>
									</tr>
									<tr >
										<td class="table-font-color-1 text-left border-right-gray">
											<div class="d-flex align-items-center justify-content-center">
												<div>
													<input class="form-check-input me-0" type="checkbox" value="" name="selected[]" aria-label="...">
												</div>
											</div>
										</td>
										<td class="text-left ps-2 border-right-gray"><span class="border-type-2 border px-2 py-40 rounded font-type-2">HR</span></td>
                                        <td class="text-left ps-2">Mobile Phones</td>
                                        <td class="text-left">Telenor</td>
                                        <td class="text-left"><a href="/contract/ending/green" class="gap-2"><i class='bx bx-file-blank'></i> Samsung | Johan Nilsson</a></td>
                                        <td class="text-left">
                                        	<div class="d-flex flex-column contracts-expiring__due">
                                                <span><span class="font-color-3 mb-1">60 Days</span></span>
                                                <span>May 10, 2024</span>
                                            </div>
                                        </td>
                                        <td class="text-left">
                                            <div class="d-flex justify-content-start align-items-center gap-2 ps-0">
                                                    May 10, 2024
                                            </div>
                                        </td>
                                        <td class="text-left ps-2"><div class="d-flex justify-content-start align-items-center gap-1 font-color-7"><span class="costs">299 SEK</span></div></td>
                                        </td>
                                    </tr>
									<tr>
										<td class="table-font-color-1 text-left border-right-gray">
											<div class="d-flex align-items-center justify-content-center">
												<div>
													<input class="form-check-input me-0" type="checkbox" value="" name="selected[]" aria-label="...">
												</div>
											</div>
										</td>
										<td class="text-left ps-2 border-right-gray"><span class="border-type-3 border px-2 py-40 rounded font-type-3">Subscriptions</span></td>
										<td class="text-left ps-2">Music Streaming</td>
                                        <td class="text-left">Spotify</td>
										<td class="text-left"><a href="/contract/ending/gray" class="gap-2"><i class='bx bx-file-blank'></i> Spotify Premium</a></td>
										<td class="text-left">
											<div class="d-flex flex-column contracts-expiring__due">
                                                <span><span class="font-color-16 mb-1">Expired</span></span>
                                                <span>Oct 10, 2024</span>
                                            </div>
										</td>
										<td class="text-left">
											<div class="d-flex justify-content-start align-items-center gap-2 ps-0">
                                                    Oct 10, 2024
                                            </div>
                                        </td>
										<td class="text-left ps-2"><div class="d-flex justify-content-start align-items-center gap-1 font-color-7"><span class="costs">199 EUR</span></div></td>
										</td>
									</tr>
									<tr>
										<td class="table-font-color-1 text-left border-right-gray">
											<div class="d-flex align-items-center justify-content-center">
												<div>
													<input class="form-check-input me-0" type="checkbox" value="" name="selected[]" aria-label="...">
												</div>
											</div>
										</td>
										<td class="text-left ps-2 border-right-gray"><span class="border-type-15 border px-2 py-40 rounded font-type-15">Cooperation Agreements</span></td>
										<td class="text-left ps-2">Consultant Agreement</td>
                                        <td class="text-left">Techbolaget AB</td>
										<td class="text-left"><a href="/contract/ending/gray" class="gap-2"><i class='bx bx-file-blank'></i> Developer | Nils Lundgren</a></td>
										<!-- <td class="text-left">June 10, 2020</td> -->
                                        <td class="text-left">
                                        	<div class="d-flex flex-column contracts-expiring__due">
                                                <span><span class="font-color-16 mb-1">Expired</span></span>
                                                <span>Sep 11, 2024</span>
                                            </div>
										</td>
										<td class="text-left">
											<div class="d-flex justify-content-start align-items-center gap-2 ps-0">
                                                    Sep 11, 2024
                                            </div>
                                        </td>
										<td class="text-left ps-2"><div class="d-flex justify-content-start align-items-center gap-1 font-color-7"><span class="costs">42 000 SEK</span></div></td>
										</td>
										
									</tr>
								</tbody>
							</table>
						</div>
						<div class="row mt-4">
							<div class="col-sm-12 col-md-5">
							</div>
							<div class="col-sm-12 col-md-7">
								<div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
									<ul class="pagination justify-content-end">
										<li class="paginate_button page-item previous disabled" id="example2_previous">
											<a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Prev</a>
										</li>
										<li class="paginate_button page-item active">
											<a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a>
										</li>
										<li class="paginate_button page-item ">
											<a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a>
										</li>
										<li class="paginate_button page-item next" id="example2_next">
											<a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
										</li>
									</ul>
								</div>
							</div>
						</div>

						</div>

					</div>
				</div>
				<div class="modal fade" id="RemindersPopup" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="modal-body">
                            <div class="card p-4 w-100">
					           <div class="register-steps__summary">
                        <div class="mb-3 d-flex justify-content-between gap-1 register-steps__summary--actions">
                            <h5 class="bs-stepper-content__title font-17 font-weight-600 mb-4 w-100">
                            	<!-- <span class="bs-stepper-content__title--status ps-3"><i class='bx bx-check'></i> Active</span> -->
                            	<div class="p-relative modal-status-wrapper">
	                            	<span id="status-display" class="bs-stepper-content__title--status status-active"><i class="bx bx-check"></i> Active</span>
								    <select id="status-select" class="status-select ps-3">
								        <option value="active">Active</option>
								        <option value="archive">Archive</option>
								    </select>
								    <i class='bx bx-chevron-down'></i>
								</div>

                            	Kontroll
                                <span class="bs-stepper-content__title--note closed  alert ps-4 ">Notice Period Expires in <b>5 Days</b></span></h5>
                        </div>

                        <form name="frmSummary" id="frmSummary">
                            <div class="row g-4 steps-summary__row">
                                <div class="col-6 col-lg-6 mt-3 steps-summary__left">
                                    <fieldset class="steps-summary__group mb-4">
                                        <legend class="">Generally</legend>
                                        <div class="row p-4 pt-0">
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">Category</span>
                                                <span class="folder-label changeble-text font-type-6 border-type-6 border px-2 py-40 rounded font-type-6 width-fit d-flex fs-07 mt-1">EMPLOYMENT CONTRACTS</span>
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Office" style="display:none;"> -->
                                                <select class="form-select mt-1" name="summary-field-changeble" style="display:none;">
                                                    <option disabled selected hidden value="">Office</option>
                                                    <option value="1">Employment Contracts</option>
                                                    <option value="2">Staff</option>
                                                    <option value="3">Subscription</option>
                                                    <option value="4">Service Agreements</option>
                                                    <option value="5">Company Cars</option>
                                                    <option value="5">Office</option>
                                                    <option value="5">Suppliers</option>
                                                    <option value="5">IT</option>
                                                    <option value="5">Credits</option>
                                                    <option value="5">Leasing</option>
                                                    <option value="5">Customer Contracts</option>
                                                    <option value="5">Insurances</option>
                                                    <option value="5">NDA</option>
                                                    <option value="5">Licenses</option>
                                                    <option value="5">Cooperation Agreements</option>
                                                </select>
                                                <span class="changeble-label title mt-3">Type</span>
                                                <span class="mb-2 changeble-text">Permanent Employment</span>
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Rental Agreement" style="display:none;"> -->
                                                <select class="form-select mt-1" name="summary-field-changeble" style="display:none;">
                                                    <option disabled selected hidden value="">Rental Agreement</option>
                                                    <option value="1">Rental Agreement</option>
                                                    <option value="2">HR</option>
                                                    <option value="3">IT</option>
                                                    <option value="4">Leasing</option>
                                                </select>

                                                <span class="title mt-3">Department</span>
                                                <span class="changeble-text">Finance</span>
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Finance" style="display:none;"> -->
                                                <select class="form-select mt-1" name="summary-field-changeble" style="display:none;">
                                                    <option disabled selected hidden value="">Finance</option>
                                                    <option value="1">Development</option>
                                                    <option value="2">Executive</option>
                                                    <option value="3">Finance</option>
                                                    <option value="4">HR</option>
                                                    <option value="5">IT</option>
                                                    <option value="6">Marketing</option>
                                                    <option value="7">Procurement</option>
                                                    <option value="8">Production</option>
                                                    <option value="9">Sales</option>
                                                </select>
                                                <span class="title mt-3">Cost</span>
                                                <span class="font-color-7 changeble-text">30 000 SEK</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="30 000 SEK" style="display:none;">
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title"></span>
                                                <span class="h-100">&nbsp;</span>
                                                <span class="title mt-3">Contract</span>
                                                <span class="mb-2 changeble-text">Kontroll</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Office | Stockholm" style="display:none;">
                                                <span class="title mt-3">Region</span>
                                                <span class="changeble-text">Stockholm</span>
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Stockholm" style="display:none;"> -->
                                                <select class="form-select mt-1" name="summary-field-changeble" style="display:none;">
                                                    <option disabled selected hidden value="">Stockholm</option>
                                                    <option value="1">Blekinge</option>
                                                    <option value="2">Dalarna</option>
                                                    <option value="3">Gotland</option>
                                                    <option value="4">Gävleborg</option>
                                                    <option value="5">Halland</option>
                                                    <option value="6">Jämtland</option>
                                                    <option value="7">Jönköping</option>
                                                    <option value="8">Kalmar</option>
                                                    <option value="9">Kronoberg</option>
                                                    <option value="10">Norrbotten</option>
                                                    <option value="11">Skåne</option>
                                                    <option value="12">Stockholm</option>
                                                    <option value="13">Sörmland</option>
                                                    <option value="14">Uppsala</option>
                                                    <option value="15">Värmland</option>
                                                    <option value="16">Västerbotten</option>
                                                    <option value="17">Västernorrland</option>
                                                    <option value="18">Västmanland</option>
                                                    <option value="19">Örebro län</option>
                                                    <option value="20">Östergötland</option>
                                                    <option value="21">Götaland</option>
                                                </select>
                                                <span class="title mt-3">Payment Period</span>
                                                <span class="changeble-text">Month</span>
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Monthly" style="display:none;"> -->
                                                <select class="form-select mt-1" name="summary-field-changeble" style="display:none;" >
                                                    <option disabled selected hidden value="">Month</option>
                                                    <option value="1">Month</option>
                                                    <option value="2">Quarter</option>
                                                    <option value="3">Year</option>
                                                    <option value="4">One Time</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="d-flex px-2 mx-3 my-4 mt-2 py-3 gap-2 pe-3 highlighted-area">
                                            <span class="highlighted-area__icon"><i class='bx bx-user'></i> </span>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title mt-2">Contract Manager</span>
                                                <span class="changeble-text">David Carlsson</span>
                                                <select class="form-select mt-1" name="summary-field-changeble" style="display:none;">
                                                    <option disabled selected hidden value="">David Carlsson</option>
                                                    <option value="1">David Carlsson</option>
                                                    <option value="2">David Carlsson</option>
                                                    <option value="3">David Carlsson</option>
                                                </select>
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="David Carlsson" style="display:none;"> -->
                                                <span class="title mt-3">Telephone</span>
                                                <span class="gap-1 changeble-text line-height-15">046 789 99 95</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="046 789 99 95" style="display:none;">
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex ps-1 justify-content-end">
                                                <span class="title changeble-label mt-2 emptys">Position</span>
                                                <span class="changeble-text emptys">-</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="" style="display:none;">
                                                <span class="title mt-3">Email</span>
                                                <span class="gap-1 changeble-text"><a href="mailto:david@foretag.se">david@foretag.se</a></span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="david@foretag.se" style="display:none;">
                                            </div>
                                        </div>
                                        <a data-bs-toggle="popover" data-bs-content="Show All Fields" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--show"><i class='bx bx-filter'></i></a>
                                        <a data-bs-toggle="popover" data-bs-content="Edit" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--edit"><i class='bx bx-edit-alt'></i></a>
                                        <div class="save-cancel-changes-group" style="display:none;">
                                            <a class="save-cancel-changes-group__cancel btn btn-secondary py-1">{{ __('general.cancel_button') }}</a>
                                            <a class="save-cancel-changes-group__save btn btn-primary py-1">{{ __('general.save_button') }}</a>
                                        </div>
                                    </fieldset>
                                    <fieldset class="steps-summary__group mb-4 mt-1">
                                        <legend class="">Counterparty</legend>
                                        <div class="row p-4 pt-0">
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title changeble-label">Company</span>
                                                <span class="mb-2 changeble-text">Kontroll AB</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Kontroll AB" style="display:none;">
                                                <span class="title mt-3 changeble-label emptys">Address</span>
                                                <span class="changeble-text emptys">-</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="" style="display:none;">
                                                <span class="title mt-3 changeble-label emptys">City</span>
                                                <span class="changeble-text emptys">-</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="" style="display:none;">
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title changeble-label emptys">Organisation Number</span>
                                                <span class="mb-2 changeble-text emptys">-</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="" style="display:none;">
                                                <span class="title mt-3 changeble-label emptys">Postal Code</span>
                                                <span class="changeble-text emptys">-</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="" style="display:none;">
                                                <span class="title mt-3 changeble-label emptys">Country</span>
                                                <span class="changeble-text emptys">-</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="" style="display:none;">
                                            </div>

                                        </div>
                                        <div class="d-flex px-2 mx-3 my-4 mt-2 py-3 gap-2 pe-3 highlighted-area">
                                            <span class="highlighted-area__icon"><i class='bx bx-user'></i> </span>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title title mt-2">Contact Name</span>
                                                <span class="changeble-text">Robin B</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Robin B" style="display:none;">
                                                <span class="title mt-3">Mobile</span>
                                                <span class="gap-1 changeble-text line-height-15">09900993</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="09900993" style="display:none;">
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex ps-1">
                                                <!-- <span class="title title mt-2">Position</span>
                                                <span class="changeble-text">-</span> -->
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="" style="display:none;"> -->
                                                <span class="title mt-2">Email</span>
                                                <span class="gap-1 changeble-text"><a href="mailto:info@lomo.se">info@kontroll.se</a></span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="info@kontroll.se" style="display:none;">
                                                <span class="title mt-3">Work</span>
                                                <span class="gap-1 changeble-text line-height-15">09900993</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="09900993" style="display:none;">
                                            </div>
                                        </div>
                                        <a data-bs-toggle="popover" data-bs-content="Show All Fields" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--show"><i class='bx bx-filter'></i></a>
                                        <a data-bs-toggle="popover" data-bs-content="Edit" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--edit"><i class='bx bx-edit-alt'></i></a>
                                        <div class="save-cancel-changes-group" style="display:none;">
                                            <a class="save-cancel-changes-group__cancel btn btn-secondary py-1">{{ __('general.cancel_button') }}</a>
                                            <a class="save-cancel-changes-group__save btn btn-primary py-1">{{ __('general.save_button') }}</a>
                                        </div>
                                    </fieldset>
                                    <fieldset class="steps-summary__group contract-duration mb-4 mt-1">
                                        <legend class="">Contract Duration</legend>
                                        <div class="row p-4 pt-0">
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">Start Date</span>
                                                <span class="changeble-text">Nov 29, 2023</span>
                                                <div name="summary-field-changeble" class="datepicker-wrap" style="display:none;">
                                                    <input name="summary-field-changeble" id="DurationStartDate" placeholder="Valid From" value="2020-11-29" class="form-control text-left datepicker" type="text" required />
                                                    <i class='bx bx-calendar summary-field-changeble'></i>
                                                </div>
                                                <!-- <input placeholder="Valid From" name="summary-field-changeble" class="form-control text-left datepicker" type="text" value="2020-11-29" style="display:none;"/> -->
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="2020-11-29" style="display:none;"> -->
                                                
                                                <span class="title mt-3">Date This Contract Was Terminated</span>
                                                <span class="">-</span>
                                                <div name="" class="" style="display:none;">
                                                    <input name="summary-field-changeble" id="DurationStartDate" placeholder="Valid To" value="2023-11-29" class="form-control text-left" type="text" required />
                                                </div>
                                                <!-- <div class="title mt-3">Terminate Contract</div>
                                                <div class="d-flex mt-2">
                                                    <a class="btn btn-secondary py-1 NotificationAlert__btns--terminate">Terminate</a>
                                                </div> -->
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">End Date</span>
                                                <span class="changeble-text">Nov 29, 2023</span>
                                                <div name="summary-field-changeble" class="datepicker-wrap" style="display:none;">
                                                    <input name="summary-field-changeble" id="DurationStartDate" placeholder="Valid To" value="2023-11-29" class="form-control text-left datepicker" type="text" required />
                                                    <i class='bx bx-calendar summary-field-changeble'></i>
                                                </div>
                                                <!-- <input placeholder="Valid To" name="summary-field-changeble" class="form-control text-left datepicker" type="text" value="2023-11-29" style="display:none;"/> -->
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="2023-11-29" style="display:none;"> -->
                                                <!-- <span class="title mt-3">Ongoing Contract</span>
                                                <span class="changeble-text border-type-6 border bg-type-6 px-2 py-0 rounded color-white width-fit d-flex fs-08 mt-1">Yes</span>
                                                <select class="form-select" name="summary-field-changeble" style="display:none;">
                                                    <option disabled selected hidden value="">Ongoing Contract</option>
                                                    <option value="1">Yes</option>
                                                    <option value="2">No</option>
                                                </select> -->
                                                <span class="title mt-3">Notice Period</span>
                                                <span class="changeble-text">2 Months</span>
                                                <select class="form-select form-control text-left" name="summary-field-changeble" style="display:none;">
                                                    <option value="" disabled selected hidden>2 Months</option>
                                                    <option value="0">No Notice Period</option>
                                                    <option value="1">1 Month</option>
                                                    <option value="2">2 Months</option>
                                                    <option value="3">3 Months</option>
                                                    <option value="4">4 Months</option>
                                                    <option value="5">5 Months</option>
                                                    <option value="6">6 Months</option>
                                                    <option value="7">7 Months</option>
                                                    <option value="8">8 Months</option>
                                                    <option value="9">9 Months</option>
                                                    <option value="10">10 Months</option>
                                                    <option value="11">11 Months</option>
                                                    <option value="12">12 Months</option>
                                                </select>

                                               <!--  <div class="title mt-3">Renew Contract</div>
                                                <div class="d-flex mt-2">
                                                    <a class="btn btn-secondary py-1 NotificationAlert__btns--review">Renew</a>
                                                </div> -->
                                            </div>
                                            <!-- <div class="col-12 col-lg-12 flex-column d-flex">
                                                <div class="title mt-3">Take Action</div>
                                                <div class="contract-duration__buttons" >
                                                    <a class="btn btn-secondary py-1 NotificationAlert__btns--terminate">{{ __('general.terminate_button') }}</a>
                                                    <a class="btn btn-secondary py-1 NotificationAlert__btns--review">{{ __('general.renew_button') }}</a>
                                                </div>
                                            </div> -->
                                        </div>

                                        <div class="d-flex px-2 mx-3 my-4 mt-2 py-3 gap-2 pe-3 highlighted-area">
                                            <span class="highlighted-area__icon"><i class='bx bx-error' ></i> </span>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <div class="title mt-3">Terminate Contract</div>
                                                <div class="d-flex mt-2">
                                                    <a class="btn btn-secondary py-1 NotificationAlert__btns--terminate">Terminate</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex ps-1">
                                                <div class="title mt-3">Renew Contract</div>
                                                <div class="d-flex mt-2">
                                                    <a class="btn btn-secondary py-1 NotificationAlert__btns--review">Renew</a>
                                                </div>
                                            </div>
                                        </div>

                                        <a data-bs-toggle="popover" data-bs-content="Show All Fields" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--show"><i class='bx bx-filter'></i></a>
                                        <a data-bs-toggle="popover" data-bs-content="Edit" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--edit"><i class='bx bx-edit-alt'></i></a>
                                        <div class="save-cancel-changes-group" style="display:none;">
                                            <a class="save-cancel-changes-group__cancel btn btn-secondary py-1">{{ __('general.cancel_button') }}</a>
                                            <a class="save-cancel-changes-group__save btn btn-primary py-1">{{ __('general.save_button') }}</a>
                                        </div>
                                    </fieldset>
                                    <fieldset class="steps-summary__group mb-4 mt-1">
                                        <legend class="">Contract Reminder</legend>
                                        <div class="row p-4 pt-0">
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">Type of Reminder</span>
                                                <span class="changeble-text">Terminate</span>
                                                <select class="form-select form-control text-left" name="summary-field-changeble" style="display:none;">
                                                    <option value="1" selected>Terminate</option>
                                                    <option value="2">Renegotiate</option>
                                                    <option value="3">Renew</option>
                                                </select>
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Renegotiate" style="display:none;"> -->
                                                <!-- <span class="title mt-4">Mail Recipient Group</span>
                                                <span class="font-13 mt-1"><span class="focused-email">david@guetta.com</span><span class="focused-email">info@davidguetta.com</span></span> -->
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">Reminder Date</span>
                                                <span class="changeble-text d-flex align-items-center gap-1"><i class='bx bxs-bell font-color-11 fs-07'></i> Sep 29, 2023</span>
                                                <input class="form-control" type="text" name="summary-field-changeble" value="2023-09-29" style="display:none;">
                                             <!--    <span class="title mt-4">How to cancell contract</span>
                                                <span class="font-13">By telephone : 046 789 99 95</span> -->
                                            </div>
                                            <div class="col-12 col-lg-12 flex-column d-flex">
                                                <span class="title mt-3 mb-1">Email Recipients</span>
                                                <span class="font-13 mt-1 emails-changeble changeble-text">
                                                    <span class="focused-email">anna@lomo.se</span>
                                                    <span class="focused-email">jakob@lomo.se</span>
                                                </span>
                                                <select class="form-control js-change-emails-summary summary-field-changeble" id="reminderEmails" name="reminderEmails[]" multiple="multiple" style="display:none;">
                                                   <option selected="selected">anna@lomo.se</option>
                                                   <option selected="selected">jakob@lomo.se</option>
                                                </select>
                                            </div>
                                        </div>
                                        <a data-bs-toggle="popover" data-bs-content="Show All Fields" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--show"><i class='bx bx-filter'></i></a>
                                        <a data-bs-toggle="popover" data-bs-content="Edit" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--edit"><i class='bx bx-edit-alt'></i></a>
                                        <div class="save-cancel-changes-group" style="display:none;">
                                            <a class="save-cancel-changes-group__cancel btn btn-secondary py-1">{{ __('general.cancel_button') }}</a>
                                            <a class="save-cancel-changes-group__save btn btn-primary py-1">{{ __('general.save_button') }}</a>
                                        </div>
                                    </fieldset>
                                    <fieldset class="steps-summary__group notes mt-1">
                                        <legend class="d-flex justify-content-center align-items-center gap-2">Notes<span class="ms-1 circle-number">2</span></legend>
                                        <div class="row p-4 pt-0">
                                            <div class="notes__wrapper">
                                                <div class="col-12 col-lg-12 flex-column d-flex pt-3">
                                                    <ul>
                                                        <li class="notes__line">
                                                            <div class="notes__date">29 April 16:35  -  Martina Falk</div>
                                                            <span>We are satisfied with this contract but we will renegotiate the price next year </span>
                                                        </li>
                                                        <li class="notes__line">
                                                            <div class="notes__date">05 Juni 10.00  -  David Karlsson</div>
                                                            <span>If we don't agree on a better price next year, then we have to end the contract and find a new renting place. </span>
                                                            <div class="dropdown">
                                                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class='bx bx-dots-horizontal-rounded'></i></button>
                                                                <ul class="dropdown-menu" style="">
                                                                    <li><a class="dropdown-item" href="#">Edit</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item" href="#">Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="notes__wrapper--new" style="display:none;">
                                                <div class="col-12 col-lg-12 flex-column pt-3 d-flex gap-2 align-items-end">
                                                    <textarea name="comment_area" id="CommentArea" type="textarea" class="form-control mb-1 textarea" rows="6" placeholder="Type Here.."></textarea>
                                                    <div class="d-flex gap-2">
                                                        <a class="save-cancel-notes-group__cancel btn btn-secondary py-1">{{ __('general.cancel_button') }}</a>
                                                        <a class="save-cancel-notes-group__save btn btn-primary py-1">{{ __('general.save_button') }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="steps-summary__group--add"><span class="btn btn-secondary py-1 fs-07 mt-2">Add Comment</span></a>
                                    </fieldset>
                                   
                                </div>
                                <div class="col-6 col-lg-6 mt-3 steps-summary__right">
                                    <fieldset class="steps-summary__group mb-4">
                                        <legend class="d-flex justify-content-center align-items-center gap-2"><i class="bx bx-paperclip fs-1rem rotate-270"></i> Attached Files <span class="ms-1 circle-number">2</span></legend>
                                        <div class="row p-4 pt-0">
                                            <div class="summary-documents">
                                                <div class="summary-documents__line summary-document-heading border-bottom">
                                                    <div class="summary-document-heading__column">Type</div>
                                                    <div class="summary-document-heading__column">Name</div>
                                                    <div class="summary-document-heading__column">Uploaded</div>
                                                    <div class="summary-document-heading__column"></div>
                                                </div>
                                                <div class="summary-documents__line summary-document border-bottom">
                                                    <span class="changeble-text summary-document__column summary-document__type">Contract</span>
                                                    <select class="form-select summary-documents__line--types" name="summary-field-changeble" style="display:none;">
                                                        <option disabled selected>{{ __('general.select') }}</option>
                                                        @foreach($file_types as $key => $type)
                                                            @if($key != 7)
                                                            <option {{ $type === 'Contract' ? 'selected' : '' }} value="{{ $key }}">{{ $type }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                    <div class="summary-document__column summary-document__name">
                                                        <a class="pdf-link changeble-text" data-src="/assets/images/demo/HyresavtalFörLokal.pdf#navpanes=0&zoom=70&view=fit" href="#"><i class='bx bx-file'></i> Lease Agreement</a>
                                                        <input class="form-control mt-1 summary-documents__line--name" type="text" name="summary-field-changeble" value="Lease Agreement" style="display:none;">
                                                    </div>
                                                    <div class="summary-document__column summary-document__date">
                                                        2023-11-29
                                                    </div>
                                                    <div class="summary-document__column summary-document__action">
                                                        <a class="pe-2 attach-send-email" href="#"><i class='bx bx-envelope '></i></a>
                                                         <input type="file" id="file-input" class="hidden-input">
                                                        <a href="#"><i class='bx bx-x color-type-11 border border-color-7'></i></a>
                                                    </div>
                                                </div>
                                                <div class="summary-documents__line summary-document">
                                                    <span class="changeble-text summary-document__column summary-document__type">Appendix</span>
                                                    <select class="form-select summary-documents__line--types" name="summary-field-changeble" style="display:none;">
                                                        <option disabled selected>{{ __('general.select') }}</option>
                                                        @foreach($file_types as $key => $type)
                                                            @if($key != 7)
                                                            <option {{ $type === 'Appendix' ? 'selected' : '' }} value="{{ $key }}">{{ $type }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                    <div class="summary-document__column summary-document__name">
                                                        <a class="pdf-link changeble-text" data-src="/assets/images/demo/Abonnemangsvillkor.pdf#navpanes=0&zoom=70&view=fit" href="#"><i class='bx bx-file'></i> Abonnemangsvillkor</a>
                                                        <input class="form-control mt-1 summary-documents__line--name" type="text" name="summary-field-changeble" value="Abonnemangsvillkor" style="display:none;">
                                                    </div>
                                                    <div class="summary-document__column summary-document__date">
                                                        2023-11-29
                                                    </div>
                                                    <div class="summary-document__column summary-document__action">
                                                        <!-- <a class="pe-2 attach-send-email" href="#"><i class='bx bx-envelope '></i></a> -->
                                                         <!-- <input type="file" id="file-input" class="hidden-input"> -->
                                                        <a class="pe-2 attach-send-email" href="#" data-email="recipient@example.com"><i class='bx bx-envelope'></i></a>
                                                        <a href="#"><i class='bx bx-x color-type-11 border border-color-7'></i></a>
                                                    </div>
                                                </div>
                                                <div class="summary-documents__line--upload d-flex justify-content-end mt-4">
                                                    <a class="btn btn-secondary py-1 pe-3 d-flex align-items-center gap-0" data-bs-toggle="modal" data-bs-target="#UploadNewFile"><i class='bx bx-plus' ></i> Add File</a>
                                                </div>
                                            </div>
                                        </div>
                                        <a data-bs-toggle="popover" data-bs-content="Edit" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--edit"><i class='bx bx-edit-alt'></i></a>
                                        <div class="save-cancel-changes-group" style="display:none;">
                                            <a class="save-cancel-changes-group__cancel btn btn-secondary py-1">{{ __('general.cancel_button') }}</a>
                                            <a class="save-cancel-changes-group__save btn btn-primary py-1">{{ __('general.save_button') }}</a>
                                        </div>
                                    </fieldset>
                                    <div class="steps-summary__right--img">
                                        <embed id="pdfViewer" src="/assets/images/demo/Abonnemangsvillkor.pdf#navpanes=0&zoom=70&view=fit" width="100%" height="1200px" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="RemindersPopupOrange" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="modal-body">
                            <div class="card p-4 w-100">
					           <div class="register-steps__summary">
                        <div class="mb-3 d-flex justify-content-between gap-1 register-steps__summary--actions">
                            <h5 class="bs-stepper-content__title font-17 font-weight-600 mb-4 w-100">
                            	<span class="bs-stepper-content__title--status ps-3"><i class='bx bx-check'></i> Active</span>
                            	Kontroll
                            	<span class="bs-stepper-content__title--note closed  ps-4">Notice Period Expires in <b>30 Days</b></span></h5>
                        </div>


                        <form name="frmSummary" id="frmSummary">
                            <div class="row g-4 steps-summary__row">
                                <div class="col-6 col-lg-6 mt-3 steps-summary__left">
                                    <fieldset class="steps-summary__group mb-4">
                                        <legend class="">Generally</legend>
                                        <div class="row p-4 pt-0">
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">Category</span>
                                                <span class="folder-label changeble-text font-type-6 border-type-6 border px-2 py-40 rounded font-type-6 width-fit d-flex fs-07 mt-1">EMPLOYMENT CONTRACTS</span>
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Office" style="display:none;"> -->
                                                <select class="form-select mt-1" name="summary-field-changeble" style="display:none;">
                                                    <option disabled selected hidden value="">Office</option>
                                                    <option value="1">Employment Contracts</option>
                                                    <option value="2">Staff</option>
                                                    <option value="3">Subscription</option>
                                                    <option value="4">Service Agreements</option>
                                                    <option value="5">Company Cars</option>
                                                    <option value="5">Office</option>
                                                    <option value="5">Suppliers</option>
                                                    <option value="5">IT</option>
                                                    <option value="5">Credits</option>
                                                    <option value="5">Leasing</option>
                                                    <option value="5">Customer Contracts</option>
                                                    <option value="5">Insurances</option>
                                                    <option value="5">NDA</option>
                                                    <option value="5">Licenses</option>
                                                    <option value="5">Cooperation Agreements</option>
                                                </select>
                                                <span class="changeble-label title mt-3">Type</span>
                                                <span class="mb-2 changeble-text">Permanent Employment</span>
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Rental Agreement" style="display:none;"> -->
                                                <select class="form-select mt-1" name="summary-field-changeble" style="display:none;">
                                                    <option disabled selected hidden value="">Rental Agreement</option>
                                                    <option value="1">Rental Agreement</option>
                                                    <option value="2">HR</option>
                                                    <option value="3">IT</option>
                                                    <option value="4">Leasing</option>
                                                </select>

                                                <span class="title mt-3">Department</span>
                                                <span class="changeble-text">Finance</span>
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Finance" style="display:none;"> -->
                                                <select class="form-select mt-1" name="summary-field-changeble" style="display:none;">
                                                    <option disabled selected hidden value="">Finance</option>
                                                    <option value="1">Development</option>
                                                    <option value="2">Executive</option>
                                                    <option value="3">Finance</option>
                                                    <option value="4">HR</option>
                                                    <option value="5">IT</option>
                                                    <option value="6">Marketing</option>
                                                    <option value="7">Procurement</option>
                                                    <option value="8">Production</option>
                                                    <option value="9">Sales</option>
                                                </select>
                                                <span class="title mt-3">Cost</span>
                                                <span class="font-color-7 changeble-text">30 000 SEK</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="30 000 SEK" style="display:none;">
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title"></span>
                                                <span class="h-100">&nbsp;</span>
                                                <span class="title mt-3">Contract</span>
                                                <span class="mb-2 changeble-text">Kontroll</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Office | Stockholm" style="display:none;">
                                                <span class="title mt-3">Region</span>
                                                <span class="changeble-text">Stockholm</span>
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Stockholm" style="display:none;"> -->
                                                <select class="form-select mt-1" name="summary-field-changeble" style="display:none;">
                                                    <option disabled selected hidden value="">Stockholm</option>
                                                    <option value="1">Blekinge</option>
                                                    <option value="2">Dalarna</option>
                                                    <option value="3">Gotland</option>
                                                    <option value="4">Gävleborg</option>
                                                    <option value="5">Halland</option>
                                                    <option value="6">Jämtland</option>
                                                    <option value="7">Jönköping</option>
                                                    <option value="8">Kalmar</option>
                                                    <option value="9">Kronoberg</option>
                                                    <option value="10">Norrbotten</option>
                                                    <option value="11">Skåne</option>
                                                    <option value="12">Stockholm</option>
                                                    <option value="13">Sörmland</option>
                                                    <option value="14">Uppsala</option>
                                                    <option value="15">Värmland</option>
                                                    <option value="16">Västerbotten</option>
                                                    <option value="17">Västernorrland</option>
                                                    <option value="18">Västmanland</option>
                                                    <option value="19">Örebro län</option>
                                                    <option value="20">Östergötland</option>
                                                    <option value="21">Götaland</option>
                                                </select>
                                                <span class="title mt-3">Payment Period</span>
                                                <span class="changeble-text">Month</span>
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Monthly" style="display:none;"> -->
                                                <select class="form-select mt-1" name="summary-field-changeble" style="display:none;" >
                                                    <option disabled selected hidden value="">Month</option>
                                                    <option value="1">Month</option>
                                                    <option value="2">Quarter</option>
                                                    <option value="3">Year</option>
                                                    <option value="4">One Time</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="d-flex px-2 mx-3 my-4 mt-2 py-3 gap-2 pe-3 highlighted-area">
                                            <span class="highlighted-area__icon"><i class='bx bx-user'></i> </span>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title mt-2">Contract Manager</span>
                                                <span class="changeble-text">David Carlsson</span>
                                                <select class="form-select mt-1" name="summary-field-changeble" style="display:none;">
                                                    <option disabled selected hidden value="">David Carlsson</option>
                                                    <option value="1">David Carlsson</option>
                                                    <option value="2">David Carlsson</option>
                                                    <option value="3">David Carlsson</option>
                                                </select>
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="David Carlsson" style="display:none;"> -->
                                                <span class="title mt-3">Telephone</span>
                                                <span class="gap-1 changeble-text line-height-15">046 789 99 95</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="046 789 99 95" style="display:none;">
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex ps-1 justify-content-end">
                                                <span class="title changeble-label mt-2 emptys">Position</span>
                                                <span class="changeble-text emptys">-</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="" style="display:none;">
                                                <span class="title mt-3">Email</span>
                                                <span class="gap-1 changeble-text"><a href="mailto:david@foretag.se">david@foretag.se</a></span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="david@foretag.se" style="display:none;">
                                            </div>
                                        </div>
                                        <a data-bs-toggle="popover" data-bs-content="Show All Fields" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--show"><i class='bx bx-filter'></i></a>
                                        <a data-bs-toggle="popover" data-bs-content="Edit" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--edit"><i class='bx bx-edit-alt'></i></a>
                                        <div class="save-cancel-changes-group" style="display:none;">
                                            <a class="save-cancel-changes-group__cancel btn btn-secondary py-1">{{ __('general.cancel_button') }}</a>
                                            <a class="save-cancel-changes-group__save btn btn-primary py-1">{{ __('general.save_button') }}</a>
                                        </div>
                                    </fieldset>
                                    <fieldset class="steps-summary__group mb-4 mt-1">
                                        <legend class="">Counterparty</legend>
                                        <div class="row p-4 pt-0">
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title changeble-label">Company</span>
                                                <span class="mb-2 changeble-text">Kontroll AB</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Kontroll AB" style="display:none;">
                                                <span class="title mt-3 changeble-label emptys">Address</span>
                                                <span class="changeble-text emptys">-</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="" style="display:none;">
                                                <span class="title mt-3 changeble-label emptys">City</span>
                                                <span class="changeble-text emptys">-</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="" style="display:none;">
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title changeble-label emptys">Organisation Number</span>
                                                <span class="mb-2 changeble-text emptys">-</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="" style="display:none;">
                                                <span class="title mt-3 changeble-label emptys">Postal Code</span>
                                                <span class="changeble-text emptys">-</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="" style="display:none;">
                                                <span class="title mt-3 changeble-label emptys">Country</span>
                                                <span class="changeble-text emptys">-</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="" style="display:none;">
                                            </div>

                                        </div>
                                        <div class="d-flex px-2 mx-3 my-4 mt-2 py-3 gap-2 pe-3 highlighted-area">
                                            <span class="highlighted-area__icon"><i class='bx bx-user'></i> </span>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title title mt-2">Contact Name</span>
                                                <span class="changeble-text">Robin B</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Robin B" style="display:none;">
                                                <span class="title mt-3">Mobile</span>
                                                <span class="gap-1 changeble-text line-height-15">09900993</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="09900993" style="display:none;">
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex ps-1">
                                                <!-- <span class="title title mt-2">Position</span>
                                                <span class="changeble-text">-</span> -->
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="" style="display:none;"> -->
                                                <span class="title mt-2">Email</span>
                                                <span class="gap-1 changeble-text"><a href="mailto:info@lomo.se">info@kontroll.se</a></span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="info@kontroll.se" style="display:none;">
                                                <span class="title mt-3">Work</span>
                                                <span class="gap-1 changeble-text line-height-15">09900993</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="09900993" style="display:none;">
                                            </div>
                                        </div>
                                        <a data-bs-toggle="popover" data-bs-content="Show All Fields" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--show"><i class='bx bx-filter'></i></a>
                                        <a data-bs-toggle="popover" data-bs-content="Edit" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--edit"><i class='bx bx-edit-alt'></i></a>
                                        <div class="save-cancel-changes-group" style="display:none;">
                                            <a class="save-cancel-changes-group__cancel btn btn-secondary py-1">{{ __('general.cancel_button') }}</a>
                                            <a class="save-cancel-changes-group__save btn btn-primary py-1">{{ __('general.save_button') }}</a>
                                        </div>
                                    </fieldset>
                                    <fieldset class="steps-summary__group contract-duration mb-4 mt-1">
                                        <legend class="">Contract Duration</legend>
                                        <div class="row p-4 pt-0">
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">Start Date</span>
                                                <span class="changeble-text">Nov 29, 2023</span>
                                                <div name="summary-field-changeble" class="datepicker-wrap" style="display:none;">
                                                    <input name="summary-field-changeble" id="DurationStartDate" placeholder="Valid From" value="2020-11-29" class="form-control text-left datepicker" type="text" required />
                                                    <i class='bx bx-calendar summary-field-changeble'></i>
                                                </div>
                                                <!-- <input placeholder="Valid From" name="summary-field-changeble" class="form-control text-left datepicker" type="text" value="2020-11-29" style="display:none;"/> -->
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="2020-11-29" style="display:none;"> -->
                                                
                                                <span class="title mt-3">Date This Contract Was Terminated</span>
                                                <span class="">-</span>
                                                <div name="" class="" style="display:none;">
                                                    <input name="summary-field-changeble" id="DurationStartDate" placeholder="Valid To" value="2023-11-29" class="form-control text-left" type="text" required />
                                                </div>
                                                <!-- <div class="title mt-3">Terminate Contract</div>
                                                <div class="d-flex mt-2">
                                                    <a class="btn btn-secondary py-1 NotificationAlert__btns--terminate">Terminate</a>
                                                </div> -->
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">End Date</span>
                                                <span class="changeble-text">Nov 29, 2023</span>
                                                <div name="summary-field-changeble" class="datepicker-wrap" style="display:none;">
                                                    <input name="summary-field-changeble" id="DurationStartDate" placeholder="Valid To" value="2023-11-29" class="form-control text-left datepicker" type="text" required />
                                                    <i class='bx bx-calendar summary-field-changeble'></i>
                                                </div>
                                                <!-- <input placeholder="Valid To" name="summary-field-changeble" class="form-control text-left datepicker" type="text" value="2023-11-29" style="display:none;"/> -->
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="2023-11-29" style="display:none;"> -->
                                                <!-- <span class="title mt-3">Ongoing Contract</span>
                                                <span class="changeble-text border-type-6 border bg-type-6 px-2 py-0 rounded color-white width-fit d-flex fs-08 mt-1">Yes</span>
                                                <select class="form-select" name="summary-field-changeble" style="display:none;">
                                                    <option disabled selected hidden value="">Ongoing Contract</option>
                                                    <option value="1">Yes</option>
                                                    <option value="2">No</option>
                                                </select> -->
                                                <span class="title mt-3">Notice Period</span>
                                                <span class="changeble-text">2 Months</span>
                                                <select class="form-select form-control text-left" name="summary-field-changeble" style="display:none;">
                                                    <option value="" disabled selected hidden>2 Months</option>
                                                    <option value="0">No Notice Period</option>
                                                    <option value="1">1 Month</option>
                                                    <option value="2">2 Months</option>
                                                    <option value="3">3 Months</option>
                                                    <option value="4">4 Months</option>
                                                    <option value="5">5 Months</option>
                                                    <option value="6">6 Months</option>
                                                    <option value="7">7 Months</option>
                                                    <option value="8">8 Months</option>
                                                    <option value="9">9 Months</option>
                                                    <option value="10">10 Months</option>
                                                    <option value="11">11 Months</option>
                                                    <option value="12">12 Months</option>
                                                </select>

                                               <!--  <div class="title mt-3">Renew Contract</div>
                                                <div class="d-flex mt-2">
                                                    <a class="btn btn-secondary py-1 NotificationAlert__btns--review">Renew</a>
                                                </div> -->
                                            </div>
                                            <!-- <div class="col-12 col-lg-12 flex-column d-flex">
                                                <div class="title mt-3">Take Action</div>
                                                <div class="contract-duration__buttons" >
                                                    <a class="btn btn-secondary py-1 NotificationAlert__btns--terminate">{{ __('general.terminate_button') }}</a>
                                                    <a class="btn btn-secondary py-1 NotificationAlert__btns--review">{{ __('general.renew_button') }}</a>
                                                </div>
                                            </div> -->
                                        </div>

                                        <div class="d-flex px-2 mx-3 my-4 mt-2 py-3 gap-2 pe-3 highlighted-area">
                                            <span class="highlighted-area__icon"><i class='bx bx-error' ></i> </span>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <div class="title mt-3">Terminate Contract</div>
                                                <div class="d-flex mt-2">
                                                    <a class="btn btn-secondary py-1 NotificationAlert__btns--terminate">Terminate</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex ps-1">
                                                <div class="title mt-3">Renew Contract</div>
                                                <div class="d-flex mt-2">
                                                    <a class="btn btn-secondary py-1 NotificationAlert__btns--review">Renew</a>
                                                </div>
                                            </div>
                                        </div>

                                        <a data-bs-toggle="popover" data-bs-content="Show All Fields" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--show"><i class='bx bx-filter'></i></a>
                                        <a data-bs-toggle="popover" data-bs-content="Edit" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--edit"><i class='bx bx-edit-alt'></i></a>
                                        <div class="save-cancel-changes-group" style="display:none;">
                                            <a class="save-cancel-changes-group__cancel btn btn-secondary py-1">{{ __('general.cancel_button') }}</a>
                                            <a class="save-cancel-changes-group__save btn btn-primary py-1">{{ __('general.save_button') }}</a>
                                        </div>
                                    </fieldset>
                                    <fieldset class="steps-summary__group mb-4 mt-1">
                                        <legend class="">Contract Reminder</legend>
                                        <div class="row p-4 pt-0">
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">Type of Reminder</span>
                                                <span class="changeble-text">Terminate</span>
                                                <select class="form-select form-control text-left" name="summary-field-changeble" style="display:none;">
                                                    <option value="1" selected>Terminate</option>
                                                    <option value="2">Renegotiate</option>
                                                    <option value="3">Renew</option>
                                                </select>
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Renegotiate" style="display:none;"> -->
                                                <!-- <span class="title mt-4">Mail Recipient Group</span>
                                                <span class="font-13 mt-1"><span class="focused-email">david@guetta.com</span><span class="focused-email">info@davidguetta.com</span></span> -->
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">Reminder Date</span>
                                                <span class="changeble-text d-flex align-items-center gap-1"><i class='bx bxs-bell font-color-11 fs-07'></i> Sep 29, 2023</span>
                                                <input class="form-control" type="text" name="summary-field-changeble" value="2023-09-29" style="display:none;">
                                             <!--    <span class="title mt-4">How to cancell contract</span>
                                                <span class="font-13">By telephone : 046 789 99 95</span> -->
                                            </div>
                                            <div class="col-12 col-lg-12 flex-column d-flex">
                                                <span class="title mt-3 mb-1">Email Recipients</span>
                                                <span class="font-13 mt-1 emails-changeble changeble-text">
                                                    <span class="focused-email">anna@lomo.se</span>
                                                    <span class="focused-email">jakob@lomo.se</span>
                                                </span>
                                                <select class="form-control js-change-emails-summary summary-field-changeble" id="reminderEmails" name="reminderEmails[]" multiple="multiple" style="display:none;">
                                                   <option selected="selected">anna@lomo.se</option>
                                                   <option selected="selected">jakob@lomo.se</option>
                                                </select>
                                            </div>
                                        </div>
                                        <a data-bs-toggle="popover" data-bs-content="Show All Fields" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--show"><i class='bx bx-filter'></i></a>
                                        <a data-bs-toggle="popover" data-bs-content="Edit" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--edit"><i class='bx bx-edit-alt'></i></a>
                                        <div class="save-cancel-changes-group" style="display:none;">
                                            <a class="save-cancel-changes-group__cancel btn btn-secondary py-1">{{ __('general.cancel_button') }}</a>
                                            <a class="save-cancel-changes-group__save btn btn-primary py-1">{{ __('general.save_button') }}</a>
                                        </div>
                                    </fieldset>
                                    <fieldset class="steps-summary__group notes mt-1">
                                        <legend class="d-flex justify-content-center align-items-center gap-2">Notes<span class="ms-1 circle-number">2</span></legend>
                                        <div class="row p-4 pt-0">
                                            <div class="notes__wrapper">
                                                <div class="col-12 col-lg-12 flex-column d-flex pt-3">
                                                    <ul>
                                                        <li class="notes__line">
                                                            <div class="notes__date">29 April 16:35  -  Martina Falk</div>
                                                            <span>We are satisfied with this contract but we will renegotiate the price next year </span>
                                                        </li>
                                                        <li class="notes__line">
                                                            <div class="notes__date">05 Juni 10.00  -  David Karlsson</div>
                                                            <span>If we don't agree on a better price next year, then we have to end the contract and find a new renting place. </span>
                                                            <div class="dropdown">
                                                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class='bx bx-dots-horizontal-rounded'></i></button>
                                                                <ul class="dropdown-menu" style="">
                                                                    <li><a class="dropdown-item" href="#">Edit</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item" href="#">Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="notes__wrapper--new" style="display:none;">
                                                <div class="col-12 col-lg-12 flex-column pt-3 d-flex gap-2 align-items-end">
                                                    <textarea name="comment_area" id="CommentArea" type="textarea" class="form-control mb-1 textarea" rows="6" placeholder="Type Here.."></textarea>
                                                    <div class="d-flex gap-2">
                                                        <a class="save-cancel-notes-group__cancel btn btn-secondary py-1">{{ __('general.cancel_button') }}</a>
                                                        <a class="save-cancel-notes-group__save btn btn-primary py-1">{{ __('general.save_button') }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="steps-summary__group--add"><span class="btn btn-secondary py-1 fs-07 mt-2">Add Comment</span></a>
                                    </fieldset>
                                   
                                </div>
                                <div class="col-6 col-lg-6 mt-3 steps-summary__right">
                                    <fieldset class="steps-summary__group mb-4">
                                        <legend class="d-flex justify-content-center align-items-center gap-2"><i class="bx bx-paperclip fs-1rem rotate-270"></i> Attached Files <span class="ms-1 circle-number">2</span></legend>
                                        <div class="row p-4 pt-0">
                                            <div class="summary-documents">
                                                <div class="summary-documents__line summary-document-heading border-bottom">
                                                    <div class="summary-document-heading__column">Type</div>
                                                    <div class="summary-document-heading__column">Name</div>
                                                    <div class="summary-document-heading__column">Uploaded</div>
                                                    <div class="summary-document-heading__column"></div>
                                                </div>
                                                <div class="summary-documents__line summary-document border-bottom">
                                                    <span class="changeble-text summary-document__column summary-document__type">Contract</span>
                                                    <select class="form-select summary-documents__line--types" name="summary-field-changeble" style="display:none;">
                                                        <option disabled selected>{{ __('general.select') }}</option>
                                                        @foreach($file_types as $key => $type)
                                                            @if($key != 7)
                                                            <option {{ $type === 'Contract' ? 'selected' : '' }} value="{{ $key }}">{{ $type }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                    <div class="summary-document__column summary-document__name">
                                                        <a class="pdf-link changeble-text" data-src="/assets/images/demo/HyresavtalFörLokal.pdf#navpanes=0&zoom=70&view=fit" href="#"><i class='bx bx-file'></i> Lease Agreement</a>
                                                        <input class="form-control mt-1 summary-documents__line--name" type="text" name="summary-field-changeble" value="Lease Agreement" style="display:none;">
                                                    </div>
                                                    <div class="summary-document__column summary-document__date">
                                                        2023-11-29
                                                    </div>
                                                    <div class="summary-document__column summary-document__action">
                                                        <a class="pe-2 attach-send-email" href="#"><i class='bx bx-envelope '></i></a>
                                                         <input type="file" id="file-input" class="hidden-input">
                                                        <a href="#"><i class='bx bx-x color-type-11 border border-color-7'></i></a>
                                                    </div>
                                                </div>
                                                <div class="summary-documents__line summary-document">
                                                    <span class="changeble-text summary-document__column summary-document__type">Appendix</span>
                                                    <select class="form-select summary-documents__line--types" name="summary-field-changeble" style="display:none;">
                                                        <option disabled selected>{{ __('general.select') }}</option>
                                                        @foreach($file_types as $key => $type)
                                                            @if($key != 7)
                                                            <option {{ $type === 'Appendix' ? 'selected' : '' }} value="{{ $key }}">{{ $type }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                    <div class="summary-document__column summary-document__name">
                                                        <a class="pdf-link changeble-text" data-src="/assets/images/demo/Abonnemangsvillkor.pdf#navpanes=0&zoom=70&view=fit" href="#"><i class='bx bx-file'></i> Abonnemangsvillkor</a>
                                                        <input class="form-control mt-1 summary-documents__line--name" type="text" name="summary-field-changeble" value="Abonnemangsvillkor" style="display:none;">
                                                    </div>
                                                    <div class="summary-document__column summary-document__date">
                                                        2023-11-29
                                                    </div>
                                                    <div class="summary-document__column summary-document__action">
                                                        <!-- <a class="pe-2 attach-send-email" href="#"><i class='bx bx-envelope '></i></a> -->
                                                         <!-- <input type="file" id="file-input" class="hidden-input"> -->
                                                        <a class="pe-2 attach-send-email" href="#" data-email="recipient@example.com"><i class='bx bx-envelope'></i></a>
                                                        <a href="#"><i class='bx bx-x color-type-11 border border-color-7'></i></a>
                                                    </div>
                                                </div>
                                                <div class="summary-documents__line--upload d-flex justify-content-end mt-4">
                                                    <a class="btn btn-secondary py-1 pe-3 d-flex align-items-center gap-0" data-bs-toggle="modal" data-bs-target="#UploadNewFile"><i class='bx bx-plus' ></i> Add File</a>
                                                </div>
                                            </div>
                                        </div>
                                        <a data-bs-toggle="popover" data-bs-content="Edit" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--edit"><i class='bx bx-edit-alt'></i></a>
                                        <div class="save-cancel-changes-group" style="display:none;">
                                            <a class="save-cancel-changes-group__cancel btn btn-secondary py-1">{{ __('general.cancel_button') }}</a>
                                            <a class="save-cancel-changes-group__save btn btn-primary py-1">{{ __('general.save_button') }}</a>
                                        </div>
                                    </fieldset>
                                    <div class="steps-summary__right--img">
                                        <embed id="pdfViewer" src="/assets/images/demo/Abonnemangsvillkor.pdf#navpanes=0&zoom=70&view=fit" width="100%" height="1200px" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="RemindersPopupGreen" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="modal-body">
                            <div class="card p-4 w-100">
					           <div class="register-steps__summary">
                        <div class="mb-3 d-flex justify-content-between gap-1 register-steps__summary--actions">
                            <h5 class="bs-stepper-content__title font-17 font-weight-600 mb-4 w-100">
                            	<span class="bs-stepper-content__title--status ps-3"><i class='bx bx-check'></i> Active</span>
                            	Kontroll
                            	<span class="bs-stepper-content__title--note closed  success ps-4">Notice Period Expires in <b>60 Days</b></span></h5>
                        </div>

                        <form name="frmSummary" id="frmSummary">
                            <div class="row g-4 steps-summary__row">
                                <div class="col-6 col-lg-6 mt-3 steps-summary__left">
                                    <fieldset class="steps-summary__group mb-4">
                                        <legend class="">Generally</legend>
                                        <div class="row p-4 pt-0">
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">Category</span>
                                                <span class="folder-label changeble-text font-type-6 border-type-6 border px-2 py-40 rounded font-type-6 width-fit d-flex fs-07 mt-1">EMPLOYMENT CONTRACTS</span>
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Office" style="display:none;"> -->
                                                <select class="form-select mt-1" name="summary-field-changeble" style="display:none;">
                                                    <option disabled selected hidden value="">Office</option>
                                                    <option value="1">Employment Contracts</option>
                                                    <option value="2">Staff</option>
                                                    <option value="3">Subscription</option>
                                                    <option value="4">Service Agreements</option>
                                                    <option value="5">Company Cars</option>
                                                    <option value="5">Office</option>
                                                    <option value="5">Suppliers</option>
                                                    <option value="5">IT</option>
                                                    <option value="5">Credits</option>
                                                    <option value="5">Leasing</option>
                                                    <option value="5">Customer Contracts</option>
                                                    <option value="5">Insurances</option>
                                                    <option value="5">NDA</option>
                                                    <option value="5">Licenses</option>
                                                    <option value="5">Cooperation Agreements</option>
                                                </select>
                                                <span class="changeble-label title mt-3">Type</span>
                                                <span class="mb-2 changeble-text">Permanent Employment</span>
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Rental Agreement" style="display:none;"> -->
                                                <select class="form-select mt-1" name="summary-field-changeble" style="display:none;">
                                                    <option disabled selected hidden value="">Rental Agreement</option>
                                                    <option value="1">Rental Agreement</option>
                                                    <option value="2">HR</option>
                                                    <option value="3">IT</option>
                                                    <option value="4">Leasing</option>
                                                </select>

                                                <span class="title mt-3">Department</span>
                                                <span class="changeble-text">Finance</span>
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Finance" style="display:none;"> -->
                                                <select class="form-select mt-1" name="summary-field-changeble" style="display:none;">
                                                    <option disabled selected hidden value="">Finance</option>
                                                    <option value="1">Development</option>
                                                    <option value="2">Executive</option>
                                                    <option value="3">Finance</option>
                                                    <option value="4">HR</option>
                                                    <option value="5">IT</option>
                                                    <option value="6">Marketing</option>
                                                    <option value="7">Procurement</option>
                                                    <option value="8">Production</option>
                                                    <option value="9">Sales</option>
                                                </select>
                                                <span class="title mt-3">Cost</span>
                                                <span class="font-color-7 changeble-text">30 000 SEK</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="30 000 SEK" style="display:none;">
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title"></span>
                                                <span class="h-100">&nbsp;</span>
                                                <span class="title mt-3">Contract</span>
                                                <span class="mb-2 changeble-text">Kontroll</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Office | Stockholm" style="display:none;">
                                                <span class="title mt-3">Region</span>
                                                <span class="changeble-text">Stockholm</span>
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Stockholm" style="display:none;"> -->
                                                <select class="form-select mt-1" name="summary-field-changeble" style="display:none;">
                                                    <option disabled selected hidden value="">Stockholm</option>
                                                    <option value="1">Blekinge</option>
                                                    <option value="2">Dalarna</option>
                                                    <option value="3">Gotland</option>
                                                    <option value="4">Gävleborg</option>
                                                    <option value="5">Halland</option>
                                                    <option value="6">Jämtland</option>
                                                    <option value="7">Jönköping</option>
                                                    <option value="8">Kalmar</option>
                                                    <option value="9">Kronoberg</option>
                                                    <option value="10">Norrbotten</option>
                                                    <option value="11">Skåne</option>
                                                    <option value="12">Stockholm</option>
                                                    <option value="13">Sörmland</option>
                                                    <option value="14">Uppsala</option>
                                                    <option value="15">Värmland</option>
                                                    <option value="16">Västerbotten</option>
                                                    <option value="17">Västernorrland</option>
                                                    <option value="18">Västmanland</option>
                                                    <option value="19">Örebro län</option>
                                                    <option value="20">Östergötland</option>
                                                    <option value="21">Götaland</option>
                                                </select>
                                                <span class="title mt-3">Payment Period</span>
                                                <span class="changeble-text">Month</span>
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Monthly" style="display:none;"> -->
                                                <select class="form-select mt-1" name="summary-field-changeble" style="display:none;" >
                                                    <option disabled selected hidden value="">Month</option>
                                                    <option value="1">Month</option>
                                                    <option value="2">Quarter</option>
                                                    <option value="3">Year</option>
                                                    <option value="4">One Time</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="d-flex px-2 mx-3 my-4 mt-2 py-3 gap-2 pe-3 highlighted-area">
                                            <span class="highlighted-area__icon"><i class='bx bx-user'></i> </span>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title mt-2">Contract Manager</span>
                                                <span class="changeble-text">David Carlsson</span>
                                                <select class="form-select mt-1" name="summary-field-changeble" style="display:none;">
                                                    <option disabled selected hidden value="">David Carlsson</option>
                                                    <option value="1">David Carlsson</option>
                                                    <option value="2">David Carlsson</option>
                                                    <option value="3">David Carlsson</option>
                                                </select>
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="David Carlsson" style="display:none;"> -->
                                                <span class="title mt-3">Telephone</span>
                                                <span class="gap-1 changeble-text line-height-15">046 789 99 95</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="046 789 99 95" style="display:none;">
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex ps-1 justify-content-end">
                                                <span class="title changeble-label mt-2 emptys">Position</span>
                                                <span class="changeble-text emptys">-</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="" style="display:none;">
                                                <span class="title mt-3">Email</span>
                                                <span class="gap-1 changeble-text"><a href="mailto:david@foretag.se">david@foretag.se</a></span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="david@foretag.se" style="display:none;">
                                            </div>
                                        </div>
                                        <a data-bs-toggle="popover" data-bs-content="Show All Fields" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--show"><i class='bx bx-filter'></i></a>
                                        <a data-bs-toggle="popover" data-bs-content="Edit" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--edit"><i class='bx bx-edit-alt'></i></a>
                                        <div class="save-cancel-changes-group" style="display:none;">
                                            <a class="save-cancel-changes-group__cancel btn btn-secondary py-1">{{ __('general.cancel_button') }}</a>
                                            <a class="save-cancel-changes-group__save btn btn-primary py-1">{{ __('general.save_button') }}</a>
                                        </div>
                                    </fieldset>
                                    <fieldset class="steps-summary__group mb-4 mt-1">
                                        <legend class="">Counterparty</legend>
                                        <div class="row p-4 pt-0">
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title changeble-label">Company</span>
                                                <span class="mb-2 changeble-text">Kontroll AB</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Kontroll AB" style="display:none;">
                                                <span class="title mt-3 changeble-label emptys">Address</span>
                                                <span class="changeble-text emptys">-</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="" style="display:none;">
                                                <span class="title mt-3 changeble-label emptys">City</span>
                                                <span class="changeble-text emptys">-</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="" style="display:none;">
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title changeble-label emptys">Organisation Number</span>
                                                <span class="mb-2 changeble-text emptys">-</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="" style="display:none;">
                                                <span class="title mt-3 changeble-label emptys">Postal Code</span>
                                                <span class="changeble-text emptys">-</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="" style="display:none;">
                                                <span class="title mt-3 changeble-label emptys">Country</span>
                                                <span class="changeble-text emptys">-</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="" style="display:none;">
                                            </div>

                                        </div>
                                        <div class="d-flex px-2 mx-3 my-4 mt-2 py-3 gap-2 pe-3 highlighted-area">
                                            <span class="highlighted-area__icon"><i class='bx bx-user'></i> </span>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title title mt-2">Contact Name</span>
                                                <span class="changeble-text">Robin B</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Robin B" style="display:none;">
                                                <span class="title mt-3">Mobile</span>
                                                <span class="gap-1 changeble-text line-height-15">09900993</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="09900993" style="display:none;">
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex ps-1">
                                                <!-- <span class="title title mt-2">Position</span>
                                                <span class="changeble-text">-</span> -->
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="" style="display:none;"> -->
                                                <span class="title mt-2">Email</span>
                                                <span class="gap-1 changeble-text"><a href="mailto:info@lomo.se">info@kontroll.se</a></span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="info@kontroll.se" style="display:none;">
                                                <span class="title mt-3">Work</span>
                                                <span class="gap-1 changeble-text line-height-15">09900993</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="09900993" style="display:none;">
                                            </div>
                                        </div>
                                        <a data-bs-toggle="popover" data-bs-content="Show All Fields" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--show"><i class='bx bx-filter'></i></a>
                                        <a data-bs-toggle="popover" data-bs-content="Edit" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--edit"><i class='bx bx-edit-alt'></i></a>
                                        <div class="save-cancel-changes-group" style="display:none;">
                                            <a class="save-cancel-changes-group__cancel btn btn-secondary py-1">{{ __('general.cancel_button') }}</a>
                                            <a class="save-cancel-changes-group__save btn btn-primary py-1">{{ __('general.save_button') }}</a>
                                        </div>
                                    </fieldset>
                                    <fieldset class="steps-summary__group contract-duration mb-4 mt-1">
                                        <legend class="">Contract Duration</legend>
                                        <div class="row p-4 pt-0">
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">Start Date</span>
                                                <span class="changeble-text">Nov 29, 2023</span>
                                                <div name="summary-field-changeble" class="datepicker-wrap" style="display:none;">
                                                    <input name="summary-field-changeble" id="DurationStartDate" placeholder="Valid From" value="2020-11-29" class="form-control text-left datepicker" type="text" required />
                                                    <i class='bx bx-calendar summary-field-changeble'></i>
                                                </div>
                                                <!-- <input placeholder="Valid From" name="summary-field-changeble" class="form-control text-left datepicker" type="text" value="2020-11-29" style="display:none;"/> -->
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="2020-11-29" style="display:none;"> -->
                                                
                                                <span class="title mt-3">Date This Contract Was Terminated</span>
                                                <span class="">-</span>
                                                <div name="" class="" style="display:none;">
                                                    <input name="summary-field-changeble" id="DurationStartDate" placeholder="Valid To" value="2023-11-29" class="form-control text-left" type="text" required />
                                                </div>
                                                <!-- <div class="title mt-3">Terminate Contract</div>
                                                <div class="d-flex mt-2">
                                                    <a class="btn btn-secondary py-1 NotificationAlert__btns--terminate">Terminate</a>
                                                </div> -->
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">End Date</span>
                                                <span class="changeble-text">Nov 29, 2023</span>
                                                <div name="summary-field-changeble" class="datepicker-wrap" style="display:none;">
                                                    <input name="summary-field-changeble" id="DurationStartDate" placeholder="Valid To" value="2023-11-29" class="form-control text-left datepicker" type="text" required />
                                                    <i class='bx bx-calendar summary-field-changeble'></i>
                                                </div>
                                                <!-- <input placeholder="Valid To" name="summary-field-changeble" class="form-control text-left datepicker" type="text" value="2023-11-29" style="display:none;"/> -->
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="2023-11-29" style="display:none;"> -->
                                                <!-- <span class="title mt-3">Ongoing Contract</span>
                                                <span class="changeble-text border-type-6 border bg-type-6 px-2 py-0 rounded color-white width-fit d-flex fs-08 mt-1">Yes</span>
                                                <select class="form-select" name="summary-field-changeble" style="display:none;">
                                                    <option disabled selected hidden value="">Ongoing Contract</option>
                                                    <option value="1">Yes</option>
                                                    <option value="2">No</option>
                                                </select> -->
                                                <span class="title mt-3">Notice Period</span>
                                                <span class="changeble-text">2 Months</span>
                                                <select class="form-select form-control text-left" name="summary-field-changeble" style="display:none;">
                                                    <option value="" disabled selected hidden>2 Months</option>
                                                    <option value="0">No Notice Period</option>
                                                    <option value="1">1 Month</option>
                                                    <option value="2">2 Months</option>
                                                    <option value="3">3 Months</option>
                                                    <option value="4">4 Months</option>
                                                    <option value="5">5 Months</option>
                                                    <option value="6">6 Months</option>
                                                    <option value="7">7 Months</option>
                                                    <option value="8">8 Months</option>
                                                    <option value="9">9 Months</option>
                                                    <option value="10">10 Months</option>
                                                    <option value="11">11 Months</option>
                                                    <option value="12">12 Months</option>
                                                </select>

                                               <!--  <div class="title mt-3">Renew Contract</div>
                                                <div class="d-flex mt-2">
                                                    <a class="btn btn-secondary py-1 NotificationAlert__btns--review">Renew</a>
                                                </div> -->
                                            </div>
                                            <!-- <div class="col-12 col-lg-12 flex-column d-flex">
                                                <div class="title mt-3">Take Action</div>
                                                <div class="contract-duration__buttons" >
                                                    <a class="btn btn-secondary py-1 NotificationAlert__btns--terminate">{{ __('general.terminate_button') }}</a>
                                                    <a class="btn btn-secondary py-1 NotificationAlert__btns--review">{{ __('general.renew_button') }}</a>
                                                </div>
                                            </div> -->
                                        </div>

                                        <div class="d-flex px-2 mx-3 my-4 mt-2 py-3 gap-2 pe-3 highlighted-area">
                                            <span class="highlighted-area__icon"><i class='bx bx-error' ></i> </span>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <div class="title mt-3">Terminate Contract</div>
                                                <div class="d-flex mt-2">
                                                    <a class="btn btn-secondary py-1 NotificationAlert__btns--terminate">Terminate</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex ps-1">
                                                <div class="title mt-3">Renew Contract</div>
                                                <div class="d-flex mt-2">
                                                    <a class="btn btn-secondary py-1 NotificationAlert__btns--review">Renew</a>
                                                </div>
                                            </div>
                                        </div>

                                        <a data-bs-toggle="popover" data-bs-content="Show All Fields" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--show"><i class='bx bx-filter'></i></a>
                                        <a data-bs-toggle="popover" data-bs-content="Edit" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--edit"><i class='bx bx-edit-alt'></i></a>
                                        <div class="save-cancel-changes-group" style="display:none;">
                                            <a class="save-cancel-changes-group__cancel btn btn-secondary py-1">{{ __('general.cancel_button') }}</a>
                                            <a class="save-cancel-changes-group__save btn btn-primary py-1">{{ __('general.save_button') }}</a>
                                        </div>
                                    </fieldset>
                                    <fieldset class="steps-summary__group mb-4 mt-1">
                                        <legend class="">Contract Reminder</legend>
                                        <div class="row p-4 pt-0">
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">Type of Reminder</span>
                                                <span class="changeble-text">Terminate</span>
                                                <select class="form-select form-control text-left" name="summary-field-changeble" style="display:none;">
                                                    <option value="1" selected>Terminate</option>
                                                    <option value="2">Renegotiate</option>
                                                    <option value="3">Renew</option>
                                                </select>
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Renegotiate" style="display:none;"> -->
                                                <!-- <span class="title mt-4">Mail Recipient Group</span>
                                                <span class="font-13 mt-1"><span class="focused-email">david@guetta.com</span><span class="focused-email">info@davidguetta.com</span></span> -->
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">Reminder Date</span>
                                                <span class="changeble-text d-flex align-items-center gap-1"><i class='bx bxs-bell font-color-11 fs-07'></i> Sep 29, 2023</span>
                                                <input class="form-control" type="text" name="summary-field-changeble" value="2023-09-29" style="display:none;">
                                             <!--    <span class="title mt-4">How to cancell contract</span>
                                                <span class="font-13">By telephone : 046 789 99 95</span> -->
                                            </div>
                                            <div class="col-12 col-lg-12 flex-column d-flex">
                                                <span class="title mt-3 mb-1">Email Recipients</span>
                                                <span class="font-13 mt-1 emails-changeble changeble-text">
                                                    <span class="focused-email">anna@lomo.se</span>
                                                    <span class="focused-email">jakob@lomo.se</span>
                                                </span>
                                                <select class="form-control js-change-emails-summary summary-field-changeble" id="reminderEmails" name="reminderEmails[]" multiple="multiple" style="display:none;">
                                                   <option selected="selected">anna@lomo.se</option>
                                                   <option selected="selected">jakob@lomo.se</option>
                                                </select>
                                            </div>
                                        </div>
                                        <a data-bs-toggle="popover" data-bs-content="Show All Fields" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--show"><i class='bx bx-filter'></i></a>
                                        <a data-bs-toggle="popover" data-bs-content="Edit" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--edit"><i class='bx bx-edit-alt'></i></a>
                                        <div class="save-cancel-changes-group" style="display:none;">
                                            <a class="save-cancel-changes-group__cancel btn btn-secondary py-1">{{ __('general.cancel_button') }}</a>
                                            <a class="save-cancel-changes-group__save btn btn-primary py-1">{{ __('general.save_button') }}</a>
                                        </div>
                                    </fieldset>
                                    <fieldset class="steps-summary__group notes mt-1">
                                        <legend class="d-flex justify-content-center align-items-center gap-2">Notes<span class="ms-1 circle-number">2</span></legend>
                                        <div class="row p-4 pt-0">
                                            <div class="notes__wrapper">
                                                <div class="col-12 col-lg-12 flex-column d-flex pt-3">
                                                    <ul>
                                                        <li class="notes__line">
                                                            <div class="notes__date">29 April 16:35  -  Martina Falk</div>
                                                            <span>We are satisfied with this contract but we will renegotiate the price next year </span>
                                                        </li>
                                                        <li class="notes__line">
                                                            <div class="notes__date">05 Juni 10.00  -  David Karlsson</div>
                                                            <span>If we don't agree on a better price next year, then we have to end the contract and find a new renting place. </span>
                                                            <div class="dropdown">
                                                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class='bx bx-dots-horizontal-rounded'></i></button>
                                                                <ul class="dropdown-menu" style="">
                                                                    <li><a class="dropdown-item" href="#">Edit</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item" href="#">Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="notes__wrapper--new" style="display:none;">
                                                <div class="col-12 col-lg-12 flex-column pt-3 d-flex gap-2 align-items-end">
                                                    <textarea name="comment_area" id="CommentArea" type="textarea" class="form-control mb-1 textarea" rows="6" placeholder="Type Here.."></textarea>
                                                    <div class="d-flex gap-2">
                                                        <a class="save-cancel-notes-group__cancel btn btn-secondary py-1">{{ __('general.cancel_button') }}</a>
                                                        <a class="save-cancel-notes-group__save btn btn-primary py-1">{{ __('general.save_button') }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="steps-summary__group--add"><span class="btn btn-secondary py-1 fs-07 mt-2">Add Comment</span></a>
                                    </fieldset>
                                   
                                </div>
                                <div class="col-6 col-lg-6 mt-3 steps-summary__right">
                                    <fieldset class="steps-summary__group mb-4">
                                        <legend class="d-flex justify-content-center align-items-center gap-2"><i class="bx bx-paperclip fs-1rem rotate-270"></i> Attached Files <span class="ms-1 circle-number">2</span></legend>
                                        <div class="row p-4 pt-0">
                                            <div class="summary-documents">
                                                <div class="summary-documents__line summary-document-heading border-bottom">
                                                    <div class="summary-document-heading__column">Type</div>
                                                    <div class="summary-document-heading__column">Name</div>
                                                    <div class="summary-document-heading__column">Uploaded</div>
                                                    <div class="summary-document-heading__column"></div>
                                                </div>
                                                <div class="summary-documents__line summary-document border-bottom">
                                                    <span class="changeble-text summary-document__column summary-document__type">Contract</span>
                                                    <select class="form-select summary-documents__line--types" name="summary-field-changeble" style="display:none;">
                                                        <option disabled selected>{{ __('general.select') }}</option>
                                                        @foreach($file_types as $key => $type)
                                                            @if($key != 7)
                                                            <option {{ $type === 'Contract' ? 'selected' : '' }} value="{{ $key }}">{{ $type }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                    <div class="summary-document__column summary-document__name">
                                                        <a class="pdf-link changeble-text" data-src="/assets/images/demo/HyresavtalFörLokal.pdf#navpanes=0&zoom=70&view=fit" href="#"><i class='bx bx-file'></i> Lease Agreement</a>
                                                        <input class="form-control mt-1 summary-documents__line--name" type="text" name="summary-field-changeble" value="Lease Agreement" style="display:none;">
                                                    </div>
                                                    <div class="summary-document__column summary-document__date">
                                                        2023-11-29
                                                    </div>
                                                    <div class="summary-document__column summary-document__action">
                                                        <a class="pe-2 attach-send-email" href="#"><i class='bx bx-envelope '></i></a>
                                                         <input type="file" id="file-input" class="hidden-input">
                                                        <a href="#"><i class='bx bx-x color-type-11 border border-color-7'></i></a>
                                                    </div>
                                                </div>
                                                <div class="summary-documents__line summary-document">
                                                    <span class="changeble-text summary-document__column summary-document__type">Appendix</span>
                                                    <select class="form-select summary-documents__line--types" name="summary-field-changeble" style="display:none;">
                                                        <option disabled selected>{{ __('general.select') }}</option>
                                                        @foreach($file_types as $key => $type)
                                                            @if($key != 7)
                                                            <option {{ $type === 'Appendix' ? 'selected' : '' }} value="{{ $key }}">{{ $type }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                    <div class="summary-document__column summary-document__name">
                                                        <a class="pdf-link changeble-text" data-src="/assets/images/demo/Abonnemangsvillkor.pdf#navpanes=0&zoom=70&view=fit" href="#"><i class='bx bx-file'></i> Abonnemangsvillkor</a>
                                                        <input class="form-control mt-1 summary-documents__line--name" type="text" name="summary-field-changeble" value="Abonnemangsvillkor" style="display:none;">
                                                    </div>
                                                    <div class="summary-document__column summary-document__date">
                                                        2023-11-29
                                                    </div>
                                                    <div class="summary-document__column summary-document__action">
                                                        <!-- <a class="pe-2 attach-send-email" href="#"><i class='bx bx-envelope '></i></a> -->
                                                         <!-- <input type="file" id="file-input" class="hidden-input"> -->
                                                        <a class="pe-2 attach-send-email" href="#" data-email="recipient@example.com"><i class='bx bx-envelope'></i></a>
                                                        <a href="#"><i class='bx bx-x color-type-11 border border-color-7'></i></a>
                                                    </div>
                                                </div>
                                                <div class="summary-documents__line--upload d-flex justify-content-end mt-4">
                                                    <a class="btn btn-secondary py-1 pe-3 d-flex align-items-center gap-0" data-bs-toggle="modal" data-bs-target="#UploadNewFile"><i class='bx bx-plus' ></i> Add File</a>
                                                </div>
                                            </div>
                                        </div>
                                        <a data-bs-toggle="popover" data-bs-content="Edit" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--edit"><i class='bx bx-edit-alt'></i></a>
                                        <div class="save-cancel-changes-group" style="display:none;">
                                            <a class="save-cancel-changes-group__cancel btn btn-secondary py-1">{{ __('general.cancel_button') }}</a>
                                            <a class="save-cancel-changes-group__save btn btn-primary py-1">{{ __('general.save_button') }}</a>
                                        </div>
                                    </fieldset>
                                    <div class="steps-summary__right--img">
                                        <embed id="pdfViewer" src="/assets/images/demo/Abonnemangsvillkor.pdf#navpanes=0&zoom=70&view=fit" width="100%" height="1200px" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="RemindersPopupExpired" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="modal-body">
                            <div class="card p-4 w-100">
					           <div class="register-steps__summary">
                        <div class="mb-3 d-flex justify-content-between gap-1 register-steps__summary--actions">
                            <h5 class="bs-stepper-content__title font-17 font-weight-600 mb-4 w-100">
                            	<span class="bs-stepper-content__title--status ps-3"><i class='bx bx-check'></i> Active</span>
                            	Kontroll
                            	<span class="bs-stepper-content__title--note closed  ps-4 alert">Notice Period Has Expired</span></h5>
                        </div>

                        <form name="frmSummary" id="frmSummary">
                            <div class="row g-4 steps-summary__row">
                                <div class="col-6 col-lg-6 mt-3 steps-summary__left">
                                    <fieldset class="steps-summary__group mb-4">
                                        <legend class="">Generally</legend>
                                        <div class="row p-4 pt-0">
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">Category</span>
                                                <span class="folder-label changeble-text font-type-6 border-type-6 border px-2 py-40 rounded font-type-6 width-fit d-flex fs-07 mt-1">EMPLOYMENT CONTRACTS</span>
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Office" style="display:none;"> -->
                                                <select class="form-select mt-1" name="summary-field-changeble" style="display:none;">
                                                    <option disabled selected hidden value="">Office</option>
                                                    <option value="1">Employment Contracts</option>
                                                    <option value="2">Staff</option>
                                                    <option value="3">Subscription</option>
                                                    <option value="4">Service Agreements</option>
                                                    <option value="5">Company Cars</option>
                                                    <option value="5">Office</option>
                                                    <option value="5">Suppliers</option>
                                                    <option value="5">IT</option>
                                                    <option value="5">Credits</option>
                                                    <option value="5">Leasing</option>
                                                    <option value="5">Customer Contracts</option>
                                                    <option value="5">Insurances</option>
                                                    <option value="5">NDA</option>
                                                    <option value="5">Licenses</option>
                                                    <option value="5">Cooperation Agreements</option>
                                                </select>
                                                <span class="changeble-label title mt-3">Type</span>
                                                <span class="mb-2 changeble-text">Permanent Employment</span>
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Rental Agreement" style="display:none;"> -->
                                                <select class="form-select mt-1" name="summary-field-changeble" style="display:none;">
                                                    <option disabled selected hidden value="">Rental Agreement</option>
                                                    <option value="1">Rental Agreement</option>
                                                    <option value="2">HR</option>
                                                    <option value="3">IT</option>
                                                    <option value="4">Leasing</option>
                                                </select>

                                                <span class="title mt-3">Department</span>
                                                <span class="changeble-text">Finance</span>
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Finance" style="display:none;"> -->
                                                <select class="form-select mt-1" name="summary-field-changeble" style="display:none;">
                                                    <option disabled selected hidden value="">Finance</option>
                                                    <option value="1">Development</option>
                                                    <option value="2">Executive</option>
                                                    <option value="3">Finance</option>
                                                    <option value="4">HR</option>
                                                    <option value="5">IT</option>
                                                    <option value="6">Marketing</option>
                                                    <option value="7">Procurement</option>
                                                    <option value="8">Production</option>
                                                    <option value="9">Sales</option>
                                                </select>
                                                <span class="title mt-3">Cost</span>
                                                <span class="font-color-7 changeble-text">30 000 SEK</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="30 000 SEK" style="display:none;">
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title"></span>
                                                <span class="h-100">&nbsp;</span>
                                                <span class="title mt-3">Contract</span>
                                                <span class="mb-2 changeble-text">Kontroll</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Office | Stockholm" style="display:none;">
                                                <span class="title mt-3">Region</span>
                                                <span class="changeble-text">Stockholm</span>
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Stockholm" style="display:none;"> -->
                                                <select class="form-select mt-1" name="summary-field-changeble" style="display:none;">
                                                    <option disabled selected hidden value="">Stockholm</option>
                                                    <option value="1">Blekinge</option>
                                                    <option value="2">Dalarna</option>
                                                    <option value="3">Gotland</option>
                                                    <option value="4">Gävleborg</option>
                                                    <option value="5">Halland</option>
                                                    <option value="6">Jämtland</option>
                                                    <option value="7">Jönköping</option>
                                                    <option value="8">Kalmar</option>
                                                    <option value="9">Kronoberg</option>
                                                    <option value="10">Norrbotten</option>
                                                    <option value="11">Skåne</option>
                                                    <option value="12">Stockholm</option>
                                                    <option value="13">Sörmland</option>
                                                    <option value="14">Uppsala</option>
                                                    <option value="15">Värmland</option>
                                                    <option value="16">Västerbotten</option>
                                                    <option value="17">Västernorrland</option>
                                                    <option value="18">Västmanland</option>
                                                    <option value="19">Örebro län</option>
                                                    <option value="20">Östergötland</option>
                                                    <option value="21">Götaland</option>
                                                </select>
                                                <span class="title mt-3">Payment Period</span>
                                                <span class="changeble-text">Month</span>
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Monthly" style="display:none;"> -->
                                                <select class="form-select mt-1" name="summary-field-changeble" style="display:none;" >
                                                    <option disabled selected hidden value="">Month</option>
                                                    <option value="1">Month</option>
                                                    <option value="2">Quarter</option>
                                                    <option value="3">Year</option>
                                                    <option value="4">One Time</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="d-flex px-2 mx-3 my-4 mt-2 py-3 gap-2 pe-3 highlighted-area">
                                            <span class="highlighted-area__icon"><i class='bx bx-user'></i> </span>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title mt-2">Contract Manager</span>
                                                <span class="changeble-text">David Carlsson</span>
                                                <select class="form-select mt-1" name="summary-field-changeble" style="display:none;">
                                                    <option disabled selected hidden value="">David Carlsson</option>
                                                    <option value="1">David Carlsson</option>
                                                    <option value="2">David Carlsson</option>
                                                    <option value="3">David Carlsson</option>
                                                </select>
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="David Carlsson" style="display:none;"> -->
                                                <span class="title mt-3">Telephone</span>
                                                <span class="gap-1 changeble-text line-height-15">046 789 99 95</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="046 789 99 95" style="display:none;">
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex ps-1 justify-content-end">
                                                <span class="title changeble-label mt-2 emptys">Position</span>
                                                <span class="changeble-text emptys">-</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="" style="display:none;">
                                                <span class="title mt-3">Email</span>
                                                <span class="gap-1 changeble-text"><a href="mailto:david@foretag.se">david@foretag.se</a></span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="david@foretag.se" style="display:none;">
                                            </div>
                                        </div>
                                        <a data-bs-toggle="popover" data-bs-content="Show All Fields" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--show"><i class='bx bx-filter'></i></a>
                                        <a data-bs-toggle="popover" data-bs-content="Edit" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--edit"><i class='bx bx-edit-alt'></i></a>
                                        <div class="save-cancel-changes-group" style="display:none;">
                                            <a class="save-cancel-changes-group__cancel btn btn-secondary py-1">{{ __('general.cancel_button') }}</a>
                                            <a class="save-cancel-changes-group__save btn btn-primary py-1">{{ __('general.save_button') }}</a>
                                        </div>
                                    </fieldset>
                                    <fieldset class="steps-summary__group mb-4 mt-1">
                                        <legend class="">Counterparty</legend>
                                        <div class="row p-4 pt-0">
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title changeble-label">Company</span>
                                                <span class="mb-2 changeble-text">Kontroll AB</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Kontroll AB" style="display:none;">
                                                <span class="title mt-3 changeble-label emptys">Address</span>
                                                <span class="changeble-text emptys">-</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="" style="display:none;">
                                                <span class="title mt-3 changeble-label emptys">City</span>
                                                <span class="changeble-text emptys">-</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="" style="display:none;">
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title changeble-label emptys">Organisation Number</span>
                                                <span class="mb-2 changeble-text emptys">-</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="" style="display:none;">
                                                <span class="title mt-3 changeble-label emptys">Postal Code</span>
                                                <span class="changeble-text emptys">-</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="" style="display:none;">
                                                <span class="title mt-3 changeble-label emptys">Country</span>
                                                <span class="changeble-text emptys">-</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="" style="display:none;">
                                            </div>

                                        </div>
                                        <div class="d-flex px-2 mx-3 my-4 mt-2 py-3 gap-2 pe-3 highlighted-area">
                                            <span class="highlighted-area__icon"><i class='bx bx-user'></i> </span>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title title mt-2">Contact Name</span>
                                                <span class="changeble-text">Robin B</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Robin B" style="display:none;">
                                                <span class="title mt-3">Mobile</span>
                                                <span class="gap-1 changeble-text line-height-15">09900993</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="09900993" style="display:none;">
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex ps-1">
                                                <!-- <span class="title title mt-2">Position</span>
                                                <span class="changeble-text">-</span> -->
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="" style="display:none;"> -->
                                                <span class="title mt-2">Email</span>
                                                <span class="gap-1 changeble-text"><a href="mailto:info@lomo.se">info@kontroll.se</a></span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="info@kontroll.se" style="display:none;">
                                                <span class="title mt-3">Work</span>
                                                <span class="gap-1 changeble-text line-height-15">09900993</span>
                                                <input class="form-control mt-1" type="text" name="summary-field-changeble" value="09900993" style="display:none;">
                                            </div>
                                        </div>
                                        <a data-bs-toggle="popover" data-bs-content="Show All Fields" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--show"><i class='bx bx-filter'></i></a>
                                        <a data-bs-toggle="popover" data-bs-content="Edit" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--edit"><i class='bx bx-edit-alt'></i></a>
                                        <div class="save-cancel-changes-group" style="display:none;">
                                            <a class="save-cancel-changes-group__cancel btn btn-secondary py-1">{{ __('general.cancel_button') }}</a>
                                            <a class="save-cancel-changes-group__save btn btn-primary py-1">{{ __('general.save_button') }}</a>
                                        </div>
                                    </fieldset>
                                    <fieldset class="steps-summary__group contract-duration mb-4 mt-1">
                                        <legend class="">Contract Duration</legend>
                                        <div class="row p-4 pt-0">
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">Start Date</span>
                                                <span class="changeble-text">Nov 29, 2023</span>
                                                <div name="summary-field-changeble" class="datepicker-wrap" style="display:none;">
                                                    <input name="summary-field-changeble" id="DurationStartDate" placeholder="Valid From" value="2020-11-29" class="form-control text-left datepicker" type="text" required />
                                                    <i class='bx bx-calendar summary-field-changeble'></i>
                                                </div>
                                                <!-- <input placeholder="Valid From" name="summary-field-changeble" class="form-control text-left datepicker" type="text" value="2020-11-29" style="display:none;"/> -->
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="2020-11-29" style="display:none;"> -->
                                                
                                                <span class="title mt-3">Date This Contract Was Terminated</span>
                                                <span class="">-</span>
                                                <div name="" class="" style="display:none;">
                                                    <input name="summary-field-changeble" id="DurationStartDate" placeholder="Valid To" value="2023-11-29" class="form-control text-left" type="text" required />
                                                </div>
                                                <!-- <div class="title mt-3">Terminate Contract</div>
                                                <div class="d-flex mt-2">
                                                    <a class="btn btn-secondary py-1 NotificationAlert__btns--terminate">Terminate</a>
                                                </div> -->
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">End Date</span>
                                                <span class="changeble-text">Nov 29, 2023</span>
                                                <div name="summary-field-changeble" class="datepicker-wrap" style="display:none;">
                                                    <input name="summary-field-changeble" id="DurationStartDate" placeholder="Valid To" value="2023-11-29" class="form-control text-left datepicker" type="text" required />
                                                    <i class='bx bx-calendar summary-field-changeble'></i>
                                                </div>
                                                <!-- <input placeholder="Valid To" name="summary-field-changeble" class="form-control text-left datepicker" type="text" value="2023-11-29" style="display:none;"/> -->
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="2023-11-29" style="display:none;"> -->
                                                <!-- <span class="title mt-3">Ongoing Contract</span>
                                                <span class="changeble-text border-type-6 border bg-type-6 px-2 py-0 rounded color-white width-fit d-flex fs-08 mt-1">Yes</span>
                                                <select class="form-select" name="summary-field-changeble" style="display:none;">
                                                    <option disabled selected hidden value="">Ongoing Contract</option>
                                                    <option value="1">Yes</option>
                                                    <option value="2">No</option>
                                                </select> -->
                                                <span class="title mt-3">Notice Period</span>
                                                <span class="changeble-text">2 Months</span>
                                                <select class="form-select form-control text-left" name="summary-field-changeble" style="display:none;">
                                                    <option value="" disabled selected hidden>2 Months</option>
                                                    <option value="0">No Notice Period</option>
                                                    <option value="1">1 Month</option>
                                                    <option value="2">2 Months</option>
                                                    <option value="3">3 Months</option>
                                                    <option value="4">4 Months</option>
                                                    <option value="5">5 Months</option>
                                                    <option value="6">6 Months</option>
                                                    <option value="7">7 Months</option>
                                                    <option value="8">8 Months</option>
                                                    <option value="9">9 Months</option>
                                                    <option value="10">10 Months</option>
                                                    <option value="11">11 Months</option>
                                                    <option value="12">12 Months</option>
                                                </select>

                                               <!--  <div class="title mt-3">Renew Contract</div>
                                                <div class="d-flex mt-2">
                                                    <a class="btn btn-secondary py-1 NotificationAlert__btns--review">Renew</a>
                                                </div> -->
                                            </div>
                                            <!-- <div class="col-12 col-lg-12 flex-column d-flex">
                                                <div class="title mt-3">Take Action</div>
                                                <div class="contract-duration__buttons" >
                                                    <a class="btn btn-secondary py-1 NotificationAlert__btns--terminate">{{ __('general.terminate_button') }}</a>
                                                    <a class="btn btn-secondary py-1 NotificationAlert__btns--review">{{ __('general.renew_button') }}</a>
                                                </div>
                                            </div> -->
                                        </div>

                                        <div class="d-flex px-2 mx-3 my-4 mt-2 py-3 gap-2 pe-3 highlighted-area">
                                            <span class="highlighted-area__icon"><i class='bx bx-error' ></i> </span>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <div class="title mt-3">Terminate Contract</div>
                                                <div class="d-flex mt-2">
                                                    <a class="btn btn-secondary py-1 NotificationAlert__btns--terminate">Terminate</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex ps-1">
                                                <div class="title mt-3">Renew Contract</div>
                                                <div class="d-flex mt-2">
                                                    <a class="btn btn-secondary py-1 NotificationAlert__btns--review">Renew</a>
                                                </div>
                                            </div>
                                        </div>

                                        <a data-bs-toggle="popover" data-bs-content="Show All Fields" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--show"><i class='bx bx-filter'></i></a>
                                        <a data-bs-toggle="popover" data-bs-content="Edit" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--edit"><i class='bx bx-edit-alt'></i></a>
                                        <div class="save-cancel-changes-group" style="display:none;">
                                            <a class="save-cancel-changes-group__cancel btn btn-secondary py-1">{{ __('general.cancel_button') }}</a>
                                            <a class="save-cancel-changes-group__save btn btn-primary py-1">{{ __('general.save_button') }}</a>
                                        </div>
                                    </fieldset>
                                    <fieldset class="steps-summary__group mb-4 mt-1">
                                        <legend class="">Contract Reminder</legend>
                                        <div class="row p-4 pt-0">
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">Type of Reminder</span>
                                                <span class="changeble-text">Terminate</span>
                                                <select class="form-select form-control text-left" name="summary-field-changeble" style="display:none;">
                                                    <option value="1" selected>Terminate</option>
                                                    <option value="2">Renegotiate</option>
                                                    <option value="3">Renew</option>
                                                </select>
                                                <!-- <input class="form-control mt-1" type="text" name="summary-field-changeble" value="Renegotiate" style="display:none;"> -->
                                                <!-- <span class="title mt-4">Mail Recipient Group</span>
                                                <span class="font-13 mt-1"><span class="focused-email">david@guetta.com</span><span class="focused-email">info@davidguetta.com</span></span> -->
                                            </div>
                                            <div class="col-6 col-lg-6 flex-column d-flex">
                                                <span class="title">Reminder Date</span>
                                                <span class="changeble-text d-flex align-items-center gap-1"><i class='bx bxs-bell font-color-11 fs-07'></i> Sep 29, 2023</span>
                                                <input class="form-control" type="text" name="summary-field-changeble" value="2023-09-29" style="display:none;">
                                             <!--    <span class="title mt-4">How to cancell contract</span>
                                                <span class="font-13">By telephone : 046 789 99 95</span> -->
                                            </div>
                                            <div class="col-12 col-lg-12 flex-column d-flex">
                                                <span class="title mt-3 mb-1">Email Recipients</span>
                                                <span class="font-13 mt-1 emails-changeble changeble-text">
                                                    <span class="focused-email">anna@lomo.se</span>
                                                    <span class="focused-email">jakob@lomo.se</span>
                                                </span>
                                                <select class="form-control js-change-emails-summary summary-field-changeble" id="reminderEmails" name="reminderEmails[]" multiple="multiple" style="display:none;">
                                                   <option selected="selected">anna@lomo.se</option>
                                                   <option selected="selected">jakob@lomo.se</option>
                                                </select>
                                            </div>
                                        </div>
                                        <a data-bs-toggle="popover" data-bs-content="Show All Fields" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--show"><i class='bx bx-filter'></i></a>
                                        <a data-bs-toggle="popover" data-bs-content="Edit" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--edit"><i class='bx bx-edit-alt'></i></a>
                                        <div class="save-cancel-changes-group" style="display:none;">
                                            <a class="save-cancel-changes-group__cancel btn btn-secondary py-1">{{ __('general.cancel_button') }}</a>
                                            <a class="save-cancel-changes-group__save btn btn-primary py-1">{{ __('general.save_button') }}</a>
                                        </div>
                                    </fieldset>
                                    <fieldset class="steps-summary__group notes mt-1">
                                        <legend class="d-flex justify-content-center align-items-center gap-2">Notes<span class="ms-1 circle-number">2</span></legend>
                                        <div class="row p-4 pt-0">
                                            <div class="notes__wrapper">
                                                <div class="col-12 col-lg-12 flex-column d-flex pt-3">
                                                    <ul>
                                                        <li class="notes__line">
                                                            <div class="notes__date">29 April 16:35  -  Martina Falk</div>
                                                            <span>We are satisfied with this contract but we will renegotiate the price next year </span>
                                                        </li>
                                                        <li class="notes__line">
                                                            <div class="notes__date">05 Juni 10.00  -  David Karlsson</div>
                                                            <span>If we don't agree on a better price next year, then we have to end the contract and find a new renting place. </span>
                                                            <div class="dropdown">
                                                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class='bx bx-dots-horizontal-rounded'></i></button>
                                                                <ul class="dropdown-menu" style="">
                                                                    <li><a class="dropdown-item" href="#">Edit</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item" href="#">Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="notes__wrapper--new" style="display:none;">
                                                <div class="col-12 col-lg-12 flex-column pt-3 d-flex gap-2 align-items-end">
                                                    <textarea name="comment_area" id="CommentArea" type="textarea" class="form-control mb-1 textarea" rows="6" placeholder="Type Here.."></textarea>
                                                    <div class="d-flex gap-2">
                                                        <a class="save-cancel-notes-group__cancel btn btn-secondary py-1">{{ __('general.cancel_button') }}</a>
                                                        <a class="save-cancel-notes-group__save btn btn-primary py-1">{{ __('general.save_button') }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="steps-summary__group--add"><span class="btn btn-secondary py-1 fs-07 mt-2">Add Comment</span></a>
                                    </fieldset>
                                   
                                </div>
                                <div class="col-6 col-lg-6 mt-3 steps-summary__right">
                                    <fieldset class="steps-summary__group mb-4">
                                        <legend class="d-flex justify-content-center align-items-center gap-2"><i class="bx bx-paperclip fs-1rem rotate-270"></i> Attached Files <span class="ms-1 circle-number">2</span></legend>
                                        <div class="row p-4 pt-0">
                                            <div class="summary-documents">
                                                <div class="summary-documents__line summary-document-heading border-bottom">
                                                    <div class="summary-document-heading__column">Type</div>
                                                    <div class="summary-document-heading__column">Name</div>
                                                    <div class="summary-document-heading__column">Uploaded</div>
                                                    <div class="summary-document-heading__column"></div>
                                                </div>
                                                <div class="summary-documents__line summary-document border-bottom">
                                                    <span class="changeble-text summary-document__column summary-document__type">Contract</span>
                                                    <select class="form-select summary-documents__line--types" name="summary-field-changeble" style="display:none;">
                                                        <option disabled selected>{{ __('general.select') }}</option>
                                                        @foreach($file_types as $key => $type)
                                                            @if($key != 7)
                                                            <option {{ $type === 'Contract' ? 'selected' : '' }} value="{{ $key }}">{{ $type }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                    <div class="summary-document__column summary-document__name">
                                                        <a class="pdf-link changeble-text" data-src="/assets/images/demo/HyresavtalFörLokal.pdf#navpanes=0&zoom=70&view=fit" href="#"><i class='bx bx-file'></i> Lease Agreement</a>
                                                        <input class="form-control mt-1 summary-documents__line--name" type="text" name="summary-field-changeble" value="Lease Agreement" style="display:none;">
                                                    </div>
                                                    <div class="summary-document__column summary-document__date">
                                                        2023-11-29
                                                    </div>
                                                    <div class="summary-document__column summary-document__action">
                                                        <a class="pe-2 attach-send-email" href="#"><i class='bx bx-envelope '></i></a>
                                                         <input type="file" id="file-input" class="hidden-input">
                                                        <a href="#"><i class='bx bx-x color-type-11 border border-color-7'></i></a>
                                                    </div>
                                                </div>
                                                <div class="summary-documents__line summary-document">
                                                    <span class="changeble-text summary-document__column summary-document__type">Appendix</span>
                                                    <select class="form-select summary-documents__line--types" name="summary-field-changeble" style="display:none;">
                                                        <option disabled selected>{{ __('general.select') }}</option>
                                                        @foreach($file_types as $key => $type)
                                                            @if($key != 7)
                                                            <option {{ $type === 'Appendix' ? 'selected' : '' }} value="{{ $key }}">{{ $type }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                    <div class="summary-document__column summary-document__name">
                                                        <a class="pdf-link changeble-text" data-src="/assets/images/demo/Abonnemangsvillkor.pdf#navpanes=0&zoom=70&view=fit" href="#"><i class='bx bx-file'></i> Abonnemangsvillkor</a>
                                                        <input class="form-control mt-1 summary-documents__line--name" type="text" name="summary-field-changeble" value="Abonnemangsvillkor" style="display:none;">
                                                    </div>
                                                    <div class="summary-document__column summary-document__date">
                                                        2023-11-29
                                                    </div>
                                                    <div class="summary-document__column summary-document__action">
                                                        <!-- <a class="pe-2 attach-send-email" href="#"><i class='bx bx-envelope '></i></a> -->
                                                         <!-- <input type="file" id="file-input" class="hidden-input"> -->
                                                        <a class="pe-2 attach-send-email" href="#" data-email="recipient@example.com"><i class='bx bx-envelope'></i></a>
                                                        <a href="#"><i class='bx bx-x color-type-11 border border-color-7'></i></a>
                                                    </div>
                                                </div>
                                                <div class="summary-documents__line--upload d-flex justify-content-end mt-4">
                                                    <a class="btn btn-secondary py-1 pe-3 d-flex align-items-center gap-0" data-bs-toggle="modal" data-bs-target="#UploadNewFile"><i class='bx bx-plus' ></i> Add File</a>
                                                </div>
                                            </div>
                                        </div>
                                        <a data-bs-toggle="popover" data-bs-content="Edit" data-bs-placement="bottom" data-bs-trigger="hover" class="steps-summary__group--edit"><i class='bx bx-edit-alt'></i></a>
                                        <div class="save-cancel-changes-group" style="display:none;">
                                            <a class="save-cancel-changes-group__cancel btn btn-secondary py-1">{{ __('general.cancel_button') }}</a>
                                            <a class="save-cancel-changes-group__save btn btn-primary py-1">{{ __('general.save_button') }}</a>
                                        </div>
                                    </fieldset>
                                    <div class="steps-summary__right--img">
                                        <embed id="pdfViewer" src="/assets/images/demo/Abonnemangsvillkor.pdf#navpanes=0&zoom=70&view=fit" width="100%" height="1200px" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="EditColumnsPopup" tabindex="-1" aria-hidden="true">
				    <div class="modal-dialog modal-dialog-centered modal-lg">
				        <div class="modal-content">
				            <button type="button" class="btn-close pt-3 pe-3" data-bs-dismiss="modal" aria-label="Close"></button>
				            <div class="modal-header">
				            	<div class="mb-1 d-flex justify-content-center gap-1 flex-column w-100 align-items-center">
		                            <h5 class="font-17 mb-0">Edit Columns</h5>
		                        </div>
				            </div>
				            <div class="modal-body">
				                <div class="pt-4 pb-4 mb-0 w-100 justify-content-between gap-3 edit-columns-popup-wrapper">
			                        <div class="d-flex flex-column w-100 edit-columns-popup-wrapper__select">
			                        	<h6 class="font-weight-600 fs-09 mb-4">Select Columns to display</h6>
		                        		<div class="form-check form-check-secondary d-flex bg-light-yellow mb-2 border rounded p-2 gap-2 pe-4">
											<input class="form-check-input" type="checkbox" value="" id="flexCheckSecondary">
											<label class="form-check-label mb-0" for="flexCheckSecondary">
											  Contract Manager
											</label>
									    </div>
									    <div class="form-check form-check-secondary d-flex bg-light-yellow mb-2 border rounded p-2 gap-2 pe-4">
											<input class="form-check-input" type="checkbox" value="" id="flexCheckSecondary2">
											<label class="form-check-label mb-0" for="flexCheckSecondary2">
											  Start Date
											</label>
									    </div>
									    <!-- <div class="form-check form-check-secondary d-flex bg-light-yellow mb-2 border rounded p-2 gap-2 pe-4">
											<input class="form-check-input" type="checkbox" value="" id="flexCheckSecondary3">
											<label class="form-check-label mb-0" for="flexCheckSecondary3">
											  Auto Renew
											</label>
									    </div> -->
									    <div class="form-check form-check-secondary d-flex bg-light-yellow mb-2 border rounded p-2 gap-2 pe-4">
											<input class="form-check-input" type="checkbox" value="" id="flexCheckSecondary4">
											<label class="form-check-label mb-0" for="flexCheckSecondary4">
											  Counterparty
											</label>
									    </div>
									    <div class="form-check form-check-secondary d-flex bg-light-yellow mb-2 border rounded p-2 gap-2 pe-4">
											<input class="form-check-input" type="checkbox" value="" id="flexCheckSecondary5">
											<label class="form-check-label mb-0" for="flexCheckSecondary5">
											  Contact Name
											</label>
									    </div>
									    <div class="form-check form-check-secondary d-flex bg-light-yellow mb-2 border rounded p-2 gap-2 pe-4">
											<input class="form-check-input" type="checkbox" value="" id="flexCheckSecondary6">
											<label class="form-check-label mb-0" for="flexCheckSecondary6">
											  Department
											</label>
									    </div>
									    <div class="form-check form-check-secondary d-flex bg-light-yellow mb-2 border rounded p-2 gap-2 pe-4">
											<input class="form-check-input" type="checkbox" value="" id="flexCheckSecondary7">
											<label class="form-check-label mb-0" for="flexCheckSecondary7">
											  Region
											</label>
									    </div>
			                        </div>
			                        <div class="edit-columns-popup-wrapper__actions">
			                        	<a class="btn btn-default px-2 w-10rem pt-2 pb-2 btn-bordered hover-scaled"><i class='bx bx-chevron-right ps-1'></i></a>
			                        	<a class="btn btn-default px-2 w-10rem pt-2 pb-2 btn-bordered hover-scaled"><i class='bx bx-chevron-left ps-1'></i></a>
			                        </div>
			                        <div class="d-flex flex-column w-100 edit-columns-popup-wrapper__selected">
			                        	<h6 class="font-weight-600 fs-09 mb-4">Selected Columns </h6>
			                        	<ul class="ps-0 mb-0">
			                        		<!-- <li class="d-flex bg-light-gray mb-1 border rounded p-2 gap-2 pe-4"><i class='bx bx-move-vertical' ></i> <span class="d-flex w-100 justify-content-between">Category <i class='bx bx-x'></i></span></li> -->
			                        		<li class="form-check d-flex bg-light-gray mb-2 border rounded p-2 gap-2 pe-4"><span class="d-flex w-100 justify-content-between">Category</span></li>
			                        		<li class="form-check d-flex bg-light-gray mb-2 border rounded p-2 gap-2 pe-4"><span class="d-flex w-100 justify-content-between">Type</span></li>
			                        		<li class="form-check d-flex bg-light-gray mb-2 border rounded p-2 gap-2 pe-4"><span class="d-flex w-100 justify-content-between">Contract</span></li>
			                        		<li class="form-check d-flex bg-light-gray mb-2 border rounded p-2 gap-2 pe-4"><span class="d-flex w-100 justify-content-between">Notice Period</span></li>
			                        		<li class="form-check d-flex bg-light-gray mb-2 border rounded p-2 gap-2 pe-4"><span class="d-flex w-100 justify-content-between">End Date</span></li>
			                        		<li class="form-check d-flex bg-light-gray mb-2 border rounded p-2 gap-2 pe-4"><span class="d-flex w-100 justify-content-between">Amount</span></li>
			                        		<li class="form-check d-flex bg-light-gray mb-2 border rounded p-2 gap-2 pe-4"><span class="d-flex w-100 justify-content-between">Payment Period</span></li>
			                        	</ul>
			                        </div>
				                </div>
				            </div>
				            <div class="modal-footer border-none">
				            	<div class="mb-1 d-flex flex-column justify-content-center align-items-end me-4 pe-3">
	                                <div>
	                                    <button data-step-action="back" type="button" class="step btn btn-secondary pe-3 ps-3 pb-2 pt-2 me-2 steps-summary-back font-12">Cancel</button>
	                                    <button type="button" class="btn btn-primary pe-3 ps-3 pb-2 pt-2 font-12">Apply</button>
	                                </div>
	                            </div>
				            </div>
				        </div>
				    </div>
				</div>
            </div>

			</div>
			<div class="modal fade NotificationAlert" id="NotificationAlert" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-md NotificationAlert__wrapper">
                    <div class="modal-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="modal-body p-0">
                            <div class="card p-4 w-100 mb-0">
                                <div class="NotificationAlert__icon"><i class='bx bx-error'></i></div>
                                <h5 class="NotificationAlert__title">Notification Alert</h5>
                                <div class="NotificationAlert__subtitle">This contract is about to expire in 5 days</div>
                                <form name="f">
                                    <div class="d-flex justify-content-start mt-3">
                                        <div class="d-flex justify-content-start mt-0 mb-2 NotificationAlert__btns">
                                            <button data-bs-dismiss="modal" type="button" class="NotificationAlert__btns--terminate btn pe-3 ps-3 pb-2 pt-2 me-2 font-12">Terminate</button>
                                            <button data-bs-dismiss="modal" type="button" class="NotificationAlert__btns--review btn radius-20 mt-2 mt-lg-0 ms-2 px-3 font-12">Renew the contract</button>
                                        </div>
                                    </div>
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

		$(document).ready(function() {
			
            $('.remove-static-demo').on('click', function() {
            	$('.static-demo-data').removeClass('d-flex');
            	$('.static-demo-data').hide(50);
            	$('.static-demo-data-def').show(50);
            	$('.remove-static-demo').hide(50);
			});
            
            $('#status-display').on('click', function() {
                $('#status-select').show();
                $(this).hide();
            });

            $('#status-select').on('change', function() {
                var selectedStatus = $(this).val();
                var $statusDisplay = $('#status-display');

                $statusDisplay.removeClass('status-active status-delete status-archive');

                if (selectedStatus === 'active') {
                    $statusDisplay.addClass('status-active');
                    $statusDisplay.html('<i class="bx bx-check"></i> Active');
                // } else if (selectedStatus === 'delete') {
                //     $statusDisplay.addClass('status-delete');
                //     $statusDisplay.html('<i class="bx bx-x"></i> Delete');
                } else if (selectedStatus === 'archive') {
                    $statusDisplay.addClass('status-archive');
                    $statusDisplay.html('<i class="bx bx-archive"></i> Archive ');
                }

                $(this).hide();
                $statusDisplay.show();
            });

            // Hide the select if clicked outside
            $(document).on('click', function(event) {
                if (!$(event.target).closest('#status-display, #status-select').length) {
                    $('#status-select').hide();
                    $('#status-display').show();
                }
            });
        });

		$( document ).ready(function() {

	        $('#RemindersPopup').on('shown.bs.modal', function () {
	            // Set a timeout to open #NotificationAlert modal after 1 second
	            setTimeout(function () {
	                $('#NotificationAlert').modal('show');
	            }, 1000); // 1000 milliseconds = 1 second
        	});

        	// When #NotificationAlert modal is shown
	        $('#NotificationAlert').on('shown.bs.modal', function () {
	            // Make the #RemindersPopup modal's backdrop darker
	            $('.modal-backdrop').not(':first').css('z-index', 1049); // Adjust the backdrop z-index for the second modal
	            $('#RemindersPopup').css('z-index', 1048); // Adjust the z-index of the first modal
	            $(this).css('z-index', 1050); // Ensure the second modal is on top
	        });

        	// When #NotificationAlert modal is hidden
	        $('#NotificationAlert').on('hidden.bs.modal', function () {
	            // Reset the #RemindersPopup modal's backdrop
	            $('.modal-backdrop').not(':first').remove(); // Remove the second modal's backdrop
	            $('#RemindersPopup').css('z-index', 1050); // Reset the z-index of the first modal
	            $('body').addClass('modal-open'); // Ensure the body retains the modal-open class
	        });


			$(function () {
				$('[data-bs-toggle="popover"]').popover({ placement: 'bottom', trigger: 'hover'});
				$('[data-bs-toggle="popover-responsible"]').popover({ placement: 'bottom', trigger: 'hover' });
				  // .tip()
				  // .addClass('contract-list-popover');
				$('[data-bs-toggle="tooltip"]').tooltip();
			});

			$('[data-bs-toggle="popover"]').click(function(){
			    // $('[data-bs-toggle="popover"]').not(this).popover('hide'); //all but this
			});

			// $('table tr.clickable').on('click', function() {
	        //     if(!$(this).hasClass('collapsed')){
	        //         $(this).find('.more-items .bx').removeClass('bx-plus').addClass('bx-minus');
	        //     }else{
	        //         $(this).find('.more-items .bx').removeClass('bx-minus').addClass('bx-plus');
	        //     }
	        // });
	        // ('input[name*=\'selected\']').prop('checked', this.checked);
			$('.contracts-list-table thead .form-check-input').on('click', function() {
				if($(this).hasClass('all-selected')){
					$('.export-button').removeClass('ready-to-export');
					$('.contracts-list-table tbody tr td').removeClass('selected');
					$(this).removeClass('all-selected');
				}else{
					$('.contracts-list-table tbody tr td').addClass('selected');
					$('.export-button').addClass('ready-to-export');
					$(this).addClass('all-selected');
				}
	        });
			
			$('.contracts-list-table .form-check-input').on('click', function() {
				if($(this).parents('tr').find('td').hasClass('selected')){
					$(this).parents('tr').find('td').removeClass('selected');
					$('.export-button').removeClass('ready-to-export');
				}else{
					$('.export-button').addClass('ready-to-export');
					$(this).parents('tr').find('td').addClass('selected');
				}
			});

		});

		</script>
    	<script src="{{URL::asset('assets/js/index.js')}}"></script>

		@endsection
	