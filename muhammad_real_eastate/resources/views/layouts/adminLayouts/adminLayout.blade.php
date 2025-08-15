<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABTL | Admin Dashboard</title>
       <!-- Favicon -->
    <link href="img/logo.png" rel="icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        :root {
            --primary: #4361ee;
            --secondary: #3f37c9;
            --accent: #4895ef;
            --light: #f8f9fa;
            --dark: #212529;
            --success: #4cc9f0;
            --sidebar-width: 250px;
        }
        
        body {
            background-color: #f5f7fb;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
        }
        
        #sidebar {
            width: var(--sidebar-width);
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            z-index: 100;
            background: linear-gradient(180deg, var(--primary), var(--secondary));
            color: white;
            transition: all 0.3s;
            box-shadow: 3px 0 10px rgba(0,0,0,0.1);
        }
        
        #sidebar .sidebar-header {
            padding: 20px;
            background: rgba(0,0,0,0.2);
        }
        
        #sidebar ul.components {
            padding: 20px 0;
        }
        
        #sidebar ul li a {
            padding: 12px 20px;
            font-size: 1.1em;
            display: block;
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            transition: all 0.3s;
        }
        
        #sidebar ul li a:hover,
        #sidebar ul li a.active {
            color: #fff;
            background: rgba(255,255,255,0.1);
            border-left: 4px solid var(--accent);
        }
        
        #sidebar ul li a i {
            margin-right: 10px;
            font-size: 1.2rem;
        }
        
        #content {
            width: calc(100% - var(--sidebar-width));
            min-height: 100vh;
            transition: all 0.3s;
            position: absolute;
            top: 0;
            right: 0;
        }
        
        .navbar {
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            background: white;
        }
        
        .dashboard-card {
            transition: transform 0.3s, box-shadow 0.3s;
            border-radius: 10px;
            overflow: hidden;
            border: none;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            margin-bottom: 20px;
        }
        
        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        .stat-card {
            border-radius: 10px;
            border-left: 4px solid var(--primary);
            padding: 20px;
            color: white;
            margin-bottom: 20px;
        }
        
        .stat-card.total-properties {
            background: linear-gradient(135deg, #4361ee, #3a0ca3);
        }
        
        .stat-card.sold {
            background: linear-gradient(135deg, #4cc9f0, #4895ef);
        }
        
        .stat-card.pending {
            background: linear-gradient(135deg, #f72585, #b5179e);
        }
        
        .stat-card.agents {
            background: linear-gradient(135deg, #7209b7, #560bad);
        }
        
        
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .table-responsive {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }
        
        .table thead {
            background: var(--primary);
            color: white;
        }
        
        .form-container {
            background: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }
        
        .agent-card {
            text-align: center;
            padding: 20px;
            transition: all 0.3s;
        }
        
        .agent-card:hover {
            transform: translateY(-5px);
        }
        
        .agent-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--accent);
            margin: 0 auto 15px;
        }
        
        .testimonial-card {
            padding: 20px;
            border-left: 4px solid var(--accent);
            background: white;
            border-radius: 0 10px 10px 0;
        }
        
        .social-links .btn {
            width: 40px;
            height: 40px;
            padding: 0;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin: 0 5px;
        }
        
        .property-img {
            height: 150px;
            object-fit: cover;
            border-radius: 10px;
        }
        
        .action-btns .btn {
            padding: 5px 10px;
            margin: 0 3px;
        }
        
        .toggle-sidebar {
            display: none;
            position: fixed;
            top: 15px;
            left: 15px;
            z-index: 101;
            background: var(--primary);
            color: white;
            border: none;
        }
        
        @media (max-width: 768px) {
            #sidebar {
                margin-left: -250px;
            }
            
            #sidebar.active {
                margin-left: 0;
            }
            
            #content {
                width: 100%;
            }
            
            .toggle-sidebar {
                display: block;
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3><i class="bi bi-house-heart"></i> ABTL DASHBOARD</h3>
        </div>

        <ul class="list-unstyled components">
            <li>
                <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <i class="bi bi-speedometer2"></i> Dashboard
                </a>
            </li>
            <li>
                <a href="{{ route('properties.index') }}" class="{{ request()->routeIs('properties.*') ? 'active' : '' }}">
                    <i class="bi bi-building"></i> Properties
                </a>
            </li>
           
            {{-- <li>
                <a href="#" data-section="sold-properties">
                    <i class="bi bi-check-circle"></i> Sold Properties
                </a>
            </li> --}}
            <li>
                <a href="{{route('agents.index')}}" data-section="agents">
                    <i class="bi bi-people"></i> Agents
                </a>
            </li>
           
            <li>
                <a href="#" data-section="testimonials">
                    <i class="bi bi-chat-quote"></i> Testimonials
                </a>
            </li>
            <li>
                <a href="#" data-section="social">
                    <i class="bi bi-link-45deg"></i> Social Links
                </a>
            </li>
            <li>
                <a href="#" data-section="settings">
                    <i class="bi bi-gear"></i> Settings
                </a>
            </li>
        </ul>
    </nav>

  <!-- Page Content -->
    <div id="content">
        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <button class="btn btn-primary toggle-sidebar" id="sidebarCollapse">
                    <i class="bi bi-list"></i>
                </button>
                
                <div class="d-flex align-items-center ms-auto">
                    <div class="dropdown me-3">
                        <button class="btn btn-light position-relative" type="button">
                            <i class="bi bi-bell"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                5
                            </span>
                        </button>
                    </div>
                    <div class="dropdown">
                        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://via.placeholder.com/40" alt="user" width="40" height="40" class="rounded-circle me-2">
                            <span class="d-none d-md-inline">Admin User</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i> Profile</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i> Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right me-2"></i> Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

       
      <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
       
    </script>
</body>
</html>