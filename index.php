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
    <a href="fu.php" onclick="window.open(this.href,'','width=510, height=620, scrollbars=yes'); return false;" class="w3-bar-item w3-button w3-padding-large w3-hide-small">UPLOAD</a>
    
  </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="fu.php" onclick="window.open(this.href,'','width=510, height=620, scrollbars=yes'); return false;" class="w3-bar-item w3-button w3-padding-large">UPLOAD</a>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- 메인 타이틀  -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="title">
    <h2 class="w3-wide">잘 되는 이미지 뷰어 </h2>
    <p class="w3-opacity"><i>다기능 온라인 이미지 뷰어</i></p>
    <p class="w3-justify">이렇게 -------- 만들었다.</p>
  </div>

  <!-- 이미지 슬라이드 들어갈 부분  -->
  <div class="w3-black" id="slide">
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
