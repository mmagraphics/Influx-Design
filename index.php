<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 80px;
  text-align: center;
  background: #1abc9c;
  color: white;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
}

/* Style the top navigation bar */
.navbar {
  overflow: hidden;
  background-color: #333;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-image:url("bank2.jpeg");
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="header">
  <h1>BLAZER BANK</h1>
  <p>A bank you can trust.</p>
</div>

<div class="navbar">
  <a href="#">Home</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Products</a>
  <a href="#">Contact</a>
  <a href="#" class="right">Login</a>
</div>

<div class="row">
  <div class="side">
    <h2>Who We Are</h2>
    <p>Learn more about our services, programs and financial consulting.</p>
    <h3>We Can Help You Grow </h3>
    <p>We are here to serve you.</p>
    <img src="finance.jpg" alt="Girl in a jacket" width="265" height = "180">
    <div class="header" style="height:60px;"></div><br>
    </div>
  <div class="main">
    <h2>FINANCIAL NEWS AND INFORMATION</h2>
    <h5>Blazer Bank's latest updates.</h5>
    <div class="fakeimg" style="height:200px;"></div>
    <p>Our Promise.</p>
    <p>I am pleased to announce Blazer Bank's agreement to acquire BBVA USA Bancshares, Inc., and its U.S. banking subsidiary, BBVA USA, a deal through which PNC will become a top five U.S. bank with a coast-to-coast national franchise. I could not be more excited about this acquisition and the many opportunities it presents for our company and for our stakeholders. I also am incredibly grateful for our customers, communities, employees and shareholders, whose trust has enabled us to become who we are today.</p>
  </div>
</div>

<div class="footer">
  <h2>?? 2021 Blazer Bank Corporation. All rights reserved.</h2>
</div>

</body>
</html>
