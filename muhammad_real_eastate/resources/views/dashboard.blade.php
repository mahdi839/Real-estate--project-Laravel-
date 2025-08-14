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




  @extends('layouts.adminlayouts.adminlayout')
 @section('content')

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

@endsection
   

  