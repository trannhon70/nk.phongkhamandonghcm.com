<?php
ob_start("ob_gzhandler");
header("Timing-Allow-Origin: *");
header("Cache-Control: public, max-age=31536000, must-revalidate");

// $local = 'http://localhost/_andong/nk.phongkhamandonghcm.com';
$local = 'https://nk.phongkhamandonghcm.com';
?>
<!DOCTYPE html>
<html ⚡ lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <meta name="description"
        content="Phòng khám chuyên khoa chuyên điều trị bệnh nam khoa, bệnh xã hội, da liễu, hậu môn - trực tràng uy tính tại thành phố Hồ Chí Minh">
    <title>Phòng khám chuyên khoa</title>
    <link rel="icon" href="<?php echo $local ?>/images/icons/icon_logo.webp" type="image/x-icon">
    <link rel="preload" href="css/chuyen-de-nam-khoa.min.css" as="style"
        onload='this.onload=null,this.rel="stylesheet"'>
    <noscript>
        <link rel="stylesheet" href="css/chuyen-de-nam-khoa.min.css">
    </noscript>
    <script>
        document.addEventListener('scroll', function loadGA() {
            console.log('Người dùng cuộn xuống - Tải Google Analytics');
            var g = document.createElement('script'),
                s = document.scripts[0];
            g.src = 'https://www.googletagmanager.com/gtag/js?id=G-M8KPG8P2YN';
            g.async = true;
            s.parentNode.insertBefore(g, s);
            g.onload = function() {
                window.dataLayer = window.dataLayer || [];

                function gtag() {
                    dataLayer.push(arguments);
                }
                gtag('js', new Date());
                gtag('config', 'G-M8KPG8P2YN');
            };
            document.removeEventListener('scroll', loadGA);
        });
    </script>
</head>


<body>
    <header style="margin: 0 auto;">
        <div class="header">
            <?php include "layout/sider_bar.php" ?>
            <div class="header_center">Phòng Khám <strong>Nam Khoa TP. HCM</strong></div>
            <img width="30" height="30" loading="lazy" src="<?php echo $local ?>/images/chuyen_de/icons/icon_dot.webp"
                alt="...">
        </div>
    </header>
    <section class="banner">
        <a href="tel:+0968063109">
            <img style="width: 100%; height: auto;" loading="lazy"
                src="<?php echo $local ?>/images/nam_khoa/banner/banner.webp" alt="...">
        </a>
    </section>
    <section class="know">
        <img style="width: 100%; height: auto;" loading="lazy"
            src="<?php echo $local ?>/images/nam_khoa/banner/ban_co_biet.webp" alt="...">
    </section>
    <section class="title_h2">
        <h2>Lợi ích khi khám nam khoa <span></span></h2>

    </section>
    <section style="margin-top: 10px;">
        <div class="glans">
            <div style="background-color: #112a7b;" class="glans_left">
                <img style="width: 60px; height: auto;" loading="lazy"
                    src="<?php echo $local ?>/images/nam_khoa/icons/icon_1.webp" alt="...">
            </div>
            <div class="glans_right">
                <div class="glans_right_title">phát hiện sớm</div>
                <div class="glans_right_text">Vấn đề về sinh lý, viêm nhiễm... được phát hiện sớm sẽ điều trị nhanh, ít
                    tốn kém.</div>
            </div>
        </div>
        <div class="glans">
            <div style="background-color: #3a7ff7;" class="glans_left">
                <img style="width: 60px; height: auto;" loading="lazy"
                    src="<?php echo $local ?>/images/nam_khoa/icons/icon_2.webp" alt="...">
            </div>
            <div class="glans_right">
                <div class="glans_right_title">ngừa biến chứng</div>
                <div class="glans_right_text">Một số bệnh nam có thể dẫn tới viêm nhiễm, khó điều trị, suy giảm sinh lí.
                </div>
            </div>
        </div>
        <div class="glans">
            <div style="background-color: #63b7ff;" class="glans_left">
                <img style="width: 60px; height: auto;" loading="lazy"
                    src="<?php echo $local ?>/images/nam_khoa/icons/icon_3.webp" alt="...">
            </div>
            <div class="glans_right">
                <div class="glans_right_title">bảo vệ khả năng sinh sản</div>
                <div class="glans_right_text">Điều trị nam khoa giúp duy trì chất lượng tinh trùng, bảo vệ chức năng
                    sinh sản.</div>
            </div>
        </div>
        <div class="glans">
            <div style="background-color: #f7ba39;" class="glans_left">
                <img style="width: 60px; height: auto;" loading="lazy"
                    src="<?php echo $local ?>/images/nam_khoa/icons/icon_4.webp" alt="...">
            </div>
            <div class="glans_right">
                <div class="glans_right_title">cải thiện chất lượng cuộc sống</div>
                <div class="glans_right_text">Tự tin, giảm căng thẳng và duy trì phong độ trong công việc lẫn đời sống
                    cá nhân.</div>
            </div>
        </div>
    </section>

    <section style="margin-top: 10px;">
        <a href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en">
            <img style="width: 100%; height: auto;" loading="lazy"
                src="<?php echo $local ?>/images/nam_khoa/banner/tu_van_nam_khoa.webp" alt="...">
        </a>

    </section>

    <section class="title_h2">
        <h2>Trường hợp cần khám nam khoa <span></span></h2>

    </section>

    <section class="method">
        <div class="method_card">
            <div style="background-color: #112a7b;" class="method_card_absolute">
                <img style="width: 35px; height: auto;" loading="lazy"
                    src="<?php echo $local ?>/images/nam_khoa/icons/icon_5.webp" alt="...">
            </div>
            <div class="method_card_title">biểu hiện bất thường</div>
            <div class="method_card_text">Tiểu buốt, tiểu đêm, cương đau, giảm ham muốn, nổi mụn ở vùng kín...</div>
        </div>
        <div class="method_card">
            <div style="background-color: #3880f7;" class="method_card_absolute">
                <img style="width: 35px; height: auto;" loading="lazy"
                    src="<?php echo $local ?>/images/nam_khoa/icons/icon_6.webp" alt="...">
            </div>
            <div class="method_card_title">qh không an toàn</div>
            <div class="method_card_text">Việc khám nam khoa giúp phát hiện sớm và điều trị kịp thời</div>
        </div>

    </section>
    <section class="method">
        <div class="method_card">
            <div style="background-color: #62b6fe;" class="method_card_absolute">
                <img style="width: 35px; height: auto;" loading="lazy"
                    src="<?php echo $local ?>/images/nam_khoa/icons/icon_7.webp" alt="...">
            </div>
            <div class="method_card_title">chuẩn bị kết hôn</div>
            <div class="method_card_text">khám nam khoa để đảm bảo chất lượng tinh trùng và sức khỏe sinh sản.</div>
        </div>
        <div class="method_card">
            <div style="background-color: #f7ba39;" class="method_card_absolute">
                <img style="width: 35px; height: auto;" loading="lazy"
                    src="<?php echo $local ?>/images/nam_khoa/icons/icon_8.webp" alt="...">
            </div>
            <div class="method_card_title">kiểm tra điều đặn</div>
            <div class="method_card_text">Từ 6 - 12 tháng/lần có thể phát hiện sớm những nguy cơ tiềm ẩn</div>
        </div>

    </section>

    <section class="title_h2">
        <h2>BS. VÕ MINH NGUYỄN - PHÒNG KHAM NAM KHOA UY TÍN TẠI TPHCM <span></span></h2>
    </section>

    <section>
        <div class="expense_body">
            <div class="expense_body_title">
                Đi thăm khám Nam Khoa hiệu quả và an toàn bắt buộc cần có bác sĩ trình độ cao, chuyên môn tốt và nhiều
                kinh nghiệm thăm khám
            </div>

        </div>
    </section>

    <section style="margin-top: 10px;">
        <a href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en">
            <img style="width: 100%; height: auto;" loading="lazy"
                src="<?php echo $local ?>/images/nam_khoa/banner/banner_3.webp" alt="...">
        </a>

    </section>

    <section class="title_h2">
        <h2>TRƯỚC KHI ĐI KHÁM NAM KHOA CẦN <span></span></h2>
    </section>
    <section class="namkhoa">
        <div class="namkhoa_card">
            <img style="width: 80px; height: auto;" loading="lazy"
                src="<?php echo $local ?>/images/nam_khoa/icons/step_1.webp" alt="...">
            <div class="namkhoa_card_text">
                Kiêng Quan Hệ từ 24-48h trước khi khám
            </div>
        </div>
        <div class="namkhoa_card">
            <img style="width: 80px; height: auto;" loading="lazy"
                src="<?php echo $local ?>/images/nam_khoa/icons/step_2.webp" alt="...">
            <div class="namkhoa_card_text">
                Vệ sinh vùng kín sạch sẽ bằng nước ấm
            </div>
        </div>
        <div class="namkhoa_card">
            <img style="width: 80px; height: auto;" loading="lazy"
                src="<?php echo $local ?>/images/nam_khoa/icons/step_3.webp" alt="...">
            <div class="namkhoa_card_text">
                Nắm rõ các triệu chứng đang gặp
            </div>
        </div>
        <div class="namkhoa_card">
            <img style="width: 80px; height: auto;" loading="lazy"
                src="<?php echo $local ?>/images/nam_khoa/icons/step_4.webp" alt="...">
            <div class="namkhoa_card_text">
                Manh theo kết quả khám lần trước
            </div>
        </div>
        <div class="namkhoa_card">
            <img style="width: 80px; height: auto;" loading="lazy"
                src="<?php echo $local ?>/images/nam_khoa/icons/step_5.webp" alt="...">
            <div class="namkhoa_card_text">
                Chuẩn bị tâm lý thoải mái.
            </div>
        </div>
    </section>

    <section style="margin-top: 10px; position: relative;">
        <img style="width: 100%; height: auto;" loading="lazy"
            src="<?php echo $local ?>/images/nam_khoa/banner/banner_4.webp" alt="...">
        <img style="width: 50%; height: auto; position: absolute; left: 5%; bottom: 0; " loading="lazy"
            src="<?php echo $local ?>/images/nam_khoa/banner/banner_5.webp" alt="...">
    </section>

    <footer class="footer">
        <div class="footer_title">
            <!-- <img width="60" height="auto" loading="lazy"
                src="<?php echo $local ?>/images/chuyen_de/icons/icon_logo.webp" alt="..."> -->
            <div class="footer_title_right">
                <h5>PHÒNG KHÁM</h5>
                <span>NAM KHOA TP. HCM </span>
            </div>
        </div>
        <div class="footer_item">
            <img width="25" height="auto" loading="lazy"
                src="<?php echo $local ?>/images/chuyen_de/icons/icon_location.webp" alt="...">
            Số 360 đường An Dương Vương, Phường Chợ Quán, TP Hồ Chí Minh, Việt Nam
        </div>
        <a href="tel:+0968063109" class="footer_item">
            <img width="20" height="auto" loading="lazy"
                src="<?php echo $local ?>/images/chuyen_de/icons/icon_phone.webp" alt="...">
            Hotline: 0968 063 109
        </a>
    </footer>

    <div style="height: 100px;"></div>
    <div class="footer_fixed">
        <div style="position: relative;">
            <img style="position: absolute; top: 3px; right: 40%;" loading="lazy" width="50px" height="auto"
                src="<?php echo $local ?>/images/icons/icon_footer_animation.gif" alt="..." layout="responsive">
            </img>
            <img style="width: 100%; height: auto;" loading="lazy"
                src="<?php echo $local ?>/images/chuyen_de/users/footer_mobile.gif" alt="...">
            <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 60px; display: flex;">
                <a style="display: block; width: 50%; ; height: 60px;"
                    href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en"></a>
                <a style="display: block; width: 50%; ; height: 60px;" href="tel:+0968063109"></a>
            </div>
        </div>
    </div>
    <?php include_once 'layout/modalKhuyenMai.php' ?>

    <script language="javascript" src="https://npa.zoosnet.net/JS/LsJS.aspx?siteid=NPA46777247&float=1&lng=en">
    </script>

</body>

</html>