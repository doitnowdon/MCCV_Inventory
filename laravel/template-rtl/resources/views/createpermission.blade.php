<?php $page="createpermission";?>
@extends('layout.mainlayout')
@section('content')	
<div class="page-wrapper">
    <div class="content">
        @component('components.pageheader')                
			@slot('title') Create Permission @endslot
			@slot('title_1') Manage Create Permissions @endslot
		@endcomponent
        <!-- /product list -->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3 col-sm-12">
                        <div class="form-group">
                            <label>Role</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="col-lg-9 col-sm-12">
                        <div class="form-group">
                            <label>Role Description</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="input-checkset">
                            <ul>
                                <li>
                                    <label class="inputcheck">Select All
                                        <input type="checkbox" id="select-all">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="productdetails product-respon">
                            <ul>
                                <li>
                                    <h4>Users Management</h4>
                                    <div class="input-checkset">
                                        <ul>
                                            <li>
                                                <label class="inputcheck">View
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Create
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Edit
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Delete
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">View all records of all users
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Select All
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <h4>User Permission</h4>
                                    <div class="input-checkset">
                                        <ul>
                                            <li>
                                                <label class="inputcheck">View
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Create
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Edit
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Delete
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Select All
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <h4>Products</h4>
                                    <div class="input-checkset">
                                        <ul>
                                            <li>
                                                <label class="inputcheck">View
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Create
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Edit
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Delete
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Barcode
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Import Products
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Select All
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <h4>Adjustment</h4>
                                    <div class="input-checkset">
                                        <ul>
                                            <li>
                                                <label class="inputcheck">View
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Create
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Edit
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Delete
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Select All
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <h4>Transfer</h4>
                                    <div class="input-checkset">
                                        <ul>
                                            <li>
                                                <label class="inputcheck">View
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Create
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Edit
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Delete
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Select All
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <h4>Expenses</h4>
                                    <div class="input-checkset">
                                        <ul>
                                            <li>
                                                <label class="inputcheck">View
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Create
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Edit
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Delete
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Select All
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <h4>Sales</h4>
                                    <div class="input-checkset">
                                        <ul>
                                            <li>
                                                <label class="inputcheck">View
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Create
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Edit
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Delete
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Select All
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <h4>Purchase</h4>
                                    <div class="input-checkset">
                                        <ul>
                                            <li>
                                                <label class="inputcheck">View
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Create
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Edit
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Delete
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Select All
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <h4>Quotations</h4>
                                    <div class="input-checkset">
                                        <ul>
                                            <li>
                                                <label class="inputcheck">View
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Create
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Edit
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Delete
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Select All
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <h4>Sales Return</h4>
                                    <div class="input-checkset">
                                        <ul>
                                            <li>
                                                <label class="inputcheck">View
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Create
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Edit
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Delete
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Select All
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <h4>Purchase Return</h4>
                                    <div class="input-checkset">
                                        <ul>
                                            <li>
                                                <label class="inputcheck">View
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Create
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Edit
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Delete
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Select All
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <h4>Payment Sales</h4>
                                    <div class="input-checkset">
                                        <ul>
                                            <li>
                                                <label class="inputcheck">View
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Create
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Edit
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Delete
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Select All
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <h4>Payments purchase</h4>
                                    <div class="input-checkset">
                                        <ul>
                                            <li>
                                                <label class="inputcheck">View
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Create
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Edit
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Delete
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Select All
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <h4>Payments Return</h4>
                                    <div class="input-checkset">
                                        <ul>
                                            <li>
                                                <label class="inputcheck">View
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Create
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Edit
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Delete
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Select All
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <h4>Customer list</h4>
                                    <div class="input-checkset">
                                        <ul>
                                            <li>
                                                <label class="inputcheck">View
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Create
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Edit
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Delete
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Select All
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <h4>Supplier List</h4>
                                    <div class="input-checkset">
                                        <ul>
                                            <li>
                                                <label class="inputcheck">View
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Create
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Edit
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Delete
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Select All
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <h4>Reports</h4>
                                    <div class="input-checkset">
                                        <ul>
                                            <li>
                                                <label class="inputcheck">View
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Create
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Edit
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Delete
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="inputcheck">Select All
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /product list -->
    </div>
</div>
@endsection