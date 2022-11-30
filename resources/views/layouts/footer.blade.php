<footer>
    <button onclick="topFunction()" id="myBtn" title="Go to top">
        <svg style="width: 20px;height: 20px;display: flex;" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 19.5v-15m0 0l-6.75 6.75M12 4.5l6.75 6.75" />
        </svg>

    </button>

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="logo-footer">
                    <img src="https://xemthanso.vn/storage/12345-1.png" alt="Xem thần số">
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <h5 class="bold700 mb-3">Liên hệ</h5>
                <div>
                    <p><i class="fa-solid fa-phone"></i> Zalo: 0814213949 - Nhân sự hỗ trợ</p>
                    <p><i class="fa-solid fa-envelope"></i> xemthansovn@gmail.com</p>
                    <p><i class="fa-solid fa-location-dot"></i> Times city - Hai Bà Trưng - Hà Nội</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <h5 class="bold700 mb-3">Hình thức thanh toán</h5>
                <div>
                    <p><strong>Ngân hàng VIETCOMBANK</strong><br><br><strong>Số tài khoản:
                            1013277752</strong><br><br><strong>chủ tài khoản: Võ Van Nhó</strong></p>
                    <p><span style="color:hsl(0,75%,60%);"><span><strong>NỘI DUNG CHUYỂN KHOẢN:
                                    &nbsp;</strong>&nbsp;&nbsp;</span></span><br><br><strong>Tên + Số điện thoại của
                            bạn</strong><br><br><strong>(Ví dụ: Võ Van Nhó 0814213949 )</strong></p>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script>
    //Get the button:
    mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
</script>

</html>
