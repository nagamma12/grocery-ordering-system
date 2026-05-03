<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gorcery - Fresh Food Delivered</title>
    <meta name="description" content="Order premium quality groceries online with fast delivery from Gorcery. Fresh fruits, vegetables, dairy, and more.">
    <!-- Google Fonts for Modern Typography -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Header Navigation -->
    <header>
        <a href="#" class="logo">Gorcery<span>.</span></a>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#shop">Shop</a></li>
                <li><a href="#offers">Offers</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#location">Location</a></li>
            </ul>
        </nav>
        <div class="nav-actions">
            <a href="login.php" class="btn btn-outline">Log In</a>
            <a href="cart.php" class="btn btn-primary" id="cart-count-btn" style="background: var(--primary-dark);">Cart (0)</a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-bg"></div>
        <div class="hero-content">
            <h1>Fresh Groceries, <span>Delivered</span> to Your Door</h1>
            <p>Shop from a wide selection of premium organic produce, everyday essentials, and exclusive artisanal goods.</p>
            <form action="shop.php" method="GET" class="search-bar">
                <input type="text" name="q" placeholder="Search for products, categories...">
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
    </section>

    <!-- Features Ribbon -->
    <section class="features reveal reveal-fade">
        <div class="feature-item">
            <div class="icon">🚀</div>
            <h4>Fast Delivery</h4>
            <p>Within 2 hours</p>
        </div>
        <div class="feature-item">
            <div class="icon">🥬</div>
            <h4>100% Fresh</h4>
            <p>Farm to table</p>
        </div>
        <div class="feature-item">
            <div class="icon">💳</div>
            <h4>Secure Payment</h4>
            <p>100% safe checkout</p>
        </div>
        <div class="feature-item">
            <div class="icon">↩️</div>
            <h4>Easy Returns</h4>
            <p>No questions asked</p>
        </div>
    </section>

    <!-- Shop by Category -->
    <section id="categories" class="categories reveal reveal-fade">
        <h2 class="section-title">Shop by Category</h2>
        <div class="category-grid">
            <a href="shop.php?category=vegetables" class="category-card">
                <div class="category-icon">🥦</div>
                <h3>Fresh Vegetables</h3>
            </a>
            <a href="shop.php?category=dairy" class="category-card">
                <div class="category-icon">🥛</div>
                <h3>Dairy & Eggs</h3>
            </a>
            <a href="shop.php?category=grains" class="category-card">
                <div class="category-icon">🌾</div>
                <h3>Grains & Pasta</h3>
            </a>
            <a href="shop.php?category=meat" class="category-card">
                <div class="category-icon">🥩</div>
                <h3>Meat & Seafood</h3>
            </a>
            <a href="shop.php?category=beverages" class="category-card">
                <div class="category-icon">🥤</div>
                <h3>Beverages</h3>
            </a>
            <a href="shop.php?category=fruits" class="category-card">
                <div class="category-icon">🍎</div>
                <h3>Fresh Fruits</h3>
            </a>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="featured reveal reveal-fade" id="shop">
        <h2 class="section-title" style="text-align: center;">Featured Products</h2>
        <div class="product-grid">
            <!-- Product 1 -->
            <div class="product-card">
                <div class="product-badge">Organic</div>
                <a href="product.php" class="product-img" style="text-decoration:none; color:inherit;">🥑</a>
                <div class="product-info">
                    <div class="product-category">Vegetables</div>
                    <a href="product.php" style="text-decoration:none; color:inherit;"><h3 class="product-title">Fresh Hass Avocado</h3></a>
                    <div class="product-bottom">
                        <span class="product-price">₹150 <span style="font-size:0.9rem; color:var(--text-light); font-weight:normal;">/ea</span></span>
                        <button class="add-btn" aria-label="Add to cart">+</button>
                    </div>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="product-card">
                <a href="product.php" class="product-img" style="text-decoration:none; color:inherit;">🍓</a>
                <div class="product-info">
                    <div class="product-category">Fruits</div>
                    <a href="product.php" style="text-decoration:none; color:inherit;"><h3 class="product-title">Organic Strawberries</h3></a>
                    <div class="product-bottom">
                        <span class="product-price">₹250 <span style="font-size:0.9rem; color:var(--text-light); font-weight:normal;">/box</span></span>
                        <button class="add-btn" aria-label="Add to cart">+</button>
                    </div>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="product-card">
                <div class="product-badge">-15%</div>
                <a href="product.php" class="product-img" style="text-decoration:none; color:inherit;">🍚</a>
                <div class="product-info">
                    <div class="product-category">Grains</div>
                    <a href="product.php" style="text-decoration:none; color:inherit;"><h3 class="product-title">Organic Brown Rice</h3></a>
                    <div class="product-bottom">
                        <span class="product-price">₹180 <span style="font-size:0.9rem; color:var(--text-light); font-weight:normal;">/bag</span></span>
                        <button class="add-btn" aria-label="Add to cart">+</button>
                    </div>
                </div>
            </div>
            <!-- Product 4 -->
            <div class="product-card">
                <a href="product.php" class="product-img" style="text-decoration:none; color:inherit;">🥛</a>
                <div class="product-info">
                    <div class="product-category">Dairy</div>
                    <a href="product.php" style="text-decoration:none; color:inherit;"><h3 class="product-title">Whole Milk 1 Gallon</h3></a>
                    <div class="product-bottom">
                        <span class="product-price">₹120 <span style="font-size:0.9rem; color:var(--text-light); font-weight:normal;">/ea</span></span>
                        <button class="add-btn" aria-label="Add to cart">+</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Offers Section -->
    <section id="offers" class="featured reveal reveal-left" style="background: var(--white); padding-top: 5rem; padding-bottom: 5rem;">
        <h2 class="section-title" style="text-align: center;">Special Offers</h2>
        <div style="max-width: 1200px; margin: 0 auto; text-align: center; padding: 2rem;">
            <div style="background: linear-gradient(135deg, var(--primary-color), #22c55e); color: white; padding: 4rem; border-radius: 16px;">
                <h3 style="font-size: 2rem; margin-bottom: 1rem;">Get 20% Off Your First Order!</h3>
                <p style="font-size: 1.2rem; margin-bottom: 2rem;">Use code <strong>WELCOME20</strong> at checkout.</p>
                <a href="#shop" class="btn btn-outline" style="background: white; color: var(--primary-color); border-color: white;">Shop Now</a>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="featured reveal reveal-right" style="padding-top: 5rem; padding-bottom: 5rem;">
        <h2 class="section-title" style="text-align: center;">About Us</h2>
        <div style="max-width: 800px; margin: 0 auto; text-align: center; color: #4b5563; font-size: 1.1rem; line-height: 1.8;">
            <p>Welcome to <strong>Gorcery.</strong> We are dedicated to delivering the freshest, highest-quality groceries right to your doorstep. Founded in 2026, we partner directly with local farmers and trusted suppliers to ensure that every apple, every loaf of bread, and every carton of milk meets our rigorous standards.</p>
            <p style="margin-top: 1rem;">Our mission is simple: to make healthy, delicious food accessible to everyone with zero hassle. Thank you for choosing Gorcery as your trusted food partner.</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="featured reveal reveal-fade" style="background: var(--white); padding-top: 5rem; padding-bottom: 5rem;">
        <h2 class="section-title" style="text-align: center;">Contact Us</h2>
        <div style="max-width: 600px; margin: 0 auto;">
            <form style="display: flex; flex-direction: column; gap: 1rem;">
                <input type="text" placeholder="Your Name" style="padding: 1rem; border: 1px solid #ddd; border-radius: 8px; font-family: inherit;">
                <input type="email" placeholder="Your Email" style="padding: 1rem; border: 1px solid #ddd; border-radius: 8px; font-family: inherit;">
                <textarea rows="5" placeholder="How can we help you?" style="padding: 1rem; border: 1px solid #ddd; border-radius: 8px; font-family: inherit; resize: vertical;"></textarea>
                <button type="button" class="btn btn-primary" style="padding: 1rem; border-radius: 8px; font-size: 1.1rem; border: none; cursor: pointer; color: white;">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Location Section -->
    <section id="location" class="featured reveal reveal-fade" style="padding-top: 5rem; padding-bottom: 5rem;">
        <h2 class="section-title" style="text-align: center;">Our Store Location</h2>
        <div style="max-width: 1000px; margin: 0 auto; padding: 0 5%;">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center;">
                <div style="color: #4b5563; line-height: 2;">
                    <p style="margin-bottom: 0.8rem; display: flex; align-items: center; gap: 0.5rem;"><span style="font-size: 1.2rem;">📍</span> <strong>Address:</strong> 123, MG Road, Bangalore, Karnataka - 560001</p>
                    <p style="margin-bottom: 0.8rem; display: flex; align-items: center; gap: 0.5rem;"><span style="font-size: 1.2rem;">📞</span> <strong>Phone:</strong> +91 98765 43210</p>
                    <p style="margin-bottom: 0.8rem; display: flex; align-items: center; gap: 0.5rem;"><span style="font-size: 1.2rem;">📧</span> <strong>Email:</strong> support@gorcery.com</p>
                    <p style="display: flex; align-items: center; gap: 0.5rem;"><span style="font-size: 1.2rem;">🕐</span> <strong>Hours:</strong> Mon - Sun, 7:00 AM – 10:00 PM</p>
                </div>
                <div style="border-radius: 12px; overflow: hidden; box-shadow: var(--shadow-sm);">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.0099731710977!2d77.6069!3d12.9716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae167e36e5e607%3A0x3fc1e3e0e6e5e607!2sMG%20Road%2C%20Bengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1620000000000!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-grid">
            <div class="footer-col">
                <h4>Gorcery.</h4>
                <p>Your one-stop destination for fresh, premium quality groceries delivered straight to your door.</p>
            </div>
            <div class="footer-col">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#shop">Shop</a></li>
                    <li><a href="#offers">Offers</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Store Location</h4>
                <ul>
                    <li>📍 123, MG Road, Bangalore</li>
                    <li>📞 +91 98765 43210</li>
                    <li>📧 support@gorcery.com</li>
                    <li>🕐 Mon-Sun, 7AM – 10PM</li>
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
        // Reveal Animations on Scroll
        const revealCallback = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        };

        const revealObserver = new IntersectionObserver(revealCallback, {
            threshold: 0.1
        });

        document.querySelectorAll('.reveal').forEach(el => {
            revealObserver.observe(el);
        });

        // Update cart count in header
        document.addEventListener('DOMContentLoaded', () => {
            const cart = JSON.parse(localStorage.getItem('gorceryCart') || '[]');
            const totalItems = cart.reduce((sum, item) => sum + item.qty, 0);
            const cartBtn = document.getElementById('cart-count-btn');
            if (cartBtn) cartBtn.textContent = 'Cart (' + totalItems + ')';
        });

        // Add to Cart logic using localStorage
        document.querySelectorAll('.add-btn').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                
                const card = this.closest('.product-card');
                if (!card) return;
                
                const emoji = card.querySelector('.product-img').textContent.trim();
                const name = card.querySelector('.product-title').textContent.trim();
                const category = card.querySelector('.product-category').textContent.trim();
                const priceText = card.querySelector('.product-price').childNodes[0].textContent.trim();
                const price = parseFloat(priceText.replace('₹', '').replace(',', '')) || 0;
                
                let cart = JSON.parse(localStorage.getItem('gorceryCart') || '[]');
                
                const existing = cart.find(item => item.name === name);
                if (existing) {
                    existing.qty += 1;
                } else {
                    cart.push({ emoji, name, category, price, qty: 1 });
                }
                
                localStorage.setItem('gorceryCart', JSON.stringify(cart));
                
                this.innerHTML = '✓';
                this.style.background = 'var(--primary-color)';
                this.style.color = 'var(--white)';
                this.style.transform = 'scale(1.1)';
                
                setTimeout(() => {
                    window.location.href = 'cart.php';
                }, 400);
            });
        });
    </script>
</body>
</html>
