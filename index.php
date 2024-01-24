<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flowerista</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <header class="header">

        <a href="#" class="logo">
            <img src="images/logo.png" alt="">
        </a>

       <nav class="navbar">

            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#products">Products</a>
            <a href="#contact">Contact</a>
        </nav>
      
        <div class="icons">
            
                <a href="login.php" style="font-size: 1.6rem;color:#5f5f5f;">Log Out</a>
             

            <div class="fas fa-shopping-cart" id="cart-btn"><span id="count">0</span></div>
           
        </div>

        



            <div class="sidebar">

                <div class="head"><h2>Shopping Cart</h2></div>

                <div id="cartItem"></div>
                 

                <div class="foot">
                    <h3>Total</h3>
                    <h2 id="total"> 0.00 RO</h2>
                </div>

                <div class="butT">
                <button class="close">CLOSE</button>
                <button class="closeOut">CHECK</button>
            </div>
            </div>
        
          
   



    </header>

    <section class="home" id="home">

        <div class="content">
         <img src="images/home-logo.png" alt="">  
         <span>Natural & beautiful flowers</span>
        </div>

    </section>

     <section class="about" id="about">
     
       <h1 class="heading"> about <span>us</span> </h1>
      
        <img src="images/logo.png" alt="" class="about-pic">
        <div class="about-text">
          <h2>Who we are ?!</h2>
          <p>
          Flowerista Shop, where elegance and beauty bloom in every petal. Our store opened on July 10, 2019. The store was opened due to the scarcity of flower shops at that time, in addition to its being an enjoyable and refreshing hobby. The store sells the latest trends in roses and the most beautiful bouquets. We have a wide variety of fresh and fragrant flowers that are distinguished by a variety of dazzling colors and shapes. The store is located in Al Maabilah South, near the Eram Electronic Technology store.
          </p>
        </div>
      </div>
      <br><br>
<div>
<video width="1190" height="240" controls>
  <source src="video.mp4 "type="video/mp4">
 
</video>
      </div>
  </section>


  

<section class="products" id="products">
    <h1 class="heading">latest <span>products</span></h1>
    <div class="box-container" id="root">
    </div>
</section>
    


<section class="contact" id="contact">
    <h1 class="heading">Contact <span>Us</span></h1>
        <div class="content-info">
      <div class="itme">
        <i class="fas fa-mobile-alt"></i>
        +968 9770 1223
      </div>
      <div class="itme">
        <a href="https://www.instagram.com/flowerista.om?igsh=MTc4M3hnY280MXp4Zg=="><img src="images/ist.jpg"></a>
        <i></i>
      </div>
      <div class="itme">
        <i class="fas fa-map-marker-alt"></i>
        Muscat /Seeb
      </div>
    </div>
    <script src="js/script.js"></script>

</body>

</html>