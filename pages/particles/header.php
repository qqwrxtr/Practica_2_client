
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-hotel"></i> hotel </a>

    <nav class="navbar">
       <a href="#home">home</a>
       <a href="#about">about</a>
       <a href="#room">room</a>
       <a href="#gallery">gallery</a>
       <a href="#review">review</a>
       <a href="#faq">faq</a>
       <a href="/svetlana/pages/acc.php">Your Account</a>
       <?php
       session_start();
       if (isset($_SESSION['root']) && $_SESSION['root'] == 1) {
           echo '<a href="/svetlana/pages/admin/index-1.php">admin</a>';
       }
       ?>
       <a href="#reservation" class="btn"> book now</a>

       

    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

</body>
</html>
