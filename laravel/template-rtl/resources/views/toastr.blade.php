<?php $page="toastr";?>
@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper cardhead">
    <div class="content ">
        @component('components.pageheader')                
			@slot('title') Toastr @endslot
			@slot('li_1') Dashboard @endslot
            @slot('li_2') Toastr @endslot
		@endcomponent
        <div class="row">
            <div class="col-sm-12">
                <div class="card" id="types">
                    <div class="card-header">
                        <h4 class="card-title">Types</h4>
                    </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-outline-success mr-1 mb-1" id="type-success">Success</button>
                        <button type="button" class="btn btn-outline-info mr-1 mb-1" id="type-info">Info</button>
                        <button type="button" class="btn btn-outline-warning mr-1 mb-1" id="type-warning">Warning</button>
                        <button type="button" class="btn btn-outline-danger mr-1 mb-1" id="type-error">Error</button>
                    </div>
                    </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Position</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 mb-4">
                                <h5 class="mb-3">Top Positions</h5>
                                <button type="button" class="btn btn-outline-primary mr-1 mb-1" id="position-top-left">Top
                                Left</button>
                                <button type="button" class="btn btn-outline-primary mr-1 mb-1" id="position-top-center">Top
                                Center</button>
                                <button type="button" class="btn btn-outline-primary mr-1 mb-1" id="position-top-right">Top
                                Right</button>
                                <button type="button" class="btn btn-outline-primary mr-1 mb-1" id="position-top-full">Top Full
                                Width</button>
                            </div>

                            <div class="col-sm-12">
                                <h5 class="mb-3">Bottom Positions</h5>
                                <button type="button" class="btn btn-outline-primary mr-1 mb-1" id="position-bottom-left">Bottom
                                Left</button>
                                <button type="button" class="btn btn-outline-primary mr-1 mb-1" id="position-bottom-center">Bottom
                                Center</button>
                                <button type="button" class="btn btn-outline-primary mr-1 mb-1" id="position-bottom-right">Bottom
                                Right</button>
                                <button type="button" class="btn btn-outline-primary mr-1 mb-1" id="position-bottom-full">Bottom
                                Full Width</button>
                            </div>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
        
        
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Options</h4>
                    </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-outline-success mr-1 mb-1" id="text-notification">Notifications</button>
                        <button type="button" class="btn btn-outline-success mr-1 mb-1" id="close-button">Close Button</button>
                        <button type="button" class="btn btn-outline-success mr-1 mb-1" id="progress-bar">Progress Bar</button>
                        <button type="button" class="btn btn-outline-success mr-1 mb-1" id="clear-toast-btn">Clear Toast</button>
                    </div>
                    </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Clear Toasts</h4>
                    </div>
                    <div class="card-body">
                        <div class="row mt-1">
                            <div class="col-md-6 col-sm-12 mb-3 mb-md-0">
                                <h5>Remove</h5>
                                <p>Immediately remove current toasts without using animation.</p>
                                <button type="button" class="btn btn-outline-info mr-1 mb-1" id="show-remove-toast">Show
                                Toast</button>
                                <button type="button" class="btn btn-outline-danger mr-1 mb-1" id="remove-toast">Remove
                                Toast</button>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-3 mb-md-0">
                                <h5>Clear</h5>
                                <p>Remove current toasts using animation.</p>
                                <button type="button" class="btn btn-outline-info mr-1 mb-1" id="show-clear-toast">Show
                                Toast</button>
                                <button type="button" class="btn btn-outline-danger mr-1 mb-1" id="clear-toast">Clear
                                Toast</button>
                            </div>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Duration &amp; Timeout</h4>
                    </div>
                    <div class="card-body">
                        <p>you can use options like <code>showDuration</code>, <code>hideDuration</code>, <code>timeout</code> for your
                        toasts. To create a sticky toast set the <code>timeout</code> to <code>0</code></p>
                        <button type="button" class="btn btn-outline-info mr-1 mb-1" id="fast-duration">Show .5s</button>
                        <button type="button" class="btn btn-outline-info mr-1 mb-1" id="slow-duration">Hide 3s</button>
                        <button type="button" class="btn btn-outline-info mr-1 mb-1" id="timeout">Timeout 5s</button>
                        <button type="button" class="btn btn-outline-info mr-1 mb-1" id="sticky">Sticky Toast</button>
                    </div>
                </div>
            </div>
        </div>					
    
    </div>
</div>
<div class="searchpart">
    <div class="searchcontent">
        <div class="searchhead">
            <h3>Search </h3>
            <a id="closesearch"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
        </div>
        <div class="searchcontents">
            <div class="searchparts">
                <input type="text" placeholder="search here">
                <a class="btn btn-searchs" >Search</a>
            </div>
            <div class="recentsearch">
                <h2>Recent Search</h2>
                <ul>
                    <li>
                        <h6><i class="fa fa-search me-2"></i> Settings</h6>
                    </li>
                    <li>
                        <h6><i class="fa fa-search me-2"></i> Report</h6>
                    </li>
                    <li>
                        <h6><i class="fa fa-search me-2"></i> Invoice</h6>
                    </li>
                    <li>
                        <h6><i class="fa fa-search me-2"></i> Sales</h6>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection