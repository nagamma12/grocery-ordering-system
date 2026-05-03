<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop All Products - Gorcery</title>
    <meta name="description" content="Browse our wide selection of fresh fruits, vegetables, dairy, and artisanal goods.">
    <!-- Google Fonts for Modern Typography -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Header Navigation -->
    <header>
        <a href="index.php" class="logo">Gorcery<span>.</span></a>
        <nav>
            <ul>
                <!-- Menu moved to sidebar -->
            </ul>
        </nav>
        <div class="nav-actions" style="display: flex; align-items: center;">
            <span style="font-weight: 600; margin-right: 1.5rem;">Hi, Admin</span>
            <a href="cart.php" class="btn btn-primary">Cart (0)</a>
            <a href="index.php" class="btn btn-outline" style="margin-left: 0.5rem; border-color: #ef4444; color: #ef4444;">Log Out</a>
        </div>
    </header>

    <!-- Page Header -->
    <div class="page-header">
        <h1>Shop All Products</h1>
        <p>Fresh groceries delivered straight to your door.</p>
    </div>

    <!-- Shop Layout -->
    <div class="shop-container">
        <!-- Sidebar Filters -->
        <aside class="shop-sidebar">
            <div class="dashboard-menu" style="margin-bottom: 2.5rem;">
                <h3 style="margin-bottom: 1rem;">Admin</h3>
                <ul class="filter-list" style="list-style: none;">
                    <li style="margin-bottom: 0.5rem;"><a href="#" class="view-tab active" data-view="dashboard" style="text-decoration: none; color: var(--primary-color); font-weight: 600; display: block; padding: 0.5rem; background: var(--bg-light); border-radius: 8px;">Dashboard</a></li>
                    <li style="margin-bottom: 0.5rem;"><a href="#" class="view-tab" data-view="orders" style="text-decoration: none; color: var(--text-dark); display: block; padding: 0.5rem; border-radius: 8px; transition: var(--transition);">My Orders</a></li>
                    <li style="margin-bottom: 0.5rem;"><a href="#" class="view-tab" data-view="profile" style="text-decoration: none; color: var(--text-dark); display: block; padding: 0.5rem; border-radius: 8px; transition: var(--transition);">My Profile</a></li>
                    <li style="margin-bottom: 0.5rem;"><a href="#" class="view-tab" data-view="settings" style="text-decoration: none; color: var(--text-dark); display: block; padding: 0.5rem; border-radius: 8px; transition: var(--transition);">Settings</a></li>
                </ul>
            </div>

            <h3 class="sidebar-toggle" style="cursor: pointer; display: flex; justify-content: space-between; align-items: center;">Categories <span>▼</span></h3>
            <ul class="filter-list">
                <li><input type="radio" name="category" id="cat-all" value="all" checked> <label for="cat-all">All Products</label></li>
                <li><input type="radio" name="category" id="cat-vegetables" value="vegetables"> <label for="cat-vegetables">Fresh Vegetables</label></li>
                <li><input type="radio" name="category" id="cat-fruits" value="fruits"> <label for="cat-fruits">Fresh Fruits</label></li>
                <li><input type="radio" name="category" id="cat-dairy" value="dairy"> <label for="cat-dairy">Dairy & Eggs</label></li>
                <li><input type="radio" name="category" id="cat-grains" value="grains"> <label for="cat-grains">Grains & Pasta</label></li>
                <li><input type="radio" name="category" id="cat-meat" value="meat"> <label for="cat-meat">Meat & Seafood</label></li>
                <li><input type="radio" name="category" id="cat-drinks" value="drinks"> <label for="cat-drinks">Beverages</label></li>
            </ul>

            <h3 class="sidebar-toggle" style="margin-top: 2.5rem; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">Price Range <span>▼</span></h3>
            <div class="price-filter">
                <input type="range" min="0" max="100" style="width: 100%;" accent-color="var(--primary-color)">
                <div class="price-labels">
                    <span>₹0</span>
                    <span>₹2000+</span>
                </div>
            </div>

            <h3 class="sidebar-toggle" style="margin-top: 2.5rem; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">Special Diet <span>▼</span></h3>
            <ul class="filter-list">
                <li><input type="radio" name="diet" id="diet-any" checked> <label for="diet-any">Any</label></li>
                <li><input type="radio" name="diet" id="diet-organic"> <label for="diet-organic">Organic</label></li>
                <li><input type="radio" name="diet" id="diet-gluten"> <label for="diet-gluten">Gluten-Free</label></li>
                <li><input type="radio" name="diet" id="diet-vegan"> <label for="diet-vegan">Vegan</label></li>
            </ul>
        </aside>

        <!-- Main Product Grid -->
        <main class="shop-main">

            <!-- VIEW: Dashboard (Shop) -->
            <div id="view-dashboard" class="dashboard-view">
            <div class="shop-controls">
                <p>Showing <strong>1-6</strong> of <strong>36</strong> results</p>
                <select class="sort-select">
                    <option value="default">Default Sorting</option>
                    <option value="price-low">Price: Low to High</option>
                    <option value="price-high">Price: High to Low</option>
                    <option value="newest">Newest First</option>
                    <option value="rating">Top Rated</option>
                </select>
            </div>

            <div class="product-grid">
                <!-- Product 1 -->
                <div class="product-card" data-category="vegetables">
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
                <div class="product-card" data-category="fruits">
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
                <div class="product-card" data-category="grains">
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
                <div class="product-card" data-category="dairy">
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
                <!-- Product 5 -->
                <div class="product-card" data-category="vegetables">
                    <div class="product-badge">Local</div>
                    <a href="product.php" class="product-img" style="text-decoration:none; color:inherit;">🍅</a>
                    <div class="product-info">
                        <div class="product-category">Vegetables</div>
                        <a href="product.php" style="text-decoration:none; color:inherit;"><h3 class="product-title">Vine Tomatoes</h3></a>
                        <div class="product-bottom">
                            <span class="product-price">₹60 <span style="font-size:0.9rem; color:var(--text-light); font-weight:normal;">/lb</span></span>
                            <button class="add-btn" aria-label="Add to cart">+</button>
                        </div>
                    </div>
                </div>
                <!-- Product 6 -->
                <div class="product-card" data-category="meat">
                    <a href="product.php" class="product-img" style="text-decoration:none; color:inherit;">🥩</a>
                    <div class="product-info">
                        <div class="product-category">Meat</div>
                        <a href="product.php" style="text-decoration:none; color:inherit;"><h3 class="product-title">Ribeye Steak</h3></a>
                        <div class="product-bottom">
                            <span class="product-price">₹850 <span style="font-size:0.9rem; color:var(--text-light); font-weight:normal;">/lb</span></span>
                            <button class="add-btn" aria-label="Add to cart">+</button>
                        </div>
                    </div>
                </div>
                <!-- Product 7 -->
                <div class="product-card" data-category="vegetables">
                    <a href="product.php" class="product-img" style="text-decoration:none; color:inherit;">🥦</a>
                    <div class="product-info">
                        <div class="product-category">Vegetables</div>
                        <a href="product.php" style="text-decoration:none; color:inherit;"><h3 class="product-title">Fresh Broccoli Crowns</h3></a>
                        <div class="product-bottom">
                            <span class="product-price">₹100 <span style="font-size:0.9rem; color:var(--text-light); font-weight:normal;">/ea</span></span>
                            <button class="add-btn" aria-label="Add to cart">+</button>
                        </div>
                    </div>
                </div>
                <!-- Product 8 -->
                <div class="product-card" data-category="vegetables">
                    <div class="product-badge">Organic</div>
                    <a href="product.php" class="product-img" style="text-decoration:none; color:inherit;">🥕</a>
                    <div class="product-info">
                        <div class="product-category">Vegetables</div>
                        <a href="product.php" style="text-decoration:none; color:inherit;"><h3 class="product-title">Organic Carrots</h3></a>
                        <div class="product-bottom">
                            <span class="product-price">₹80 <span style="font-size:0.9rem; color:var(--text-light); font-weight:normal;">/bunch</span></span>
                            <button class="add-btn" aria-label="Add to cart">+</button>
                        </div>
                    </div>
                </div>
                <!-- Product 9 -->
                <div class="product-card" data-category="vegetables">
                    <a href="product.php" class="product-img" style="text-decoration:none; color:inherit;">🥬</a>
                    <div class="product-info">
                        <div class="product-category">Vegetables</div>
                        <a href="product.php" style="text-decoration:none; color:inherit;"><h3 class="product-title">Baby Spinach</h3></a>
                        <div class="product-bottom">
                            <span class="product-price">₹120 <span style="font-size:0.9rem; color:var(--text-light); font-weight:normal;">/bag</span></span>
                            <button class="add-btn" aria-label="Add to cart">+</button>
                        </div>
                    </div>
                </div>
                <!-- Product 10 -->
                <div class="product-card" data-category="fruits">
                    <div class="product-badge">Fresh</div>
                    <a href="product.php" class="product-img" style="text-decoration:none; color:inherit;">🍌</a>
                    <div class="product-info">
                        <div class="product-category">Fruits</div>
                        <a href="product.php" style="text-decoration:none; color:inherit;"><h3 class="product-title">Premium Bananas</h3></a>
                        <div class="product-bottom">
                            <span class="product-price">₹60 <span style="font-size:0.9rem; color:var(--text-light); font-weight:normal;">/doz</span></span>
                            <button class="add-btn" aria-label="Add to cart">+</button>
                        </div>
                    </div>
                </div>
                <!-- Product 11 -->
                <div class="product-card" data-category="fruits">
                    <a href="product.php" class="product-img" style="text-decoration:none; color:inherit;">🍎</a>
                    <div class="product-info">
                        <div class="product-category">Fruits</div>
                        <a href="product.php" style="text-decoration:none; color:inherit;"><h3 class="product-title">Kashmir Apples</h3></a>
                        <div class="product-bottom">
                            <span class="product-price">₹200 <span style="font-size:0.9rem; color:var(--text-light); font-weight:normal;">/kg</span></span>
                            <button class="add-btn" aria-label="Add to cart">+</button>
                        </div>
                    </div>
                </div>
                <!-- Product 12 -->
                <div class="product-card" data-category="fruits">
                    <div class="product-badge">Organic</div>
                    <a href="product.php" class="product-img" style="text-decoration:none; color:inherit;">🍊</a>
                    <div class="product-info">
                        <div class="product-category">Fruits</div>
                        <a href="product.php" style="text-decoration:none; color:inherit;"><h3 class="product-title">Nagpur Oranges</h3></a>
                        <div class="product-bottom">
                            <span class="product-price">₹150 <span style="font-size:0.9rem; color:var(--text-light); font-weight:normal;">/kg</span></span>
                            <button class="add-btn" aria-label="Add to cart">+</button>
                        </div>
                    </div>
                </div>
                <!-- Product 13 -->
                <div class="product-card" data-category="dairy">
                    <a href="product.php" class="product-img" style="text-decoration:none; color:inherit;">🥚</a>
                    <div class="product-info">
                        <div class="product-category">Dairy & Eggs</div>
                        <a href="product.php" style="text-decoration:none; color:inherit;"><h3 class="product-title">Farm Fresh Eggs</h3></a>
                        <div class="product-bottom">
                            <span class="product-price">₹90 <span style="font-size:0.9rem; color:var(--text-light); font-weight:normal;">/doz</span></span>
                            <button class="add-btn" aria-label="Add to cart">+</button>
                        </div>
                    </div>
                </div>
                <!-- Product 14 -->
                <div class="product-card" data-category="dairy">
                    <a href="product.php" class="product-img" style="text-decoration:none; color:inherit;">🧀</a>
                    <div class="product-info">
                        <div class="product-category">Dairy & Eggs</div>
                        <a href="product.php" style="text-decoration:none; color:inherit;"><h3 class="product-title">Cheddar Cheese Block</h3></a>
                        <div class="product-bottom">
                            <span class="product-price">₹350 <span style="font-size:0.9rem; color:var(--text-light); font-weight:normal;">/200g</span></span>
                            <button class="add-btn" aria-label="Add to cart">+</button>
                        </div>
                    </div>
                </div>
                <!-- Product 15 -->
                <div class="product-card" data-category="grains">
                    <a href="product.php" class="product-img" style="text-decoration:none; color:inherit;">🍝</a>
                    <div class="product-info">
                        <div class="product-category">Grains & Pasta</div>
                        <a href="product.php" style="text-decoration:none; color:inherit;"><h3 class="product-title">Whole Wheat Pasta</h3></a>
                        <div class="product-bottom">
                            <span class="product-price">₹120 <span style="font-size:0.9rem; color:var(--text-light); font-weight:normal;">/pack</span></span>
                            <button class="add-btn" aria-label="Add to cart">+</button>
                        </div>
                    </div>
                </div>
                <!-- Product 16 -->
                <div class="product-card" data-category="grains">
                    <div class="product-badge">Healthy</div>
                    <a href="product.php" class="product-img" style="text-decoration:none; color:inherit;">🥣</a>
                    <div class="product-info">
                        <div class="product-category">Grains & Pasta</div>
                        <a href="product.php" style="text-decoration:none; color:inherit;"><h3 class="product-title">Rolled Oats</h3></a>
                        <div class="product-bottom">
                            <span class="product-price">₹250 <span style="font-size:0.9rem; color:var(--text-light); font-weight:normal;">/kg</span></span>
                            <button class="add-btn" aria-label="Add to cart">+</button>
                        </div>
                    </div>
                </div>
                <!-- Product 17 -->
                <div class="product-card" data-category="meat">
                    <a href="product.php" class="product-img" style="text-decoration:none; color:inherit;">🍗</a>
                    <div class="product-info">
                        <div class="product-category">Meat & Seafood</div>
                        <a href="product.php" style="text-decoration:none; color:inherit;"><h3 class="product-title">Fresh Chicken Breast</h3></a>
                        <div class="product-bottom">
                            <span class="product-price">₹300 <span style="font-size:0.9rem; color:var(--text-light); font-weight:normal;">/kg</span></span>
                            <button class="add-btn" aria-label="Add to cart">+</button>
                        </div>
                    </div>
                </div>
                <!-- Product 18 -->
                <div class="product-card" data-category="meat">
                    <a href="product.php" class="product-img" style="text-decoration:none; color:inherit;">🐟</a>
                    <div class="product-info">
                        <div class="product-category">Meat & Seafood</div>
                        <a href="product.php" style="text-decoration:none; color:inherit;"><h3 class="product-title">Fresh Salmon Fillet</h3></a>
                        <div class="product-bottom">
                            <span class="product-price">₹1200 <span style="font-size:0.9rem; color:var(--text-light); font-weight:normal;">/kg</span></span>
                            <button class="add-btn" aria-label="Add to cart">+</button>
                        </div>
                    </div>
                </div>
                <!-- Product 19 -->
                <div class="product-card" data-category="drinks">
                    <a href="product.php" class="product-img" style="text-decoration:none; color:inherit;">🧃</a>
                    <div class="product-info">
                        <div class="product-category">Beverages</div>
                        <a href="product.php" style="text-decoration:none; color:inherit;"><h3 class="product-title">100% Orange Juice</h3></a>
                        <div class="product-bottom">
                            <span class="product-price">₹110 <span style="font-size:0.9rem; color:var(--text-light); font-weight:normal;">/L</span></span>
                            <button class="add-btn" aria-label="Add to cart">+</button>
                        </div>
                    </div>
                </div>
                <!-- Product 20 -->
                <div class="product-card" data-category="drinks">
                    <div class="product-badge">Organic</div>
                    <a href="product.php" class="product-img" style="text-decoration:none; color:inherit;">🍵</a>
                    <div class="product-info">
                        <div class="product-category">Beverages</div>
                        <a href="product.php" style="text-decoration:none; color:inherit;"><h3 class="product-title">Green Tea Leaves</h3></a>
                        <div class="product-bottom">
                            <span class="product-price">₹280 <span style="font-size:0.9rem; color:var(--text-light); font-weight:normal;">/box</span></span>
                            <button class="add-btn" aria-label="Add to cart">+</button>
                        </div>
                    </div>
                </div>
                <!-- Product 21 -->
                <div class="product-card" data-category="drinks">
                    <a href="product.php" class="product-img" style="text-decoration:none; color:inherit;">☕</a>
                    <div class="product-info">
                        <div class="product-category">Beverages</div>
                        <a href="product.php" style="text-decoration:none; color:inherit;"><h3 class="product-title">Filter Coffee Powder</h3></a>
                        <div class="product-bottom">
                            <span class="product-price">₹350 <span style="font-size:0.9rem; color:var(--text-light); font-weight:normal;">/500g</span></span>
                            <button class="add-btn" aria-label="Add to cart">+</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Pagination -->
            <div class="pagination">
                <a href="#" class="btn btn-outline page-link" data-page="prev" style="padding: 0.4rem 0.8rem;">&laquo;</a>
                <a href="#" class="btn btn-primary page-link" data-page="1" style="padding: 0.4rem 0.8rem;">1</a>
                <a href="#" class="btn btn-outline page-link" data-page="2" style="padding: 0.4rem 0.8rem;">2</a>
                <a href="#" class="btn btn-outline page-link" data-page="3" style="padding: 0.4rem 0.8rem;">3</a>
                <a href="#" class="btn btn-outline page-link" data-page="next" style="padding: 0.4rem 0.8rem;">&raquo;</a>
            </div>
            </div><!-- end #view-dashboard -->

            <!-- VIEW: My Orders -->
            <div id="view-orders" class="dashboard-view" style="display:none;">
                <h2 style="margin-bottom: 1.5rem; color: var(--text-dark);">My Orders</h2>
                <div style="background: var(--white); border-radius: 12px; box-shadow: var(--shadow-sm); overflow: hidden;">
                    <table style="width: 100%; border-collapse: collapse;">
                        <thead>
                            <tr style="background: var(--bg-light); text-align: left;">
                                <th style="padding: 1rem;">Order ID</th>
                                <th style="padding: 1rem;">Date</th>
                                <th style="padding: 1rem;">Items</th>
                                <th style="padding: 1rem;">Total</th>
                                <th style="padding: 1rem;">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="border-bottom: 1px solid #eee;">
                                <td style="padding: 1rem; font-weight: 600;">#GRC-1024</td>
                                <td style="padding: 1rem;">02 May 2026</td>
                                <td style="padding: 1rem;">Organic Carrots, Brown Rice, Milk</td>
                                <td style="padding: 1rem; font-weight: 600; color: var(--primary-color);">₹380</td>
                                <td style="padding: 1rem;"><span style="background: #dcfce7; color: #16a34a; padding: 0.3rem 0.8rem; border-radius: 50px; font-size: 0.85rem; font-weight: 600;">Delivered</span></td>
                            </tr>
                            <tr style="border-bottom: 1px solid #eee;">
                                <td style="padding: 1rem; font-weight: 600;">#GRC-1019</td>
                                <td style="padding: 1rem;">28 Apr 2026</td>
                                <td style="padding: 1rem;">Kashmir Apples, Green Tea, Eggs</td>
                                <td style="padding: 1rem; font-weight: 600; color: var(--primary-color);">₹570</td>
                                <td style="padding: 1rem;"><span style="background: #dcfce7; color: #16a34a; padding: 0.3rem 0.8rem; border-radius: 50px; font-size: 0.85rem; font-weight: 600;">Delivered</span></td>
                            </tr>
                            <tr style="border-bottom: 1px solid #eee;">
                                <td style="padding: 1rem; font-weight: 600;">#GRC-1031</td>
                                <td style="padding: 1rem;">03 May 2026</td>
                                <td style="padding: 1rem;">Chicken Breast, Tomatoes, Coffee</td>
                                <td style="padding: 1rem; font-weight: 600; color: var(--primary-color);">₹710</td>
                                <td style="padding: 1rem;"><span style="background: #fef9c3; color: #ca8a04; padding: 0.3rem 0.8rem; border-radius: 50px; font-size: 0.85rem; font-weight: 600;">In Transit</span></td>
                            </tr>
                            <tr>
                                <td style="padding: 1rem; font-weight: 600;">#GRC-1035</td>
                                <td style="padding: 1rem;">03 May 2026</td>
                                <td style="padding: 1rem;">Salmon Fillet, Rolled Oats</td>
                                <td style="padding: 1rem; font-weight: 600; color: var(--primary-color);">₹1,450</td>
                                <td style="padding: 1rem;"><span style="background: #dbeafe; color: #2563eb; padding: 0.3rem 0.8rem; border-radius: 50px; font-size: 0.85rem; font-weight: 600;">Processing</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- VIEW: My Profile -->
            <div id="view-profile" class="dashboard-view" style="display:none;">
                <h2 style="margin-bottom: 1.5rem; color: var(--text-dark);">My Profile</h2>
                <div style="background: var(--white); border-radius: 12px; box-shadow: var(--shadow-sm); padding: 2rem;">
                    <form style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
                        <div>
                            <label style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: var(--text-dark);">Full Name</label>
                            <input type="text" value="Admin" style="width: 100%; padding: 0.8rem 1rem; border: 1px solid #ddd; border-radius: 8px; font-family: inherit; font-size: 1rem;">
                        </div>
                        <div>
                            <label style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: var(--text-dark);">Email Address</label>
                            <input type="email" value="admin@gorcery.com" style="width: 100%; padding: 0.8rem 1rem; border: 1px solid #ddd; border-radius: 8px; font-family: inherit; font-size: 1rem;">
                        </div>
                        <div>
                            <label style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: var(--text-dark);">Phone Number</label>
                            <input type="tel" value="+91 98765 43210" style="width: 100%; padding: 0.8rem 1rem; border: 1px solid #ddd; border-radius: 8px; font-family: inherit; font-size: 1rem;">
                        </div>
                        <div>
                            <label style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: var(--text-dark);">Date of Birth</label>
                            <input type="date" value="1995-06-15" style="width: 100%; padding: 0.8rem 1rem; border: 1px solid #ddd; border-radius: 8px; font-family: inherit; font-size: 1rem;">
                        </div>
                        <div style="grid-column: 1 / -1;">
                            <label style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: var(--text-dark);">Delivery Address</label>
                            <textarea rows="3" style="width: 100%; padding: 0.8rem 1rem; border: 1px solid #ddd; border-radius: 8px; font-family: inherit; font-size: 1rem; resize: vertical;">123, MG Road, Bangalore, Karnataka - 560001</textarea>
                        </div>
                        <div style="grid-column: 1 / -1;">
                            <button type="button" class="btn btn-primary" style="padding: 0.8rem 2rem; border: none; border-radius: 8px; cursor: pointer; font-size: 1rem; color: white;">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- VIEW: Settings -->
            <div id="view-settings" class="dashboard-view" style="display:none;">
                <h2 style="margin-bottom: 1.5rem; color: var(--text-dark);">Settings</h2>
                <div style="background: var(--white); border-radius: 12px; box-shadow: var(--shadow-sm); padding: 2rem; margin-bottom: 1.5rem;">
                    <h3 style="margin-bottom: 1rem; font-size: 1.2rem;">Change Password</h3>
                    <form style="display: flex; flex-direction: column; gap: 1rem; max-width: 400px;">
                        <div>
                            <label style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: var(--text-dark);">Current Password</label>
                            <input type="password" placeholder="••••••••" style="width: 100%; padding: 0.8rem 1rem; border: 1px solid #ddd; border-radius: 8px; font-family: inherit; font-size: 1rem;">
                        </div>
                        <div>
                            <label style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: var(--text-dark);">New Password</label>
                            <input type="password" placeholder="••••••••" style="width: 100%; padding: 0.8rem 1rem; border: 1px solid #ddd; border-radius: 8px; font-family: inherit; font-size: 1rem;">
                        </div>
                        <div>
                            <label style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: var(--text-dark);">Confirm New Password</label>
                            <input type="password" placeholder="••••••••" style="width: 100%; padding: 0.8rem 1rem; border: 1px solid #ddd; border-radius: 8px; font-family: inherit; font-size: 1rem;">
                        </div>
                        <button type="button" class="btn btn-primary" style="padding: 0.8rem 2rem; border: none; border-radius: 8px; cursor: pointer; font-size: 1rem; color: white; width: fit-content;">Update Password</button>
                    </form>
                </div>
                <div style="background: var(--white); border-radius: 12px; box-shadow: var(--shadow-sm); padding: 2rem;">
                    <h3 style="margin-bottom: 1rem; font-size: 1.2rem;">Notifications</h3>
                    <div style="display: flex; flex-direction: column; gap: 1rem;">
                        <label style="display: flex; align-items: center; gap: 0.8rem; cursor: pointer;">
                            <input type="checkbox" checked style="width: 18px; height: 18px; accent-color: var(--primary-color);">
                            <span>Email notifications for order updates</span>
                        </label>
                        <label style="display: flex; align-items: center; gap: 0.8rem; cursor: pointer;">
                            <input type="checkbox" checked style="width: 18px; height: 18px; accent-color: var(--primary-color);">
                            <span>SMS alerts for delivery status</span>
                        </label>
                        <label style="display: flex; align-items: center; gap: 0.8rem; cursor: pointer;">
                            <input type="checkbox" style="width: 18px; height: 18px; accent-color: var(--primary-color);">
                            <span>Promotional offers and discounts</span>
                        </label>
                    </div>
                </div>
            </div>

        </main>
    </div>

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
        // Add to Cart logic using localStorage
        document.querySelectorAll('.add-btn').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                
                const card = this.closest('.product-card');
                if (!card) return;
                
                // Extract product info from the card
                const emoji = card.querySelector('.product-img').textContent.trim();
                const name = card.querySelector('.product-title').textContent.trim();
                const category = card.querySelector('.product-category').textContent.trim();
                const priceText = card.querySelector('.product-price').childNodes[0].textContent.trim();
                const price = parseFloat(priceText.replace('₹', '').replace(',', '')) || 0;
                
                // Get current cart
                let cart = JSON.parse(localStorage.getItem('gorceryCart') || '[]');
                
                // Check if item already exists
                const existing = cart.find(item => item.name === name);
                if (existing) {
                    existing.qty += 1;
                } else {
                    cart.push({ emoji, name, category, price, qty: 1 });
                }
                
                localStorage.setItem('gorceryCart', JSON.stringify(cart));
                
                // Visual feedback
                this.innerHTML = '✓';
                this.style.background = 'var(--primary-color)';
                this.style.color = 'var(--white)';
                this.style.transform = 'scale(1.1)';
                
                // Redirect to cart after a brief animation
                setTimeout(() => {
                    window.location.href = 'cart.php';
                }, 400);
            });
        });

        // Category Filter, Sorting & Pagination Logic
        const categoryRadios = document.querySelectorAll('input[name="category"]');
        const sortSelect = document.querySelector('.sort-select');
        let productCards = Array.from(document.querySelectorAll('.product-card'));
        const productGrid = document.querySelector('.product-grid');
        const pageLinks = document.querySelectorAll('.page-link');
        const resultsText = document.querySelector('.shop-controls p');
        
        // Save original index for default/newest/rating sorting
        productCards.forEach((card, index) => {
            card.dataset.originalIndex = index;
        });
        
        let currentPage = 1;
        const itemsPerPage = 9; // Show 9 items per page for demo
        let currentCategory = 'all';
        let currentSort = 'default';

        function getPrice(card) {
            let text = card.querySelector('.product-price').childNodes[0].textContent.trim();
            return parseFloat(text.replace('₹', '').replace(',', '')) || 0;
        }

        function renderProducts() {
            // Filter
            let filtered = productCards.filter(card => {
                return currentCategory === 'all' || card.dataset.category === currentCategory;
            });
            
            // Sort
            if (currentSort === 'default') {
                filtered.sort((a, b) => parseInt(a.dataset.originalIndex) - parseInt(b.dataset.originalIndex));
            } else if (currentSort === 'price-low') {
                filtered.sort((a, b) => getPrice(a) - getPrice(b));
            } else if (currentSort === 'price-high') {
                filtered.sort((a, b) => getPrice(b) - getPrice(a));
            } else if (currentSort === 'newest') {
                filtered.sort((a, b) => parseInt(b.dataset.originalIndex) - parseInt(a.dataset.originalIndex));
            } else if (currentSort === 'rating') {
                // Pseudo-random stable sort
                filtered.sort((a, b) => (parseInt(a.dataset.originalIndex) * 7 % 10) - (parseInt(b.dataset.originalIndex) * 7 % 10));
            }
            
            // Re-append to grid in sorted order so DOM respects it
            filtered.forEach(card => productGrid.appendChild(card));
            
            // Hide all first
            productCards.forEach(card => card.style.display = 'none');
            
            // Total pages
            const totalPages = Math.max(1, Math.ceil(filtered.length / itemsPerPage));
            if (currentPage > totalPages) currentPage = totalPages;
            if (currentPage < 1) currentPage = 1;
            
            // Slice
            const start = (currentPage - 1) * itemsPerPage;
            const end = start + itemsPerPage;
            
            filtered.slice(start, end).forEach(card => card.style.display = 'block');
            
            // Update Text
            resultsText.innerHTML = `Showing <strong>${filtered.length > 0 ? start + 1 : 0}-${Math.min(end, filtered.length)}</strong> of <strong>${filtered.length}</strong> results`;
            
            // Update Pagination Buttons
            pageLinks.forEach(link => {
                let pageVal = link.dataset.page;
                if (pageVal === 'prev' || pageVal === 'next') {
                    link.style.display = totalPages > 1 ? 'inline-block' : 'none';
                    return;
                }
                
                if (parseInt(pageVal) === currentPage) {
                    link.className = 'btn btn-primary page-link';
                } else {
                    link.className = 'btn btn-outline page-link';
                }
                
                // Hide page numbers greater than total pages
                if (parseInt(pageVal) > totalPages) {
                    link.style.display = 'none';
                } else {
                    link.style.display = 'inline-block';
                }
            });
        }

        categoryRadios.forEach(radio => {
            radio.addEventListener('change', (e) => {
                currentCategory = e.target.value;
                currentPage = 1; // Reset to page 1 on category change
                renderProducts();
            });
        });

        sortSelect.addEventListener('change', (e) => {
            currentSort = e.target.value;
            currentPage = 1; // Reset to page 1 on sort change
            renderProducts();
        });

        // Sidebar Toggle Logic
        document.querySelectorAll('.sidebar-toggle').forEach(toggle => {
            toggle.addEventListener('click', function() {
                const content = this.nextElementSibling;
                const arrow = this.querySelector('span');
                if (content.style.display === 'none') {
                    content.style.display = '';
                    arrow.innerText = '▼';
                } else {
                    content.style.display = 'none';
                    arrow.innerText = '▶';
                }
            });
        });

        pageLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const action = link.dataset.page;
                
                let filteredLength = productCards.filter(card => currentCategory === 'all' || card.dataset.category === currentCategory).length;
                let totalPages = Math.max(1, Math.ceil(filteredLength / itemsPerPage));

                if (action === 'prev') {
                    if (currentPage > 1) currentPage--;
                } else if (action === 'next') {
                    if (currentPage < totalPages) currentPage++;
                } else {
                    currentPage = parseInt(action);
                }
                
                renderProducts();
                window.scrollTo({ top: 300, behavior: 'smooth' }); // Scroll up a bit for UX
            });
        });
        
        // Initial render
        renderProducts();

        // ===== View Tab Switching Logic =====
        const viewTabs = document.querySelectorAll('.view-tab');
        const allViews = document.querySelectorAll('.dashboard-view');
        const sidebar = document.querySelector('.shop-sidebar');
        const filterSections = sidebar.querySelectorAll('.sidebar-toggle, .filter-list:not(.dashboard-menu .filter-list), .price-filter');

        viewTabs.forEach(tab => {
            tab.addEventListener('click', function(e) {
                e.preventDefault();
                const target = this.dataset.view;

                // Hide all views
                allViews.forEach(v => v.style.display = 'none');

                // Show the correct view
                if (target === 'dashboard') {
                    document.getElementById('view-dashboard').style.display = 'block';
                } else if (target === 'orders') {
                    document.getElementById('view-orders').style.display = 'block';
                } else if (target === 'profile') {
                    document.getElementById('view-profile').style.display = 'block';
                } else if (target === 'settings') {
                    document.getElementById('view-settings').style.display = 'block';
                }

                // Update active link styling
                viewTabs.forEach(t => {
                    t.style.color = 'var(--text-dark)';
                    t.style.fontWeight = 'normal';
                    t.style.background = 'none';
                    t.classList.remove('active');
                });
                this.style.color = 'var(--primary-color)';
                this.style.fontWeight = '600';
                this.style.background = 'var(--bg-light)';
                this.classList.add('active');

                // Show/hide filter sections based on view
                const showFilters = (target === 'dashboard');
                sidebar.querySelectorAll('.sidebar-toggle').forEach(el => el.style.display = showFilters ? 'flex' : 'none');
                sidebar.querySelectorAll('.filter-list:not(.dashboard-menu .filter-list)').forEach(el => el.style.display = showFilters ? '' : 'none');
                sidebar.querySelectorAll('.price-filter').forEach(el => el.style.display = showFilters ? '' : 'none');

                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        });
    </script>
</body>
</html>
