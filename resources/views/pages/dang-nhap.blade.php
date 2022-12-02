<!DOCTYPE html>
<html lang="en">

@include('pages.head')

<body aria-hidden="false" cz-shortcut-listen="true">
    <div class="modal fade show" id="modalLogin" tabindex="-1" aria-labelledby="exampleModalLabel"
        style="display: block; background-color: antiquewhite;" aria-modal="true" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <a href="{{ route('index') }}" class="modal-header">
                    <button type="button" style="height: 37px;border: none;
                        width: 40px;
                        border-radius: 10px;" data-bs-dismiss="modal" aria-label="Close">
                        <svg style="width: 20px; height: 20px;border-radius: 100%;" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                        </svg>
                    </button>
                </a>
                <div class="modal-body">
                    <div class="logo-modal">
                        <img src="https://xemthanso.vn/storage/12345-1.png" alt="Xem thần số">
                    </div>
                    <form method="POST" id="form-login" action="{{ route('login') }}">
                        @csrf
                        <h3 class="text-center text-uppercase font2 mb-3 bold700">Đăng Nhập</h3>
                        @if(Session::get('error'))
                            <div class="alert alert-danger">
                                {{ Session::get('error') }}
                            </div>
                        @endif
                        <div id="alert-login" class="input-error text-left mt-1 justify-content-center m-2"
                            style="display: none">
                            <img src="/themes/thansohoc/asset/images/icon/warning.svg" alt=""> <span></span>
                        </div>
                        <div class="form-info mb-3">
                            <input type="text" class="form-control" name="email" placeholder="Nhập email của bạn ">
                            <div id="error_email_login" class="input-error text-left mt-1 justify-content-center"
                                style="display: none">
                                <img src="/themes/thansohoc/asset/images/icon/warning.svg" alt=""> <span></span>
                            </div>
                        </div>
                        <div class="form-info mb-3 eyes">
                            <input id="password" type="password" class="form-control" name="password"
                                placeholder="Nhập mật khẩu ">
                            <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            <div id="error_password_login" class="input-error text-left mt-1 justify-content-center"
                                style="display: none">
                                <img src="/themes/thansohoc/asset/images/icon/warning.svg" alt=""> <span></span>
                            </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="remember" type="checkbox" value="" id="flexRemember">
                            <label class="form-check-label" for="flexRemember">
                                Nhớ tài khoản
                            </label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button id="login-form" type="submit" class="btn btn-primary btn-submit">Đăng Nhập</button>
                        </div>
                        <div class="text-center p-2">
                            <span>Bạn chưa có tài khoản? </span>
                            <a href="/dang-ki" style="margin-right: 5px; cursor:pointer">Đăng ký</a>
                        </div>
                        <div class="text-center p-2">
                            <a href="/quen-mat-khau" style="margin-right: 5px; cursor:pointer">Quên mật khẩu?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</html>
