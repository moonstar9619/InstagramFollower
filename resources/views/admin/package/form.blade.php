<div class="row justify-content-center">
    <div class="col-lg-8">
        @include('admin.partials.errors')
        <form class="was-validated" method="post">
            {{ csrf_field() }}
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="name">نام پکیج : </label>
                    <input type="text" class="form-control is-invalid" name="name" id="name"
                           value="{{ old('name', isset($packageItem)? $packageItem->name:'') }}" required>
                    <div class="invalid-feedback">
                        نام پکیج باید حداقل 3 کاراکتر باشد.
                    </div>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success btn-block mt-4 custom-btn-shadow custom-margin-top">
                        ثبت
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>