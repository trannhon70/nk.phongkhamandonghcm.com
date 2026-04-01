<?php
ob_start();
session_start();
include 'lib/session.php';
Session::init();
?>


<?php

spl_autoload_register(function ($className) {
    include_once "classes/" . $className . ".php";
});
$dbReadStarTime = hrtime(true);
$dbReadEndTime = hrtime(true);
$dbReadTotalTime = ($dbReadEndTime - $dbReadStarTime) / 1e+6;
?>

<?php
header("Timing-Allow-Origin: *");
header("Cache-Control: public, max-age=31536000");
header("Cache-Control: private, no-cache");
header('Server-Timing: db;desc="Database";dur=' . $dbReadTotalTime);

// $local = 'http://localhost/_andong/nk.phongkhamandonghcm.com';
$local = 'https://nk.phongkhamandonghcm.com';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Phòng khám đa khoa chuyên điều trị bệnh nam khoa, bệnh xã hội, da liễu, hậu môn - trực tràng uy tính tại thành phố Hồ Chí Minh">
    <title>Phòng khám đa khoa An Đông</title>
    <link rel="icon" href="<?php echo $local ?>/images/icons/icon_logo.webp" type="image/x-icon">
    <link rel="preload" fetchpriority="high" as="image" href="<?php echo $local ?>/images/tu_van/1.webp" type="image/webp">
    <link rel="preload" href="<?php echo $local ?>/css/tu-van-dat-hen.min.css" as="style" onload='this.onload=null,this.rel="stylesheet"'>
    <noscript>

        <link rel="stylesheet" href="<?php echo $local ?>/css/u-van-dat-hen.min.css">
    </noscript>
</head>

<body>
    <header>
        <div class="header_div">
            <div class="header_top">
                <img width="35" height="35" loading="lazy" src="<?php echo $local ?>/images/tu_van/menu.webp" alt="...">
                <div>
                    <div>PHÒNG KHÁM</div>
                    <strong>NAM KHOA TP.HCM</strong>
                </div>
                <img width="35" height="35" loading="lazy" src="<?php echo $local ?>/images/tu_van/icon-7.webp" alt="...">
            </div>
        </div>
        <div class="carousel header_banner" id="carousel">
            <div class="carousel-track">

                <!-- Slide 1 (LCP) -->
                <div class="slide">
                    <div style="position:relative;width:100%;max-width:100%;">

                        <img
                            src="<?php echo $local ?>/images/tu_van/1.webp"
                            fetchpriority="high"
                            decoding="async"
                            width="1920"
                            height="600"
                            style="width:100%;object-fit:cover;"
                            alt="banner phòng khám">

                        <div style="position:absolute;left:0;bottom:0;height:15vh;width:100%;display:flex;">
                            <a style="width:100%;display:block;height:15vh;"
                                href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en"></a>
                        </div>

                    </div>
                </div>

                <!-- Slide 2 -->
                <div class=" slide">
                    <div style="position:relative;width:100%;max-width:100%;">

                        <img
                            src="<?php echo $local ?>/images/tu_van/2.webp"
                            loading="lazy"
                            decoding="async"
                            width="1920"
                            height="600"
                            style="width:100%;object-fit:cover;"
                            alt="banner phòng khám">

                        <div style="position:absolute;left:0;bottom:0;height:15vh;width:100%;display:flex;">
                            <a style="width:100%;display:block;height:15vh;"
                                href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en"></a>
                        </div>

                    </div>
                </div>

            </div>

            <button style=" display:none;" class="nav prev">❮</button>
            <button style="display:none;" class="nav next">❯</button>
            <div class="dots"></div>
        </div>
    </header>
    <main>
        <h1>các bệnh nam khoa</h1>
        <div class="session ">
            <div class="session_body">
                <img width="50" height="50" loading="lazy" src="<?php echo $local ?>/images/tu_van/icon-1.webp" alt="...">
                <div>BAO QUY ĐẦU</div>
            </div>
            <div class="session_body">
                <img width="50" height="50" loading="lazy" src="<?php echo $local ?>/images/tu_van/icon-2.webp" alt="...">
                <div>XUẤT TINH SỚM</div>
            </div>
            <div class="session_body">
                <img width="50" height="50" loading="lazy" src="<?php echo $local ?>/images/tu_van/icon-3.webp" alt="...">
                <div>ĐƯỜNG TIẾT NIỆU</div>
            </div>
            <div class="session_body">
                <img width="50" height="50" loading="lazy" src="<?php echo $local ?>/images/tu_van/icon-4.webp" alt="...">
                <div>BỆNH DƯƠNG VẬT</div>
            </div>
            <div class="session_body">
                <img width="50" height="50" loading="lazy" src="<?php echo $local ?>/images/tu_van/icon-5.webp" alt="...">
                <div>BỆNH TINH HOÀN</div>
            </div>
            <div class="session_body">
                <img width="50" height="50" loading="lazy" src="<?php echo $local ?>/images/tu_van/icon-6.webp" alt="...">
                <div>BỆNH XÃ HỘI</div>
            </div>
        </div>
        <section class="section_1">
            <a href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en">
                <img style="width: 100%; height: 100%;" loading="lazy" src="<?php echo $local ?>/images/tu_van/popup.webp" alt="...">
            </a>
        </section>
        <form id="formDatLich" class="section_2">
            <div class="section_2_body">
                <div class="section_2_body_label">Họ và Tên</div>
                <input id="hoten" type="text" placeholder="Ví dụ: Nguyễn Văn A">
            </div>
            <div class="section_2_body">
                <div class="section_2_body_label">Số điện thoại</div>
                <input id="phone" type="number" max="10" placeholder="+09 **** ****">
            </div>
            <div class="section_2_body">
                <div class="section_2_body_label">
                    Chọn Khung Giờ Khám
                </div>
                <div class="section_2_body_time">
                    <select name="" id="giokham">
                        <option value="8:00">8:00</option>
                        <option value="10:00">10:00</option>
                        <option value="12:00">12:00</option>
                        <option value="14:00">14:00</option>
                        <option value="16:00">16:00</option>
                    </select>
                    <input id="ngaykham" type="date" placeholder="Thứ Hai, 6/4">
                </div>
            </div>
            <div id="submitBtn" class="section_2_button">
                <img style="width: 80%; height: 100%;" loading="lazy" src="<?php echo $local ?>/images/tu_van/CTA.webp" alt="...">
            </div>
            <a href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en" class="section_2_button">
                <img style="width: 80%; height: 100%;" loading="lazy" src="<?php echo $local ?>/images/tu_van/CTA-2.webp" alt="...">
            </a>
            <a href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en" class="section_2_button">
                <img style="width: 80%; height: 100%;" loading="lazy" src="<?php echo $local ?>/images/tu_van/CTA-off.webp" alt="...">
            </a>
        </form>
    </main>
    <footer>
        <div class="footer_title">PHÒNG KHÁM NAM KHOA TP.HCM</div>
        <div class="footer_item">
            <img width="25" height="25" loading="lazy" src="<?php echo $local ?>/images/tu_van/icon-8.webp" alt="...">
            <span>360 An Dương Vương, P. Chợ Quán, TP. HCM</span>
        </div>
        <div class="footer_item">
            <img width="25" height="25" loading="lazy" src="<?php echo $local ?>/images/tu_van/icon-9.webp" alt="...">
            <span>Hotline: <strong>0968 063 109</strong> </span>
        </div>
    </footer>
</body>
<script defer language="javascript" src="<?php echo $local ?>/js/carousel.min.js"></script>
<script>
    document.getElementById("submitBtn").addEventListener("click", async () => {
        const hoten = document.getElementById("hoten").value.trim();
        const phone = document.getElementById("phone").value.trim();
        const giokham = document.getElementById("giokham").value;
        const ngaykham = document.getElementById("ngaykham").value;

        // validate cơ bản
        if (!hoten || !phone || !giokham || !ngaykham) {
            alert("Vui lòng nhập đầy đủ thông tin!");
            return;
        }

        const payload = {
            hoten: hoten,
            sdt: phone,
            giokham: giokham,
            ngaykham: ngaykham
        };


        try {
            const res = await fetch(`https://nk.phongkhamandonghcm.com/api/khach-hang/create-khach-hang.php`, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(payload)
            });

            const data = await res.json();

            if (data.status === "success") {
                alert(`${data.message}`);
                document.getElementById("formDatLich").reset();
            }

        } catch (error) {
            console.error(error);
            // alert("Không thể kết nối server!");
        }
    });
</script>

</html>