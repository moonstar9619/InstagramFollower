<div class="row justify-content-center">
    <div class="col-lg-8">
        @include('admin.partials.errors')
        <form class="was-validated" method="post">
            {{ csrf_field() }}
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="username">نام کامل : </label>
                    <input type="text" class="form-control is-valid" name="username" id="username"
                           value="{{ old('username', isset($userItem)? $userItem->name:'') }}">
                    <div class="valid-feedback">
                        اجباری نیست !
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="phone">شماره موبایل : </label>
                    <input type="text" class="form-control is-invalid" name="phone" id="phone"
                           value="{{ old('phone',isset($userItem)? $userItem->phone:'') }}" required>
                    <div class="invalid-feedback">
                        لطفا یک شماره موبایل معتبر وارد کنید.
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6 mb-3">
                    <label class="mr-sm-2 col-form-label" for="role">نقش کاربری :</label>
                    <select class="custom-select" name="role" id="role">
                        @foreach($userRoles as $roleID => $roleTitle)
                            <option value="{{ $roleID }}" {{ isset($userItem)?($userItem->role == $roleID? 'selected':''):'' }}>{{ $roleTitle }}</option>
                        @endforeach
                    </select>
                    <div class="valid-feedback"></div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="email">ایمیل : </label>
                    <input type="email" class="form-control is-invalid" id="email" name="email"
                           value="{{ old('email',isset($userItem)?$userItem->email:'') }}" required>
                    <div class="invalid-feedback">
                        لطفا یک ایمیل معتبر وارد کنید.
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="password">رمز عبور : </label>
                    <input type="password"
                           class="form-control {{ isset($userItem) && $userItem->password!= '' ? 'is-valid': 'is-invalid' }}"
                           id="password" name="password"
                            {{ isset($userItem) && $userItem->password!= '' ? '': 'required' }}>
                    <div class="{{ isset($userItem) && $userItem->password!= '' ? 'valid-feedback': 'invalid-feedback' }}">
                        رمز عبور شما میتواند حداقل 6 و حداکثر 18 کاراکتر باشد.
                    </div>
                </div>
            </div>
            <div class="form-row justify-content-center mb-5">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success btn-block mt-4 custom-btn-shadow custom-margin-top">
                        ثبت
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>