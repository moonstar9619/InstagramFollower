@extends('layouts.frontend')
@section('content')
    @include('frontend.partials.nav')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-9 p-0 text-right bg-white rounded-top">
                <h5 class="bg-primary rounded-top pr-3 pb-3 pt-2">{{ isset($page_title)? $page_title:'' }}</h5>
                @yield('content')
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-9 m-0 p-0 bg-white">
                <div class="row justify-content-center">
                    <form class="was-validated col-md-10" method="post">

                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="form-group col-md-6 text-right mb-3">
                                <label class="mr-sm-2 col-form-label" for="packageList">پکیج ها :</label>
                                <select class="package_list custom-select is-invalid" name="packageList"
                                        id="packageList" required>
                                    <option value="0">انتخاب پکیج</option>
                                    @foreach($packages as $package)
                                        <option data-id="{{ $package->package_id }}"
                                                value="{{ $package->package_id }}">{{ $package->name }}</option>
                                    @endforeach
                                </select>
                                <div class="valid-feedback"></div>
                            </div>
                            <div class="form-group col-md-6 text-right mb-3 service_select">
                                <label class="mr-sm-2 col-form-label" for="serviceList">سرویس ها :</label>
                                <select class="service_list custom-select is-invalid" name="serviceList"
                                        id="serviceList">
                                    <option value="0">انتخاب سرویس</option>
                                    {{--@foreach($services as $service)
                                        <option value="{{ $service->service_id }}">{{ $service->name }}</option>
                                    @endforeach--}}
                                </select>
                                <div class="valid-feedback"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 text-right mb-3">
                                <label for="phone">شماره موبایل : </label>
                                <input type="text" class="form-control is-valid" name="phone" id="phone"
                                       value="{{ $phoneNumber }}" disabled>
                            </div>
                            <div class="col-md-6 text-right mb-3 linkWayDiv">
                                <label for="linkOrder">لینک به : </label>
                                <div id="linkWayInput"></div>
                                <div class="invalid-feedback">
                                    اجباری است !
                                </div>
                            </div>
                        </div>
                        <script>
                            $('.service_select').hide();
                            $('.linkWayDiv').hide();
                            $('.package_list').change(function () {
                                $('#linkWayInput').html('');
                                var url = '/frontend/packageList/' + $(this).val() + '/services/';
                                $.get(url, function (data) {
                                        var select = $('.service_list');
                                        select.empty();
                                        $('.service_select').slideDown();
                                        if (data.length != 0) {
                                            $.each(data, function (key, value) {
                                                select.append('<option value=' + value.service_id + '>' + value.name + '</option>');
                                            });
                                            if (data[0]['link_way'] == 1) {
                                                $placeholder = 'نام کاربری اینستاگرام خود را وارد نمایید.';
                                                $inputLinkOrderName = 'usernameLinkOrder';
                                            } else if (data[0]['link_way'] == 2) {
                                                $placeholder = 'لینک ویدئو را وارد نمایید.';
                                                $inputLinkOrderName = 'videoLinkOrder';
                                            } else if (data[0]['link_way'] == 3) {
                                                $placeholder = 'لینک تصویر را وارد نمایید.';
                                                $inputLinkOrderName = 'pictureLinkOrder';
                                            }
                                            $('.linkWayDiv').slideDown();

                                            $('#linkWayInput').append('<input type="text" class="form-control is-invalid"' +
                                                ' name="' + $inputLinkOrderName + '" id="' + $inputLinkOrderName + '"' +
                                                'value="" placeholder="' + $placeholder + '" required>');
                                        } else {
                                            select.append('<option value= "-1" > تاکنون سرویسی ثبت نشده است !</option>');
                                        }
                                    }
                                );
                            });
                        </script>
                        <script>
                            // service click script
                            $('.service_list').change(function () {
                                $('#linkWayInput').html('');
                                var url = '/frontend/serviceList/' + $(this).val() + '/services/';
                                $.get(url, function (data) {
                                        if (data == 1) {
                                            $placeholder = 'نام کاربری اینستاگرام خود را وارد نمایید.';
                                            $inputLinkOrderName = 'usernameLinkOrder';
                                        } else if (data == 2) {
                                            $placeholder = 'لینک ویدئو را وارد نمایید.';
                                            $inputLinkOrderName = 'videoLinkOrder';
                                        } else if (data == 3) {
                                            $placeholder = 'لینک تصویر را وارد نمایید.';
                                            $inputLinkOrderName = 'pictureLinkOrder';
                                        }
                                        $('.linkWayDiv').slideDown();

                                        $('#linkWayInput').append('<input type="text" class="form-control is-invalid"' +
                                            ' name="' + $inputLinkOrderName + '" id="' + $inputLinkOrderName + '"' +
                                            'value="" placeholder="' + $placeholder + '" required>');

                                    }
                                );
                            });
                        </script>
                        <div class="form-row justify-content-center mb-5">
                            @include('admin.partials.errors')
                            <div class="col-md-6">
                                    <button type="submit"
                                            class="btn btn-success btn-block mt-4 custom-btn-shadow custom-margin-top">
                                        ثبت
                                    </button>
                            </div>
                        </div>
                        @include('frontend.partials.success')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection