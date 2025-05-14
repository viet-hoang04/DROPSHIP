@extends('layout')
@section('title', 'main')

@section('main')


<div class="col-xl-12 " style="padding-top:-50px;">
    <div class="card  h-75">
        <div class="card-header">
            <h4 class="card-title mb-0">Tính <a class="text-danger"> % </a> giảm giá theo chiến dịch Tiktok Shop !</h4>
        </div><!-- end card header -->
        <div class="card-body">
            <form action="#" class="form-steps" autocomplete="off">
                <div class="text-center pt-3 pb-4 mb-1 d-flex justify-content-center">
                    <h1>CÔNG THỨC TÍNH %</h1>
                    <img src="assets/images/logo-light.png" class="card-logo card-logo-light" alt="logo light" height="17">
                </div>
                <div class="step-arrow-nav mb-4">

                    <ul class="nav nav-pills custom-nav nav-justified" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="steparrow-description-info-tab" data-bs-toggle="pill" data-bs-target="#steparrow-description-info" type="button" role="tab" aria-controls="steparrow-description-info" aria-selected="false">Toàn chiến dịch</button>
                        </li>
                        <!-- <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-experience-tab" data-bs-toggle="pill" data-bs-target="#pills-experience" type="button" role="tab" aria-controls="pills-experience" aria-selected="false">Theo sản phẩm</button>
                        </li> -->
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="steparrow-description-info" role="tabpanel" aria-labelledby="steparrow-description-info-tab">
                        <div>
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="mb-3">
                                        <label class="form-label" for="shop-discount">Shop</label>
                                        <input type="text" class="form-control" id="shop-discount" placeholder="% Hiện tại của chiết khấu sản phẩm" required oninput="tinhToanGiamGia()">
                                        <div class="invalid-feedback">Vui lòng nhập số % đã giảm trong chiết khấu shop</div>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="mb-3">
                                        <label class="form-label" for="tiktok-discount">Tiktok</label>
                                        <input type="text" class="form-control" id="tiktok-discount" placeholder="Nhập % chiến dịch tiktok" required oninput="tinhToanGiamGia()">
                                        <div class="invalid-feedback">Vui lòng nhập % mà chiến dịch yêu cầu</div>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="mb-3">
                                        <label class="form-label">Kết quả</label>
                                        <h3 class="" id="ket-qua-giam-gia">0%</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <!-- <div class="col-lg-7 m-2 card ribbon-box border shadow-none mb-lg-0 material-shadow">
                                    <div class="card-body text-muted">
                                        <div class="ribbon-three ribbon-three-success mt-1"><span>Chú ý!</span></div>
                                        <p class="mb-2">hi tiết
                                            Cổng đăng ký Voucher Siêu Sao tham gia chương trình Thứ Hai Freeship 17/03 ! Còn chần chừ gì nữa mà không thu thập nhiều ưu đãi đang chờ đón các nhà bán hàng !

                                            Thời gian chương trình: 17/3/2025
                                            Thời gian đăng ký: từ ngày 08/3/2025 đến hết 17/3/2025
                                            Ưu đãi đối với sản phẩm được chọn

                                            Mã giảm độc quyền - Mã giảm giá của Voucher Siêu sao có mệnh giá hấp dẫn hơn mã giảm giá toàn sàn
                                            Sản phẩm được chấp thuận tham gia sẽ có nhãn "Voucher Siêu Sao" chuyên dụng trên trang sản phẩm
                                            Được áp dụng các Mã Miễn phí vận chuyển dành riêng cho chương trình từ TikTok Shop
                                            Yêu cầu:

                                            BẮT BUỘC:
                                            Chia sẻ đồng tài trợ "Voucher Siêu Sao" : Sàn TTS 20% - Người bán 80%
                                            Sau khi nhấp vào nút đăng ký, cửa sổ ký kết thỏa thuận sẽ bật lên. Nhấn vào nút “Đồng ý" để bước vào quá trình đăng ký sản phẩm.
                                            Người bán cần đăng kí giá chiến dịch (bằng hoặc thấp hơn giá bán lẻ) và số lượng hàng tồn trong chiến dịch.
                                            KHUYẾN KHÍCH (Không bắt buộc):
                                            Khuyến khích tối thiểu 10 sản phẩm/nhà bán hàng
                                            Tồn kho tối thiểu 30/sản phẩm
                                            Không có đánh giá tiêu cực từ người mua
                                            LƯU Ý:
                                            Số lượng hàng tồn đăng kí sẽ bị khóa cho chiến dịch này, Nhà Bán Hàng hãy chuẩn bị hàng tồn và đăng kí lượng hàng tồn thích hợp
                                            NBH không được đăng kí tồn là 0 - Voucher siêu sao sẽ không chạy khi tồn bằng 0.
                                            Lưu ý: TikTok Shop sẽ có quyền thu hồi, tạm dừng các chương trình khuyến mãi khi phát hiện nhà bán hàng có hành vi gian lận trong thời gian diễn ra chương trình

                                            Rất mong nhận được sự tham gia của quý nhà bán!

                                            (Tất cả quyền lợi của TikTok Shop được bảo lưu）
                                        </p>

                                    </div>
                                </div>-->
                                <!-- <div class="col-lg-8 m-0 mx-1 card ribbon-box center border shadow-none mb-lg-0 material-shadow">
                                    <div class="card-body text-center">
                                        <div class="video-container">
                                            <iframe src="https://www.youtube.com/embed/BgyFSo58CzQ?si=1Fnq5VJXCuKi7LAz"
                                                title="YouTube video player" frameborder="0"
                                                 allowfullscreen>
                                            </iframe>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end tab pane -->
                <!-- <div class="tab-pane fade" id="pills-experience" role="tabpanel">
                    <div>
                        <div class="row">
                            <div class="col-lg-1">
                                <div class="mb-3">
                                    <label class="form-label" for="steparrow-gen-info-email-input">Giá gốc</label>
                                    <input type="email" class="form-control" id="steparrow-gen-info-email-input" placeholder="Giá đăng của sản phẩm" required>
                                    <div class="invalid-feedback">Vui lòng nhập giá gốc của sản phẩm</div>
                                </div>
                            </div>
                            <div class="col-lg-1">
                                <div class="mb-3">
                                    <label class="form-label" for="steparrow-gen-info-email-input">Chiết khấu shop</label>
                                    <input type="email" class="form-control" id="steparrow-gen-info-email-input" placeholder="Chiết khấu sản phẩm" required>
                                    <div class="invalid-feedback">Please enter an email address</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3 ">
                                    <label class="form-label" for="steparrow-gen-info-username-input">User Name</label>
                                    <input type="text" class="form-control" id="steparrow-gen-info-username-input" placeholder="Enter user name" required>
                                    <div class="invalid-feedback">Please enter a user name</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-start gap-3 mt-4">
                        <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="steparrow-description-info-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Go to more info</button>
                    </div>
                </div> -->
                <!-- end tab pane -->
        </div>
        <!-- end tab content -->
        </form>
    </div>
    <!-- end card body -->
</div>
<!-- end card -->
</div>
<script>
    function tinhToanGiamGia() {
        let giaGoc = 100000; 
        let giamGiaShop = parseFloat(document.getElementById("shop-discount").value) || 0;
        let giamGiaTiktok = parseFloat(document.getElementById("tiktok-discount").value) || 0;
        let giaSauGiamShop = giaGoc * (1 - giamGiaShop / 100);
        let giaSauGiamChienDich = giaSauGiamShop + (giaSauGiamShop / 100 * giamGiaTiktok);
        let phanTramGiamDung = 100 - (giaSauGiamChienDich / giaGoc * 100) + 1;
        document.getElementById("ket-qua-giam-gia").innerText = phanTramGiamDung.toFixed(0) + "(%)";
    }
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        function handlePercentageInput(input) {
            input.addEventListener("focus", function() {
                input.value = input.value.replace(" (%)", "").trim();
            });
            input.addEventListener("input", function() {
                let value = input.value.replace(/[^0-9]/g, ""); 
                if (value !== "" && parseInt(value) > 50) {
                    value = "50";
                }
                input.value = value; 
            });
            input.addEventListener("blur", function() {
                if (input.value !== "") {
                    input.value = input.value + " (%)";
                }
            });
        }
        handlePercentageInput(document.getElementById("shop-discount"));
        handlePercentageInput(document.getElementById("tiktok-discount"));
    });
</script>

@endsection