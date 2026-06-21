<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Builder</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            font-family: Arial, sans-serif;
        }

        .hero{
            min-height: 100vh;
            background: linear-gradient(135deg,#0f172a,#1e3a8a);
            color:white;
            display:flex;
            align-items:center;
        }

        .hero img{
            border-radius:20px;
            box-shadow:0 20px 50px rgba(0,0,0,.3);
        }

        .feature-card{
            border:none;
            transition:.3s;
            box-shadow:0 5px 15px rgba(0,0,0,.08);
        }

        .feature-card:hover{
            transform:translateY(-8px);
        }

        .stats{
            background:#f8fafc;
        }

        .cta{
            background:#2563eb;
            color:white;
        }

        footer{
            background:#0f172a;
            color:white;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">

        <a class="navbar-brand fw-bold fs-3" href="#">
            Resume Builder
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbar">

            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>

                <li class="nav-item ms-lg-3">
                    <a class="btn btn-primary" href="/register">
                        Register
                    </a>
                </li>

            </ul>

        </div>
    </div>
</nav>

<section class="hero">
    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6">

                <h1 class="display-3 fw-bold">
                    Create ATS-Friendly Resumes
                </h1>

                <p class="lead my-4">
                    Build professional resumes in minutes,
                    manage your information easily and
                    download PDF resumes instantly.
                </p>

                <a href="/register"
                   class="btn btn-success btn-lg me-2">
                    Get Started
                </a>

                <a href="#features"
                   class="btn btn-outline-light btn-lg">
                    Learn More
                </a>

            </div>

            <div class="col-lg-6 text-center mt-5 mt-lg-0">

                <img
                    src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?w=900"
                    class="img-fluid"
                    alt="Resume Builder">

            </div>

        </div>

    </div>
</section>

<section class="stats py-5">
    <div class="container">

        <div class="row text-center">

            <div class="col-md-3">
                <h2 class="fw-bold text-primary">5000+</h2>
                <p>Resumes Created</p>
            </div>

            <div class="col-md-3">
                <h2 class="fw-bold text-primary">1000+</h2>
                <p>Active Users</p>
            </div>

            <div class="col-md-3">
                <h2 class="fw-bold text-primary">95%</h2>
                <p>User Satisfaction</p>
            </div>

            <div class="col-md-3">
                <h2 class="fw-bold text-primary">24/7</h2>
                <p>Availability</p>
            </div>

        </div>

    </div>
</section>

<section id="features" class="py-5">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">Features</h2>
            <p>Everything you need to build a professional resume.</p>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card feature-card h-100">
                    <div class="card-body text-center">
                        <h4>📄 Resume Builder</h4>
                        <p>Create resumes with simple forms.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card feature-card h-100">
                    <div class="card-body text-center">
                        <h4>📥 PDF Download</h4>
                        <p>Export professional resumes instantly.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card feature-card h-100">
                    <div class="card-body text-center">
                        <h4>🎨 Modern Templates</h4>
                        <p>Beautiful and professional layouts.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card feature-card h-100">
                    <div class="card-body text-center">
                        <h4>📱 Responsive Design</h4>
                        <p>Works perfectly on all devices.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card feature-card h-100">
                    <div class="card-body text-center">
                        <h4>⚡ Fast Performance</h4>
                        <p>Generate resumes quickly.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card feature-card h-100">
                    <div class="card-body text-center">
                        <h4>🔒 Secure Data</h4>
                        <p>Your information stays protected.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<section class="cta py-5">
    <div class="container text-center">

        <h2 class="fw-bold">
            Ready To Build Your Resume?
        </h2>

        <p class="lead">
            Join thousands of users and create your professional resume today.
        </p>

        <a href="/register"
           class="btn btn-light btn-lg">
            Create Resume Now
        </a>

    </div>
</section>

<footer class="py-4">
    <div class="container text-center">
        <p class="mb-0">
            © 2026 Resume Builder. All Rights Reserved.
        </p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
