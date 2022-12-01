<!DOCTYPE html>
<!-- saved from url=(0022)https://nhansohoc.xyz/ -->
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="shortcut icon" href="https://nhansohoc.xyz/assets/img/favoicon.ico">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Nhân số học Việt Nam, xem nhân số học online, kim tự tháp đỉnh cao, xem sinh trắc vân tay online miễn phí, sách võ thuật, yoga miễn phí">
    <meta name="author" content="VHL">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link href="./style/css2.css" rel="stylesheet"> -->
    <!-- <link href="./style/css.css" rel="stylesheet"> -->
    <link href="./style/style.css" rel="stylesheet">
    <link href="./style/dashforge.css" rel="stylesheet">
    <link href="./style/form.css" rel="stylesheet">
    <!-- <link href="./style/font-awesome.min.css" rel="stylesheet"> -->

</head>

<body aria-hidden="false" cz-shortcut-listen="true">
    <div class="modal fade show" id="modalForgotPassword" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-modal="true" role="dialog" style="display: block; background-color: antiquewhite;">
        <div class="modal-dialog">
            <div class="modal-content">
                <a href="/dang-nhap" class="modal-header">
                    <button type="button" style="height: 37px;border: none;
                        width: 40px;
                        border-radius: 10px;">
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

                    <form method="POST" id="forgot-password-form" action="{{ route('forgot-password') }}">
                        @csrf
                        <h3 class="text-center text-uppercase font2 mb-3 bold700">Quên mật khẩu</h3>
                        @if(Session::get('error'))
                            <div class="alert alert-danger">
                                {{ Session::get('error') }}
                            </div>
                        @elseif(Session::get('success'))
                            <div class="alert alert-successom">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <div class="form-info mb-3">
                            <input type="text" class="form-control" name="email" placeholder="Nhập email của bạn ">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button id="forgot-password" type="submit" class="btn btn-primary btn-submit">Xác
                                nhận</button>
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
