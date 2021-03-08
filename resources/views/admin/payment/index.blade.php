@extends('mainpages.mainadmin')


@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <!--begin::Page Heading-->
                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                        <!--begin::Page Title-->

                        <h5 class="text-dark font-weight-bold my-1 mr-5">Settings</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item">
                                <a href="" class="text-muted">Admin</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="" class="text-muted">Setting</a>
                            </li>


                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page Heading-->
                </div>
                <!--end::Info-->
                <!--begin::Toolbar-->

                <!--end::Toolbar-->
            </div>
        </div>
        <!--end::Subheader-->
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header">
                    <h3 class="card-title">
                        Allowed Payment Methods
                    </h3>
                    </div>
                    <form action="{{route('payment-method-update')}}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="col-lg-12">
                                <div class="form-group form-check">
                                    <label for="default_payment_method">Default Payment Method</label>
                                    <select class="form-control" name="default_payment_method" id="default_payment_method">
                                        <option @if($settings->default_payment_method == 'Cash') selected @endif value="Cash">Cash</option>
                                        <option @if($settings->default_payment_method == 'Bookeey') selected @endif value="Bookeey">Bookeey</option>
                                        <option @if($settings->default_payment_method == 'Credit') selected @endif value="Credit">Credit</option>
                                        <option @if($settings->default_payment_method == 'Knet') selected @endif value="Knet">Knet</option>
                                    </select>
                                </div>
                                <div class="form-group form-check">
                                    <label for="Cash">Cash</label>
                                    <input type="checkbox" name="Cash" @if($settings->Cash) checked @endif id="Cash">
                                </div>
                                <div class="form-group form-check">
                                    <label for="Bookeey">Bookeey</label>
                                    <input type="checkbox" name="Bookeey" @if($settings->Bookeey) checked @endif id="Bookeey">
                                </div>
                                <div class="form-group form-check">
                                    <label for="Knet">Knet</label>
                                    <input type="checkbox" name="Knet" @if($settings->Knet) checked @endif id="Knet">
                                </div>
                                <div class="form-group form-check">
                                    <label for="Credit">Credit</label>
                                    <input type="checkbox" name="Credit" @if($settings->Credit) checked @endif id="Credit">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-success" type="submit" name="Submit" id="Submit" value="Update Settings">
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
                        <div class="card card-custom">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Site Setting
                                </h3>
                            </div>
                            <!--begin::Form-->
                            <form class="form" method="post" enctype="multipart/form-data" action="{{ url('admin/savebookey') }}">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group form-group-last">
                                        <div class="alert alert-custom alert-default" role="alert">
                                            <div class="alert-icon"><i class="flaticon-warning text-primary"></i></div>
                                            <div class="alert-text">
                                                This setting will effect you website.
                                                Payment Method Setting.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleTextarea">Bookey MID</label>

                                        <input class="form-control form-control-solid" value="{{ $setting?$setting->mid:'' }}" name="mid"
                                               placeholder="Enter Bookey Mid Key" type="text"/>

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleTextarea">Bookey Secrete Key:</label>

                                        <input class="form-control form-control-solid" name="secrete" value="{{ $setting?$setting->secrete:'' }}"
                                               placeholder="Enter Bookey Secrete Key" type="text"/>

                                    </div>
                                    <div class="form-group">
                                        <label for="submid">Bookey Sub MID:</label>

                                        <input class="form-control form-control-solid" name="submid" value="{{ $setting?$setting->submid:'' }}"
                                               placeholder="Enter Bookey Secrete Key" id="submid" type="text"/>

                                    </div>
                                    <div class="form-group">
                                        <label>Status({{ $setting?$setting->status:'' }})</label>
                                        <select class="form-control form-control-solid" name="status">
                                            <option value="Active" selected="selected" label="Active">Active</option>
                                            <option value="Inactive" label="Inactive">Inactive</option>

                                        </select>
                                    </div>

                                    <?php
                                    $tzlist = DateTimeZone::listIdentifiers(DateTimeZone::ALL);
                                    ?>










                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Cancel</button>
                                </div>
                            </form>
                            <!--end::Form-->
                        </div>

                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
@endsection

@section('js')
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js?v=7.0.5') }}"></script>
    <script src="{{ asset('/assets/editor/js/dataTables.editor.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/assets/editor/js/editor.bootstrap4.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/select2custom.js') }}"></script>
    <script src="{{ url('adminside/governmentandareas/areas.js') }}"></script>

    <script>
        $(document).ready(function (e) {
            $('#time_zone_select').select2();

        })

        var KTBootstrapTimepicker = function () {

            // Private functions
            var demos = function () {
                // minimum setup


                // default time



            return {
                // public functions
                init: function () {
                    demos();
                }
            };
        }();

        jQuery(document).ready(function () {
            KTBootstrapTimepicker.init();
        });
    </script>
@endsection

