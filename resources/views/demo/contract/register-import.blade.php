
    @extends("layouts.app")

    @section("style")
    <link href="{{URL::asset('assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css')}}" rel="stylesheet" />
    @endsection
        
        @section("content")
        <!--start page wrapper -->
        <div class="page-wrapper import-agreement">
            <div class="page-content">
                <div class="row">
                    <div class="d-flex justify-content-center">
                      <h5 class="mb-0 text-center mb-2rem mt-3 register-agreement__title pe-5 px-5">Import Your Contract Information</h5>
                    </div>
                    <div class="row g-4 import-agreement__wrapper">
                      <div class="col-12 mt-3 import-agreement__inputs">
                        <div class="import-agreement__inputs--action">
                          <button class="btn btn-primary radius-20 mt-2 mt-lg-0 px-3 font-12">Upload or Drag And Drop</button>
                          <span class="font-14">csv, xls, xlsx, xml, txt spreadsheets accepted.</span>
                        </div>
                        <div class="import-agreement__inputs--notes font-14">
                          You can upload any .csv, xls, xlsx, xml, txt file with any set of columns as long as it has 1 record per row. The next step will allow you to match your spreadsheet columns to the right data points. You'll be able to clean up or remove any corrupted data before finalising your report.
                        </div>
                      </div>
                      <div class="col-12 mt-3 import-agreement__table">
                        <span class="font-14">...or just manually enter your data here:</span>
                        <div class="table-responsive bordered" id="scrollableTableContainer">
                          <table class="table mb-0 table-striped contracts-list-table">
                              <thead class="table-dark">
                                  <tr>
                                      <th></th>
                                      <th>Category</th>
                                      <th>Type</th>
                                      <th>Contract Name</th>
                                      <th>Contract Manager</th>
                                      <th>Telephone</th>
                                      <th>Email</th>
                                      <th>Cost or Income</th>
                                      <th>Currency</th>
                                      <th>Amount</th>
                                      <th>Payment Period</th>
                                      <th>Start Date</th>
                                      <th>End Date</th>
                                      <th>Notice Period (month(s))</th>
                                      <th>Company</th>
                                      <th>Contact Name</th>
                                      <th>Telephone</th>
                                      <th>Email</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>1</td>
                                      <td>
                                      <select class="form-select radius-20" aria-label=".form-select-sm example">
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
                                      </td>
                                      <td>
                                        <select class="form-select radius-20" aria-label=".form-select-sm example">
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
                                      </td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td>
                                        <select class="form-select w-100 radius-20" aria-label=".form-select-sm example">
                                          <option disabled selected hidden value="">Select</option>
                                          <option value="1">Cost</option>
                                          <option value="1">Income</option>
                                        </select>
                                      </td>
                                      <td>
                                        <select class="form-select w-100 radius-20" aria-label=".form-select-sm example">
                                          <option disabled selected hidden value="">Select</option>
                                          <option value="1">SEK</option>
                                          <option value="2">USD</option>
                                          <option value="3">EUR</option>
                                          <option value="4">GBP</option>
                                          <option value="5">PLN</option>
                                        </select>
                                      </td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td>
                                        <select class="form-select w-100 radius-20" aria-label=".form-select-sm example">
                                          <option disabled selected hidden value="">Select</option>
                                          <option value="1">Month</option>
                                          <option value="2">Quarter</option>
                                          <option value="3">Year</option>
                                          <option value="4">One Time</option>
                                        </select>
                                      </td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td>
                                        <select name="duration_notice_period" class="form-select form-control text-left" id="DurationNoticePeriod" aria-label="Month" required="">
                                          <option value="" disabled="" selected="" hidden="">Month(s)</option>
                                          <option value="0">No Notice Period</option>
                                          <option value="1">1 month</option>
                                          <option value="2">2 months</option>
                                          <option value="3">3 months</option>
                                          <option value="4">4 months</option>
                                          <option value="5">5 months</option>
                                          <option value="6">6 months</option>
                                          <option value="7">7 months</option>
                                          <option value="8">8 months</option>
                                          <option value="9">9 months</option>
                                          <option value="10">10 months</option>
                                          <option value="11">11 months</option>
                                          <option value="12">12 months</option>
                                        </select>
                                      </td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                  </tr>
                                  <tr>
                                      <td>2</td>
                                      <td>
                                      <select class="form-select radius-20" aria-label=".form-select-sm example">
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
                                      </td>
                                      <td>
                                        <select class="form-select radius-20" aria-label=".form-select-sm example">
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
                                      </td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td>
                                        <select class="form-select w-100 radius-20" aria-label=".form-select-sm example">
                                          <option disabled selected hidden value="">Select</option>
                                          <option value="1">Cost</option>
                                          <option value="1">Income</option>
                                        </select>
                                      </td>
                                      <td>
                                        <select class="form-select w-100 radius-20" aria-label=".form-select-sm example">
                                          <option disabled selected hidden value="">Select</option>
                                          <option value="1">SEK</option>
                                          <option value="2">USD</option>
                                          <option value="3">EUR</option>
                                          <option value="4">GBP</option>
                                          <option value="5">PLN</option>
                                        </select>
                                      </td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td>
                                        <select class="form-select w-100 radius-20" aria-label=".form-select-sm example">
                                          <option disabled selected hidden value="">Select</option>
                                          <option value="1">Month</option>
                                          <option value="2">Quarter</option>
                                          <option value="3">Year</option>
                                          <option value="4">One Time</option>
                                        </select>
                                      </td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td>
                                        <select name="duration_notice_period" class="form-select form-control text-left" id="DurationNoticePeriod" aria-label="Month" required="">
                                          <option value="" disabled="" selected="" hidden="">Month(s)</option>
                                          <option value="0">No Notice Period</option>
                                          <option value="1">1 month</option>
                                          <option value="2">2 months</option>
                                          <option value="3">3 months</option>
                                          <option value="4">4 months</option>
                                          <option value="5">5 months</option>
                                          <option value="6">6 months</option>
                                          <option value="7">7 months</option>
                                          <option value="8">8 months</option>
                                          <option value="9">9 months</option>
                                          <option value="10">10 months</option>
                                          <option value="11">11 months</option>
                                          <option value="12">12 months</option>
                                        </select>
                                      </td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                  </tr>
                                  <tr>
                                      <td>3</td>
                                      <td>
                                      <select class="form-select radius-20" aria-label=".form-select-sm example">
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
                                      </td>
                                      <td>
                                        <select class="form-select radius-20" aria-label=".form-select-sm example">
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
                                      </td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td>
                                        <select class="form-select w-100 radius-20" aria-label=".form-select-sm example">
                                          <option disabled selected hidden value="">Select</option>
                                          <option value="1">Cost</option>
                                          <option value="1">Income</option>
                                        </select>
                                      </td>
                                      <td>
                                        <select class="form-select w-100 radius-20" aria-label=".form-select-sm example">
                                          <option disabled selected hidden value="">Select</option>
                                          <option value="1">SEK</option>
                                          <option value="2">USD</option>
                                          <option value="3">EUR</option>
                                          <option value="4">GBP</option>
                                          <option value="5">PLN</option>
                                        </select>
                                      </td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td>
                                        <select class="form-select w-100 radius-20" aria-label=".form-select-sm example">
                                          <option disabled selected hidden value="">Select</option>
                                          <option value="1">Month</option>
                                          <option value="2">Quarter</option>
                                          <option value="3">Year</option>
                                          <option value="4">One Time</option>
                                        </select>
                                      </td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td>
                                        <select name="duration_notice_period" class="form-select form-control text-left" id="DurationNoticePeriod" aria-label="Month" required="">
                                          <option value="" disabled="" selected="" hidden="">Month(s)</option>
                                          <option value="0">No Notice Period</option>
                                          <option value="1">1 month</option>
                                          <option value="2">2 months</option>
                                          <option value="3">3 months</option>
                                          <option value="4">4 months</option>
                                          <option value="5">5 months</option>
                                          <option value="6">6 months</option>
                                          <option value="7">7 months</option>
                                          <option value="8">8 months</option>
                                          <option value="9">9 months</option>
                                          <option value="10">10 months</option>
                                          <option value="11">11 months</option>
                                          <option value="12">12 months</option>
                                        </select>
                                      </td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                  </tr>
                                  <tr>
                                      <td>4</td>
                                      <td>
                                      <select class="form-select radius-20" aria-label=".form-select-sm example">
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
                                      </td>
                                      <td>
                                        <select class="form-select radius-20" aria-label=".form-select-sm example">
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
                                      </td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td>
                                        <select class="form-select w-100 radius-20" aria-label=".form-select-sm example">
                                          <option disabled selected hidden value="">Select</option>
                                          <option value="1">Cost</option>
                                          <option value="1">Income</option>
                                        </select>
                                      </td>
                                      <td>
                                        <select class="form-select w-100 radius-20" aria-label=".form-select-sm example">
                                          <option disabled selected hidden value="">Select</option>
                                          <option value="1">SEK</option>
                                          <option value="2">USD</option>
                                          <option value="3">EUR</option>
                                          <option value="4">GBP</option>
                                          <option value="5">PLN</option>
                                        </select>
                                      </td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td>
                                        <select class="form-select w-100 radius-20" aria-label=".form-select-sm example">
                                          <option disabled selected hidden value="">Select</option>
                                          <option value="1">Month</option>
                                          <option value="2">Quarter</option>
                                          <option value="3">Year</option>
                                          <option value="4">One Time</option>
                                        </select>
                                      </td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td>
                                        <select name="duration_notice_period" class="form-select form-control text-left" id="DurationNoticePeriod" aria-label="Month" required="">
                                          <option value="" disabled="" selected="" hidden="">Month(s)</option>
                                          <option value="0">No Notice Period</option>
                                          <option value="1">1 month</option>
                                          <option value="2">2 months</option>
                                          <option value="3">3 months</option>
                                          <option value="4">4 months</option>
                                          <option value="5">5 months</option>
                                          <option value="6">6 months</option>
                                          <option value="7">7 months</option>
                                          <option value="8">8 months</option>
                                          <option value="9">9 months</option>
                                          <option value="10">10 months</option>
                                          <option value="11">11 months</option>
                                          <option value="12">12 months</option>
                                        </select>
                                      </td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                  </tr>
                                  <tr>
                                      <td>5</td>
                                      <td>
                                      <select class="form-select radius-20" aria-label=".form-select-sm example">
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
                                      </td>
                                      <td>
                                        <select class="form-select radius-20" aria-label=".form-select-sm example">
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
                                      </td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td>
                                        <select class="form-select w-100 radius-20" aria-label=".form-select-sm example">
                                          <option disabled selected hidden value="">Select</option>
                                          <option value="1">Cost</option>
                                          <option value="1">Income</option>
                                        </select>
                                      </td>
                                      <td>
                                        <select class="form-select w-100 radius-20" aria-label=".form-select-sm example">
                                          <option disabled selected hidden value="">Select</option>
                                          <option value="1">SEK</option>
                                          <option value="2">USD</option>
                                          <option value="3">EUR</option>
                                          <option value="4">GBP</option>
                                          <option value="5">PLN</option>
                                        </select>
                                      </td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td>
                                        <select class="form-select w-100 radius-20" aria-label=".form-select-sm example">
                                          <option disabled selected hidden value="">Select</option>
                                          <option value="1">Month</option>
                                          <option value="2">Quarter</option>
                                          <option value="3">Year</option>
                                          <option value="4">One Time</option>
                                        </select>
                                      </td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td>
                                        <select name="duration_notice_period" class="form-select form-control text-left" id="DurationNoticePeriod" aria-label="Month" required="">
                                          <option value="" disabled="" selected="" hidden="">Month(s)</option>
                                          <option value="0">No Notice Period</option>
                                          <option value="1">1 month</option>
                                          <option value="2">2 months</option>
                                          <option value="3">3 months</option>
                                          <option value="4">4 months</option>
                                          <option value="5">5 months</option>
                                          <option value="6">6 months</option>
                                          <option value="7">7 months</option>
                                          <option value="8">8 months</option>
                                          <option value="9">9 months</option>
                                          <option value="10">10 months</option>
                                          <option value="11">11 months</option>
                                          <option value="12">12 months</option>
                                        </select>
                                      </td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                  </tr>
                                  <tr>
                                      <td>6</td>
                                      <td>
                                      <select class="form-select radius-20" aria-label=".form-select-sm example">
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
                                      </td>
                                      <td>
                                        <select class="form-select radius-20" aria-label=".form-select-sm example">
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
                                      </td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td>
                                        <select class="form-select w-100 radius-20" aria-label=".form-select-sm example">
                                          <option disabled selected hidden value="">Select</option>
                                          <option value="1">Cost</option>
                                          <option value="1">Income</option>
                                        </select>
                                      </td>
                                      <td>
                                        <select class="form-select w-100 radius-20" aria-label=".form-select-sm example">
                                          <option disabled selected hidden value="">Select</option>
                                          <option value="1">SEK</option>
                                          <option value="2">USD</option>
                                          <option value="3">EUR</option>
                                          <option value="4">GBP</option>
                                          <option value="5">PLN</option>
                                        </select>
                                      </td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td>
                                        <select class="form-select w-100 radius-20" aria-label=".form-select-sm example">
                                          <option disabled selected hidden value="">Select</option>
                                          <option value="1">Month</option>
                                          <option value="2">Quarter</option>
                                          <option value="3">Year</option>
                                          <option value="4">One Time</option>
                                        </select>
                                      </td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td>
                                        <select name="duration_notice_period" class="form-select form-control text-left" id="DurationNoticePeriod" aria-label="Month" required="">
                                          <option value="" disabled="" selected="" hidden="">Month(s)</option>
                                          <option value="0">No Notice Period</option>
                                          <option value="1">1 month</option>
                                          <option value="2">2 months</option>
                                          <option value="3">3 months</option>
                                          <option value="4">4 months</option>
                                          <option value="5">5 months</option>
                                          <option value="6">6 months</option>
                                          <option value="7">7 months</option>
                                          <option value="8">8 months</option>
                                          <option value="9">9 months</option>
                                          <option value="10">10 months</option>
                                          <option value="11">11 months</option>
                                          <option value="12">12 months</option>
                                        </select>
                                      </td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                  </tr>
                                  <tr>
                                      <td>7</td>
                                      <td>
                                      <select class="form-select radius-20" aria-label=".form-select-sm example">
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
                                      </td>
                                      <td>
                                        <select class="form-select radius-20" aria-label=".form-select-sm example">
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
                                      </td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td>
                                        <select class="form-select w-100 radius-20" aria-label=".form-select-sm example">
                                          <option disabled selected hidden value="">Select</option>
                                          <option value="1">Cost</option>
                                          <option value="1">Income</option>
                                        </select>
                                      </td>
                                      <td>
                                        <select class="form-select w-100 radius-20" aria-label=".form-select-sm example">
                                          <option disabled selected hidden value="">Select</option>
                                          <option value="1">SEK</option>
                                          <option value="2">USD</option>
                                          <option value="3">EUR</option>
                                          <option value="4">GBP</option>
                                          <option value="5">PLN</option>
                                        </select>
                                      </td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td>
                                        <select class="form-select w-100 radius-20" aria-label=".form-select-sm example">
                                          <option disabled selected hidden value="">Select</option>
                                          <option value="1">Month</option>
                                          <option value="2">Quarter</option>
                                          <option value="3">Year</option>
                                          <option value="4">One Time</option>
                                        </select>
                                      </td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td>
                                        <select name="duration_notice_period" class="form-select form-control text-left" id="DurationNoticePeriod" aria-label="Month" required="">
                                          <option value="" disabled="" selected="" hidden="">Month(s)</option>
                                          <option value="0">No Notice Period</option>
                                          <option value="1">1 month</option>
                                          <option value="2">2 months</option>
                                          <option value="3">3 months</option>
                                          <option value="4">4 months</option>
                                          <option value="5">5 months</option>
                                          <option value="6">6 months</option>
                                          <option value="7">7 months</option>
                                          <option value="8">8 months</option>
                                          <option value="9">9 months</option>
                                          <option value="10">10 months</option>
                                          <option value="11">11 months</option>
                                          <option value="12">12 months</option>
                                        </select>
                                      </td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                  </tr>
                                  <tr>
                                      <td>8</td>
                                      <td>
                                      <select class="form-select radius-20" aria-label=".form-select-sm example">
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
                                      </td>
                                      <td>
                                        <select class="form-select radius-20" aria-label=".form-select-sm example">
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
                                      </td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td>
                                        <select class="form-select w-100 radius-20" aria-label=".form-select-sm example">
                                          <option disabled selected hidden value="">Select</option>
                                          <option value="1">Cost</option>
                                          <option value="1">Income</option>
                                        </select>
                                      </td>
                                      <td>
                                        <select class="form-select w-100 radius-20" aria-label=".form-select-sm example">
                                          <option disabled selected hidden value="">Select</option>
                                          <option value="1">SEK</option>
                                          <option value="2">USD</option>
                                          <option value="3">EUR</option>
                                          <option value="4">GBP</option>
                                          <option value="5">PLN</option>
                                        </select>
                                      </td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td>
                                        <select class="form-select w-100 radius-20" aria-label=".form-select-sm example">
                                          <option disabled selected hidden value="">Select</option>
                                          <option value="1">Month</option>
                                          <option value="2">Quarter</option>
                                          <option value="3">Year</option>
                                          <option value="4">One Time</option>
                                        </select>
                                      </td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td>
                                        <select name="duration_notice_period" class="form-select form-control text-left" id="DurationNoticePeriod" aria-label="Month" required="">
                                          <option value="" disabled="" selected="" hidden="">Month(s)</option>
                                          <option value="0">No Notice Period</option>
                                          <option value="1">1 month</option>
                                          <option value="2">2 months</option>
                                          <option value="3">3 months</option>
                                          <option value="4">4 months</option>
                                          <option value="5">5 months</option>
                                          <option value="6">6 months</option>
                                          <option value="7">7 months</option>
                                          <option value="8">8 months</option>
                                          <option value="9">9 months</option>
                                          <option value="10">10 months</option>
                                          <option value="11">11 months</option>
                                          <option value="12">12 months</option>
                                        </select>
                                      </td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                  </tr>
                                  <tr>
                                      <td>9</td>
                                      <td>
                                      <select class="form-select radius-20" aria-label=".form-select-sm example">
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
                                      </td>
                                      <td>
                                        <select class="form-select radius-20" aria-label=".form-select-sm example">
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
                                      </td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td>
                                        <select class="form-select w-100 radius-20" aria-label=".form-select-sm example">
                                          <option disabled selected hidden value="">Select</option>
                                          <option value="1">Cost</option>
                                          <option value="1">Income</option>
                                        </select>
                                      </td>
                                      <td>
                                        <select class="form-select w-100 radius-20" aria-label=".form-select-sm example">
                                          <option disabled selected hidden value="">Select</option>
                                          <option value="1">SEK</option>
                                          <option value="2">USD</option>
                                          <option value="3">EUR</option>
                                          <option value="4">GBP</option>
                                          <option value="5">PLN</option>
                                        </select>
                                      </td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td>
                                        <select class="form-select w-100 radius-20" aria-label=".form-select-sm example">
                                          <option disabled selected hidden value="">Select</option>
                                          <option value="1">Month</option>
                                          <option value="2">Quarter</option>
                                          <option value="3">Year</option>
                                          <option value="4">One Time</option>
                                        </select>
                                      </td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td>
                                        <select name="duration_notice_period" class="form-select form-control text-left" id="DurationNoticePeriod" aria-label="Month" required="">
                                          <option value="" disabled="" selected="" hidden="">Month(s)</option>
                                          <option value="0">No Notice Period</option>
                                          <option value="1">1 month</option>
                                          <option value="2">2 months</option>
                                          <option value="3">3 months</option>
                                          <option value="4">4 months</option>
                                          <option value="5">5 months</option>
                                          <option value="6">6 months</option>
                                          <option value="7">7 months</option>
                                          <option value="8">8 months</option>
                                          <option value="9">9 months</option>
                                          <option value="10">10 months</option>
                                          <option value="11">11 months</option>
                                          <option value="12">12 months</option>
                                        </select>
                                      </td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                  </tr>
                                  <tr>
                                      <td>10</td>
                                      <td>
                                      <select class="form-select radius-20" aria-label=".form-select-sm example">
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
                                      </td>
                                      <td>
                                        <select class="form-select radius-20" aria-label=".form-select-sm example">
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
                                      </td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td>
                                        <select class="form-select w-100 radius-20" aria-label=".form-select-sm example">
                                          <option disabled selected hidden value="">Select</option>
                                          <option value="1">Cost</option>
                                          <option value="1">Income</option>
                                        </select>
                                      </td>
                                      <td>
                                        <select class="form-select w-100 radius-20" aria-label=".form-select-sm example">
                                          <option disabled selected hidden value="">Select</option>
                                          <option value="1">SEK</option>
                                          <option value="2">USD</option>
                                          <option value="3">EUR</option>
                                          <option value="4">GBP</option>
                                          <option value="5">PLN</option>
                                        </select>
                                      </td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td>
                                        <select class="form-select w-100 radius-20" aria-label=".form-select-sm example">
                                          <option disabled selected hidden value="">Select</option>
                                          <option value="1">Month</option>
                                          <option value="2">Quarter</option>
                                          <option value="3">Year</option>
                                          <option value="4">One Time</option>
                                        </select>
                                      </td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td>
                                        <select name="duration_notice_period" class="form-select form-control text-left" id="DurationNoticePeriod" aria-label="Month" required="">
                                          <option value="" disabled="" selected="" hidden="">Month(s)</option>
                                          <option value="0">No Notice Period</option>
                                          <option value="1">1 month</option>
                                          <option value="2">2 months</option>
                                          <option value="3">3 months</option>
                                          <option value="4">4 months</option>
                                          <option value="5">5 months</option>
                                          <option value="6">6 months</option>
                                          <option value="7">7 months</option>
                                          <option value="8">8 months</option>
                                          <option value="9">9 months</option>
                                          <option value="10">10 months</option>
                                          <option value="11">11 months</option>
                                          <option value="12">12 months</option>
                                        </select>
                                      </td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                      <td><input type="text" class="form-control pe-4 radius-20"></td>
                                  </tr>
                                  
                                 

                                  <!-- Add more rows as needed -->
                              </tbody>
                          </table>
                        </div>
                        <div class="scroll-hint scroll-right" id="scrollRight"><i class='bx bx-chevron-right'></i></div>
                        <div class="scroll-hint scroll-left" id="scrollLeft" style="display: none;"><i class='bx bx-chevron-left'></i></div>
                        
                      </div>
                      <div class="d-flex justify-content-end pt-2">
                          <button class="btn btn-primary radius-20 mt-2 mt-lg-0 px-3 font-12">Import Data</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--end page wrapper -->
    @endsection
    
    @section("script")
    <!-- <script src="{{URL::asset('assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js')}}"></script> -->

    <script>
      $(window).on('load', function () {
        const scrollContainer = $('#scrollableTableContainer');
        const scrollRight = $('#scrollRight');
        const scrollLeft = $('#scrollLeft');

        // Ensure the container is scrollable
        if (scrollContainer.length === 0) {
            console.error('Error: Scrollable container not found.');
            return;
        }

        // Function to check and toggle visibility of arrows
        function checkScroll() {
            const scrollLeftPos = scrollContainer.scrollLeft();
            const scrollWidth = scrollContainer[0].scrollWidth;
            const containerWidth = scrollContainer.outerWidth();

            console.log("ScrollLeft:", scrollLeftPos, "ScrollWidth:", scrollWidth, "ContainerWidth:", containerWidth);

            // Ensure there is scrollable content
            if (!scrollWidth || containerWidth >= scrollWidth) {
                scrollRight.hide();
                scrollLeft.hide();
                return;
            }

            // Show/hide the left arrow based on the scroll position
            if (scrollLeftPos > 0) {  // Show left arrow if scrolled to the right even a bit
                scrollLeft.show();
            } else {
                scrollLeft.hide();
            }

            // Show/hide the right arrow based on the scroll position
            if (scrollLeftPos + containerWidth >= scrollWidth) {
                scrollRight.hide();  // Hide right arrow if scrolled to the end
            } else {
                scrollRight.show();  // Show right arrow if not at the end
            }
        }

        // Scroll to the right
        scrollRight.on('click', function () {
            console.log("Right arrow clicked");
            scrollContainer.animate({
                scrollLeft: scrollContainer.scrollLeft() + 500
            }, 300, function () {
                console.log("Scrolled to the right");
                checkScroll();  // Recheck scroll after scrolling
            });
        });

        // Scroll to the left
        scrollLeft.on('click', function () {
            console.log("Left arrow clicked");
            scrollContainer.animate({
                scrollLeft: scrollContainer.scrollLeft() - 500
            }, 300, function () {
                console.log("Scrolled to the left");
                checkScroll();  // Recheck scroll after scrolling
            });
        });

        // Monitor scroll event to toggle arrow visibility
        scrollContainer.on('scroll', function () {
            checkScroll();
        });

        // Initial check on page load
        checkScroll();
    });
    </script>
    @endsection