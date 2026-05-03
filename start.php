<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="start.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="main">

        <header>
            <div class="innerheader">
                <div class="logo">
                    <img src="images/cant-removebg-preview.png" alt="">
                </div>
                
                <div class="navbtn">
                    <div class="home"><a href="">Home</a></div>
                    <div class="ourservices"><a href="#footer">Our Services</a></div>
                    <div class="contectus"><a href="#footer">Contact Us</a></div>
                    <div class="aboutus"><a href="#about">About Us</a> </div>
                    <div class="login">
                        <button type="button" class="btn btn-secondary" onclick="window.location.href='login.php';">Log in</button>
                    </div>
                    <div class="signup">
                        <button type="button" class="btn btn-secondary" onclick="window.location.href='signup.php';">Sign Up</button>
                    </div>
                </div>
            </div>
        </header>


        <!-- Middle content of image -->

        <div class="middle">
            <div class="middle2">
                <p class="p1">Welcome!</p>
                <p class="p2">Please Login For Order Food</p>

                <div class="buttons">
                    <div id="midbtn1">
                        <button type="button" class="btn btn-warning" onclick="window.location.href='login.php';">Log In </button>
                    </div>
                   <div id="midbtn2">
                    <button type="button" class="btn btn-warning" onclick="window.location.href='signup.php';">Sign Up</button>
                   </div>
                    
                </div>
            </div>
        </div>
    </div>

     <!-- HOW IT WORK SECTION  -->

    <section class="howwork">
        <div class="divhowwork">
            <div class="statementwork">
                <p> How does it work </p>
            </div>
            <div class="divhowwork2">
                <div class="divhowwork3">
                    <div class="time">
                        <img src="images/time-removebg-preview.png" alt="">
                        <p style="font-size: 20px; font-weight: bold;">Choose Time </p>
                        <p style="color: #424242;font-size: 1rem;">Choose arriving time so that we prepare food before coming </p>
                    </div>
                    <div class="order">
                        <img src="images/order.png" alt="">
                        <p style="font-size: 20px; font-weight: bold;">Choose order </p>
                        <p style="color: #424242;font-size: 1rem;">Check over hundreds of menus to pick your favorite food </p>
                    </div>
                    <div class="pay">
                        <img src="images/pay.png" alt="">
                        <p style="font-size: 20px; font-weight: bold;">Pay advanced </p>
                        <p style="color: #424242;font-size: 1rem;">It's quick, safe, and simple. Select several methods of payment</p>
                    </div>
                    <div class="meal">
                        <img src="images/meals.png" alt="">
                        <p style="font-size: 20px; font-weight: bold;">Enjoy meals </p>
                        <p style="color: #424242;font-size: 1rem;">Food is made and delivered directly to your home.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT US -->

    <div class="about" id = "about">
        
            <p >About Us</p>
            <img src="images/about-img.jpg" alt="">
            <p id="a1">Our canteen has been serving up a wide variety of fresh and flavorful dishes that cater to all tastes and preferences.

                 we believe that food is not just about eating—it's about creating memorable experiences. Whether you're looking for a quick bite during your lunch break, a hearty meal after a long day, or a place to gather with friends and family, our canteen is the perfect spot.
                
                Our mission is simple: to provide our customers with high-quality food that is both tasty and nutritious. We pride ourselves on using fresh, locally-sourced ingredients to prepare every dish, ensuring that each meal is as satisfying as the last. From classic comfort foods to innovative new dishes, our menu offers something for everyone.</p>
        
    </div>
   
    <!-- FOOTER -->

    
    <footer>
        <div class="footer-container" id ="footer">
            <div class="footer-row">
                <!-- Canteen Logo and About -->
                <div class="footer-about">
                    <img src="images/cant-removebg-preview.png" alt="">
                    <p>We serve quality food made with fresh ingredients.</p>
                </div>
    
                <!-- Quick Links -->
                <div class="footer-links">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#services">Our Services</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                        <li><a href="#about">About Us</a></li>
                    </ul>
                </div>
    
                <!-- Contact Information -->
                <div class="footer-contact">
                    <h4>Contact Us</h4>
                    <p><i class="fas fa-map-marker-alt"></i> SKIT , Jaipur</p>
                    <p><i class="fas fa-phone-alt"></i> +123 456 7890</p>
                    <p><i class="fas fa-envelope"></i> info@canteen.com</p>
                </div>
    
                <!-- Social Media Links -->
                <div class="footer-social">
                    <h4>Follow Us</h4>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
    
            <!-- Copyright -->
            <div class="footer-bottom">
                <p>&copy; 2024 Canteen Name. All rights reserved.</p>
            </div>
        </div>
    </footer>
    


</body>

</html>