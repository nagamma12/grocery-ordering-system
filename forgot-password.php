<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - Gorcery</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        body { margin: 0; padding: 0; }

        .forgot-page {
            display: grid;
            grid-template-columns: 1fr 1fr;
            min-height: 100vh;
        }

        /* Left Panel - Gradient Illustration */
        .forgot-left {
            background: linear-gradient(135deg, #4b5563, #374151, #111827);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 3rem;
            color: white;
            position: relative;
            overflow: hidden;
        }
        .forgot-left::before {
            content: '';
            position: absolute;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            background: rgba(255,255,255,0.05);
            top: -100px;
            left: -100px;
        }
        .forgot-left .brand {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
            z-index: 1;
        }
        .forgot-left .brand span { color: #fbbf24; }
        .forgot-left .illustration {
            font-size: 8rem;
            margin: 2rem 0;
            z-index: 1;
        }
        .forgot-left h2 {
            font-size: 1.8rem;
            text-align: center;
            margin-bottom: 0.5rem;
            z-index: 1;
        }
        .forgot-left p {
            text-align: center;
            opacity: 0.85;
            max-width: 320px;
            line-height: 1.7;
            z-index: 1;
        }

        /* Right Panel - Form */
        .forgot-right {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 3rem;
            background: #fafafa;
        }
        .forgot-form-wrap {
            width: 100%;
            max-width: 400px;
        }
        .forgot-form-wrap h1 {
            font-size: 2rem;
            color: #111827;
            margin-bottom: 0.3rem;
        }
        .forgot-form-wrap .subtitle {
            color: #6b7280;
            margin-bottom: 2rem;
        }
        .form-group {
            margin-bottom: 1.5rem;
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
            border-color: #374151;
            box-shadow: 0 0 0 4px rgba(55, 65, 81, 0.1);
        }
        .reset-btn {
            width: 100%;
            padding: 0.85rem;
            font-size: 1.05rem;
            border-radius: 10px;
            border: none;
            cursor: pointer;
            color: white;
            background: linear-gradient(135deg, #4f46e5, #6366f1);
            font-weight: 600;
            font-family: inherit;
            margin-top: 0.5rem;
            transition: 0.2s;
        }
        .reset-btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(17, 24, 39, 0.3);
        }
        .forgot-footer {
            text-align: center;
            margin-top: 1.8rem;
            color: #6b7280;
            font-size: 0.95rem;
        }
        .forgot-footer a {
            color: #374151;
            text-decoration: none;
            font-weight: 600;
        }
        .forgot-footer a:hover { text-decoration: underline; }

        .success-msg {
            display: none;
            text-align: center;
        }
        .success-msg .icon {
            font-size: 4rem;
            margin-bottom: 1rem;
        }

        @media (max-width: 768px) {
            .forgot-page { grid-template-columns: 1fr; }
            .forgot-left { display: none; }
        }
    </style>
</head>
<body>
    <div class="forgot-page">
        <!-- Left Illustration Panel -->
        <div class="forgot-left">
            <div class="brand">Gorcery<span>.</span></div>
            <div class="illustration">🔒</div>
            <h2>Security First</h2>
            <p>We'll help you get back into your account safely and quickly. Your data security is our top priority.</p>
        </div>

        <!-- Right Form Panel -->
        <div class="forgot-right">
            <div class="forgot-form-wrap">
                <div id="step-email">
                    <h1>Forgot Password</h1>
                    <p class="subtitle">Enter your email to receive a reset link</p>

                    <form onsubmit="showSuccess(event)">
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" placeholder="you@example.com" required>
                        </div>
                        <button type="submit" class="reset-btn">Send Reset Link</button>
                    </form>

                    <div class="forgot-footer">
                        <a href="login.php">← Back to Sign In</a>
                    </div>
                </div>

                <div id="step-success" class="success-msg">
                    <div class="icon">✉️</div>
                    <h1>Check Your Email</h1>
                    <p class="subtitle">We've sent a password reset link to your email address. Please check your inbox.</p>
                    <div class="forgot-footer">
                        <a href="login.php" class="reset-btn" style="display: block; text-decoration: none; margin-top: 2rem;">Back to Sign In</a>
                        <p style="margin-top: 1rem;"><a href="#" onclick="document.getElementById('step-success').style.display='none'; document.getElementById('step-email').style.display='block'; return false;">Try a different email</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showSuccess(e) {
            e.preventDefault();
            document.getElementById('step-email').style.display = 'none';
            document.getElementById('step-success').style.display = 'block';
        }
    </script>
</body>
</html>
