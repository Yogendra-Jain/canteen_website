<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Canteen Menu</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
  <style>
    
    :root {
      --primary-color: #ff6600; 
      --secondary-color: #222; 
      --light-bg: #f7f7f7; 
      --card-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }
    
    body { 
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
      margin: 0; 
      padding: 0; 
      background-color: var(--light-bg); 
    }
    
    /* Header Styles */
    header { 
      background: var(--secondary-color); 
      color: #fff; 
      padding: 15px 40px; 
      display: flex; 
      justify-content: space-between; 
      align-items: center; 
      box-shadow: var(--card-shadow);
      position: sticky;
      top: 0;
      z-index: 10;
    }
    
    header div {
      font-size: 1.5rem;
      font-weight: bold;
    }

    nav a { 
      color: #fff; 
      text-decoration: none; 
      margin: 0 15px; 
      transition: color 0.3s;
    }
    
    nav a:hover {
      color: var(--primary-color);
    }
    
    .cart-nav-btn { 
      background: var(--primary-color); 
      padding: 10px 18px; 
      border-radius: 6px; 
      cursor: pointer;
      font-weight: bold;
      margin-left: 20px;
    }

    /* Main Content */
    h1 {
      text-align: center; 
      margin: 40px 0 20px;
      color: var(--secondary-color);
      font-size: 2.5rem;
    }
    
    /* Food Grid Styles */
    .food-grid { 
      display: grid; 
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); 
      gap: 30px; 
      padding: 20px 40px; 
      max-width: 1200px;
      margin: 0 auto;
    }
    
    .food-card { 
      background: #fff;
      border-radius: 12px; 
      padding: 20px; 
      text-align: center; 
      box-shadow: var(--card-shadow);
      transition: transform 0.3s ease-in-out;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    
    .food-card:hover {
      transform: translateY(-5px);
    }

    .food-card img { 
      width: 100%; /* Use 100% width for responsiveness */
      height: 150px; /* Fixed height for consistent card size */
      object-fit: cover; /* Ensures images cover the area without distortion */
      border-radius: 8px; 
      margin-bottom: 15px;
    }

    .food-card h2 {
      color: var(--secondary-color);
      font-size: 1.4rem;
      margin: 10px 0 5px;
    }

    .food-card p {
      color: #555;
      font-size: 1.1rem;
      font-weight: bold;
      margin-bottom: 15px;
    }
    
    .add-to-cart-btn { 
      background: var(--primary-color); 
      color: #fff; 
      padding: 10px 20px; 
      border: none; 
      border-radius: 6px; 
      cursor: pointer;
      font-weight: bold;
      text-transform: uppercase;
      transition: background-color 0.3s;
    }
    
    .add-to-cart-btn:hover {
      background-color: #e55a00; /* Slightly darker orange */
    }

    /* Cart Box Styles */
    .cart-container { 
      position: fixed; 
      top: 80px; 
      right: 30px; 
      width: 320px; 
      background: #fff; 
      border-radius: 10px; 
      box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.3); 
      padding: 20px; 
      display: none; 
      z-index: 100; 
      border-top: 5px solid var(--primary-color);
    }

    .cart-container h3 {
      margin-top: 0;
      border-bottom: 2px solid #eee;
      padding-bottom: 10px;
      color: var(--secondary-color);
    }
    
    #cart-items {
      max-height: 300px;
      overflow-y: auto;
      padding-right: 10px;
    }
    
    .cart-item { 
      display: flex; 
      justify-content: space-between; 
      align-items: center;
      padding: 8px 0;
      border-bottom: 1px dotted #ccc;
      font-size: 0.95rem;
    }
    
    .cart-item:last-child {
      border-bottom: none;
    }

    .cart-item button { 
      background: red; 
      color: white; 
      border: none; 
      border-radius: 50%; 
      width: 22px; 
      height: 22px; 
      cursor: pointer; 
      font-weight: bold;
      line-height: 1;
      margin-left: 10px;
    }
    
    .cart-container p {
      margin-top: 15px;
      padding-top: 10px;
      border-top: 2px solid var(--light-bg);
      font-size: 1.2rem;
      font-weight: bold;
      color: var(--secondary-color);
    }
    
    #checkout-btn {
      margin-top: 10px;
      background: #28a745; 
      transition: background-color 0.3s;
      font-weight: bold;
      width: 100%; 
      color: white; 
      padding: 10px; 
      border: none; 
      border-radius: 6px; 
      font-size: 1.1rem; 
      cursor: pointer;
    }

    #checkout-btn:hover {
      background: #218838;
    }

    /* -------------------------- Modal Styles (Payment Gateway) -------------------------- */
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 20; /* Sit on top */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
      padding-top: 60px;
    }

    .modal-content {
      background-color: #fefefe;
      margin: 5% auto; /* 5% from the top and centered */
      padding: 20px;
      border-radius: 10px;
      width: 80%; /* Could be more or less, depending on screen size */
      max-width: 400px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    }

    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }

    .payment-option {
        padding: 12px;
        margin: 8px 0;
        border: 1px solid #ccc;
        border-radius: 6px;
        cursor: pointer;
        display: flex;
        align-items: center;
        transition: background-color 0.3s;
    }

    .payment-option:hover {
        background-color: #f0f0f0;
    }

    .payment-option i {
        margin-right: 15px;
        color: var(--primary-color);
        font-size: 1.2rem;
    }

    .payment-option.cod i {
        color: #007bff; 
    }

    .payment-option.success {
        background-color: #d4edda;
        color: #155724;
        border-color: #c3e6cb;
        font-weight: bold;
        text-align: center;
        justify-content: center;
        cursor: default;
    }
  </style>
</head>
<body>
  <header>
    <div>Canteen</div>
    <nav>
      <a href="#">Home</a>
      <a href="#">Services</a>
      <a href="#">Contact</a>
      <a href="#">About</a>
      <a href="javascript:void(0)" id="open-cart" class="cart-nav-btn"><i class="fas fa-shopping-cart"></i> Cart</a>
    </nav>
  </header>

  <main>
    <h1>Canteen Menu</h1>
    <div class="food-grid">
      <div class="food-card">
        <img src="images/Food1.jpg" alt="Maggi"/>
        <h2>Maggi</h2>
        <p>₹50/plate</p>
        <button class="add-to-cart-btn">Add to Cart</button>
      </div>
      <div class="food-card">
        <img src="images/Food2.jpg" alt="Sandwich"/>
        <h2>Sandwich</h2>
        <p>₹70/plate</p>
        <button class="add-to-cart-btn">Add to Cart</button>
      </div>
      <div class="food-card">
        <img src="images/Food3.jpg" alt="French fries"/>
        <h2>French Fries</h2>
        <p>₹80/plate</p>
        <button class="add-to-cart-btn">Add to Cart</button>
      </div>
      <div class="food-card">
        <img src="images/Food9.jpg" alt="Burger"/>
        <h2>Burger</h2>
        <p>₹90/plate</p>
        <button class="add-to-cart-btn">Add to Cart</button>
      </div>
      <div class="food-card">
        <img src="images/Food5.jpg" alt="Pizza"/>
        <h2>Pizza</h2>
        <p>₹120/plate</p>
        <button class="add-to-cart-btn">Add to Cart</button>
      </div>
      
      <div class="food-card">
        <img src="images/Food7.jpg" alt="Momos"/>
        <h2>Momos</h2>
        <p>₹150/plate</p>
        <button class="add-to-cart-btn">Add to Cart</button>
      </div>
      <div class="food-card">
        <img src="images/Food8.jpg" alt="pasta"/>
        <h2>Pasta</h2>
        <p>₹50/plate</p>
        <button class="add-to-cart-btn">Add to Cart</button>
      </div>
      <div class="food-card">
        <img src="images/Food6.jpg" alt="Cold Coffee"/>
        <h2>Cold Coffee</h2>
        <p>₹60/glass</p>
        <button class="add-to-cart-btn">Add to Cart</button>
      </div>
      <div class="food-card">
        <img src="images/Food10.jpg" alt="Tea"/>
        <h2>Tea</h2>
        <p>₹20/cup</p>
        <button class="add-to-cart-btn">Add to Cart</button>
      </div>
      <div class="food-card">
        <img src="images/Food10.jpg" alt="Coffee"/>
        <h2>Coffee</h2>
        <p>₹30/cup</p>
        <button class="add-to-cart-btn">Add to Cart</button>
      </div>
      <div class="food-card">
        <img src="images/Food15.jpg" alt="Poha"/>
        <h2>Poha</h2>
        <p>₹50/plate</p>
        <button class="add-to-cart-btn">Add to Cart</button>
      </div>
      <div class="food-card">
        <img src="images/Food3.jpg" alt="French Fries"/>
        <h2>French Fries</h2>
        <p>₹80/plate</p>
        <button class="add-to-cart-btn">Add to Cart</button>
      </div>
      <div class="food-card">
        <img src="images/Food11.webp" alt="Samosa"/>
        <h2>Samosa</h2>
        <p>₹15/piece</p>
        <button class="add-to-cart-btn">Add to Cart</button>
      </div>
      <div class="food-card">
        <img src="images/Food12.webp" alt="kachori"/>
        <h2>Kachori</h2>
        <p>₹15/piece</p>
        <button class="add-to-cart-btn">Add to Cart</button>
      </div>
      <div class="food-card">
        <img src="images/Food13.avif" alt="Chole Bhature"/>
        <h2>Chole Bhature</h2>
        <p>₹100/plate</p>
        <button class="add-to-cart-btn">Add to Cart</button>
      </div>
    </div>
  </main>

  <div class="cart-container" id="cart">
    <h3>🛒 Your Cart</h3>
    <div id="cart-items"></div>
    <p>Total: ₹<span id="cart-total">0</span></p>
    <button id="checkout-btn">Proceed to Pay</button>
  </div>
  
  <div id="paymentModal" class="modal">
    <div class="modal-content">
      <span class="close" id="closeModal">&times;</span>
      <h2>Select Payment Method</h2>
      <p style="font-size: 1.1rem; font-weight: bold; color: var(--primary-color);">Total Payable: ₹<span id="modal-total-amount">0</span></p>
      
      <div id="paymentOptions">
        <div class="payment-option" onclick="processPayment('UPI')">
          <i class="fas fa-mobile-alt"></i> UPI / Google Pay / PhonePe
        </div>
        <div class="payment-option" onclick="processPayment('Card')">
          <i class="fas fa-credit-card"></i> Credit / Debit Card
        </div>
        <div class="payment-option" onclick="processPayment('Netbanking')">
          <i class="fas fa-university"></i> Net Banking
        </div>
        <div class="payment-option cod" onclick="processPayment('COD')">
          <i class="fas fa-hand-holding-usd"></i> Cash on Delivery (COD)
        </div>
      </div>
      
    </div>
  </div>

  <script>
    let cart = []; 
    let total = 0;
    const buttons = document.querySelectorAll(".add-to-cart-btn");
    const cartBox = document.getElementById("cart");
    const cartItems = document.getElementById("cart-items");
    const cartTotal = document.getElementById("cart-total");
    const openCartBtn = document.getElementById("open-cart");
    const checkoutBtn = document.getElementById("checkout-btn");

    // Modal elements
    const modal = document.getElementById("paymentModal");
    const closeModalBtn = document.getElementById("closeModal");
    const modalTotalAmount = document.getElementById("modal-total-amount");
    const paymentOptionsDiv = document.getElementById("paymentOptions");


    // 1. Add to Cart Logic
    buttons.forEach(btn => {
      btn.addEventListener("click", (e) => {
        const card = e.target.parentElement;
        const name = card.querySelector("h2").innerText;
        const priceText = card.querySelector("p").innerText;
        const price = parseInt(priceText.match(/\d+/)[0]);
        
        cart.push({name, price});
        total += price;
        updateCart();
        cartBox.style.display = "block";
      });
    });

    // 2. Update Cart Display Logic
    function updateCart() {
      cartItems.innerHTML = "";
      cart.forEach((item, i) => {
        const div = document.createElement("div");
        div.classList.add("cart-item");
        div.innerHTML = `${item.name} <span style="font-weight: bold;">₹${item.price}</span> <button onclick="removeItem(${i})">x</button>`;
        cartItems.appendChild(div);
      });
      cartTotal.innerText = total;
      
      if (cart.length === 0) {
          cartBox.style.display = "none";
      }
    }

    // 3. Remove Item Logic
    function removeItem(i) {
      total -= cart[i].price;
      cart.splice(i, 1);
      updateCart();
    }

    // 4. Toggle Cart Visibility Logic
    openCartBtn.addEventListener("click", () => {
      cartBox.style.display = (cartBox.style.display === "block") ? "none" : "block";
    });

    // 5. Open Payment Modal Logic
    checkoutBtn.addEventListener('click', () => {
        if (cart.length > 0) {
            modalTotalAmount.innerText = total;
            modal.style.display = "block";
        } else {
            alert("Your cart is empty. Please add items to proceed.");
        }
    });

    // 6. Close Modal Logic
    closeModalBtn.addEventListener('click', () => {
        modal.style.display = "none";
    });

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    // 7. Payment Simulation (The actual "gateway")
    function processPayment(method) {
        paymentOptionsDiv.innerHTML = `<div class="payment-option success">
                                            <i class="fas fa-check-circle"></i> Order Placed via ${method}!
                                        </div>`;
        
        // Simulate order completion and reset
        setTimeout(() => {
            alert(`Order for ₹${total} confirmed! Payment method: ${method}.`);
            
            // Reset cart
            cart = [];
            total = 0;
            updateCart();
            
            // Reset modal content and close it
            modal.style.display = "none";
            paymentOptionsDiv.innerHTML = `<div class="payment-option" onclick="processPayment('UPI')">
                                              <i class="fas fa-mobile-alt"></i> UPI / Google Pay / PhonePe
                                          </div>
                                          <div class="payment-option" onclick="processPayment('Card')">
                                              <i class="fas fa-credit-card"></i> Credit / Debit Card
                                          </div>
                                          <div class="payment-option" onclick="processPayment('Netbanking')">
                                              <i class="fas fa-university"></i> Net Banking
                                          </div>
                                          <div class="payment-option cod" onclick="processPayment('COD')">
                                              <i class="fas fa-hand-holding-usd"></i> Cash on Delivery (COD)
                                          </div>`;
        }, 1500);
    }
  </script>
</body>
</html>