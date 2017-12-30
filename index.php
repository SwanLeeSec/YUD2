<!DOCTYPE html>
<html>
<head>
<title>High quality Image Viewer</title>
<script type="text/javascript" src="mm.js"></script>
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="fu.php" onclick="window.open(this.href,'','width=500, height=200, scrollbars=yes'); return false;" class="w3-bar-item w3-button w3-padding-large w3-hide-small">UPLOAD</a>
    
  </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="fu.php" onclick="window.open(this.href,'','width=500, height=200, scrollbars=yes'); return false;" class="w3-bar-item w3-button w3-padding-large">UPLOAD</a>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- 메인 타이틀  -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="title">
    <h2 class="w3-wide">잘 되는 이미지 뷰어 </h2>
    <p class="w3-opacity"><i>다기능 온라인 이미지 뷰어</i></p>
    <p class="w3-justify">LEADTOOLS HTML5 및 JavaScript 라이브러리를 사용하는 웹 개발자들은 문서 및 의료 이미징 기능성을 갖는 제로 풋프린트, 크로스 플랫폼 어플리케이션들을 제작할 수 있습니다. 개발자들은 강력한 이미지 디스플레이 및 처리, 마우스와 멀티 터치 제스처, 주석 등등을 지원하는 하나의 응용 프로그램으로, 데스크톱, 타블렛 및 아이패드, 아이폰, 안드로이드 등과 같은 모바일 기기를 타겟팅할 수 있습니다. </p>
  </div>

  <!-- 이미지 슬라이드 들어갈 부분  -->
  <div class="w3-black" id="slide">
  	<h2 class="w3-wide"> 이미지 슬라이드 들어갈 곳 </h2>
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
    </div>
  </div>


  <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
      </div>
  
<!-- End Page Content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
 Team ???? 
</footer>

</body>
</html>
