<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminMainController extends Controller
{



    # Admin OPS & pages :
        # Create Category
        # Manage Category
        # Create Sub Category
        # Manage Sub Category
        # Manage Prod Page
        # Manage Prod Review
        # Order History
        # Create and Manage Attributes
        # Manage Cart History
        # Manage User
        # Manage Seller
        # Manage Store
        # States
        # Settings
        # Create Discount
        # Manage Discount
        # Manage Payments
    public function index(){
        return view('admin.admin');
    }
}
