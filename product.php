<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organic Strawberries - Gorcery</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        .product-details-container {
            max-width: 1200px;
            margin: 4rem auto;
            padding: 0 5%;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
        }
        .product-image-large {
            background: var(--white);
            border-radius: 16px;
            box-shadow: var(--shadow-sm);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 15rem;
            min-height: 500px;
        }
        .product-info-large h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
            color: var(--text-dark);
        }
        .product-meta {
            color: var(--text-light);
            margin-bottom: 1.5rem;
            font-size: 1rem;
            display: flex;
            gap: 1rem;
            align-items: center;
        }
        .product-meta .badge {
            background: var(--secondary-color);
            color: var(--text-dark);
            padding: 0.2rem 0.6rem;
            border-radius: 4px;
            font-weight: 600;
            font-size: 0.8rem;
        }
        .product-price-large {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 2rem;
        }
        .product-description {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 2rem;
            color: #4b5563;
        }
        .cart-actions {
            display: flex;
            gap: 1rem;
            margin-bottom: 3rem;
        }
        .quantity-selector {
            display: flex;
            align-items: center;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            background: var(--white);
        }
        .quantity-selector button {
            background: none;
            border: none;
            padding: 0.8rem 1.2rem;
            font-size: 1.2rem;
            cursor: pointer;
            color: var(--text-dark);
            transition: var(--transition);
        }
        .quantity-selector button:hover {
            background: var(--bg-light);
        }
        .quantity-selector input {
            width: 50px;
            text-align: center;
            border: none;
            font-size: 1.1rem;
            font-weight: 600;
            outline: none;
        }
        .btn-add-large {
            flex: 1;
            padding: 1rem;
            font-size: 1.1rem;
            border-radius: 8px;
        }
        
        .product-tabs {
            margin-top: 2rem;
            border-top: 1px solid #eee;
            padding-top: 2rem;
        }
        .product-tabs h3 {
            margin-bottom: 1rem;
        }
        .product-tabs ul {
            list-style-position: inside;
            color: #4b5563;
            line-height: 1.8;
        }
        
        @media (max-width: 768px) {
            .product-details-container {
                grid-template-columns: 1fr;
            }
            .product-image-large {
                min-height: 300px;
                font-size: 10rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <a href="index.php" class="logo">Gorcery<span>.</span></a>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="offers.php">Offers</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
        <div class="nav-actions">
            <a href="login.php" class="btn btn-outline">Log In</a>
            <a href="cart.php" class="btn btn-primary">Cart (0)</a>
        </div>
    </header>

    <div class="product-details-container">
        <!-- Product Image -->
        <div class="product-image-large">
            🍓
        </div>

        <!-- Product Info -->
        <div class="product-info-large">
            <div class="product-meta">
                <span class="badge">Organic</span>
                <span>Category: Fresh Fruits</span>
                <span>⭐ 4.8 (124 reviews)</span>
            </div>
            
            <h1>Organic Strawberries</h1>
            <div class="product-price-large">₹250 <span style="font-size: 1rem; font-weight: normal; color: var(--text-light);">/ box (1 lb)</span></div>
            
            <p class="product-description">
                Sweet, juicy, and 100% organic. Our strawberries are hand-picked at peak ripeness from local farms to ensure the best flavor and quality. Perfect for snacking, baking, or blending into your favorite morning smoothie.
            </p>

            <div class="cart-actions">
                <div class="quantity-selector">
                    <button type="button" onclick="document.getElementById('qty').value = Math.max(1, parseInt(document.getElementById('qty').value) - 1)">-</button>
                    <input type="number" id="qty" value="1" min="1">
                    <button type="button" onclick="document.getElementById('qty').value = parseInt(document.getElementById('qty').value) + 1">+</button>
                </div>
                <button class="btn btn-primary btn-add-large">Add to Cart</button>
            </div>

            <div class="product-tabs">
                <h3>Nutritional Value (per 100g)</h3>
                <ul>
                    <li><strong>Calories:</strong> 32 kcal</li>
                    <li><strong>Carbohydrates:</strong> 7.7 g</li>
                    <li><strong>Fiber:</strong> 2.0 g</li>
                    <li><strong>Vitamin C:</strong> 58.8 mg (98% Daily Value)</li>
                </ul>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-grid">
            <div class="footer-col">
                <h4>Gorcery.</h4>
                <p>Your one-stop destination for fresh, premium quality groceries delivered straight to your door.</p>
            </div>
            <div class="footer-col">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Store Locator</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Customer Service</h4>
                <ul>
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">Track Order</a></li>
                    <li><a href="#">Returns & Refunds</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Newsletter</h4>
                <p>Subscribe to get updates on new products and special offers.</p>
                <div class="search-bar" style="margin-top: 1rem;">
                    <input type="email" placeholder="Your email address" style="padding: 0.5rem 1rem;">
                    <button class="btn btn-primary" style="padding: 0.5rem 1rem;">Subscribe</button>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 Gorcery. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Add to Cart from product detail page
        document.querySelector('.btn-add-large').addEventListener('click', function() {
            const qty = parseInt(document.getElementById('qty').value) || 1;
            const emoji = '🍓';
            const name = 'Organic Strawberries';
            const category = 'Fresh Fruits';
            const price = 250;

            let cart = JSON.parse(localStorage.getItem('gorceryCart') || '[]');

            const existing = cart.find(item => item.name === name);
            if (existing) {
                existing.qty += qty;
            } else {
                cart.push({ emoji, name, category, price, qty });
            }

            localStorage.setItem('gorceryCart', JSON.stringify(cart));

            this.textContent = 'Added ✓';
            this.style.background = '#16a34a';

            setTimeout(() => {
                window.location.href = 'cart.php';
            }, 400);
        });
    </script>
</body>
</html>
