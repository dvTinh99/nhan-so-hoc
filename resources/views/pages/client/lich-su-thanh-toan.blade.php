@include('layouts.header')
<div class="header-mobile" id="menu-box">
    <div class="menu-mobile">
        <ul>
            <li><a href="/">Trang chủ</a></li>

            <li>
                <a class=" drop-down" data-bs-toggle="collapse" data-bs-target="#components-collapse" aria-expanded="false" aria-current="true">
                    Số chủ đạo <svg style="width:16px;float: right;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                    </svg>

                </a>

                <div class="collapse" id="components-collapse">
                    <ul class="list-unstyled fw-normal ">
                        <li><a href="sochudao.html">Cách tìm số chủ đạo</a></li>
                        <li><a href="ynghiasochudao.html">Ý nghĩa số chủ đạo</a></li>

                    </ul>
                </div>
            </li>

            <li>
                <a class=" drop-down" data-bs-toggle="collapse" data-bs-target="#helpers-collapse" aria-expanded="false" aria-controls="collapseExample">
                    Biểu đồ ngày sinh <svg style="width:16px;float: right;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                    </svg>
                </a>

                <div class="collapse" id="helpers-collapse">
                    <ul class="list-unstyled fw-normal ">
                        <li><a href="bieudongaysinh.html">Ý nghĩa biểu đồ ngày sinh</a></li>
                        <li><a href="ynghiaconso.html">Ý nghĩa các con số trên biểu đồ</a></li>
                        <li><a href="ynghiatrentrucso.html">Ý nghĩa các mũi tên trên trục số</a></li>

                    </ul>
                </div>
            </li>

            <li>
                <a class=" drop-down" data-bs-toggle="collapse" data-bs-target="#about-collapse" aria-expanded="false">
                    Sức mạnh của tên <svg style="width:16px;float: right;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                    </svg>
                </a>

                <div class="collapse" id="about-collapse">
                    <ul class="list-unstyled fw-normal">
                        <li><a href="solinhhonbieudattenrieng.html">Số linh hồn, biểu đạt,tên riêng</a>
                        </li>
                        <li><a href="ynghiasolinhhon.html">Ý nghĩa số linh hồn</a>
                        </li>
                        <li><a href="ynghiasobieudat.html">Ý nghĩa số biểu đạt</a></li>
                    </ul>
                </div>
            </li>

            <li>
                <a class=" drop-down" data-bs-toggle="collapse" data-bs-target="#user-collapse" style="font-weight:bold" aria-expanded="false">
                    Thông tin cá nhân
                    <svg style="width:20px;float: right;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd"></path>
                    </svg>

                </a>

                <div class="collapse" id="user-collapse">
                    <ul class="list-unstyled fw-normal">
                        <li><a href="####">vovannhodtu@gmail.com</a>
                        </li>
                        <li><a href="####"> Số lượt tra cứu: <strong class="text-primary">0
                                    lượt</strong></a>
                        </li>
                        <li><a href="lichsutracuu-user.html">Xem lịch sử tra
                                cứu</a></li>
                        <li><a href="lichsuthanhtoan-user.html">Xem lịch sử thanh toán</a></li>
                        <li><a href="doimatkhau.html">Đổi mật khẩu</a></li>
                        <li><a href="/dang-nhap"> Đăng xuất</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>

</div>
<script>
    var menuBox = document.getElementById('menu-box');
    function toggleMenu() {
        menuBox.classList.toggle('open')
    }
</script>
<div class="" style="margin: 120px 0px;align-items: center;">
    <div class="history-title mt-10">
        <h3 class="title font2 text-center">Lịch sử thanh toán</h3>
    </div>

    <div class="row justify-content-center my-5">
        <div class="col-12 col-md-12">
            <div class="tbl-history" style="overflow: scroll;">
                <table class="table table-borderless text-center">
                    <thead class="table-light">
                        <tr>
                            <td><strong>#</strong></td>
                            <td><strong>Tên</strong></td>
                            <td><strong>SĐT</strong></td>
                            <td><strong>Gói</strong></td>
                            <td><strong>Lượt tra cứu</strong></td>
                            <td><strong>Số tiền</strong></td>
                            <td><strong>Trạng thái</strong></td>
                            <td><strong>Ngày đăng ký</strong></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($paymentHistory as $key => $payment)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $payment->name_pack }}</td>
                                <td>{{ $payment->turn }}</td>
                                <td>{{ number_format($payment->price, 0, ',', '.')}}</td>
                                @if($payment->status == 1)
                                    <td><span class="text-danger">{{ config('status-parse')[$payment->status] }}</span></td>
                                @elseif($payment->status == 2)
                                    <td><span class="text-success">{{ config('status-parse')[$payment->status] }}</span></td>
                                @endif
                                <td>{{ $payment->created_at }}</td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>

                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
