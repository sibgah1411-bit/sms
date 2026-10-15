<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS - Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
        body {
            background-color: #f8fafc; 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .login-card {
            border: 1px solid #e2e8f0;
            border-radius: 20px;
            background: #ffffff;
            box-shadow: 0 20px 40px rgba(15, 23, 42, 0.05) !important;
        }
        .brand-icon-box {
            width: 60px;
            height: 60px;
            background-color: #1a5c85; 
            color: #ffffff;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px auto;
        }
        .btn-slate {
            background-color: #1a5c85;
            color: #ffffff;
            border: none;
            transition: all 0.2s ease;
        }
        .btn-slate:hover {
            background-color: #1a5c85;
            color: #ffffff;
            transform: translateY(-1px);
        }
        .form-control:focus {
            border-color: #94a3b8;
            box-shadow: 0 0 0 3px rgba(148, 163, 184, 0.15);
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="col-11 col-sm-8 col-md-6 col-lg-5">
            
            <div class="login-card p-4 p-sm-5">
                <div class="brand-icon-box shadow-sm">
                    <i class="bi bi-grid-1x2-fill fs-3"></i>
                </div>
                
                <div class="text-center mb-4">
                    <h4 class="fw-bold text-dark m-0">Welcome Back</h4>
                    <p class="text-muted small mt-1">Enter your credentials to access the portal</p>
                </div>

                <form action="/sms/login" method="POST">
                    
                    <div class="mb-3">
                        <label class="form-label small fw-semibold text-secondary">Username or Email</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light text-muted border-end-0"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control bg-light border-start-0 py-2" name="login_input" placeholder="e.g. user123...." required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label small fw-semibold text-secondary">Password</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light text-muted border-end-0"><i class="bi bi-lock"></i></span>
                            <input type="password" class="form-control bg-light border-start-0 py-2" name="password" placeholder="••••••••" required>
                        </div>
                    </div>
                    <button type="submit" name="login_btn" class="btn btn-slate btn-lg w-100 fw-bold py-2.5 rounded-3 small">
                        Sign In 
                    </button>
                    <div class="text-center mt-4 pt-2 border-top border-light">
                        <span class="text-muted small">New here?</span>
                        <a href="/sms/register" class="text-dark small fw-bold text-decoration-none ms-1 hover-underline">Create an account</a>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>