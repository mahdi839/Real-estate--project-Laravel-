{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RealEstate Pro | Admin Dashboard</title>
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
        
        .page-section {
            display: none;
        }
        
        .page-section.active {
            display: block;
            animation: fadeIn 0.5s;
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
            <h3><i class="bi bi-house-heart"></i> RealEstate Pro</h3>
        </div>

        <ul class="list-unstyled components">
            <li>
                <a href="#" class="active" data-section="dashboard">
                    <i class="bi bi-speedometer2"></i> Dashboard
                </a>
            </li>
            <li>
                <a href="#" data-section="properties">
                    <i class="bi bi-building"></i> Properties
                </a>
            </li>
            <li>
                <a href="#" data-section="add-property">
                    <i class="bi bi-plus-circle"></i> Add Property
                </a>
            </li>
            <li>
                <a href="#" data-section="sold-properties">
                    <i class="bi bi-check-circle"></i> Sold Properties
                </a>
            </li>
            <li>
                <a href="#" data-section="agents">
                    <i class="bi bi-people"></i> Agents
                </a>
            </li>
            <li>
                <a href="#" data-section="add-agent">
                    <i class="bi bi-person-plus"></i> Add Agent
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

        <!-- Main Content -->
        <div class="container-fluid mt-4">
            <!-- Dashboard Section -->
            <div id="dashboard" class="page-section active">
                <h2 class="mb-4">Dashboard Overview</h2>
                
                <!-- Stats Cards -->
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <div class="stat-card total-properties">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5>Total Properties</h5>
                                    <h2>142</h2>
                                </div>
                                <i class="bi bi-buildings fs-1"></i>
                            </div>
                            <div class="mt-2">
                                <span class="badge bg-light text-dark">+12% this month</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="stat-card sold">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5>Sold Properties</h5>
                                    <h2>24</h2>
                                </div>
                                <i class="bi bi-check-circle fs-1"></i>
                            </div>
                            <div class="mt-2">
                                <span class="badge bg-light text-dark">+3 this week</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="stat-card pending">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5>Pending</h5>
                                    <h2>18</h2>
                                </div>
                                <i class="bi bi-clock fs-1"></i>
                            </div>
                            <div class="mt-2">
                                <span class="badge bg-light text-dark">+5 this month</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="stat-card agents">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5>Active Agents</h5>
                                    <h2>15</h2>
                                </div>
                                <i class="bi bi-people fs-1"></i>
                            </div>
                            <div class="mt-2">
                                <span class="badge bg-light text-dark">+2 recently</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Recent Activity and Properties -->
                <div class="row mt-4">
                    <div class="col-lg-8">
                        <div class="card dashboard-card">
                            <div class="card-header bg-white">
                                <h5 class="mb-0">Recent Properties</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Property</th>
                                                <th>Type</th>
                                                <th>Price</th>
                                                <th>Status</th>
                                                <th>Agent</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="https://via.placeholder.com/80x60?text=P1" class="property-img me-3" alt="Property">
                                                        <div>
                                                            <strong>Luxury Apartment</strong>
                                                            <div class="text-muted">New York</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Apartment</td>
                                                <td>$425,000</td>
                                                <td><span class="badge bg-success">Active</span></td>
                                                <td>Sarah Johnson</td>
                                                <td class="action-btns">
                                                    <button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></button>
                                                    <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="https://via.placeholder.com/80x60?text=P2" class="property-img me-3" alt="Property">
                                                        <div>
                                                            <strong>Suburban House</strong>
                                                            <div class="text-muted">Boston</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>House</td>
                                                <td>$725,000</td>
                                                <td><span class="badge bg-warning">Pending</span></td>
                                                <td>Michael Brown</td>
                                                <td class="action-btns">
                                                    <button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></button>
                                                    <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="https://via.placeholder.com/80x60?text=P3" class="property-img me-3" alt="Property">
                                                        <div>
                                                            <strong>Waterfront Villa</strong>
                                                            <div class="text-muted">Miami</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Villa</td>
                                                <td>$1,250,000</td>
                                                <td><span class="badge bg-success">Active</span></td>
                                                <td>Robert Davis</td>
                                                <td class="action-btns">
                                                    <button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></button>
                                                    <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card dashboard-card">
                            <div class="card-header bg-white">
                                <h5 class="mb-0">Recent Activity</h5>
                            </div>
                            <div class="card-body">
                                <div class="d-flex mb-3">
                                    <div class="flex-shrink-0">
                                        <i class="bi bi-house-check text-success fs-4"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-0">Property Sold</h6>
                                        <p class="mb-0 text-muted">Modern Apartment on 5th Ave</p>
                                        <small class="text-muted">2 hours ago</small>
                                    </div>
                                </div>
                                
                                <div class="d-flex mb-3">
                                    <div class="flex-shrink-0">
                                        <i class="bi bi-plus-circle text-primary fs-4"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-0">New Listing Added</h6>
                                        <p class="mb-0 text-muted">Luxury Villa in Miami</p>
                                        <small class="text-muted">Yesterday</small>
                                    </div>
                                </div>
                                
                                <div class="d-flex mb-3">
                                    <div class="flex-shrink-0">
                                        <i class="bi bi-person-plus text-info fs-4"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-0">New Agent Added</h6>
                                        <p class="mb-0 text-muted">Jennifer Lopez joined</p>
                                        <small class="text-muted">2 days ago</small>
                                    </div>
                                </div>
                                
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <i class="bi bi-chat-quote text-warning fs-4"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-0">New Testimonial</h6>
                                        <p class="mb-0 text-muted">From John Smith</p>
                                        <small class="text-muted">3 days ago</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Properties Management Section -->
            <div id="properties" class="page-section">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>Properties Management</h2>
                    <button class="btn btn-primary"><i class="bi bi-plus-circle me-2"></i> Add Property</button>
                </div>
                
                <div class="card dashboard-card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Property</th>
                                        <th>Type</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Date Added</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#RE001</td>
                                        <td>Modern Luxury Apartment</td>
                                        <td>Apartment</td>
                                        <td>$425,000</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td>Jun 15, 2023</td>
                                        <td class="action-btns">
                                            <button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-success"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#RE002</td>
                                        <td>Suburban Family Home</td>
                                        <td>House</td>
                                        <td>$725,000</td>
                                        <td><span class="badge bg-warning">Pending</span></td>
                                        <td>Jun 10, 2023</td>
                                        <td class="action-btns">
                                            <button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-success"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#RE003</td>
                                        <td>Waterfront Villa</td>
                                        <td>Villa</td>
                                        <td>$1,250,000</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td>Jun 5, 2023</td>
                                        <td class="action-btns">
                                            <button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-success"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#RE004</td>
                                        <td>Downtown Loft</td>
                                        <td>Loft</td>
                                        <td>$350,000</td>
                                        <td><span class="badge bg-secondary">Draft</span></td>
                                        <td>Jun 1, 2023</td>
                                        <td class="action-btns">
                                            <button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-success"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Add Property Section -->
            <div id="add-property" class="page-section">
                <h2 class="mb-4">Add New Property</h2>
                
                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-container">
                            <form>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Property Title</label>
                                        <input type="text" class="form-control" placeholder="Enter property title">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Property Type</label>
                                        <select class="form-select">
                                            <option>Select type</option>
                                            <option>Apartment</option>
                                            <option>House</option>
                                            <option>Villa</option>
                                            <option>Office</option>
                                            <option>Commercial</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Price ($)</label>
                                        <input type="number" class="form-control" placeholder="Enter price">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Status</label>
                                        <select class="form-select">
                                            <option>For Sale</option>
                                            <option>For Rent</option>
                                            <option>Sold</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Bedrooms</label>
                                        <input type="number" class="form-control" placeholder="Number of bedrooms">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Bathrooms</label>
                                        <input type="number" class="form-control" placeholder="Number of bathrooms">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Area (sq ft)</label>
                                        <input type="number" class="form-control" placeholder="Property area">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Year Built</label>
                                        <input type="number" class="form-control" placeholder="Year built">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label class="form-label">Address</label>
                                        <input type="text" class="form-control" placeholder="Full address">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea class="form-control" rows="4" placeholder="Property description"></textarea>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label class="form-label">Upload Images</label>
                                        <input type="file" class="form-control" multiple>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Add Property</button>
                                        <button type="reset" class="btn btn-outline-secondary ms-2">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card dashboard-card">
                            <div class="card-header bg-white">
                                <h5 class="mb-0">Tips for Adding Properties</h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <i class="bi bi-check-circle text-success me-2"></i> Use high-quality images
                                    </li>
                                    <li class="list-group-item">
                                        <i class="bi bi-check-circle text-success me-2"></i> Provide detailed description
                                    </li>
                                    <li class="list-group-item">
                                        <i class="bi bi-check-circle text-success me-2"></i> Include all property features
                                    </li>
                                    <li class="list-group-item">
                                        <i class="bi bi-check-circle text-success me-2"></i> Set the correct status
                                    </li>
                                    <li class="list-group-item">
                                        <i class="bi bi-check-circle text-success me-2"></i> Double-check pricing information
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Agents Section -->
            <div id="agents" class="page-section">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>Agents Management</h2>
                    <button class="btn btn-primary"><i class="bi bi-person-plus me-2"></i> Add Agent</button>
                </div>
                
                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card dashboard-card agent-card">
                            <img src="https://via.placeholder.com/150" class="agent-img" alt="Agent">
                            <h4>Sarah Johnson</h4>
                            <p class="text-muted">Senior Agent</p>
                            <p><i class="bi bi-telephone me-2"></i> (555) 123-4567</p>
                            <p><i class="bi bi-envelope me-2"></i> sarah@realestate.com</p>
                            <div class="mt-3">
                                <span class="badge bg-success">12 Properties</span>
                                <span class="badge bg-primary ms-2">8 Years Exp</span>
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-sm btn-outline-primary me-2"><i class="bi bi-pencil"></i></button>
                                <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card dashboard-card agent-card">
                            <img src="https://via.placeholder.com/150" class="agent-img" alt="Agent">
                            <h4>Michael Brown</h4>
                            <p class="text-muted">Commercial Specialist</p>
                            <p><i class="bi bi-telephone me-2"></i> (555) 987-6543</p>
                            <p><i class="bi bi-envelope me-2"></i> michael@realestate.com</p>
                            <div class="mt-3">
                                <span class="badge bg-success">9 Properties</span>
                                <span class="badge bg-primary ms-2">5 Years Exp</span>
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-sm btn-outline-primary me-2"><i class="bi bi-pencil"></i></button>
                                <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card dashboard-card agent-card">
                            <img src="https://via.placeholder.com/150" class="agent-img" alt="Agent">
                            <h4>Robert Davis</h4>
                            <p class="text-muted">Luxury Homes</p>
                            <p><i class="bi bi-telephone me-2"></i> (555) 456-7890</p>
                            <p><i class="bi bi-envelope me-2"></i> robert@realestate.com</p>
                            <div class="mt-3">
                                <span class="badge bg-success">15 Properties</span>
                                <span class="badge bg-primary ms-2">10 Years Exp</span>
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-sm btn-outline-primary me-2"><i class="bi bi-pencil"></i></button>
                                <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Testimonials Section -->
            <div id="testimonials" class="page-section">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>Testimonials</h2>
                    <button class="btn btn-primary"><i class="bi bi-plus-circle me-2"></i> Add Testimonial</button>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="testimonial-card">
                            <div class="d-flex align-items-center mb-3">
                                <img src="https://via.placeholder.com/60" class="rounded-circle me-3" alt="Client">
                                <div>
                                    <h5 class="mb-0">John Smith</h5>
                                    <p class="mb-0 text-muted">Property Buyer</p>
                                </div>
                            </div>
                            <p class="mb-3">"The team at RealEstate Pro helped me find my dream home in record time. Their professionalism and attention to detail were outstanding!"</p>
                            <div class="text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-sm btn-outline-primary me-2"><i class="bi bi-pencil"></i> Edit</button>
                                <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i> Delete</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <div class="testimonial-card">
                            <div class="d-flex align-items-center mb-3">
                                <img src="https://via.placeholder.com/60" class="rounded-circle me-3" alt="Client">
                                <div>
                                    <h5 class="mb-0">Emma Wilson</h5>
                                    <p class="mb-0 text-muted">Property Seller</p>
                                </div>
                            </div>
                            <p class="mb-3">"I sold my property for 15% above asking price thanks to the marketing strategies of RealEstate Pro. Highly recommended for anyone looking to sell!"</p>
                            <div class="text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-sm btn-outline-primary me-2"><i class="bi bi-pencil"></i> Edit</button>
                                <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i> Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Social Links Section -->
            <div id="social" class="page-section">
                <h2 class="mb-4">Social Media Links</h2>
                
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-container">
                            <form>
                                <div class="mb-3">
                                    <label class="form-label">Facebook URL</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-facebook text-primary"></i></span>
                                        <input type="url" class="form-control" placeholder="https://facebook.com/yourpage">
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">Twitter URL</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-twitter text-info"></i></span>
                                        <input type="url" class="form-control" placeholder="https://twitter.com/yourpage">
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">Instagram URL</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-instagram text-danger"></i></span>
                                        <input type="url" class="form-control" placeholder="https://instagram.com/yourpage">
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">LinkedIn URL</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-linkedin text-primary"></i></span>
                                        <input type="url" class="form-control" placeholder="https://linkedin.com/company/yourcompany">
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">YouTube URL</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-youtube text-danger"></i></span>
                                        <input type="url" class="form-control" placeholder="https://youtube.com/yourchannel">
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </form>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="card dashboard-card">
                            <div class="card-header bg-white">
                                <h5 class="mb-0">Social Media Preview</h5>
                            </div>
                            <div class="card-body text-center">
                                <h4>Connect with Us</h4>
                                <p class="text-muted">Follow us on social media for the latest updates</p>
                                
                                <div class="social-links mt-4">
                                    <button class="btn btn-primary"><i class="bi bi-facebook"></i></button>
                                    <button class="btn btn-info"><i class="bi bi-twitter"></i></button>
                                    <button class="btn btn-danger"><i class="bi bi-instagram"></i></button>
                                    <button class="btn btn-primary"><i class="bi bi-linkedin"></i></button>
                                    <button class="btn btn-danger"><i class="bi bi-youtube"></i></button>
                                </div>
                                
                                <div class="mt-5">
                                    <h5>Social Media Tips</h5>
                                    <ul class="list-group list-group-flush text-start">
                                        <li class="list-group-item">
                                            <i class="bi bi-check-circle text-success me-2"></i> Post regularly to keep your audience engaged
                                        </li>
                                        <li class="list-group-item">
                                            <i class="bi bi-check-circle text-success me-2"></i> Share high-quality property photos
                                        </li>
                                        <li class="list-group-item">
                                            <i class="bi bi-check-circle text-success me-2"></i> Respond to comments and messages promptly
                                        </li>
                                        <li class="list-group-item">
                                            <i class="bi bi-check-circle text-success me-2"></i> Use relevant hashtags to increase reach
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Other sections would follow the same pattern -->
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Toggle sidebar on mobile
            document.getElementById('sidebarCollapse').addEventListener('click', function() {
                document.getElementById('sidebar').classList.toggle('active');
            });
            
            // Navigation between sections
            const navLinks = document.querySelectorAll('#sidebar a');
            const sections = document.querySelectorAll('.page-section');
            
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Remove active class from all links and sections
                    navLinks.forEach(l => l.classList.remove('active'));
                    sections.forEach(s => s.classList.remove('active'));
                    
                    // Add active class to current link
                    this.classList.add('active');
                    
                    // Show corresponding section
                    const sectionId = this.getAttribute('data-section');
                    document.getElementById(sectionId).classList.add('active');
                    
                    // Close sidebar on mobile after selection
                    if (window.innerWidth < 768) {
                        document.getElementById('sidebar').classList.remove('active');
                    }
                });
            });
            
            // Simulate form submission
            const forms = document.querySelectorAll('form');
            forms.forEach(form => {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    alert('Form data would be submitted in a real application!');
                });
            });
        });
    </script>
</body>
</html>