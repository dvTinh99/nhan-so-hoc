<!DOCTYPE html>
<html lang="en">

@include('pages.head')

<body aria-hidden="false" cz-shortcut-listen="true">
    <div class="modal fade show" id="modalRegister" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true"
        role="dialog" style="display: block; background-color:antiquewhite;">
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
                    <form action="{{ route('register') }}" method="post" id="form-register">
                        @csrf
                        <h3 class="text-center text-uppercase font2 mb-3 bold700">Đăng ký tài khoản</h3>
                        @if(Session::get('error'))
                            <div class="alert alert-danger">
                                {{ Session::get('error') }}
                            </div>
                        @endif
                        <div class="form-info mb-3">
                            <input type="text" required="" class="form-control" name="name" placeholder="Nhập Tên">
                            <div id="error_last_name_register" class="input-error text-left mt-1 justify-content-center"
                                style="display: none">
                                <img src="/themes/thansohoc/asset/images/icon/warning.svg" alt="">
                                <span></span>
                            </div>
                        </div>
                        <div class="form-info mb-3">
                            <input type="text" required="" class="form-control" name="email"
                                placeholder="Nhập email của bạn ">
                            <div id="error_email_register" class="input-error text-left mt-1 justify-content-center"
                                style="display: none">
                                <img src="/themes/thansohoc/asset/images/icon/warning.svg" alt="">
                            </div>
                        </div>
                        <div class="form-info mb-3">
                            <input type="text" required="" class="form-control" name="phone"
                                placeholder="Nhập đúng SĐT để không bỏ lỡ thông báo ưu đãi">
                            <div id="error_phone_register" class="input-error text-left mt-1 justify-content-center"
                                style="display: none">
                                <img src="/themes/thansohoc/asset/images/icon/warning.svg" alt="">
                                <span></span>
                            </div>
                        </div>
                        <div class="form-info mb-3 eyes">
                            <input id="password_register" type="password" required="" class="form-control"
                                name="password" placeholder="Nhập mật khẩu ">
                            <span toggle="#password_register" class="fa fa-fw fa-eye field-icon toggle-password"></span>

                            <div id="error_password_register" class="input-error text-left mt-1 justify-content-center"
                                style="display: none">
                                <img src="/themes/thansohoc/asset/images/icon/warning.svg" alt="">
                                <span></span>
                            </div>
                        </div>
                        <div class="form-info mb-3 eyes">
                            <input id="password_confirmation" type="password" required="" class="form-control"
                                name="password_confirmation" placeholder="Nhập Lại Mật khẩu">
                            <span toggle="#password_confirmation"
                                class="fa fa-fw fa-eye field-icon toggle-password"></span>

                            <div id="error_password_confirmation_register"
                                class="input-error text-left mt-1 justify-content-center" style="display: none">
                                <img src="/themes/thansohoc/asset/images/icon/warning.svg" alt="">
                                <span></span>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary btn-submit" id="register-form">Đăng ký</button>
                        </div>

                        <div class="text-center p-2">
                            <span>Bạn đã có tài khoản? </span>
                            <a href="/dang-nhap" style="margin-right: 5px;">Đăng
                                Nhập</a>
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
