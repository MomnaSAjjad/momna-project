
    @extends("layouts.app")

    @section("style")
    <!-- <link href="assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css" rel="stylesheet" /> -->
    <link href="{{URL::asset('assets/plugins/bs-stepper/css/bs-stepper.css')}}" rel="stylesheet" />
    @endsection
        
        @section("content")
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page"><a href="{{ url('/agreement/register') }}">Agreements</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Type Of Agreement</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ms-auto">
                    </div>
                </div>
                <!--end breadcrumb-->
              
                <div class="card">
                        <div class="card-body">
                            <div id="stepper3" class="bs-stepper gap-4 vertical linear">
                                <div class="bs-stepper-header" role="tablist">
                                    <div class="step active" data-target="#test-vl-1">
                                        <div class="step-trigger" role="tab" id="stepper3trigger1" aria-controls="test-vl-1" aria-selected="true">
                                          <div class="bs-stepper-circle"><i class="bx bx-user-check fs-5"></i></div>
                                          <div class="">
                                              <h5 class="mb-0 steper-title">Authorization</h5>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="step" data-target="#test-vl-2">
                                        <div class="step-trigger" role="tab" id="stepper3trigger2" aria-controls="test-vl-2" aria-selected="false" disabled="disabled">
                                          <div class="bs-stepper-circle"><i class="bx bx-file fs-5"></i></div>
                                          <div class="">
                                              <h5 class="mb-0 steper-title">Agreement information</h5>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="step" data-target="#test-vl-3">
                                        <div class="step-trigger" role="tab" id="stepper3trigger3" aria-controls="test-vl-3" aria-selected="false" disabled="disabled">
                                        <div class="bs-stepper-circle"><i class="bx bx-calendar fs-5"></i></div>
                                        <div class="">
                                            <h5 class="mb-0 steper-title">Subscription period</h5>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="step" data-target="#test-vl-4">
                                        <div class="step-trigger" role="tab" id="stepper3trigger4" aria-controls="test-vl-4" aria-selected="false" disabled="disabled">
                                        <div class="bs-stepper-circle"><i class="bx bx-calendar-exclamation fs-5"></i></div>
                                        <div class="">
                                            <h5 class="mb-0 steper-title">Termination</h5>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="step" data-target="#test-vl-5">
                                        <div class="step-trigger" role="tab" id="stepper3trigger5" aria-controls="test-vl-4" aria-selected="false" disabled="disabled">
                                        <div class="bs-stepper-circle"><i class="bx bx-briefcase fs-5"></i></div>
                                        <div class="">
                                            <h5 class="mb-0 steper-title">Counterparty details</h5>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="step" data-target="#test-vl-6">
                                        <div class="step-trigger" role="tab" id="stepper3trigger6" aria-controls="test-vl-4" aria-selected="false" disabled="disabled">
                                        <div class="bs-stepper-circle"><i class="bx bx-bell fs-5"></i></div>
                                        <div class="">
                                            <h5 class="mb-0 steper-title">Reminder</h5>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="step" data-target="#test-vl-7">
                                        <div class="step-trigger" role="tab" id="stepper3trigger7" aria-controls="test-vl-4" aria-selected="false" disabled="disabled">
                                        <div class="bs-stepper-circle"><i class="bx bx-dollar-circle fs-5"></i></div>
                                        <div class="">
                                            <h5 class="mb-0 steper-title">Cost</h5>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="step" data-target="#test-vl-8">
                                        <div class="step-trigger" role="tab" id="stepper3trigger8" aria-controls="test-vl-4" aria-selected="false" disabled="disabled">
                                        <div class="bs-stepper-circle"><i class="bx bx-paperclip fs-5"></i></div>
                                        <div class="">
                                            <h5 class="mb-0 steper-title">Attach document</h5>
                                        </div>
                                        </div>
                                    </div>
                                   </div>
            
                                   <div class="bs-stepper-content">
                                    <form onsubmit="return false" id="stepperForm">
                                        <div id="test-vl-1" role="tabpane3" class="bs-stepper-pane content fade dstepper-block active mt-4" aria-labelledby="stepper3trigger1">
            
                                        <h5 class="mb-4 text-upper">Choose which authority the user should have for this agreement</h5>
            
                                        <div class="row g-3">
                                            <div class="col-12 col-lg-10">
                                                <label for="InputLanguage" class="form-label">MANAGER <i class='bx bx-info-circle'></i></label>
                                                <select class="form-select" id="InputLanguage" aria-label="Default select example">
                                                    <option selected="">---</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                  </select>
                                            </div>
                                            <div class="col-12 col-lg-10">
                                                <label for="InputLanguage" class="form-label">CONTROLLER <i class='bx bx-info-circle'></i></label>
                                                <select class="form-select" id="InputLanguage" aria-label="Default select example">
                                                    <option selected="">---</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                  </select>
                                            </div>
                                            <!-- <div class="col-12 col-lg-6">
                                                <label for="InputUsername" class="form-label">Username</label>
                                                <input type="text" class="form-control" id="InputUsername" placeholder="jhon@123">
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <label for="InputEmail2" class="form-label">E-mail Address</label>
                                                <input type="text" class="form-control" id="InputEmail2" placeholder="example@xyz.com">
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <label for="InputPassword" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="InputPassword" value="12345678">
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <label for="InputConfirmPassword" class="form-label">Confirm Password</label>
                                                <input type="password" class="form-control" id="InputConfirmPassword" value="12345678">
                                            </div> -->
                                            <div class="col-12">
                                                <div class="d-flex align-items-center gap-3">
                                                    <button class="btn btn-primary px-3 pe-1" onclick="stepper3.next()">Next<i class="bx bx-right-arrow-alt ms-2"></i></button>
                                                </div>
                                            </div>
                                        </div><!---end row-->
                                        
                                      </div>

                                      <div id="test-vl-2" role="tabpane3" class="bs-stepper-pane content fade dstepper-none mt-4" aria-labelledby="stepper3trigger2">
                                        <h5 class="mb-4 text-upper">Enter basic information about the agreement</h5>
            
                                        <div class="row g-3">
                                            <div class="col-12 col-lg-10">
                                                <label for="CustomerNumber" class="form-label">Customer/Employee Number</label>
                                                <input type="text" class="form-control" id="CustomerNumber" placeholder="Number">
                                            </div>
                                            <div class="col-12 col-lg-10">
                                                <label for="AgreementName" class="form-label">Name of agreement</label>
                                                <input type="text" class="form-control" id="AgreementName" placeholder="Name">
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <button class="btn btn-outline-secondary px-2 pe-3 me-3" onclick="stepper3.previous()"><i class="bx bx-left-arrow-alt me-2"></i>Previous</button>
                                                <button class="btn btn-primary px-3 pe-1" onclick="stepper3.next()">Next<i class="bx bx-right-arrow-alt ms-2"></i></button>
                                            </div>
                                        </div><!---end row-->
                                        
                                      </div>
            
                                      
            
                                      <div id="test-vl-3" role="tabpane3" class="bs-stepper-pane content fade dstepper-block dstepper-none mt-4" aria-labelledby="stepper3trigger3">
                                        <h5 class="mb-4 text-upper">Should this contract be time limited or until further notice </h5>
            
                                        <div class="row g-3">
                                            <div class="col-12 col-lg-6">
                                                <label for="SchoolName" class="form-label">School Name</label>
                                                <input type="text" class="form-control" id="SchoolName" placeholder="School Name">
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <label for="BoardName" class="form-label">Board Name</label>
                                                <input type="text" class="form-control" id="BoardName" placeholder="Board Name">
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <label for="UniversityName" class="form-label">University Name</label>
                                                <input type="text" class="form-control" id="UniversityName" placeholder="University Name">
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <label for="InputCountry" class="form-label">Course Name</label>
                                                <select class="form-select" id="InputCountry" aria-label="Default select example">
                                                    <option selected="">---</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                  </select>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-flex align-items-center gap-3">
                                                    <button class="btn btn-outline-secondary px-2 pe-3 me-3" onclick="stepper3.previous()"><i class="bx bx-left-arrow-alt me-2"></i>Previous</button>
                                                    <button class="btn btn-primary px-3 pe-1" onclick="stepper3.next()">Next<i class="bx bx-right-arrow-alt ms-2"></i></button>
                                                </div>
                                            </div>
                                        </div><!---end row-->
                                        
                                      </div>
            
                                      <div id="test-vl-4" role="tabpane3" class="bs-stepper-pane content fade dstepper-block dstepper-none mt-4" aria-labelledby="stepper3trigger4">
                                        <h5 class="mb-1">Work Experiences</h5>
                                        <p class="mb-4">Can you talk about your past work experience?</p>
            
                                        <div class="row g-3">
                                            <div class="col-12 col-lg-6">
                                                <label for="Experience1" class="form-label">Experience 1</label>
                                                <input type="text" class="form-control" id="Experience1" placeholder="Experience 1">
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <label for="Position1" class="form-label">Position</label>
                                                <input type="text" class="form-control" id="Position1" placeholder="Position">
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <label for="Experience2" class="form-label">Experience 2</label>
                                                <input type="text" class="form-control" id="Experience2" placeholder="Experience 2">
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <label for="PhoneNumber" class="form-label">Position</label>
                                                <input type="text" class="form-control" id="PhoneNumber" placeholder="Position">
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <label for="Experience3" class="form-label">Experience 3</label>
                                                <input type="text" class="form-control" id="Experience3" placeholder="Experience 3">
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <label for="PhoneNumber" class="form-label">Position</label>
                                                <input type="text" class="form-control" id="PhoneNumber" placeholder="Position">
                                            </div>
                                            <div class="col-12">
                                                <div class="d-flex align-items-center gap-3">
                                                    <button class="btn btn-outline-secondary px-2 pe-3 me-3" onclick="stepper3.previous()"><i class="bx bx-left-arrow-alt me-2"></i>Previous</button>
                                                    <button class="btn btn-primary px-3 pe-1" onclick="stepper3.next()">Submit</button>
                                                </div>
                                            </div>
                                        </div><!---end row-->
                                        
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
    <!-- <script src="assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js"></script> -->
    <!-- <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script> -->
    <!-- <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script> -->
    <script src="{{URL::asset('assets/plugins/bs-stepper/js/bs-stepper.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/main.js')}}"></script>
        
    <script>
        $(document).ready(function () {
            // $('#image-uploadify').imageuploadify();
        })
    </script>
    @endsection