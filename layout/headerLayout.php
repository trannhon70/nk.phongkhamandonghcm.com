<?php
$DSBenh = $benh->getDSBenhThuocKhoaTTYK();
?>

<header class="header" id="header_pc">
    <div class="header__top">
        <div class="header__top-body">
            <div class="header__top-body-left">
                THỜI GIAN LÀM VIỆC 8:00 - 20:00 <span>Các ngày trong tuần</span>
            </div>
            <div class="header__top-body-left">
                HOTLINE TƯ VẤN: 028 7777 9888
            </div>
            <div class="header__top-body-left">
                <span>360 An Dương Vương, P. Chợ Quán, TP. HCM</span>
            </div>
        </div>
    </div>
    <div class="header__bottom">
        <div class="header__bottom-logo">
            <a style="display: flex; align-items: center; justify-content: center;"
                href="<?php echo $local ?>/trang-chu.html">
                <amp-img class="header__bottom-logo-img" src="<?php echo $local ?>/images/icons/icon_logo.webp"
                    height="100px" width="150px" alt="..."></amp-img>
            </a>
        </div>
        <ul class="header__bottom-ul">
            <li class="header__bottom-ul-li">
                <a href="<?php echo $local ?>/trang-chu.html">
                    <div>
                        <amp-img class="header__bottom-logo-img"
                            src="<?php echo $local ?>/images/icons/icon-trangchu.webp" height="50px" width="50px"
                            alt="..."></amp-img>
                    </div>
                    <div>TRANG CHỦ</div>
                </a>
            </li>
            <li class="header__bottom-ul-li positon">
                <div>
                    <div>
                        <amp-img class="header__bottom-logo-img"
                            src="<?php echo $local ?>/images/icons/icon-danhmuc.webp" height="50px" width="50px"
                            alt="..."></amp-img>
                    </div>

                    <div>DANH MỤC BỆNH</div>
                </div>
                <nav>
                    <ul>
                        <?php if (!empty($DSBenh)) : ?>
                            <?php foreach ($DSBenh as $value) : ?>
                                <li>
                                    <a href="<?php echo $local ?>/<?php echo $value['slug'] ?>.html"> <img width="20px"
                                            src="<?php echo $local ?>/images/icons/icon_bs.webp"
                                            alt="..."><?php echo $value['name']; ?></a>
                                </li>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <p>Không có dữ liệu.</p>
                        <?php endif; ?>

                    </ul>
                </nav>
            </li>

            <li class="header__bottom-ul-li1">
                <a href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en">
                    <div>
                        <amp-img class="header__bottom-logo-img"
                            src="<?php echo $local ?>/images/icons/icon-datlich.webp" height="50px" width="50px"
                            alt="..."></amp-img>
                    </div>

                    <div>ĐẶT LỊCH KHÁM</div>
                </a>
            </li>

        </ul>
    </div>
</header>

<header class="header__mobile" id="header_mobile">
    <div style="margin: 0 auto;">
        <div class="header">
            <?php include "layout/sider_bar.php" ?>
            <div class="header_center">Phòng Khám <strong>Nam Khoa TP. HCM</strong></div>
            <img width="30" height="30" loading="lazy" src="<?php echo $local ?>/images/chuyen_de/icons/icon_dot.webp"
                alt="...">
        </div>
    </div>
    <div class="header__mobile-banner">
        <img width="100%" src="<?php echo $local ?>/images/banner/banner_mobile.webp" alt="...">
    </div>
    <nav>
        <ul class="sidebar_mobile">
            <li class="sidebar_mobile_li">
                <a href="<?php echo $local ?>">Trang Chủ</a>
            </li>
            <li>
                <span>Danh Mục Bệnh</span>
                <ul class="sidebar_mobile_li_ul">
                    <?php if (!empty($DSBenh)) : ?>
                        <?php foreach ($DSBenh as $value) : ?>

                            <li class="sidebar_mobile_li_ul_li">
                                <a href="<?php echo $local ?>/<?php echo $value['slug'] ?>.html"
                                    style="display:flex;align-items:center;justify-content:space-between">
                                    <?php echo $value['name']; ?></a>
                            </li>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <p>Không có dữ liệu.</p>
                    <?php endif; ?>
                </ul>
            </li>
            <li>
                <a href="<?php echo $local ?>">Quy Trình Thăm Khám</a>
            </li>
            <li>
                <a href="<?php echo $local ?>">Tin Tức</a>
            </li>
            <li>
                <a href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en">Tư Vấn Trực Tuyến</a>
            </li>
            <li>
                <a href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en">Đặt Lịch Khám</a>
            </li>
        </ul>
    </nav>
</header>