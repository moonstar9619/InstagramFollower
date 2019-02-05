<div class="row justify-content-center">
    <div class="col-lg-8">
        @include('admin.partials.errors')
        <form class="was-validated" method="post">
            {{ csrf_field() }}
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="name">نام سرویس : </label>
                    <input type="text" class="form-control is-invalid" name="name" id="name"
                           value="{{ old('name',isset($serviceItem)?$serviceItem->name:'') }}" required>
                    <div class="invalid-feedback">
                        نام سرویس باید حداقل 3 کاراکتر باشد.
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="price">قیمت : </label>
                    <input type="text" class="form-control is-invalid" name="price" id="price"
                           value="{{ old('price',isset($serviceItem)?$serviceItem->service_price:'') }}" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="service_link_way">نحوه لینک کردن : </label>
                    <select name="service_link_way" class="form-control" id="service_link_way">
                        <option value="0">انتخاب کنید</option>
                        @foreach($linkWays as $linkWayID => $linkWayTitle)
                            <option value="{{ $linkWayID }}" {{ isset($serviceItem)?($serviceItem->link_way == $linkWayID? 'selected':''):'' }}>{{ $linkWayTitle }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="service_package">پکیج مرتبط : </label>
                    <select name="service_package" class="form-control" id="service_package">
                        <option value="0">انتخاب کنید</option>
                        @foreach($packages as $package)
                            <option value="{{ $package->package_id }}" {{ isset($serviceItem)? ($serviceItem->package_id == $package->package_id ? 'selected': '') :'' }}>{{ $package->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success btn-block mb-4 custom-btn-shadow custom-margin-top">
                        ثبت
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>