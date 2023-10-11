<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}">
    @include('header')
    <title>Liên Hệ</title>
</head>

<body>
@include('menu')
<div class="banner_page">
    <img src="https://phela.vn/wp-content/uploads/2021/07/MGL9672-scaled.jpg" alt="">

</div>
<section class="vc_section">
    <div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">


                    <div class="section-contactform">

                        <div class="container">

                            <div class="row">

                                <div class="contact-form">

                                    <div class="form-left">

                                        <div class="title-left title-line">

                                            <h2><span>Liên hệ </span></h2>

                                            <p class="description">Vui lòng điền đầy đủ thông tin theo yêu cầu để
                                                chúng tôi có thể hỗ trợ quý khách tốt nhất.</p>

                                        </div>

                                        <div role="form" class="wpcf7" id="wpcf7-f196-p192-o1" lang="en-US"
                                             dir="ltr">
                                            <div class="screen-reader-response">
                                                <p role="status" aria-live="polite" aria-atomic="true"></p>
                                                <ul></ul>
                                            </div>
                                            <form action="/lien-he/#wpcf7-f196-p192-o1" method="post"
                                                  class="wpcf7-form init" novalidate="novalidate" data-status="init">
                                                <div style="display: none;">
                                                    <input type="hidden" name="_wpcf7" value="196">
                                                    <input type="hidden" name="_wpcf7_version" value="5.3">
                                                    <input type="hidden" name="_wpcf7_locale" value="en_US">
                                                    <input type="hidden" name="_wpcf7_unit_tag"
                                                           value="wpcf7-f196-p192-o1">
                                                    <input type="hidden" name="_wpcf7_container_post" value="192">
                                                    <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                                                </div>
                                                <p><span class="wpcf7-form-control-wrap your-name"><input
                                                            type="text" name="your-name" value="" size="40"
                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                            aria-required="true" aria-invalid="false"
                                                            placeholder="Họ và tên*"></span><span
                                                        class="wpcf7-form-control-wrap your-email"><input
                                                            type="email" name="your-email" value="" size="40"
                                                            class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                            aria-required="true" aria-invalid="false"
                                                            placeholder="Email*"></span><span
                                                        class="wpcf7-form-control-wrap your-message"><textarea
                                                            name="your-message" cols="40" rows="10"
                                                            class="wpcf7-form-control wpcf7-textarea"
                                                            aria-invalid="false"
                                                            placeholder="Nội dung"></textarea></span><input
                                                        type="submit" value="Gửi"
                                                        class="wpcf7-form-control wpcf7-submit btn btn-form-contact"
                                                        id="form-submit"><span class="ajax-loader"></span></p>
                                                <div class="wpcf7-response-output" aria-hidden="true"></div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="info">

                                        <div class="form-info">

                                            <div class="img-info">

                                                <img src="https://phela.vn/wp-content/uploads/2021/07/group-20210119101820.png"
                                                     alt="">

                                            </div>

                                            <h2>Phê La - Nốt Hương Đặc Sản</h2>

                                            <div class="item">

                                                <div class="icon">

                                                    <img src="https://phela.vn/wp-content/themes/florist/assets/img/75.png"
                                                         alt="">

                                                </div>

                                                <div class="text">

                                                    <p><strong>Địa chỉ:</strong> </p>

                                                    <p>Trụ sở' chính: 96-98-100 Trần Nguyên Đán, Phường 3, Quận Bình
                                                        Thạnh, Thành phố Hồ Chí Minh</p>
                                                    <p>Chi nhánh Đà Lạt: 7 Nguyễn Chí Thanh, phường 1, Thành phố Đà
                                                        Lạt, tỉnh Lâm Đồng</p>
                                                    <p>Chi nhánh Hà Nội: Lô 04-9A Khu công nghiệp Vĩnh Hoàng, phường
                                                        Hoàng Văn Thụ, quận Hoàng Mai, Hà Nội</p>

                                                </div>

                                            </div>

                                            <div class="item">

                                                <div class="icon">

                                                    <img src="https://phela.vn/wp-content/themes/florist/assets/img/76.png"
                                                         alt="">

                                                </div>

                                                <div class="text">

                                                    <p><strong>Hotline:</strong> </p>

                                                    <p>1900 3013</p>

                                                </div>

                                            </div>

                                            <div class="item">

                                                <div class="icon">

                                                    <img src="https://phela.vn/wp-content/themes/florist/assets/img/77.png"
                                                         alt="">

                                                </div>

                                                <div class="text">

                                                    <p><strong>Email:</strong> </p>

                                                    <p>info@phela.vn</p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@include('footer')
</body>

</html>
