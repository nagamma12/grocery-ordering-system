<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart - Gorcery</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        .cart-container {
            max-width: 1000px;
            margin: 4rem auto;
            padding: 0 5%;
        }
        .cart-header {
            margin-bottom: 2rem;
            border-bottom: 2px solid var(--bg-light);
            padding-bottom: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .empty-cart {
            text-align: center;
            padding: 4rem 2rem;
            background: var(--white);
            border-radius: 16px;
            box-shadow: var(--shadow-sm);
        }
        .empty-cart h2 {
            margin-bottom: 1rem;
            color: var(--text-dark);
        }
        .empty-cart p {
            color: var(--text-light);
            margin-bottom: 2rem;
        }
        .cart-item {
            display: grid;
            grid-template-columns: 80px 1fr auto auto auto;
            gap: 1.5rem;
            align-items: center;
            padding: 1.5rem;
            background: var(--white);
            border-radius: 12px;
            box-shadow: var(--shadow-sm);
            margin-bottom: 1rem;
        }
        .cart-item-img {
            width: 80px;
            height: 80px;
            background: var(--bg-light);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
        }
        .cart-item-info h3 {
            font-size: 1.1rem;
            margin-bottom: 0.3rem;
            color: var(--text-dark);
        }
        .cart-item-info p {
            font-size: 0.9rem;
            color: var(--text-light);
        }
        .cart-item-price {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--primary-color);
            min-width: 80px;
            text-align: right;
        }
        .cart-qty {
            display: flex;
            align-items: center;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
        }
        .cart-qty button {
            background: none;
            border: none;
            padding: 0.5rem 0.8rem;
            font-size: 1.1rem;
            cursor: pointer;
            color: var(--text-dark);
            transition: var(--transition);
        }
        .cart-qty button:hover {
            background: var(--bg-light);
        }
        .cart-qty span {
            padding: 0.5rem 0.8rem;
            font-weight: 600;
            min-width: 30px;
            text-align: center;
        }
        .cart-remove {
            background: none;
            border: none;
            color: #ef4444;
            cursor: pointer;
            font-size: 1.3rem;
            padding: 0.5rem;
            border-radius: 8px;
            transition: var(--transition);
        }
        .cart-remove:hover {
            background: #fef2f2;
        }
        .cart-summary {
            margin-top: 2rem;
            padding: 2rem;
            background: var(--white);
            border-radius: 12px;
            box-shadow: var(--shadow-sm);
        }
        .cart-summary-row {
            display: flex;
            justify-content: space-between;
            padding: 0.8rem 0;
            font-size: 1.05rem;
        }
        .cart-summary-row.total {
            border-top: 2px solid var(--bg-light);
            margin-top: 0.5rem;
            padding-top: 1.2rem;
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--text-dark);
        }
        .cart-summary-row.total span:last-child {
            color: var(--primary-color);
        }
        .checkout-btn {
            width: 100%;
            padding: 1rem;
            font-size: 1.1rem;
            margin-top: 1.5rem;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            color: white;
        }
        .clear-cart-btn {
            background: none;
            border: 1px solid #ef4444;
            color: #ef4444;
            padding: 0.5rem 1.2rem;
            border-radius: 8px;
            cursor: pointer;
            font-family: inherit;
            font-size: 0.9rem;
            transition: var(--transition);
        }
        .clear-cart-btn:hover {
            background: #ef4444;
            color: white;
        }
    </style>
</head>
<body>

    <header>
        <a href="index.php" class="logo">Gorcery<span>.</span></a>
        <nav>
            <ul>
                <li><a href="index.php#home">Home</a></li>
                <li><a href="index.php#shop">Shop</a></li>
                <li><a href="index.php#offers">Offers</a></li>
                <li><a href="index.php#about">About Us</a></li>
                <li><a href="index.php#contact">Contact</a></li>
                <li><a href="index.php#location">Location</a></li>
            </ul>
        </nav>
        <div class="nav-actions">
            <a href="login.php" class="btn btn-outline">Log In</a>
            <a href="cart.php" class="btn btn-primary" id="cart-count-btn" style="background: var(--primary-dark);">Cart (0)</a>
        </div>
    </header>

    <div class="cart-container">
        <div class="cart-header">
            <h1>Shopping Cart</h1>
            <button class="clear-cart-btn" id="clear-cart" style="display:none;">Clear All</button>
        </div>
        
        <!-- Cart Items rendered by JS -->
        <div id="cart-items"></div>

        <!-- Cart Summary rendered by JS -->
        <div id="cart-summary"></div>
    </div>

    <script>
        function getCart() {
            return JSON.parse(localStorage.getItem('gorceryCart') || '[]');
        }

        function saveCart(cart) {
            localStorage.setItem('gorceryCart', JSON.stringify(cart));
        }

        function renderCart() {
            const cart = getCart();
            const itemsDiv = document.getElementById('cart-items');
            const summaryDiv = document.getElementById('cart-summary');
            const clearBtn = document.getElementById('clear-cart');
            const cartCountBtn = document.getElementById('cart-count-btn');

            // Update cart count in header
            const totalItems = cart.reduce((sum, item) => sum + item.qty, 0);
            if (cartCountBtn) cartCountBtn.textContent = 'Cart (' + totalItems + ')';

            if (cart.length === 0) {
                clearBtn.style.display = 'none';
                itemsDiv.innerHTML = `
                    <div class="empty-cart">
                        <div style="font-size: 4rem; margin-bottom: 1rem;">🛒</div>
                        <h2>Your cart is currently empty</h2>
                        <p>Looks like you haven't added any fresh groceries to your cart yet.</p>
                        <a href="dashboard.php" class="btn btn-primary">Start Shopping</a>
                    </div>`;
                summaryDiv.innerHTML = '';
                return;
            }

            clearBtn.style.display = 'inline-block';

            // Render items
            let html = '';
            let subtotal = 0;
            cart.forEach((item, index) => {
                const itemTotal = item.price * item.qty;
                subtotal += itemTotal;
                html += `
                    <div class="cart-item">
                        <div class="cart-item-img">${item.emoji}</div>
                        <div class="cart-item-info">
                            <h3>${item.name}</h3>
                            <p>${item.category}</p>
                        </div>
                        <div class="cart-qty">
                            <button onclick="changeQty(${index}, -1)">-</button>
                            <span>${item.qty}</span>
                            <button onclick="changeQty(${index}, 1)">+</button>
                        </div>
                        <div class="cart-item-price">\u20b9${itemTotal.toLocaleString('en-IN')}</div>
                        <button class="cart-remove" onclick="removeItem(${index})" title="Remove">&times;</button>
                    </div>`;
            });
            itemsDiv.innerHTML = html;

            // Render summary
            const delivery = subtotal >= 500 ? 0 : 40;
            const total = subtotal + delivery;
            summaryDiv.innerHTML = `
                <div class="cart-summary">
                    <div class="cart-summary-row">
                        <span>Subtotal (${totalItems} items)</span>
                        <span>\u20b9${subtotal.toLocaleString('en-IN')}</span>
                    </div>
                    <div class="cart-summary-row">
                        <span>Delivery</span>
                        <span>${delivery === 0 ? '<span style="color: var(--primary-color); font-weight:600;">FREE</span>' : '\u20b9' + delivery}</span>
                    </div>
                    <div class="cart-summary-row total">
                        <span>Total</span>
                        <span>\u20b9${total.toLocaleString('en-IN')}</span>
                    </div>
                    <button class="btn btn-primary checkout-btn">Proceed to Checkout</button>
                    ${delivery === 0 ? '' : '<p style="text-align:center; margin-top:1rem; color:var(--text-light); font-size:0.9rem;">Add \u20b9' + (500 - subtotal) + ' more for free delivery!</p>'}
                </div>`;
        }

        function changeQty(index, delta) {
            const cart = getCart();
            cart[index].qty += delta;
            if (cart[index].qty <= 0) {
                cart.splice(index, 1);
            }
            saveCart(cart);
            renderCart();
        }

        function removeItem(index) {
            const cart = getCart();
            cart.splice(index, 1);
            saveCart(cart);
            renderCart();
        }

        document.getElementById('clear-cart').addEventListener('click', () => {
            localStorage.removeItem('gorceryCart');
            renderCart();
        });

        renderCart();
    </script>

</body>
</html>
