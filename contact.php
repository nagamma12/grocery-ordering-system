<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Gorcery</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        .contact-container {
            max-width: 600px;
            margin: 4rem auto;
            padding: 2.5rem;
            background: var(--white);
            border-radius: 16px;
            box-shadow: var(--shadow-sm);
        }
        .contact-container h1 {
            font-size: 2.2rem;
            margin-bottom: 0.5rem;
            color: var(--primary-dark);
            text-align: center;
        }
        .contact-container p {
            text-align: center;
            color: var(--text-light);
            margin-bottom: 2rem;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-family: inherit;
            outline: none;
        }
        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }
        .form-group input:focus, .form-group textarea:focus {
            border-color: var(--primary-color);
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
                <li><a href="contact.php" style="color: var(--primary-color);">Contact</a></li>
            </ul>
        </nav>
        <div class="nav-actions">
            <a href="login.php" class="btn btn-outline">Log In</a>
            <a href="cart.php" class="btn btn-primary">Cart (0)</a>
        </div>
    </header>

    <div class="contact-container">
        <h1>Get in Touch</h1>
        <p>Have a question or need help with your order? Send us a message.</p>
        
        <form action="#" method="POST">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="John Doe" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="you@example.com" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="How can we help you?" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100%; padding: 0.8rem; font-size: 1rem;">Send Message</button>
        </form>
    </div>
</body>
</html>
