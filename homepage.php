<!DOCTYPE html>
<html>
<head>
<style>
body, html {
  height: 100%;
  margin: 0;
  font: 400 25px/1.8 "TNR", sans-serif;
  color: #777;
}
@font-face{
    font-family: "Brush StrokeFast";
  src: url("./fonts/Brush StrokeFast.otf");
  }

  @font-face{
    font-family: "OilBats";
  src: url("./fonts/OilBats.ttf");
  }

@font-face{
    font-family: "POLYA Regular";
  src: url("./fonts/POLYA Regular.otf");
  }

@font-face{
    font-family: "Urban Jungle";
  src: url("./fonts/Urban Jungle.otf");
  }

.big{
  margin-top: 100px;
  font-family:  TNR;
  font-size:  250px;
  color:  red;
}

.bgimg-1, .bgimg-2, .bgimg-3,.bgimg-4,.bgimg-5,.bgimg-6 {
  position: relative;
  opacity: 0.65;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-1 {
  background-image: url("./img/DI.jpg");
  min-height: 100%;
}

.bgimg-2 {
  background-image: url("./img/digi.jpg");
  min-height: 400px;
}

.bgimg-3 {
  background-image: url("./img/pds.jpg");
  min-height: 400px;
}

.skills{
  left: 100px;


}


.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #000;
}
.caption0 {
  position: absolute;
  left: 0;
  top: 10px;
  width: 100%;
  text-align: center;
  color: #000;
}


.caption0 span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 50px "TNR", sans-serif;
  color: #111;
}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
.submit {
  padding: 10px 22px;
  color: #fff;
  font-size:18px;
  background-color: #F72040;
  border: none;
  border-radius: 4px;
  font-family: OilBats;
  margin-left: 40px;
  

}

</style>
</head>
<body>

<div class="bgimg-1">

  <div class="caption0">
  <p><a href="loginpage1.php">Citizen Login<a> &nbsp;&nbsp;&nbsp; <a href="loginpage2.php">Shopkeeper Login</a> &nbsp;&nbsp;&nbsp;  <a href="https://dfpd.gov.in/contact.htm">Contact Us</a> &nbsp;&nbsp;&nbsp;  <a href="https://data.gov.in/node/6183629/download">TN PDS SHOPS LIST</a></p>
  <marquee width="60%" direction="left" height="100px">
  <p><a href="erationcard.php">Download your e-Ration Card here!<a></p>
  </marquee>
 
  </div>
</div>

<div style="color: #777;background-color:res;text-align:center;padding:50px 80px;text-align: justify;">
  <h3 style="text-align:center;">E-Ration card Management System</h3>
  <p> An initiative Digital India programme, to completely Digitalize the system through Cloud Computing and Mobile Applications as catalysts for rapid economic growth and citizen empowerment across the globe.
</p>
</div>

<div class="bgimg-2">
  <div class="caption">
    <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;"></span>
  </div>
</div>

<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
  <h3 style="text-align:center;">Service Offered</h3>
 <p style="text-align:center;">E-Ration Card</p>
 <p style="text-align:center;"> Department Login</p>
 <p style="text-align:center;"> Shopkeeper Login</p>
 <p style="text-align:center;"> Citizen Login</p>
 </div>
</div>

<div class="bgimg-3">
  <div class="caption">
    <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;"></span>
  </div>
</div>
<div style="color: #777;background-color:orange;text-align:center;padding:50px 80px;text-align: justify;">
  <h3 style="text-align:center;">Status of E-PDS Implementation</h3>
 <p style="text-align:center;"> 35 - Districts</p>
 <p style="text-align:center;"> 302 - TALUKS</p>
 <p style="text-align:center;"> 240 - GODOWNS</p>
 <p style="text-align:center;"> 34773 - FAIR PRICE SHOPS</p>
 <p style="text-align:center;"> 35082 - TOTAL LOCATION</p>
</p>
</div>
</div>

</body>
</html>
