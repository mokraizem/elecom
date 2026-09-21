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

    public function setting(){
        return view('admin.settings');
    }
    public function manage_user(){
        return view('admin.manage.user');
    }
    public function manage_store(){
        return view('admin.manage.store');
    }
    public function cart_history(){
        return view('admin.cart.history');
    }
    public function order_history(){
        return view('admin.order.history');
    }
}
