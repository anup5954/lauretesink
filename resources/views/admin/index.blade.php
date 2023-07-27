@extends('layouts.admin')
@section('admin-title')
    Admin | Dashboard
@endsection
@section('admin-content')
    <div class="row">
        <div class="col-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-12">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Congratulations {{ ucfirst(Auth::user()->name) }}! 🎉 <button
                                    type="button" class="btn btn-primary" style="float: right;" data-toggle="modal"
                                    data-target="#myModal">Change Popup Image</button>
                            </h5>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-12">
                        <div class="card-body">
                            {{ show_error_msg() }}
                            {{ show_success_msg() }}
                            <h5 class="card-title text-primary">Announcement Bar</h5>
                            <form method="POST" action="{{ route('saveannouncement') }}">
                                @csrf
                                <div class="Announcementbarform">
                                    <input placeholder="Enter Announcement Bar" class="form-control" name="announcement"
                                        required value="{{ !empty($announcement->content) ? $announcement->content : '' }}">
                                    <input type="hidden" name="category"
                                        value="{{ !empty($announcement->category) ? $announcement->category : '' }}">
                                    <input type="hidden" name="static_id"
                                        value="{{ !empty($announcement->id) ? $announcement->id : '' }}">
                                    <button type="submit" class="btn btn-success">OK</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-12 mb-4">
            <div class="card">
                <div class="card-body das-card-body">
                    <i class="fa-light fa-cart-shopping"></i>
                    <span class="d-block fw-semibold mb-1">Products</span>
                    <h3 class="card-title mb-1">{{ $productCount }}</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-12 mb-4">
            <div class="card">
                <div class="card-body das-card-body">
                    <i class="fa-light fa-cart-flatbed"></i>
                    <span>Categories</span>
                    <!-- <h3 class="card-title text-nowrap mb-1">$4,679</h3> -->
                    <h3 class="card-title mb-1">{{ $categoryCount }}</h3>
                </div>
            </div>
        </div>


        <div class="col-lg-3 col-md-4 col-12 mb-4">
            <div class="card">
                <div class="card-body das-card-body">
                    <i class="fa-light fa-handshake-angle"></i>
                    <span>Partners</span>
                    <!-- <h3 class="card-title text-nowrap mb-1">$4,679</h3> -->
                    <h3 class="card-title mb-1">{{ $brandCount }}</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-12 mb-4">
            <div class="card">
                <div class="card-body das-card-body">
                    <i class="fa-light fa-newspaper"></i>
                    <span>Blog</span>
                    <!-- <h3 class="card-title text-nowrap mb-1">$4,679</h3> -->
                    <h3 class="card-title mb-1">{{ $blogCount }}</h3>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-12 mb-4">
            <div class="card">
                <div class="card-body das-card-body">
                    <i class="fa-light fa-comments"></i>
                    <span>Reviews</span>
                    <!-- <h3 class="card-title text-nowrap mb-1">$4,679</h3> -->
                    <h3 class="card-title mb-1">{{ $reviewCount }}</h3>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-12 mb-4">
            <div class="card">
                <div class="card-body das-card-body">
                    <i class="fa-light fa-headset"></i>
                    <span>Enquires</span>
                    <!-- <h3 class="card-title text-nowrap mb-1">$4,679</h3> -->
                    <h3 class="card-title mb-1">{{ $conEnqCount }}</h3>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-12 mb-4">
            <div class="card">
                <div class="card-body das-card-body">
                    <i class="fa-light fa-headset"></i>
                    <span>Products Enquiries</span>
                    <!-- <h3 class="card-title text-nowrap mb-1">$4,679</h3> -->
                    <h3 class="card-title mb-1">{{ $orderCount }}</h3>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-12 mb-4">
            <div class="card">
                <div class="card-body das-card-body">
                    <i class="fa-light fa-headset"></i>
                    <span>Subscriber</span>
                    <!-- <h3 class="card-title text-nowrap mb-1">$4,679</h3> -->
                    <h3 class="card-title mb-1">{{ $subscribeCount }}</h3>
                </div>
            </div>
        </div>


        <!-- Total Revenue -->



    </div>
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <form action="{{ route('changepopupimage') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" style="margin: -11px;">&times;</button>
                        <h4 class="modal-title">Change popup image</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="image">Image:</label>
                            <input type="file" class="form-control" id="image" name="image" accept="image/*"
                                required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
