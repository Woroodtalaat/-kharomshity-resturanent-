<?php require_once 'config/server.php';
if(!isset($_SESSION['username']))
header('location: login.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>karmoshty</title>
<meta charset="utf-8">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="icon" href="file:///C:/Users/LapTopy/Desktop/karmoshty/gourmet-traditional-restaurant/images/1222.png">
<link rel="shortcut icon" href="file:///C:/Users/LapTopy/Desktop/karmoshty/gourmet-traditional-restaurant/images/1222.png">
<link rel="stylesheet" href="css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/slider.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/sForm.js"></script>
<script src="js/jquery.carouFredSel-6.1.0-packed.js"></script>
<script src="js/tms-0.4.1.js"></script>
<script>
$(window).load(function () {
    $('.slider')._TMS({
        show: 0,
        pauseOnHover: false,
        prevBu: '.prev',
        nextBu: '.next',
        playBu: false,
        duration: 800,
        preset: 'fade',
        pagination: true, //'.pagination',true,'<ul></ul>'
        pagNums: false,
        slideshow: 8000,
        numStatus: false,
        banners: false,
        waitBannerAnimation: false,
        progressBar: false
    })
});
$(window).load(function () {
    $('.carousel1').carouFredSel({
        auto: false,
        prev: '.prev',
        next: '.next',
        width: 960,
        items: {
            visible: {
                min: 1,
                max: 4
            },
            height: 'auto',
            width: 240,
        },
        responsive: false,
        scroll: 1,
        mousewheel: false,
        swipe: {
            onMouse: false,
            onTouch: false
        }
    });
});
</script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>


<div class="main">
  <header>
    <div class="container_12">
      <div class="grid_12">
        <h1><a href="index.html"><img src="file:///C:/Users/LapTopy/Desktop/karmoshty/gourmet-traditional-restaurant/images/1222.png" alt=""></a></h1>
        <div class="menu_block">
          <nav>
            <ul class="sf-menu">
              <li class="current"><a href="index.html">الرئيسية</a></li>
              <li class="with_ul"><a href="about-us.html">من نحن </a></li>           
              <li><a href="portfolio.html">واجباتنا</a></li>
              <li><a href="contacts.html">اتصل بنا </a></li>
            </ul>
          </nav>
          <div class="clear"></div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </header>
  <div class="slider-relative">
    <div class="slider-block">
      <div class="slider">
        <ul class="items">
          <li><img src="images/slide.jpg" alt=""></li>
          <li><img src="images/slide1.jpg" alt=""></li>
          <li class="mb0"><img src="images/slide2.jpg" alt=""></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="content page1">
    <div class="container_12">
      <div class="grid_7">
        <h2>فكرة المشروع</h2>
        <div class="page1_block col1"> <img src="images/welcome_img.png" alt="">
          <div class="extra_wrapper">
            <p> تقوم فكرة المشروع على إنشاء وتجهيز مطبخ وباصين لتجهيز الوجبات السريعة المتمثلة بالبروستد المقرمش بالضافة الى أصناف أخرى من نفس العائلة .وسيكون المشروع تنموى يساهم فى توفير فرص عمل مستدامة للعيديد من الخرجين والعاطلين عن العمل<br>
            
          <div class="clear"></div>
        </div>
      </div>
      
      <div class="clear"></div>
      <div class="grid_12">
        <div class="hor_separator"></div>
      </div>
      <div class="grid_12">
        <div class="car_wrap">
          <h2>جدولنا</h2>
          <a href="#" class="prev"></a><a href="#" class="next"></a>
          <ul class="carousel1">
            <li>
              <div><img src="images/page1_img1.jpg" alt="">
                <div class="col1 upp"></div>
                <span>يوم السبت في منطقة الشيخ رضوان ظهرا وابراج الكرامة والمخابرات مساء </span>
               
              </div>
            </li>
            <li>
              <div><img src="images/page1_img2.jpg" alt="">
                <div class="col1 upp"> </div>
                <span>الاحد بجوار شركة جوال ظهرا والجندي المجهول مساء </span>
                
              </div>
            </li>
            <li>
              <div><img src="images/page1_img3.jpg" alt="">
                <div class="col1 upp"> </div>
                <span>الاثنين في منطقة أبراج الزهراء ظهرا ومساء</span>
                
              </div>
            </li>
            <li>
              <div><img src="images/page1_img4.jpg" alt="">
                <div class="col1 upp"></div>
                <span>الثلاثاء في منطقة الجلاء ظهرا وفي معسكر جباليا مساء</span>
                
              </div>
            </li>
            <li>
              <div><img src="images/page1_img3.jpg" alt="">
                <div class="col1 upp"></div>
                <span>الاربعاء بجوار شركة جوال ظهرا والجندي المجهول مساء</span>
                
              </div>
            </li>
          </ul>
		  <li>
              <div><img src="images/page1_img3.jpg" alt="">
                <div class="col1 upp"> </div>
                <span>والخميس في منطقة الجندي ظهرا وابراج تل الهوى مساء</span>
                
              </div>
            </li>
          </ul>
        </div>
      </div>
     <div class="clear"></div>
      <div class="grid_12">
      
      </div> </div>
      <div class="clear"></div>
      <div class="bottom_block">
        <div class="grid_6">
          <h3>تابعنا على</h3>
          <div class="socials"> <a href="#"></a> <a href="#"></a> <a href="#"></a> </div>
          
        </div>
        
          
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1  ;}


input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  
  text-align: center;
  padding:100px;
}


.form{
  text-align: center;
  padding:100px;

}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
</body>



</div></div>

  

<footer>
  <div class="container_12">
    <div class="grid_12">Powered by worood talaat abo algomboz  </div>
    <div class="clear"></div>
  </div>
</footer>

</body>
</html>