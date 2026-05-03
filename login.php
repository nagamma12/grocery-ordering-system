<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In - Gorcery</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        body { margin: 0; padding: 0; }

        .login-page {
            display: grid;
            grid-template-columns: 1fr 1fr;
            min-height: 100vh;
        }

        /* Left Panel - Gradient Illustration */
        .login-left {
            background: linear-gradient(135deg, #312e81, #4f46e5, #6366f1);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 3rem;
            color: white;
            position: relative;
            overflow: hidden;
        }
        .login-left::before {
            content: '';
            position: absolute;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            background: rgba(255,255,255,0.08);
            top: -100px;
            left: -100px;
        }
        .login-left::after {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: rgba(255,255,255,0.05);
            bottom: -80px;
            right: -80px;
        }
        .login-left .brand {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
            z-index: 1;
        }
        .login-left .brand span { color: #fbbf24; }
        .login-left .illustration {
            font-size: 8rem;
            margin: 2rem 0;
            z-index: 1;
        }
        .login-left h2 {
            font-size: 1.8rem;
            text-align: center;
            margin-bottom: 0.5rem;
            z-index: 1;
        }
        .login-left p {
            text-align: center;
            opacity: 0.85;
            max-width: 320px;
            line-height: 1.7;
            z-index: 1;
        }
        .login-left .features {
            display: flex;
            gap: 2rem;
            margin-top: 2.5rem;
            z-index: 1;
        }
        .login-left .feat {
            text-align: center;
        }
        .login-left .feat .icon { font-size: 1.5rem; margin-bottom: 0.3rem; }
        .login-left .feat span { font-size: 0.85rem; opacity: 0.9; }

        /* Right Panel - Form */
        .login-right {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 3rem;
            background: #fafafa;
        }
        .login-form-wrap {
            width: 100%;
            max-width: 400px;
        }
        .login-form-wrap h1 {
            font-size: 2rem;
            color: #111827;
            margin-bottom: 0.3rem;
        }
        .login-form-wrap .subtitle {
            color: #6b7280;
            margin-bottom: 2rem;
        }
        .form-group {
            margin-bottom: 1.3rem;
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
        .login-btn {
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
        .login-btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(79, 70, 229, 0.3);
        }
        .divider {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin: 1.5rem 0;
            color: #9ca3af;
            font-size: 0.85rem;
        }
        .divider::before, .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: #e5e7eb;
        }
        .social-btns {
            display: flex;
            gap: 0.8rem;
        }
        .social-btn {
            flex: 1;
            padding: 0.7rem;
            border: 2px solid #e5e7eb;
            border-radius: 10px;
            background: white;
            cursor: pointer;
            font-size: 1.2rem;
            transition: 0.2s;
            text-align: center;
        }
        .social-btn:hover {
            border-color: #d1d5db;
            background: #f9fafb;
        }
        .login-footer {
            text-align: center;
            margin-top: 1.8rem;
            color: #6b7280;
            font-size: 0.95rem;
        }
        .login-footer a {
            color: #6366f1;
            text-decoration: none;
            font-weight: 600;
        }
        .login-footer a:hover { text-decoration: underline; }

        @media (max-width: 768px) {
            .login-page { grid-template-columns: 1fr; }
            .login-left { display: none; }
        }
    </style>
</head>
<body>
    <div class="login-page">
        <!-- Left Illustration Panel -->
        <div class="login-left">
            <div class="brand">Gorcery<span>.</span></div>
            <div class="illustration">🛒</div>
            <h2>Welcome Back!</h2>
            <p>Your fresh groceries are just one click away. Sign in to access your orders and exclusive deals.</p>
        </div>

        <!-- Right Form Panel -->
        <div class="login-right">
            <div class="login-form-wrap">
                <h1>Sign In</h1>
                <p class="subtitle">Enter your credentials to continue</p>

                <form action="dashboard.php" method="POST">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="you@example.com" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div style="position: relative;">
                            <input type="password" id="password" name="password" placeholder="••••••••" required style="padding-right: 3rem;">
                            <button type="button" id="toggle-password" onclick="togglePassword()" style="position: absolute; right: 0.8rem; top: 50%; transform: translateY(-50%); background: none; border: none; cursor: pointer; font-size: 1.2rem; color: #9ca3af;">👁️</button>
                        </div>
                    </div>
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.3rem;">
                        <label style="display: flex; align-items: center; gap: 0.5rem; font-size: 0.9rem; cursor: pointer; color: #6b7280;">
                            <input type="checkbox" style="width: auto; accent-color: #059669;"> Remember me
                        </label>
                        <a href="forgot-password.php" style="font-size: 0.9rem; color: #6366f1; text-decoration: none; font-weight: 500;">Forgot password?</a>
                    </div>
                    <button type="submit" class="login-btn">Sign In</button>
                </form>

                <div class="divider">or</div>
                <button type="button" class="social-btn" style="width: 100%; display: flex; align-items: center; justify-content: center; gap: 0.8rem; font-size: 1rem; font-weight: 500; color: #374151;">
                    <svg width="20" height="20" viewBox="0 0 48 48">
                        <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/>
                        <path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/>
                        <path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/>
                        <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/>
                        <path fill="none" d="M0 0h48v48H0z"/>
                    </svg>
                    Continue with Google
                </button>

                <div class="login-footer">
                    Don't have an account? <a href="signup.php">Sign up</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function togglePassword() {
            const pwd = document.getElementById('password');
            const btn = document.getElementById('toggle-password');
            if (pwd.type === 'password') {
                pwd.type = 'text';
                btn.textContent = '🙈';
            } else {
                pwd.type = 'password';
                btn.textContent = '👁️';
            }
        }
    </script>
</body>
</html>
