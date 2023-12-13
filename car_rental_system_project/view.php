<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/all.min.css">
    <link rel="stylesheet" href="style/homestyle.css">
</head>
<body>

   <section class="popup-section hide" id="popup">
        <div class="closebtn arrow" id="closebtn">
            <i class="fas fa-times"></i>
        </div>
        <div class="arrow right" id="leftArrow">
            <i class="fas fa-arrow-left"></i>
        </div>
        <div class="pic" >
            <img src="" id="popupImg">     
        </div>

        <form class="dates" action="customer_reserve_db.php" method="post"> 
            <p>Enter pickup date :</p>
            <input type="date" name="pickup" id="pickup" class="child" ><br><br>
            <p>Enter return date :</p>
            <input type="date" name="return" id="return" class="child" ><br><br>
            <p>Enter method of payment you want :</p>
            <input type="checkbox" id="vehicle1" name="vehicle1">
            <label for="vehicle1"> cash</label><br>
            <input type="checkbox" id="vehicle2" name="vehicle2">
            <label for="vehicle2"> visa</label><br><br>
            <input type="submit"  value="reserve">
</form>
       <div class="arrow right" id="rightArrow">
            <i class="fas fa-arrow-right"></i>
        </div> 
    </section>
   <p class="top_text">choose a car you want to reserve</p>
    
<section class="gallery-section">
  <div class="wrapper">
      <div class="img-box">
        <img src="brand_model/kia_cerato.jpg">
      </div>
  </div>
  <div class="wrapper">
    <div class="img-box">
        <img src="brand_model/chevrolet_aveo.jpg">
    </div>
</div>
<div class="wrapper">
    <div class="img-box">
        <img src="brand_model/toyota_corolla.jpg">
    </div>
</div>
<div class="wrapper">
    <div class="img-box">
        <img src="brand_model/opel_astra.jpg">
    </div>
</div>
<div class="wrapper">
    <div class="img-box">
        <img src="brand_model/fiat_tipo.jpg">
    </div>
</div>
<div class="wrapper">
    <div class="img-box">
        <img src="brand_model/BMW_x2.jpg">
    </div>
</div>
<div class="wrapper">
    <div class="img-box">
        <img src="brand_model/suzuki_presso.jpg">
    </div>
</div>
<div class="wrapper">
    <div class="img-box">
        <img src="brand_model/jeep_wrangler.jpg">
    </div>
</div>
<div class="wrapper">
    <div class="img-box">
        <img src="brand_model/mitsubishi_lancer.jpg">
    </div>
</div>
</section>
    <script src="app.js"></script>
</body>
</html>