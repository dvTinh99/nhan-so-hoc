<div class="section-package">
    <div class="container">
        <div class="row g-4">
            <div class="col-12">
                <h2 class=" font2 text-center mb-5">Các gói tra cứu thần số học</h2>
            </div>
            <div class="col col-md-4">
                <div class="package-item">
                    <div class="package-head">
                        <img src="{{ asset('images/logo1.png') }}" alt="">
                        <div class="head-title">
                            <h6>Tra cứu</h6>
                            <h4 class="bold700">Gói 1</h4>
                        </div>
                    </div>
                    <div class="package-price">
                        <div class="price-sale">
                            <span class="text-decoration-line-through">300,000</span>
                            <strong class="sale-percent">(-61
                                %)</strong>
                        </div>
                        <div class="price-main"><strong>119,000</strong> <span>/1 lượt</span>
                        </div>
                    </div>
                    <div class="package-info">
                        <h6 class="bold700">Bao gồm tra cứu</h6>
                        <ul>
                            <li><strong>01 bản báo cáo bản đầy đủ cho 1 người.&nbsp;</strong></li>
                            <li>1 Ebook "học thần số dễ dàng qua hình ảnh" độc quyền của xemthanso.vn.</li>
                            <li>Phù hợp với cá nhân</li>
                        </ul>
                    </div>
                    {{-- <a href="/thanh-toan"> --}}
                        <form action="/thanh-toan" method="POST">
                            @csrf
                            <input type="hidden" name="price" value="119000">
                            <input type="hidden" name="turn" value="1">
                            <input type="hidden" name="name_pack" value="Gói 1">
                            <button class="btn btn-primary btn-payment" data-bs-toggle="modal" data-package="1"
                                data-price="119,000đ" data-ndck="XTS + SỐ ĐIỆN THOẠI"
                                data-bs-target="#modalRegister">Thanh
                                toán
                            </button>
                        </form>
                    {{-- </a> --}}
                </div>
            </div>
            <div class="col col-md-4">
                <div class="package-item">
                    <div class="package-head">
                        <img src="{{ asset('images/logo1.png') }}" alt="">
                        <div class="head-title">
                            <h6>Tra cứu</h6>
                            <h4 class="bold700">Gói 2</h4>
                        </div>
                    </div>
                    <div class="package-price">
                        <div class="price-sale">
                            <span class="text-decoration-line-through">600,000</span>
                            <strong class="sale-percent">(-67
                                %)</strong>
                        </div>
                        <div class="price-main"><strong>199,000</strong> <span>/2 lượt</span>
                        </div>
                    </div>
                    <div class="package-info">
                        <h6 class="bold700">Bao gồm tra cứu</h6>
                        <ul>
                            <li><strong>02 bản báo cáo bản đầy đủ cho 2 người.&nbsp;</strong><br><strong>(chỉ còn
                                    99.000đ/1 bản)</strong></li>
                            <li>Tặng thêm 1 bản qua zalo dành cho khách hàng có 2 ngày sinh.&nbsp;</li>
                            <li>Phù hợp cho bạn thân, cặp đôi hoặc hai anh em.</li>
                            <li>1 Ebook "học thần số dễ dàng qua hình ảnh" độc quyền của xemthanso.vn</li>
                        </ul>
                    </div>
                    {{-- <a href="/thanh-toan"> --}}
                    <form action="/thanh-toan" method="POST">
                        @csrf
                        <input type="hidden" name="price" value="199000">
                        <input type="hidden" name="turn" value="2">
                        <input type="hidden" name="name_pack" value="Gói 2">
                        <button class="btn btn-primary btn-payment" data-bs-toggle="modal" data-package="2"
                            data-price="199,000đ" data-ndck="XTS + SỐ ĐIỆN THOẠI"
                            data-bs-target="#modalRegister">Thanh
                            toán
                        </button>
                    </form>
                    {{-- </a> --}}
                </div>
            </div>
            <div class="col col-md-4">
                <div class="package-item">
                    <span class="popular">PHỔ BIẾN</span>
                    <div class="package-head">
                        <img src="{{ asset('images/logo1.png') }}" alt="">
                        <div class="head-title">
                            <h6>Tra cứu</h6>
                            <h4 class="bold700">Gói 3</h4>
                        </div>
                    </div>
                    <div class="package-price">
                        <div class="price-sale">
                            <span class="text-decoration-line-through">900,000</span>
                            <strong class="sale-percent">(-73
                                %)</strong>
                        </div>
                        <div class="price-main"><strong>249,000</strong> <span>/4 lượt</span>
                        </div>
                    </div>
                    <div class="package-info">
                        <h6 class="bold700">Bao gồm tra cứu</h6>
                        <ul>
                            <li><span style="background-color:hsl(0,0%,100%);"><span><strong>04 bản báo cáo đầy đủ
                                            cho 4 người.</strong>&nbsp;</span></span><br><span
                                    style="background-color:hsl(0,0%,100%);"><span><strong>(chỉ còn 62.000đ/1
                                            bản)</strong></span></span></li>
                            <li><span style="background-color:hsl(0,0%,100%);"><span>Tặng thêm 1 bản qua zalo dành
                                        cho người có 2 ngày sinh.</span></span></li>
                            <li>Phù hợp cho gia đình hoặc nhóm bạn.</li>
                            <li>1 Ebook "học thần số dễ dàng qua hình ảnh" độc quyền của xemthanso.vn.</li>
                        </ul>
                    </div>
                    {{-- <a href="/thanh-toan"> --}}
                    <form action="/thanh-toan" method="POST">
                        @csrf
                        <input type="hidden" name="price" value="249000">
                        <input type="hidden" name="turn" value="4">
                        <input type="hidden" name="name_pack" value="Gói 3">
                        <button class="btn btn-primary btn-payment" data-bs-toggle="modal" data-package="3"
                            data-price="249,000đ" data-ndck="XTS + SỐ ĐIỆN THOẠI"
                            data-bs-target="#modalRegister">Thanh
                            toán
                        </button>
                    </form>
                    {{-- </a> --}}

                </div>
            </div>
        </div>
    </div>
</div>
