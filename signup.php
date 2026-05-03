<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Gorcery</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        body { margin: 0; padding: 0; }

        .signup-page {
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            min-height: 100vh;
        }

        /* Left Panel - Gradient Illustration */
        .signup-left {
            background: linear-gradient(135deg, #1e3a8a, #3b82f6, #60a5fa);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 3rem;
            color: white;
            position: relative;
            overflow: hidden;
        }
        .signup-left::before {
            content: '';
            position: absolute;
            width: 450px;
            height: 450px;
            border-radius: 50%;
            background: rgba(255,255,255,0.08);
            bottom: -150px;
            left: -150px;
        }
        .signup-left::after {
            content: '';
            position: absolute;
            width: 350px;
            height: 350px;
            border-radius: 50%;
            background: rgba(255,255,255,0.05);
            top: -100px;
            right: -100px;
        }
        .signup-left .brand {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
            z-index: 1;
        }
        .signup-left .brand span { color: #fbbf24; }
        .signup-left .illustration {
            font-size: 8rem;
            margin: 2rem 0;
            z-index: 1;
        }
        .signup-left h2 {
            font-size: 1.8rem;
            text-align: center;
            margin-bottom: 0.5rem;
            z-index: 1;
        }
        .signup-left p {
            text-align: center;
            opacity: 0.85;
            max-width: 340px;
            line-height: 1.7;
            z-index: 1;
        }
        .signup-left .quotes {
            margin-top: 3rem;
            font-style: italic;
            text-align: center;
            opacity: 0.9;
            z-index: 1;
            max-width: 300px;
        }

        /* Right Panel - Form */
        .signup-right {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 3rem;
            background: #fafafa;
        }
        .signup-form-wrap {
            width: 100%;
            max-width: 500px;
        }
        .signup-form-wrap h1 {
            font-size: 2rem;
            color: #111827;
            margin-bottom: 0.3rem;
        }
        .signup-form-wrap .subtitle {
            color: #6b7280;
            margin-bottom: 2rem;
        }
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.2rem;
        }
        .form-group {
            margin-bottom: 1.2rem;
        }
        .form-group label {
            display: block;
            margin-bottom: 0.4rem;
            font-weight: 500;
            color: #374151;
            font-size: 0.95rem;
        }
        .form-group input {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 2px solid #e5e7eb;
            border-radius: 10px;
            font-family: inherit;
            font-size: 1rem;
            transition: 0.2s;
            background: white;
        }
        .form-group input:focus {
            outline: none;
            border-color: #6366f1;
            box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.1);
        }
        .signup-btn {
            width: 100%;
            padding: 0.85rem;
            font-size: 1.05rem;
            border-radius: 10px;
            border: none;
            cursor: pointer;
            color: white;
            background: linear-gradient(135deg, #3b82f6, #2563eb);
            font-weight: 600;
            font-family: inherit;
            margin-top: 1rem;
            transition: 0.2s;
        }
        .signup-btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(37, 99, 235, 0.3);
        }
        
        .password-strength {
            height: 4px;
            border-radius: 2px;
            margin-top: 0.5rem;
            background: #eee;
            overflow: hidden;
        }
        .password-strength .bar {
            height: 100%;
            width: 0%;
            border-radius: 2px;
            transition: width 0.3s, background 0.3s;
        }
        .strength-text {
            font-size: 0.8rem;
            margin-top: 0.3rem;
            color: #6b7280;
        }

        .signup-footer {
            text-align: center;
            margin-top: 1.8rem;
            color: #6b7280;
            font-size: 0.95rem;
        }
        .signup-footer a {
            color: #3b82f6;
            text-decoration: none;
            font-weight: 600;
        }
        .signup-footer a:hover { text-decoration: underline; }

        @media (max-width: 900px) {
            .signup-page { grid-template-columns: 1fr; }
            .signup-left { display: none; }
        }
    </style>
</head>
<body>
    <div class="signup-page">
        <!-- Left Illustration Panel -->
        <div class="signup-left">
            <div class="brand">Gorcery<span>.</span></div>
            <div class="illustration">🥗</div>
            <h2>Join Our Community</h2>
            <p>Start your journey towards a healthier lifestyle with fresh, organic groceries delivered to your home.</p>
            <div class="quotes">"The best grocery app I've ever used. Freshness guaranteed every time!"</div>
        </div>

        <!-- Right Form Panel -->
        <div class="signup-right">
            <div class="signup-form-wrap">
                <h1>Create Account</h1>
                <p class="subtitle">Join thousands of happy customers today</p>

                <form action="dashboard.php" method="POST">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="firstname">First Name</label>
                            <input type="text" id="firstname" name="firstname" placeholder="John" required>
                        </div>
                        <div class="form-group">
                            <label for="lastname">Last Name</label>
                            <input type="text" id="lastname" name="lastname" placeholder="Doe" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="you@example.com" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" placeholder="+91 98765 43210" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Min. 8 characters" required oninput="checkStrength(this.value)">
                        <div class="password-strength"><div class="bar" id="strength-bar"></div></div>
                        <div class="strength-text" id="strength-text"></div>
                    </div>

                    <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" id="confirm-password" name="confirm_password" placeholder="Re-enter password" required>
                    </div>

                    <div style="margin-bottom: 1.2rem;">
                        <label style="display: flex; align-items: flex-start; gap: 0.6rem; font-size: 0.85rem; cursor: pointer; color: #6b7280; line-height: 1.4;">
                            <input type="checkbox" style="width: auto; margin-top: 0.2rem; accent-color: #3b82f6;" required>
                            <span>I agree to the <a href="#" style="color: #3b82f6; text-decoration: none; font-weight: 600;">Terms of Service</a> and <a href="#" style="color: #3b82f6; text-decoration: none; font-weight: 600;">Privacy Policy</a></span>
                        </label>
                    </div>

                    <button type="submit" class="signup-btn">Create Account</button>
                </form>

                <div class="signup-footer">
                    Already have an account? <a href="login.php">Sign in</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function checkStrength(password) {
            const bar = document.getElementById('strength-bar');
            const text = document.getElementById('strength-text');
            let strength = 0;
            
            if (password.length >= 8) strength++;
            if (password.match(/[a-z]/) && password.match(/[A-Z]/)) strength++;
            if (password.match(/[0-9]/)) strength++;
            if (password.match(/[^a-zA-Z0-9]/)) strength++;
            
            const levels = [
                { width: '0%', color: '#eee', label: '' },
                { width: '25%', color: '#ef4444', label: 'Weak' },
                { width: '50%', color: '#f59e0b', label: 'Fair' },
                { width: '75%', color: '#3b82f6', label: 'Good' },
                { width: '100%', color: '#10b981', label: 'Strong' }
            ];
            
            bar.style.width = levels[strength].width;
            bar.style.background = levels[strength].color;
            text.textContent = levels[strength].label;
            text.style.color = levels[strength].color;
        }
    </script>
</body>
</html>
