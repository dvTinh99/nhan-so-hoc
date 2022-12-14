<!DOCTYPE html>
<html lang="en">

@include('pages.head')

<body aria-hidden="false" cz-shortcut-listen="true">
    <button type="button" class="mobile-nav-toggle d-lg-none" id="menu" onclick="toggleMenu()">
        <svg id="open" style="display: block;" xmlns="http://www.w3.org/2000/svg" width="32" height="54"
            fill="currentColor" class="bi bi-list " viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
        </svg>
        <svg id="close" style="display: none;" xmlns="http://www.w3.org/2000/svg" width="32" height="54"
            viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 none">
            <path fill-rule="evenodd"
                d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z"
                clip-rule="evenodd" />
        </svg>
    </button>
    <header id="header" class="fixed-top header-transparent">
        <div class="container d-flex align-items-center">
            <h1 class="logo mr-auto">
                <a href="{{ route('index') }}">
                    <img src="{{ asset('images/logo1.png') }}">
                    <span class="tx-16">
                        Nhân Số Học
                    </span>
                </a>
            </h1>
            <nav class="main-nav d-none d-lg-block">
                <ul>
                    @if (!@Auth::user())
                        @include('layouts.sub_menu_header')
                        <li style="display:flex">
                            <a href="{{ route('login') }}">
                                <button type="button" class="btn btn-primary btn-sm"
                                    style="border-radius: 50px;min-width: 96px; border: none;margin-right: 5px; ;">Đăng
                                    nhập</button>
                            </a>
                            <a href="{{ route('register') }}">
                                <button type="button" class="btn btn-secondary btn-sm"
                                    style="border-radius: 50px;min-width: 96px;border: none;">Đăng ký
                                </button>
                            </a>
                        </li>
                    @elseif(isAdmin(Auth::user()))
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Admin
                            </button>
                            <div class="dropdown-menu" style="">
                                <div class="profile-head">
                                    <div class="head">Thông tin cá nhân</div>
                                    <div class="menu-box">
                                        <a href="###"> {{ Auth::user()->email }}</a>
                                        <a href="/admin/quan-li-tai-khoan">Quản lý tài khoản</a>
                                        <a href="/admin/quan-li-tra-cuu">Quản lý tra cứu</a>
                                        <a href="/admin/quan-li-thanh-toan">
                                            Quản lý thanh toán</a>
                                        <a href="{{ route('logout') }}"> Đăng xuất</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        @include('layouts.sub_menu_header')
                        <li>
                            <!-- Example single danger button -->
                            <div class="btn-group">
                                <button style="border:none" type="button" class="btn btn-primary dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </button>
                                <div class="dropdown-menu" style="">
                                    <div class="profile-head">
                                        <div class="head"> <svg style="width:30px;" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                                <path fill-rule="evenodd"
                                                    d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg> Thông tin cá nhân</div>
                                        <div class="menu-box">
                                            <a> {{ Auth::user()->email }}</a>
                                            <a> Số lượt tra cứu: <strong class="text-primary"> {{ Auth::user()->turn_remaining }}
                                                    lượt</strong></a>
                                            <a href="/lich-su-tra-cuu"> Xem lịch sử tra
                                                cứu</a>
                                            <a href="/lich-su-thanh-toan"> Xem lịch sử thanh
                                                toán</a>
                                            <a href="/doi-mat-khau"> Đổi mật khẩu</a>
                                            <a href="{{ route('logout') }}"> Đăng xuất</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </li>
                    @endif
                </ul>
            </nav>
        </div>
    </header>
    <div class="header-mobile" id="menu-box">
        <div class="menu-mobile">
            <ul>
                <li><a href="{{ route('index') }}">Trang chủ</a></li>

                <li>
                    <a class=" drop-down" data-bs-toggle="collapse" data-bs-target="#components-collapse"
                        aria-expanded="false" aria-current="true">
                        Số chủ đạo <svg style="width:16px;float: right;" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>

                    </a>

                    <div class="collapse" id="components-collapse">
                        <ul class="list-unstyled fw-normal ">
                            <li><a href="{{ route('pages.so_chu_dao') }}">Cách tìm số chủ đạo</a></li>
                            <li><a href="{{ route('pages.y-nghia-so-chu-dao') }}">Ý nghĩa số chủ đạo</a></li>

                        </ul>
                    </div>
                </li>

                <li>
                    <a class=" drop-down" data-bs-toggle="collapse" data-bs-target="#helpers-collapse"
                        aria-expanded="false" aria-controls="collapseExample">
                        Biểu đồ ngày sinh <svg style="width:16px;float: right;" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
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
                    <a class=" drop-down" data-bs-toggle="collapse" data-bs-target="#about-collapse"
                        aria-expanded="false">
                        Sức mạnh của tên <svg style="width:16px;float: right;" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </a>

                    <div class="collapse" id="about-collapse">
                        <ul class="list-unstyled fw-normal">
                            <li><a href="https://nhansohoc.xyz/SinhTracVanTay">Số linh hồn, biểu đạt,tên riêng</a>
                            </li>
                            <li><a href="https://nhansohoc.xyz/SinhTracVanTay">Ý nghĩa số linh hồn</a>
                            </li>
                            <li><a href="https://nhansohoc.xyz/SinhTracVanTay">Ý nghĩa số biểu đạt</a></li>
                        </ul>
                    </div>
                </li>

                <li style="display:flex">
                    <a href="{{ route('login') }}">
                        <button type="button" class="btn btn-primary btn-sm"
                            style="border-radius: 50px;min-width: 96px; border: none; margin-right: 10px;">Đăng
                            nhập</button>
                    </a>
                    <a href="{{ route('register') }}">
                        <button type="button" class="btn btn-secondary btn-sm"
                            style="border-radius: 50px;min-width: 96px;border: none;">Đăng ký
                        </button>
                    </a>
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
