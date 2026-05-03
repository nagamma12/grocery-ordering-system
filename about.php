<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Gorcery</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        .page-container {
            max-width: 800px;
            margin: 4rem auto;
            padding: 0 5%;
            text-align: center;
        }
        .page-container h1 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: var(--primary-dark);
        }
        .page-container p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-light);
            margin-bottom: 1rem;
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
                <li><a href="about.php" style="color: var(--primary-color);">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
        <div class="nav-actions">
            <a href="login.php" class="btn btn-outline">Log In</a>
            <a href="cart.php" class="btn btn-primary">Cart (0)</a>
        </div>
    </header>

    <div class="page-container">
        <h1>About Gorcery</h1>
        <p>At Gorcery, our mission is to make fresh, premium-quality groceries accessible to everyone. We believe that good food should be easy to find and even easier to bring home.</p>
        <p>Founded in 2026, we partner directly with local farmers and trusted suppliers to ensure that every apple, every loaf of bread, and every carton of milk meets our rigorous standards of quality and freshness.</p>
        <br>
        <a href="shop.php" class="btn btn-primary">Start Shopping with Us</a>
    </div>
</body>
</html>
