@extends("layouts.app")

@section("style")
<!-- <link href="assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css" rel="stylesheet" /> -->
<link href="{{URL::asset('assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/bs-stepper/css/bs-stepper.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datetimepicker/css/classic.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datetimepicker/css/classic.time.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datetimepicker/css/classic.date.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{URL::asset('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.min.css')}}">
<link href="{{URL::asset('assets/plugins/jsteps/jquery-steps.css')}}" rel="stylesheet" />

<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />

@endsection
@section("content")
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <div class="register-steps-wrapper d-flex gap-4">
            <div class="card register-steps step-app">
                <div class="card-body">
                    <div class="stepper4 bs-stepper gap-4 vertical linear">
                        <div class="bs-stepper-header">
                            <div class="step-steps">
                                <div class="step done">
                                    <div class="step-trigger">
                                      <div class="bs-stepper-circle"><i class='bx bx-check-circle'></i></div>
                                      <div class="">
                                          <h5 class="mb-0 steper-title">{{ __('contracts.steps_page.sidebar_folder') }}</h5>
                                      </div>
                                    </div>
                                </div>
                                <div data-step-target="step1" class="step step1">
                                    <div class="step-trigger">
                                      <div class="bs-stepper-circle"><i class="bx bx-file fs-5"></i></div>
                                      <div class="">
                                          <h5 class="mb-0 steper-title">{{ __('contracts.steps_page.sidebar_contract') }}</h5>
                                      </div>
                                    </div>
                                </div>
                                @if ($folder->id != 13)
                                <div data-step-target="step2" class="step step2">
                                    <div class="step-trigger">
                                      <div class="bs-stepper-circle"><i class='bx bx-wallet'></i></div>
                                      <div class="">
                                          <h5 class="mb-0 steper-title">{{ __('contracts.steps_page.sidebar_amount') }}</h5>
                                      </div>
                                    </div>
                                </div>
                                @endif
                                <div data-step-target="step3" class="step">
                                    <div class="step-trigger">
                                      <div class="bs-stepper-circle"><i class="bx bx-calendar fs-5"></i></div>
                                      <div class="">
                                          <h5 class="mb-0 steper-title">{{ __('contracts.steps_page.sidebar_date') }}</h5>
                                      </div>
                                    </div>
                                </div>
                                <div data-step-target="step4" class="step">
                                    <div class="step-trigger">
                                    <div class="bs-stepper-circle"><i class="bx bx-alarm fs-5"></i></div>
                                    <div class="">
                                        <h5 class="mb-0 steper-title">{{ __('contracts.steps_page.sidebar_reminder') }}</h5>
                                    </div>
                                    </div>
                                </div>
                                <div data-step-target="step5" class="step">
                                    <div class="step-trigger">
                                    <div class="bs-stepper-circle"><i class="bx bx-briefcase fs-5"></i></div>
                                    <div class="">
                                        <h5 class="mb-0 steper-title">{{ __('contracts.steps_page.sidebar_counterparty') }}</h5>
                                    </div>
                                    </div>
                                </div>
                                <div data-step-target="step6" class="step">
                                    <div class="step-trigger">
                                    <div class="bs-stepper-circle"><i class="bx bx-paperclip fs-5"></i></div>
                                    <div class="">
                                        <h5 class="mb-0 steper-title">{{ __('contracts.steps_page.sidebar_attach') }}</h5>
                                    </div>
                                    </div>
                                </div>
                                <div data-step-target="step7" class="step">
                                    <div class="step-trigger">
                                    <div class="bs-stepper-circle"><i class='bx bx-edit-alt'></i></div>
                                    <div class="">
                                        <h5 class="mb-0 steper-title">{{ __('contracts.steps_page.sidebar_notes') }}</h5>
                                    </div>
                                    </div>
                                </div>
                            </div>
                       </div>

                      <div class="bs-stepper-content step-content">
                            <!-- <form onsubmit="return false"> -->
                            <div class="bs-stepper-pane content fade dstepper-block step-tab-panel step1-content" data-step="step1">
                                <h5 class="bs-stepper-content__title">{{ __('contracts.steps_page.title_contract') }}</h5>
                                <form  name="frmFirstStep" id="frmFirstStep">
                                    <div class="row g-3 pe-2 ps-2 pb-2">
                                        <div class="col-12 col-lg-12">
                                            <div class="col-6 col-lg-6 mb-3">
                                                <span class="border px-2 py-2 rounded fs-08" style="border-color:{{ $folder->color }}!important;color:{{ $folder->color }}">
                                                @if (app()->getLocale() === 'en')
                                                {{ $folder->name }}
                                                @else
                                                    {{ $folder->name_sv }}
                                                @endif
                                            </span>
                                                <input type="hidden" name="contract_folder_id" value="{{ $folder->id }}">
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <label for="ContractType" class="form-label"><span class="font-color-7">*</span> {{ __('contracts.steps_page.fields.contract_type') }}</label>
                                            <select name="contract_type_id" class="form-select" id="ContractType" aria-label="ContractType">
                                                <option disabled selected>{{ __('contracts.select') }}</option>
                                                @foreach($folder->subcategories as $type)
                                                    <option value="{{ $type->id }}">
                                                        @if (app()->getLocale() === 'en')
                                                        {{ $type->name }}
                                                        @else
                                                            {{ $type->name_sv }}
                                                        @endif
                                                    </option>
                                                @endforeach
                                                <option value="optional">{{ __('contracts.steps_page.fields.optional') }}</option>
                                            </select>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <label for="ContractName" class="form-label"><span class="font-color-7">*</span> {{ __('contracts.steps_page.fields.contract_name') }}</label>
                                            <input name="contract_name" type="text" class="form-control" id="ContractName" placeholder="{{ __('contracts.title') }}" required>
                                        </div>
                                        <div class="col-6 col-lg-6 ContractTypeOptionalGroup" style="display:none;">
                                            <input name="ContractTypeOptional" type="text" class="form-control" id="ContractTypeOptional" placeholder="{{ __('contracts.steps_page.fields.contract_optional_title') }}">
                                        </div>
                                        <hr class="mt-5">
                                        <div class="col-6 col-lg-6">
                                            <label for="ContractOwner" class="form-label"><span class="font-color-7">*</span> {{ __('contracts.steps_page.fields.contract_owner') }}</label>
                                            <!-- <input name="contract_owner" type="text" class="form-control" id="ContractOwner" placeholder="Name" required> -->
                                            <select name="contract_owner" class="form-select" id="ContractOwner" aria-label="ContractOwner" required>
                                                <option disabled selected>{{ __('contracts.select') }}</option>
                                                <option value="0">David Karlsson</option>
                                                <option value="1">Martina Falk</option>
                                                <option value="2">Daniel Andersson</option>
                                            </select>

                                        </div>
                                        <div class="col-6 col-lg-6">
                                        </div>
                                        <div class="col-6 col-lg-6 mt-4">
                                            <label for="ContractTelephone" class="form-label">{{ __('contracts.steps_page.fields.contract_phone') }}</label>
                                            <input name="contract_telephone" type="text" class="form-control" id="ContractTelephone" readonly placeholder="{{ __('contracts.steps_page.fields.contract_phone') }}">
                                        </div>
                                        <div class="col-6 col-lg-6 mt-4">
                                            <label for="ContractEmail" class="form-label">{{ __('contracts.steps_page.fields.contract_email') }}</label>
                                            <input name="contract_email" type="text" class="form-control" id="ContractEmail" readonly placeholder="{{ __('contracts.steps_page.fields.contract_email') }}">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            @if ($folder->id != 13)
                            <div class="bs-stepper-pane content fade step-tab-panel" data-step="step2">
                                <h5 class="bs-stepper-content__title">{{ __('contracts.steps_page.title_amount') }}</h5>
                                <form name="frmSecondStep" id="frmSecondStep">
                                    <div class="row g-3 pe-2 ps-2">
                                        <div class="col-6 col-lg-6">
                                            <label for="AmountType" class="form-label"><span class="font-color-7">*</span> {{ __('contracts.steps_page.fields.contract_cost_type') }}</label>
                                            <select name="amount_type" class="form-select" id="AmountType" aria-label="Currency" required>
                                                <option disabled selected hidden value="">{{ __('contracts.select') }}</option>
                                                <option value="0">{{ __('contracts.steps_page.fields.contract_cost_type_cost') }}</option>
                                                <option value="1">{{ __('contracts.steps_page.fields.contract_cost_type_income') }}</option>
                                            </select>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <label for="AmountPaymentPeriod" class="form-label"><span class="font-color-7">*</span> {{ __('contracts.steps_page.fields.currencies') }}</label>
                                            <select name="amount_payment_period" class="form-select" id="AmountPaymentPeriod" aria-label="Currency" required>
                                                <option disabled selected hidden value="">{{ __('contracts.select') }}</option>
                                                @foreach($currencies as $key => $currency)
                                                    <option value="{{ $key }}">{{ $currency }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row g-3 pe-2 ps-2 pt-4">
                                        <div class="col-6 col-lg-6">
                                            <label for="AmountValue" class="form-label"><span class="font-color-7">*</span> {{ __('contracts.steps_page.fields.contract_amount') }}</label>
                                            <input name="amount_value" type="text" class="form-control" id="AmountValue" placeholder="{{ __('contracts.steps_page.fields.contract_amount') }}" required>
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <label for="AmountPaymentPeriod" class="form-label"><span class="font-color-7">*</span> {{ __('contracts.steps_page.fields.payment_period') }}</label>
                                            <select name="amount_payment_period" class="form-select" id="AmountPaymentPeriod" aria-label="Currency" required>
                                                <option disabled selected hidden value="">{{ __('contracts.select') }}</option>
                                                @foreach($payment_periods as $key => $period)
                                                    @if($key != 0)
                                                        <option value="{{ $key }}">{{ $period }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                           @endif
                            <div class="bs-stepper-pane content fade step-tab-panel" data-step="step3">
                                <h5 class="bs-stepper-content__title">{{ __('contracts.steps_page.title_date') }}</h5>
                                <form name="frmThirdStep" id="frmThirdStep">
                                    <div class="row g-3 pe-2 ps-2">
                                        <!-- <div class="row  mt-3"> -->
                                            <div class="col-6 col-lg-6">
                                                <div class="text-left">
                                                    <label for="DurationStartDate" class="form-label"><span class="font-color-7">*</span> {{ __('contracts.steps_page.fields.start_date') }}</label>
                                                    <div class="datepicker-wrap">
                                                        <input name="duration_start_date" id="DurationStartDate" placeholder="{{ __('contracts.valid_from') }}" class="form-control text-left datepicker" type="text" required />
                                                        <i class='bx bx-calendar'></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-lg-6">
                                                <div class="text-left">
                                                    <label for="DurationEndDate" class="form-label"><span class="font-color-7">*</span> {{ __('contracts.steps_page.fields.end_date') }}</label>
                                                    <div class="datepicker-wrap">
                                                        <input name="duration_end_date" id="DurationEndDate" placeholder="{{ __('contracts.valid_to') }}" class="form-control text-left datepicker" type="text" required/>
                                                        <i class='bx bx-calendar'></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-lg-6 text-left mt-4">
                                                <label for="DurationNoticePeriod" class="form-label"><span class="font-color-7">*</span> {{ __('contracts.steps_page.fields.notice_period') }}</label>
                                                <div class="datepicker-wrap">
                                                    <select name="duration_notice_period" class="form-select form-control text-left" id="DurationNoticePeriod" aria-label="Month" required>
                                                        <option value="" disabled selected hidden>{{ __('contracts.month') }}</option>
                                                        @foreach($notice_periods as $key => $period)
                                                            <option value="{{ $key }}">{{ $period }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                    </div>
                                </form>
                            </div>
                            <div class="bs-stepper-pane content fade step-tab-panel step4 step-reminder" data-step="step4">
                                <h5 class="bs-stepper-content__title">{{ __('contracts.steps_page.title_reminder') }}</h5>
                                <form name="frmFourthStep" id="frmFourthStep">
                                    <div class="set-reminder-area" >
                                        <div class="row g-3 pe-2 ps-2 mb-2" >
                                           <!--  <div class="form-check col-6 col-lg-6 ps-2">
                                                <label for="SetReminder" class="form-label"><span class="font-color-7">*</span> {{ __('contracts.steps_page.fields.set_reminder') }}</label>
                                                <select name="set_reminder" class="form-select" id="SetReminder" aria-label="Currency" required>
                                                    <option disabled selected hidden value="">{{ __('contracts.select') }}</option>
                                                    <option value="1">{{ __('general.yes') }}</option>
                                                    <option value="2">{{ __('general.no') }}</option>
                                                </select>
                                            </div> -->
                                            <div class="col-6 col-lg-6 set-reminder-area__item" >
                                                <label for="ReminderDate" class="form-label"><span class="font-color-7">*</span> {{ __('contracts.steps_page.fields.reminder_select') }}</label>
                                                <select name="reminder_date" class="form-select" id="ReminderDate" aria-label="Currency" required>
                                                    <option disabled selected hidden value="">{{ __('contracts.select') }}</option>
                                                    <option value="1">{{ __('contracts.steps_page.fields.notice_period') }}</option>
                                                    <option value="2">{{ __('contracts.steps_page.fields.reminder_end_date') }}</option>
                                                </select>
                                            </div>
                                            <div class="col-6 col-lg-6 reminded-date d-none justify-content-start ps-3">
                                                <span class="reminded-date__val"></span>
                                            </div>
                                        </div>
                                        <div class="row g-3 pe-2 ps-2 mt-2 set-reminder-area__item" >
                                            <div class="col-6 col-lg-6">
                                                <label for="ReminderType" class="form-label"><span class="font-color-7">*</span> {{ __('contracts.steps_page.fields.reminder_select_title') }}</label>
                                                <select name="reminder_type" class="form-select" id="ReminderType" aria-label="Currency" disabled>
                                                    <option disabled selected hidden value="">{{ __('contracts.select') }}</option>
                                                    @foreach($reminder_types as $key => $type)
                                                        <option value="{{ $key }}">{{ $type }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-6 col-lg-6">
                                                <label for="ReminderNoticeDate" class="form-label ReminderNoticeDate"><span class="font-color-7">*</span> {{ __('contracts.steps_page.fields.reminder_before') }}</label>
                                                <select name="reminder_notice_date" class="form-select" id="ReminderNoticeDate" aria-label="Currency" disabled>
                                                    <option disabled selected hidden value="">{{ __('contracts.steps_page.fields.days') }}</option>
                                                    @foreach($notice_days as $key => $value)
                                                        <option value="{{ $key }}">{{ $value }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-6 col-lg-6">
                                            </div>
                                            <div class="col-6 col-lg-6">
                                                <!-- <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="ReminderRepeatYearly" disabled>
                                                    <label name="reminder_repeat_yearly" class="form-check-label" for="ReminderRepeatYearly">{{ __('contracts.steps_page.fields.reminder_yearly') }}</label>
                                                </div> -->
                                            </div>
                                             <div class="col-12 col-lg-12 mt-2">
                                                <div class="mb-3 text-left">
                                                    <label for="reminderEmails" class="form-label"><span class="font-color-7">*</span> {{ __('contracts.steps_page.fields.reminder_recipients') }}</label>
                                                    <div class="d-flex p-relative select2-icon-group">
                                                        <i class='bx bx-envelope'></i>
                                                        <select class="form-control js-example-tags" id="reminderEmails" name="reminder_emails[]" multiple="multiple" disabled>
                                                          <!-- <option selected="selected"></option> -->
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="bs-stepper-pane content fade step-tab-panel" data-step="step5">
                                <h5 class="bs-stepper-content__title">{{ __('contracts.steps_page.title_counterparty') }}</h5>
                                <form name="frmFifthStep" id="frmFifthStep">
                                    <div class="row g-3 pe-2 ps-2 mb-4">
                                        <div class="col-6 col-lg-6">
                                            <label for="CounterpartyCompanyName" class="form-label"><span class="font-color-7">*</span> {{ __('contracts.steps_page.fields.counterparty_company') }}</label>
                                            <input name="counterparty_company_name" type="text" required class="form-control" id="CounterpartyCompanyName" placeholder="{{ __('contracts.number') }}" required>
                                        </div>
                                        <hr class="mt-5">
                                        <div class="col-6 col-lg-6">
                                            <label for="CounterpartyPersonName" class="form-label">{{ __('contracts.steps_page.fields.counterparty_person') }}</label>
                                            <input name="counterparty_person_name" type="text" class="form-control" id="CounterpartyPersonName" placeholder="{{ __('contracts.steps_page.fields.counterparty_person') }}">
                                        </div>
                                    </div>
                                    <div class="row g-3 pe-2 ps-2">
                                        <div class="col-6 col-lg-6">
                                            <label for="CounterpartyTelephone" class="form-label">{{ __('contracts.steps_page.fields.counterparty_phone') }}</label>
                                            <input name="counterparty_telephone" type="text" class="form-control" id="CounterpartyTelephone" placeholder="{{ __('contracts.steps_page.fields.counterparty_phone') }}">
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <label for="CounterpartyEmail" class="form-label">{{ __('contracts.steps_page.fields.counterparty_email') }}</label>
                                            <input name="counterparty_email" type="text" class="form-control" id="CounterpartyEmail" placeholder="{{ __('contracts.steps_page.fields.counterparty_email') }}">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="bs-stepper-pane content fade step-tab-panel step-attach" data-step="step6">
                                <h5 class="bs-stepper-content__title">{{ __('contracts.steps_page.title_attach') }}</h5>
                                <form name="frmSixthStep" id="frmSixthStep">
                                    <div class="row g-3">
                                        <div class="mb-3">
                                            <div class="col-12 col-lg-12">
                                                <label for="AttachDocumentType" class="form-label">{{ __('contracts.steps_page.fields.contract_type') }}</label>
                                                <select name="attach_document_type" class="form-select mb-3" id="AttachDocumentType" aria-label="AttachDocumentType" required>
                                                    <option disabled selected hidden value="">{{ __('contracts.select') }}</option>
                                                    @foreach($file_types as $key => $file_type)
                                                        <option value="{{ $key }}">{{ $file_type }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <!-- <label for="inputProductDescription" class="form-label">Documents</label> -->
                                            <input name="attach_document_file" id="image-uploadify" style="display: none;" type="file" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple required>

                                            <div style="display: none;" class="col-6 col-lg-6 mt-4 online_agreement_area">
                                                <label for="AttachDocumentLink" class="form-label">{{ __('contracts.Link') }}</label>
                                                <input name="attach_document_link" type="text" class="form-control" id="AttachDocumentLink" placeholder="{{ __('contracts.add_url') }}">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="bs-stepper-pane content fade step-tab-panel" data-step="step7">
                                <h5 class="bs-stepper-content__title">{{ __('contracts.steps_page.title_notes') }}</h5>
                                <form name="frmSeventhStep" id="frmSeventhStep">
                                    <div class="row g-3">
                                        <div class="col-12 col-lg-12">
                                            <!-- <label for="Comments" class="form-label">Comments</label> -->
                                            <!-- <textarea type="textarea" class="form-control mb-4 textarea" rows="6" id="notesArea" placeholder="Type here.."></textarea> -->
                                            <textarea name="comment_area" id="CommentArea" type="textarea" class="form-control mb-4 textarea" rows="6" placeholder="{{ __('contracts.type_here') }}"></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="steps-buttons-wrapper">
                                <div class="steps-buttons step-footer">
                                    <a class="btn btn-outline-secondary back-static" href="{{ url('/contract/register') }}">{{ __('general.back_button') }}</a>
                                    <button data-step-action="prev" class="step-btn btn btn-outline-secondary prev-btn">{{ __('general.back_button') }}</button>
                                    <button data-step-action="next" class="step-btn btn btn-primary next-btn" disabled>{{ __('general.next_button') }}</button>
                                   <button  type="sybmit" data-step-action="finish" class="step-btn btn btn-primary finish save-all-steps">{{ __('general.finish_button') }}</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>

        <div class="register-steps__actions mt-3">
            <div class="ms-auto">
                <div>
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

<script src="{{URL::asset('assets/js/jquery-validator.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jsteps/jquery-steps.js')}}"></script>
<script src="{{URL::asset('assets/js/jsteps-script.js')}}"></script>
<!-- <script src="{{URL::asset('assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script> -->


<script src="{{URL::asset('assets/plugins/datetimepicker/js/legacy.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datetimepicker/js/picker.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datetimepicker/js/picker.time.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datetimepicker/js/picker.date.js')}}"></script>
<script src="{{URL::asset('assets/plugins/bootstrap-material-datetimepicker/js/moment.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js')}}"></script>
<script src="{{URL::asset('assets/js/tinymce.min.js')}}"></script>

<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>


<script>
$(document).ready(function () {

    ////////--------------------- 1ST STEP --------------------////////
    // Function to check if all required fields are filled
    // Function to check if all required fields are filled
   function checkRequiredFields(form) {
let allFilled = true;
$(form + ' [required]').each(function () {
    if (!$(this).val()) {
        allFilled = false;
        return false;
    }
});
return allFilled;
}

function toggleNextButton() {
let currentStepForm = $('.bs-stepper-pane.active form');
if (checkRequiredFields('#' + currentStepForm.attr('id'))) {
    $('.next-btn').prop('disabled', false);
} else {
    $('.next-btn').prop('disabled', true);
}
}

function handleDynamicRequiredField(selectField, optionalGroup, optionalField) {
$(selectField).change(function() {
    if ($(this).val() == 'optional') {
        $(optionalGroup).show(100);
        $(optionalField).prop('required', true).on('input change', function () {
            toggleNextButton();
        });
    } else {
        $(optionalGroup).hide(100);
        $(optionalField).prop('required', false).off('input change');
    }
    toggleNextButton();
});
}

// Apply to the first step
$('#frmFirstStep [required]').on('input change', function () {
toggleNextButton();
});
handleDynamicRequiredField('#ContractType', '.ContractTypeOptionalGroup', '#ContractTypeOptional');

// Apply to the second step
$('#frmSecondStep [required]').on('input change', function () {
toggleNextButton();
});

// Apply to the third step
$('#frmThirdStep [required]').on('input change', function () {
toggleNextButton();
});

// Apply to the fifth step
$('#frmFifthStep [required]').on('input change', function () {
toggleNextButton();
});

// Apply to the sixth step
$('#frmSixthStep [required]').on('input change', function () {
toggleNextButton();
});

// Handle dynamic requirement for the sixth step
$('#AttachDocumentType').change(function () {
if ($(this).val() == 7) { // Online Agreement
    $('.online_agreement_area').show(100);
    $('#AttachDocumentLink').prop('required', true).on('input change', function () {
        toggleNextButton();
    });
    $('#image-uploadify').hide(100).prop('required', false).off('input change');
    $('.imageuploadify').hide(100);
} else {
    $('.online_agreement_area').hide(100);
    $('#AttachDocumentLink').prop('required', false).off('input change');
    $('#image-uploadify').show(100).on('input change', function () {
        toggleNextButton();
    });
    $('.imageuploadify').show(100);
}
toggleNextButton();
});

// Initial check to disable the "Next" button if required fields are not filled
toggleNextButton();

// Re-check on step change
$('.next-btn, .prev-btn, .step').on('click', function() {
toggleNextButton();
});


    $(".js-change-emails-summary").select2({
        tags: true,
        // disabled : false
    });
    // $('.steps-summary__group .select2-container--default').hide();
    // $('.steps-summary__group--edit').on('click',function() {
     // $('.product-list__price--value').hide();
     // $('.product-list__price--text').show();
     // var t = $(this).text();
     // var product_id =  $(this).attr('data-prodid');
     // $(this).hide();
    // if($(this).hasClass('active-edit')){
    //     $(this).parents('.steps-summary__group').find('.changeble-text').removeClass('temp-hidden');
    //     $(this).parents('.steps-summary__group').find('input[name=\'summary-field-changeble\']').hide(50);
    //     $(this).parents('.steps-summary__group').find('select[name=\'summary-field-changeble\']').hide(50);
    //     $(this).parents('.steps-summary__group').find('textarea[name=\'summary-field-changeble\']').hide(50);
    //     $(this).parents('.steps-summary__group').find('.summary-field-changeble').hide(50);
    //     $('.steps-summary__group .select2-container--default').hide(100);
    //     // $(".js-change-emails-summary").select2({
    //         // tags: false
    //     // });
    //     $(".js-emails-changeble").show(100);

    //     $(this).parents('.steps-summary__group').find('.changeble-text').show(100);
    //     $(this).removeClass('active-edit');
    // }else{
    //     $(".js-emails-changeble").hide(100);

    //     $(this).addClass('active-edit');
    //     $('.steps-summary__group').find('.changeble-text').removeClass('temp-hidden');
    //     $('.steps-summary__group').find('.changeble-text').show(100);
    //     $('.steps-summary__group').find('input[name=\'summary-field-changeble\']').hide(50);
    //     $('.steps-summary__group').find('select[name=\'summary-field-changeble\']').hide(50);
    //     $('.steps-summary__group').find('textarea[name=\'summary-field-changeble\']').hide(50);
    //     // $('.steps-summary__group .select2-container--default').show(50);
    //     $(".js-change-emails-summary").select2({
    //         tags: true,
    //         disabled : false
    //     });
    //     if($(this).parents('.steps-summary__group').find('.changeble-text').hasClass('temp-hidden')){
    //         $(this).parents('.steps-summary__group').find('.changeble-text').removeClass('temp-hidden');
    //         $(this).parents('.steps-summary__group').find('input[name=\'summary-field-changeble\']').hide(50);
    //         $(this).parents('.steps-summary__group').find('select[name=\'summary-field-changeble\']').hide(50);
    //         $(this).parents('.steps-summary__group').find('textarea[name=\'summary-field-changeble\']').hide(50);
    //         $(this).parents('.steps-summary__group').find('.summary-field-changeble').hide(50);
    //         $('.steps-summary__group .select2-container--default').hide(50);
    //         // $(".js-change-emails-summary").select2({
    //             // tags: false
    //         // });
    //         $(this).parents('.steps-summary__group').find('.changeble-text').show(100);
    //     }else{
    //         $(this).parents('.steps-summary__group').find('.changeble-text').hide(50);
    //         $(this).parents('.steps-summary__group').find('.changeble-text').addClass('temp-hidden');
    //         $(this).parents('.steps-summary__group').find('input[name=\'summary-field-changeble\']').show(100);
    //         $(this).parents('.steps-summary__group').find('select[name=\'summary-field-changeble\']').show(100);
    //         // $(this).parents('.steps-summary__group').find('textarea[name=\'summary-field-changeble\']').show(100);
    //         $(this).parents('.steps-summary__group').find('.summary-field-changeble').show(100);
    //         $('.steps-summary__group .select2-container--default').show(50);
    //         // $(".js-change-emails-summary").select2({
    //         //     tags: true,
    //         //     disabled : false
    //         // });
    //     }
    // }
    // if(!$(this).hasClass('active-edit')){
    //     if(!$(this).parents('.steps-summary__group').find('.changeble-text').hasClass('temp-hidden')){

    //         // if($(this).parents('.steps-summary__group').find('textarea[name=\'summary-field-changeble\']')){
    //             // console.log('+++222');
    //             tinymce.init({
    //               selector: '#notesAreaOverview',
    //               toolbar: 'undo redo | styles | bold italic | link image | forecolor | backcolor',
    //               menubar: false
    //             });
    //         // }

    //     }

    // }

     // $(this)
     // $('input[name=\'product-list-changeble_price--' + product_id + '\']').select().delay( 50 );
    // });



    // $('.steps-summary__group--edit').change(function() {
    //     $(this).parents('.steps-summary__group').find('.editable-fld').attr()
    // });

    $('#image-uploadify').imageuploadify();

    $('.imageuploadify .imageuploadify-images-list').css('pointer-events','none');
    $('.imageuploadify .btn-default').css('pointer-events','none');
    $('.imageuploadify').css('pointer-events','none');


    $('.datepicker').pickadate({
        selectMonths: true,
        selectYears: true
    })
    $(".js-example-tags").select2({
        tags: true
    });



    // $('input[type=radio][name=SetReminder]').change(function() {
    //      if (this.value == 'SetReminderOn') {
    //         $('.set-reminder-area__item').show(100);
    //     }else{
    //         $('.set-reminder-area__item').hide(100);
    //     }
    // });




    $('#ContractOwner').change(function() {
        if($(this).val() == 0){
            $('#ContractTelephone').val('073 774 88 93');
            $('#ContractEmail').val('david@info.se');
        }
        if($(this).val() == 1){
            $('#ContractTelephone').val('073 774 88 93');
            $('#ContractEmail').val('martina@info.se');
        }
        if($(this).val() == 2){
            $('#ContractTelephone').val('073 774 88 93');
            $('#ContractEmail').val('daniel@info.se');
        }
    });


    // $('#TerminationType').change(function() {
    //     if($(this).val() == 1){
    //         $('#TerminationTypeValue').attr("placeholder", "Write email...");
    //         $('#TerminationTypeValue').removeClass('d-none');
    //         $('.TerminationTypeValueLetter').addClass('d-none');
    //     }
    //     if($(this).val() == 2){
    //         $('#TerminationTypeValue').attr("placeholder", "Write telephone number...");
    //         $('#TerminationTypeValue').removeClass('d-none');
    //         $('.TerminationTypeValueLetter').addClass('d-none');
    //     }
    //     if($(this).val() == 3){
    //         $('#TerminationTypeValue').addClass('d-none');
    //         $('.TerminationTypeValueLetter').removeClass('d-none');
    //     }
    // });


    $('#ReminderDate').change(function() {
        if($(this).val() == 1){
            $('.reminded-date__val').html('Notice Period Expires: <b style="color:red"> June 06, 2024 </b> ');
            $('.ReminderNoticeDate').html('<span class="font-color-7">*</span> Remind me before Notice Period');
            $('.reminded-date').removeClass('d-none');
        }
        if($(this).val() == 2){
            $('.reminded-date__val').html('End Date Expires: <b style="color:red"> Aug 2, 2024 </b> ');
            $('.ReminderNoticeDate').html('<span class="font-color-7">*</span> Remind me before End Date');
            $('.reminded-date').removeClass('d-none');
        }
    });

    $('#SetReminder').change(function() {
        if($(this).val() == 1){
            $('.set-reminder-area__item').show(100);
        }
        if($(this).val() == 2){
            $('.set-reminder-area__item').hide(100);
            $('.steps-buttons .next-btn').trigger('click');
        }
    });

    $('#ReminderDate').change(function() {
        if($(this).val() == 1 || $(this).val() == 2){
            $('#ReminderType').removeAttr('disabled');
        }
    });
    $('#ReminderType').change(function() {
        if($(this).val() == 1 || $(this).val() == 2 || $(this).val() == 3){
            $('#ReminderNoticeDate').removeAttr('disabled');
            $('#ReminderRepeatYearly').removeAttr('disabled');
        }
    });
    $('#ReminderNoticeDate').change(function() {
        if($(this).val()){
            $('#reminderEmails').removeAttr('disabled');
        }
    });
    $('.next-btn, .prev-btn, .step').click(function() {
        if($('.step1').hasClass('done')){
            $('.back-static').hide();
            // $('.back-static').css('display','none');
        }else{
            $('.back-static').show();
        }

        if($('.step-attach').hasClass('active') || $('.step-reminder').hasClass('active')){
                $('.next-btn').text('Skip');
        }else{
            $('.next-btn').text('Next');
        }

    });


    $('#ReminderDate').change(function() {
        if($(this).val() > 0 ){
            $('.step-btn.next-btn').attr('disabled','disabled');
            $('.next-btn').text('Next');
        }

    });
    $('#SetReminder').change(function() {
        if($(this).val() == 2 ){
            $('.step-btn.next-btn').removeAttr('disabled');
        }else if($(this).val() == 1){
            if( ($('#ReminderDate').val() > 0) && ($('#ReminderType').val() > 0) && ($('#ReminderNoticeDate').val() > 0) && ($('#reminderEmails').val() > 0)){
                $('.step-btn.next-btn').removeAttr('disabled');
            }
        }
    });
    $('#reminderEmails').change(function() {
        if($('#reminderEmails').val() != ''){
            $('.step-btn.next-btn').removeAttr('disabled');
        }
    });


    $('#AttachDocumentType').change(function() {
        if($(this).val() > 0 ){
            $('.online_agreement_area').hide(100);
            $('#image-uploadify').hide(100);
            $('.imageuploadify').show(100);
            $('.imageuploadify .imageuploadify-images-list').css('pointer-events','initial');
            $('.imageuploadify .btn-default').css('pointer-events','initial');
            $('.imageuploadify').css('pointer-events','initial');
            $('.step-btn.next-btn').attr('disabled','disabled');
            $('.next-btn').text('Next');
        }
        if($(this).val() == 7 ){
            $('#image-uploadify').hide(100);
            $('.imageuploadify').hide(100);
            $('.online_agreement_area').show(100);
            $('.step-btn.next-btn').attr('disabled','disabled');
            $('.next-btn').text('Next');
            // $('.imageuploadify .imageuploadify-images-list').css('pointer-events','initial');
            // $('.imageuploadify .btn-default').css('pointer-events','initial');
            // $('.imageuploadify').css('pointer-events','initial');
        }
    });





    function checkFiles() {
        const files = $('#image-uploadify')[0].files;
        if (files.length > 0) {
            $('.step-btn.next-btn').removeAttr('disabled');
        } else {
            $('.step-btn.next-btn').attr('disabled','disabled');
        }
    }

    $('#image-uploadify').on('change', function() {
        checkFiles();
    });
    $('#AttachDocumentLink').on('input', function() {
        // Check if input field is empty
        if ($(this).val().trim() !== '') {
            // Input field is not empty, enable the button
            $('.step-btn.next-btn').removeAttr('disabled');
        } else {
            // Input field is empty, disable the button
            $('.step-btn.next-btn').attr('disabled','disabled');
        }
    });

    // $('.set-reminder-area')

    tinymce.init({
      selector: '#notesArea',
      toolbar: 'undo redo | styles | bold italic | link image | forecolor | backcolor',
      menubar: false
    });


    // $('.finish').click(function() {
        // $('.save-all-steps2').click(function () {
        //     var currentForm = $(this).closest('.step-form');

        //     // Collect data from the final step
        //     currentForm.find(':input').each(function () {
        //         var input = $(this);
        //         if (input.attr('name')) {
        //             formData[input.attr('name')] = input.val();
        //         }
        //     });

        //     // Send all collected data via AJAX
        //     $.ajax({
        //         url: "{{ route('save.step') }}",
        //         method: 'POST',
        //         data: {
        //             _token: $('input[name="_token"]').val(),
        //             contract_data: formData
        //         },
        //         success: function (response) {
        //             if (response.success) {
        //                 alert('Form submitted successfully!');
        //                 // Optionally, redirect or perform other actions
        //             } else {
        //                 alert('Error saving data');
        //             }
        //         },
        //         error: function (xhr) {
        //             alert('An error occurred');
        //         }
        //     });
        // });
    // });

    $('.pdf-link').click(function(event) {
        event.preventDefault(); // Prevent the default link behavior
        var newSrc = $(this).data('src'); // Get the data-src attribute value
        $('#pdfViewer').attr('src', newSrc); // Change the src of the embed element
    });

});
$(document).ready(function() {
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('.finish.save-all-steps').click(function(e) {
  e.preventDefault();

  var contractData = {};

  $('input').each(function() {
    var input = $(this);
    contractData[input.attr('name')] = input.val();
});

// Select all select elements and get their names and values
$('select').each(function() {
    var select = $(this);
    contractData[select.attr('name')] = select.val();
});

// Select all textarea elements and get their names and values
$('textarea').each(function() {
    var textarea = $(this);
    contractData[textarea.attr('name')] = textarea.val();
});

contractData['_token'] = '{{ csrf_token() }}';

  $.ajax({
      url: '{{ route('contract.store') }}',
      type: 'POST',
      data: contractData,
      success: function(response) {
          // alert('Contract saved successfully');
          // Optionally, redirect or update the UI
          // window.location.href = '/contract/' + response.id;
      },
      error: function(xhr) {
          var errors = xhr.responseJSON.errors;
          $.each(errors, function(key, value) {
              console.log(value[0]); // Display error messages
          });
      }
  });
});
});
// attach-send-email
</script>
@endsection
