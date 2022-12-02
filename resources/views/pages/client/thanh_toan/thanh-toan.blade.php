<!DOCTYPE html>
<!-- saved from url=(0022)https://nhansohoc.xyz/ -->
<html lang="en">

@include('pages.head')

<body aria-hidden="false" cz-shortcut-listen="true">
    <main id="main">
        <div class="modal fade show" id="modalPayment" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-modal="true" role="dialog" style="display: block; padding-left: 0px;background-color: antiquewhite;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <a href="/" type="button" style="height: 37px;
                        width: 40px;
                        border-radius: 10px;" data-bs-dismiss="modal" aria-label="Close">
                            <svg style="width: 20px; height: 20px;border-radius: 100%;"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                            </svg>

                        </a>
                    </div>
                    <div class="modal-body">
                        <div class="logo-modal">
                            <img src="https://xemthanso.vn/storage/12345-1.png" alt="Xem thần số">
                        </div>
                        <div class="">
                            <h3 class="text-center font2 mb-3 bold700">Hình thức thanh toán</h3>
                            <div class="payment-method">
                                <div class="py-3 d-flex align-items-center bold" data-bs-toggle="collapse"
                                    href="#banking" role="button" aria-expanded="false" aria-controls="banking">
                                    <svg width="30" height="24" viewBox="0 0 30 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M29.0625 22.3751C29.0625 22.6237 28.9637 22.8622 28.7879 23.038C28.6121 23.2138 28.3736 23.3126 28.125 23.3126H1.875C1.62636 23.3126 1.3879 23.2138 1.21209 23.038C1.03627 22.8622 0.9375 22.6237 0.9375 22.3751C0.9375 22.1264 1.03627 21.888 1.21209 21.7122C1.3879 21.5363 1.62636 21.4376 1.875 21.4376H28.125C28.3736 21.4376 28.6121 21.5363 28.7879 21.7122C28.9637 21.888 29.0625 22.1264 29.0625 22.3751ZM1.91016 9.50788C1.85429 9.31141 1.86412 9.10206 1.93815 8.91168C2.01219 8.7213 2.14638 8.56031 2.32031 8.4532L14.5078 0.953199C14.6553 0.860628 14.8259 0.811523 15 0.811523C15.1741 0.811523 15.3447 0.860628 15.4922 0.953199L27.6797 8.4532C27.8529 8.56052 27.9864 8.72133 28.06 8.91129C28.1336 9.10125 28.1433 9.31003 28.0877 9.50602C28.0321 9.70201 27.9142 9.87454 27.7517 9.99752C27.5893 10.1205 27.3912 10.1872 27.1875 10.1876H24.375V17.6876H26.25C26.4986 17.6876 26.7371 17.7863 26.9129 17.9622C27.0887 18.138 27.1875 18.3764 27.1875 18.6251C27.1875 18.8737 27.0887 19.1122 26.9129 19.288C26.7371 19.4638 26.4986 19.5626 26.25 19.5626H3.75C3.50136 19.5626 3.2629 19.4638 3.08709 19.288C2.91127 19.1122 2.8125 18.8737 2.8125 18.6251C2.8125 18.3764 2.91127 18.138 3.08709 17.9622C3.2629 17.7863 3.50136 17.6876 3.75 17.6876H5.625V10.1876H2.8125C2.60865 10.1878 2.41028 10.1216 2.24746 9.99891C2.08463 9.87626 1.96622 9.70388 1.91016 9.50788ZM16.875 16.7501C16.875 16.9987 16.9738 17.2372 17.1496 17.413C17.3254 17.5888 17.5639 17.6876 17.8125 17.6876C18.0611 17.6876 18.2996 17.5888 18.4754 17.413C18.6512 17.2372 18.75 16.9987 18.75 16.7501V11.1251C18.75 10.8764 18.6512 10.638 18.4754 10.4622C18.2996 10.2863 18.0611 10.1876 17.8125 10.1876C17.5639 10.1876 17.3254 10.2863 17.1496 10.4622C16.9738 10.638 16.875 10.8764 16.875 11.1251V16.7501ZM11.25 16.7501C11.25 16.9987 11.3488 17.2372 11.5246 17.413C11.7004 17.5888 11.9389 17.6876 12.1875 17.6876C12.4361 17.6876 12.6746 17.5888 12.8504 17.413C13.0262 17.2372 13.125 16.9987 13.125 16.7501V11.1251C13.125 10.8764 13.0262 10.638 12.8504 10.4622C12.6746 10.2863 12.4361 10.1876 12.1875 10.1876C11.9389 10.1876 11.7004 10.2863 11.5246 10.4622C11.3488 10.638 11.25 10.8764 11.25 11.1251V16.7501Z"
                                            fill="black"></path>
                                    </svg> <span class="pl-2">Chuyển khoản ngân hàng</span>
                                </div>
                                <div class="collapse show" id="banking">
                                    <div class="card border-top card-body border-0 p-0 mt-2">
                                        <div class="d-flex flex-md-row flex-column row">
                                            <div class="pm-number p-3 col-12 col-md-6">



                                                <p>
                                                    <strong>Ngân hàng: {{ $bankOwner['BANK_NAME'] }}</strong>
                                                </p>
                                                <p>
                                                    <strong>Số tài khoản: <span>{{ $bankOwner['BANK_NUMBER'] }}</span> <i
                                                            class="fa fa-copy"></i></strong>
                                                </p>
                                                <p>
                                                    <strong>Chủ tài khoản: {{ $bankOwner['BANK_OWNER'] }}</strong>
                                                </p>
                                                <p>
                                                    <strong>Giá Tiền: <span style="color:hsl(0,75%,60%);" id="gia-tien"
                                                            class="text-uppercase">{{ number_format($price, 0, ',', '.') }}đ</span></strong>
                                                </p>
                                                <p>
                                                    <strong>Nội dung: <span style="color:hsl(0,75%,60%);" id="ndck"
                                                            class="text-uppercase">họ tên + Số điện thoại</span><i
                                                            class="fa fa-copy m-2"></i></strong>
                                                </p>
                                                <p>
                                                    <strong>Cú pháp: <span style="color:hsl(0,75%,60%);"
                                                            class="text-uppercase">{{ Auth::user()->name }} +
                                                            {{ Auth::user()->phone }}</span></strong>
                                                </p>
                                            </div>
                                            <div class="warning-note bg-gray-300 p-3 col-12 col-md-6">
                                                <p style="text-align:justify;"><span
                                                        style="color:hsl(0,75%,60%);font-family:'Times New Roman', Times, serif;font-size:16px;"><span><strong>LƯU
                                                                Ý 1:</strong> </span></span><span
                                                        style="font-family:'Times New Roman', Times, serif;font-size:16px;"><span>sau
                                                            khi chuyển khoản quý khách ấn <strong>“ĐÃ THANH
                                                                TOÁN”</strong> để xác nhận hai
                                                            chiều.&nbsp;&nbsp;</span></span></p>
                                                <p style="text-align:justify;"><span
                                                        style="color:hsl(0,75%,60%);font-family:'Times New Roman', Times, serif;font-size:16px;"><span><strong>LƯU
                                                                Ý 2:</strong> </span></span><span
                                                        style="font-family:'Times New Roman', Times, serif;font-size:16px;"><span><strong>quá
                                                                trình xác nhận sẽ mất từ 3 - 5 phút</strong>, quý khách
                                                            vui lòng không ấn “ĐÃ THANH TOÁN”<strong> nhiều
                                                                lần.</strong></span></span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center m-3">
                                <form action="/luu-thanh-toan" method="POST" class="text-center"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" required="" class="form-control m-2" name="name_pack"
                                        value="{{ $name_pack }}">
                                    <input type="hidden" required="" class="form-control m-2" name="turn"
                                        value="{{ $turn }}">
                                    <input type="hidden" required="" class="form-control m-2" name="price"
                                        value="{{ $price }}">
                                    <button type="submit" class="btn btn-primary btn-submit m-2">Đã thanh toán</button>
                                    <a href="/" type="button" class="btn btn-default m-2"
                                        id="close-modal">Đóng</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</html>
