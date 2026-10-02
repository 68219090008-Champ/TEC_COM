<?php
// index.php
?>
<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ระบบสมัครสมาชิก</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Tahoma, Arial, sans-serif;
}

body{
    background:#f4f9ff;
    color:#333;
}

/* ================= HERO ================= */

.hero{
    width:100%;
    height:650px;
    
    background-image:url("images/LT03.png");
    background-size:cover;
    background-position:center;
    background-repeat:no-repeat;

    color:white;
    display:flex;
    align-items:center;
    justify-content:space-between;
    padding:60px 80px ;
}


.hero-text h1{
    font-size:42px;
    margin-bottom:10px;
}

.hero-text h2{
    font-size:24px;
    font-weight:normal;
    margin-bottom:10px;
}

.hero-text p{
    font-size:20px;
    opacity:.95;
}

.hero-image{
    width:320px;
    height:180px;
    border:3px dashed rgba(255,255,255,.8);
    border-radius:10px;
    display:flex;
    justify-content:center;
    align-items:center;
    color:white;
    background:rgba(255,255,255,.08);
    text-align:center;
    padding:20px;
}

/* ================= MENU ================= */

nav{
    background:#1565c0;
}

nav ul{
    list-style:none;
    display:flex;
}

nav li{
    border-right:1px solid rgba(255,255,255,.3);
}

nav a{
    display:block;
    padding:16px 28px;
    color:white;
    text-decoration:none;
    font-size:18px;
}

nav a:hover{
    background:#0d47a1;
}

/* ================= CONTENT ================= */

.container{
    width:90%;
    max-width:1000px;
    margin:40px auto;
}

.card{
    background:white;
    padding:35px;
    border-radius:10px;
    box-shadow:0 0 10px rgba(0,0,0,.08);
}

.card h2{
    color:#1565c0;
    margin-bottom:20px;
}

.card p{
    margin-bottom:15px;
    line-height:1.8;
}

/* ================= CREATOR ================= */

.creator-section{
    width:90%;
    max-width:1000px;
    margin:50px auto 0;
}

.creator-card{
    background:white;
    padding:35px;
    border-radius:15px;
    box-shadow:0 0 12px rgba(0,0,0,.10);
    text-align:center;
}

.creator-card h2{
    color:#1565c0;
    margin-bottom:25px;
    font-size:28px;
}

.creator-content{
    display:flex;
    align-items:center;
    justify-content:center;
    gap:35px;
    flex-wrap:wrap;
}

.creator-photo{
    width:180px;
    height:180px;
    border-radius:50%;
    object-fit:cover;
    border:5px solid #1976d2;
    box-shadow:0 5px 15px rgba(0,0,0,.20);
}

.creator-info{
    text-align:left;
    min-width:280px;
}

.creator-info p{
    margin:10px 0;
    line-height:1.7;
}

.creator-info strong{
    color:#1565c0;
}

.creator-placeholder{
    width:180px;
    height:180px;
    border-radius:50%;
    background:#e8f2ff;
    border:5px solid #1976d2;
    display:flex;
    align-items:center;
    justify-content:center;
    color:#1565c0;
    font-size:55px;
}

@media(max-width:768px){
    .creator-content{
        flex-direction:column;
    }

    .creator-info{
        min-width:0;
        width:100%;
        text-align:center;
    }
}

/* ================= FOOTER ================= */

footer{
    margin-top:50px;
    background:#1565c0;
    color:white;
    text-align:center;
    padding:20px;
}

/* ================= RESPONSIVE ================= */

@media(max-width:768px){

.hero{
    flex-direction:column;
    justify-content:center;
    text-align:center;
    height:auto;
    padding:30px;
}

.hero-image{
    margin-top:25px;
    width:100%;
    max-width:320px;
}

nav ul{
    flex-direction:column;
}

nav li{
    border-bottom:1px solid rgba(255,255,255,.2);
}

}
</style>

</head>
<body>

<!-- ================= HERO ================= -->

<section class="hero">

    <div class="hero-text">
	
        <h1></h1>
        <h2></h2>
        <p></p>
    </div>

    <div class="hero-images/my-photo.jpg">
       <img src="images/LT02.png"
     alt="รูปภาพของฉัน"
     style="
        width:250px;
        height:250px;
        border-radius:50%;
        object-fit:cover;
        border:5px solid #fff;
        box-shadow:0 5px 15px rgba(0,0,0,0.3);
     ">
    </div>

</section>

<!-- ================= MENU ================= -->

<nav>
    <ul>
        <li><a href="index.php">🏠 หน้าแรก</a></li>
        <li><a href="register.php">📝 สมัครสมาชิก</a></li>
        <li><a href="member_list.php">👥 ดูรายชื่อสมาชิก</a></li>
    </ul>
</nav>

<!-- ================= CONTENT ================= -->

<div class="container">

    <div class="card">

        <h2>ยินดีต้อนรับ</h2>

        <p>
            เว็บไซต์นี้จัดทำขึ้นเพื่อใช้สำหรับทดลองการสร้าง
            <strong>ระบบสมัครสมาชิก (Member Registration System)</strong>
            ด้วยภาษา PHP
        </p>

        <p>
            ระบบจะใช้ฐานข้อมูล <strong>MySQL</strong>
            สำหรับจัดเก็บข้อมูลสมาชิก
            และใช้ <strong>PHP</strong> ในการประมวลผลข้อมูล
        </p>

        <p>
            การเชื่อมต่อฐานข้อมูลจะใช้ไลบรารี
            <strong>mysqli</strong>
            และรับข้อมูลผ่าน
            <strong>HTML Form</strong>
            เพื่อฝึกการพัฒนาเว็บไซต์แบบพื้นฐาน
        </p>

        <p>
            เมนูด้านบนสามารถพัฒนาเพิ่มเติมเพื่อสร้างหน้าสมัครสมาชิก
            และหน้าดูรายชื่อสมาชิกได้ในขั้นตอนถัดไป
        </p>

    </div>

</div>

<!-- ================= CREATOR ================= -->

<section class="creator-section">
    <div class="creator-card">

        <h2><i class="fa-solid fa-user-pen"></i> ข้อมูลผู้จัดทำ</h2>

        <div class="creator-content">

            <!-- ใส่รูปผู้จัดทำไว้ที่ images/creator.jpg -->
            <img src="images/champ01.png"
                 alt="รูปผู้จัดทำ"
                 class="creator-photo"
                 onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">

            <div class="creator-placeholder" style="display:none;">
                <i class="fa-solid fa-user"></i>
            </div>

            <div class="creator-info">
                <p><strong>ชื่อ - นามสกุล:</strong> ทีรธร กาญจนวิวิญ</p>
                <p><strong>ชื่อภาษาอังกฤษ:</strong> Thirathon Kanchanawiwin</p>
                <p><strong>สาขาวิชา:</strong> เทคนิคคอมพิวเตอร์</p>
                <p><strong>สถานศึกษา:</strong> วิทยาลัยเทคนิคตรัง</p>
            </div>

        </div>

    </div>
</section>

<!-- ================= FOOTER ================= -->

<footer>
    Copyright © 2026<br>
    Trang Technical College
</footer>

</body>
</html>