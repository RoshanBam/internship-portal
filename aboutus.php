<?php include 'header.php';?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}
h2{
  color: white;
}

.card {
  box-shadow: 2px 4px 8px 4px rgba(210, 210, 210, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: #0088a9;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us Page</h1>

  <p>Sigma Tech is a Software Development company based in Nepal. Established in 2016, they have a brilliant team of software developers, designers and technical support members, and over 1500 happy clients globally. Sigma Tech started as a web and mobile app development company. Initially, Sigma tech entered the tech business with a motive to become a top service-based technology company. After a few months of continuous market research, they realized that many organizations need user-friendly business software to enhance their productivity, performance and ROI. Thus, they started focusing on building SaaS applications that can solve common business problems.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Anuj GC</h2>
        <p class="title">CEO & Founder</p>
        <p style="color: white;">anuj@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Kumar BK</h2>
        <p class="title">Managing Director</p>
        <p style="color: white;">kumar@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Manis Gurung</h2>
        <p class="title">Designer</p>
        <p style="color: white;">manis@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
</body>
</html>
