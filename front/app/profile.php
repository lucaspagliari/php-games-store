<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/profile.css">
</head>
<body>
    <nav id="nav-app"></nav>
<div class="content-profile-page">
   <div class="profile-user-page card">
      <div class="img-user-profile">
        <img class="profile-bgHome" src="" />
        <img class="avatar" src="https://asphaltgold.de/media/catalog/product/cache/1/image/930x669/0f396e8a55728e79b48334e699243c07/s/t/st_ssy_stock_cap_black_1.jpg" alt="jofpin"/>
           </div>
          <div class="user-profile-data">
            <h1>{{Resident Name}}</h1>
            <p>{{Community}}</p>
            <p style='font-size:12px'>{{Apt Number}}</p>
          </div> 

         <div class="container">
           <div class="row">
             <h4 style="color:#65BDAC" class="header"><i class="fas fa-briefcase"></i>PROFESSION </h4>
           </div>
           <div class="row">
             <p>{{Resident Name}} is a {{Occupation}}. {{Occupation General Comment}}</p>    
           </div>
      </div>
    
    </div>
    <script src="../js/navbar.js"></script>
</body>
</html>