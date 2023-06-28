@extends('backend.layout.master')

@section('main_content')

    <section class="our-dashbord dashbord bgc-f7 pb50">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-xl-2 dn-992 pl0"></div>
                <div class="col-sm-12 col-lg-8 col-xl-10 maxw100flex-992">

                    <div class="container-fluid ovh">

                        <div class="row">
                            <div class="col-lg-3 col-xl-2 dn-992 pl0"></div>
                            <div class="col-lg-9 col-xl-10 maxw100flex-992">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="dashboard_navigationbar dn db-992">
                                            <div class="dropdown">
                                                <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>
                                                <ul id="myDropdown" class="dropdown-content">
                                                    <li><a href="page-dashboard.html"><span class="flaticon-layers"></span> Dashboard</a></li>
                                                    <li><a href="page-message.html"><span class="flaticon-envelope"></span> Message</a></li>
                                                    <li><a href="page-my-properties.html"><span class="flaticon-home"></span> My Properties</a></li>
                                                    <li><a href="page-my-favorites.html"><span class="flaticon-heart"></span> My Favorites</a></li>
                                                    <li><a href="page-my-savesearch.html"><span class="flaticon-magnifying-glass"></span> Saved Search</a></li>
                                                    <li><a href="page-my-review.html"><span class="flaticon-chat"></span> My Reviews</a></li>
                                                    <li><a href="page-my-packages.html"><span class="flaticon-box"></span> My Package</a></li>
                                                    <li><a href="page-my-profile.html"><span class="flaticon-user"></span> My Profile</a></li>
                                                    <li class="active"><a href="page-add-new-property.html"><span class="flaticon-filter-results-button"></span> Add New Listing</a></li>
                                                    <li><a href="page-login.html"><span class="flaticon-logout"></span> Logout</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="breadcrumb_content style2">
                                            <h2 class="breadcrumb_title" style="margin-bottom: 15px;">Add New Property</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        @if($message = \Illuminate\Support\Facades\Session::get('success'))
                                            <p style="color: green">{{$message}}</p>
                                        @endif

                                        @if($message = \Illuminate\Support\Facades\Session::get('error'))
                                            <p style="color: red">{{$message}}</p>
                                        @endif

                                        <div class="my_dashboard_review">
                                           <form action="{{route('property.store')}}" method="POST" enctype="multipart/form-data">
                                               @csrf
                                               <div class="row">

                                                   @if($errors->any())
                                                       <div class="alert alert-danger">
                                                           @foreach($errors->all() as $error)
                                                                <li>{{$error}}</li>
                                                           @endforeach
                                                       </div>
                                                   @endif

                                                   <div class="col-lg-12">
                                                       <h4 class="mb30">Create Listing</h4>
                                                       <div class="my_profile_setting_input form-group">
                                                           <label for="propertyTitle">Property Title</label>
                                                           <input type="text" class="form-control" id="propertyTitle" name="title" value="{{old('title')}}">
                                                       </div>
                                                   </div>
                                                   <div class="col-lg-12">
                                                       <div class="my_profile_setting_textarea">
                                                           <label for="propertyDescription">Description</label>
                                                           <textarea class="form-control" id="propertyDescription" rows="7" name="prop_description" value="{{old('prop_description')}}"></textarea>
                                                       </div>
                                                   </div>
                                                   <div class="col-lg-6 col-xl-6">
                                                       <div class="my_profile_setting_input ui_kit_select_search form-group">
                                                           <label>Type</label>
                                                           <select class="selectpicker" data-live-search="true" data-width="100%" name="prop_type" value="{{old('prop_type')}}">
                                                               <option value="Bungalow">Bungalow</option>
                                                               <option value="Duplex">Duplex</option>
                                                               <option value="Semi-detached">Semi-detached Duplex</option>
                                                               <option value="SkyCraper">SkyCraper</option>
                                                               <option value="Mansion">Mansion</option>
                                                           </select>
                                                       </div>
                                                   </div>
                                                   <div class="col-lg-6 col-xl-6">
                                                       <div class="my_profile_setting_input ui_kit_select_search form-group">
                                                           <label>Status</label>
                                                           <select class="selectpicker" data-live-search="true" data-width="100%" name="status" value="{{old('status')}}">
                                                               <option value="Sale">sale</option>
                                                               <option value="Lease">Lease</option>
                                                               <option value="Rent">Rent</option>
                                                           </select>
                                                       </div>
                                                   </div>
                                                   <div class="col-lg-4 col-xl-4">
                                                       <div class="my_profile_setting_input form-group">
                                                           <label for="formGroupExamplePrice">Price</label>
                                                           <input type="text" class="form-control" id="formGroupExamplePrice" name="price" value="{{old('price')}}">
                                                       </div>
                                                   </div>
                                                   <div class="col-lg-4 col-xl-4">
                                                       <div class="my_profile_setting_input form-group">
                                                           <label for="formGroupExampleArea">Area</label>
                                                           <input type="number" class="form-control" id="formGroupExampleArea" name="prop_size" value="{{old('prop_size')}}">
                                                       </div>
                                                   </div>
                                                   <div class="col-lg-4 col-xl-4">
                                                       <div class="my_profile_setting_input ui_kit_select_search form-group">
                                                           <label>Bath No</label>
                                                           <select class="selectpicker" data-live-search="true" data-width="100%" name="bath_no" value="{{old('bath_no')}}">
                                                               <option value="1">1</option>
                                                               <option value="2">2</option>
                                                               <option value="3">3</option>
                                                               <option value="4">4</option>
                                                               <option value="5">5</option>
                                                               <option value="6">Other</option>
                                                           </select>
                                                       </div>
                                                   </div>

                                               </div>
                                               <div class="col-lg-4 col-xl-3">
                                                   <div class="my_profile_setting_input ui_kit_select_search form-group">
                                                       <label>Bed No</label>
                                                       <select class="selectpicker" data-live-search="true" data-width="100%" name="bed_no" value="{{old('bed_no')}}">
                                                           <option value="1">1</option>
                                                           <option value="2">2</option>
                                                           <option value="3">3</option>
                                                           <option value="4">4</option>
                                                           <option value="5">5</option>
                                                           <option value="6">Other</option>
                                                       </select>
                                                   </div>
                                               </div>

                                               <div class="col-lg-12">
                                                   <div class="my_profile_setting_input form-group">
                                                       <label for="propertyAddress">Property Image</label>
                                                       <input type="file" class="form-control" id="propertyImage" name="image" value="{{old('image')}}">
                                                   </div>
                                               </div>

                                               <div class="col-lg-12">
                                                   <div class="my_profile_setting_input form-group">
                                                       <label for="propertyAddress">Address</label>
                                                       <input type="text" class="form-control" id="propertyAddress" name="address" value="{{old('address')}}">
                                                   </div>
                                               </div>

                                               <br><br><br>

                                               <div class="col-xl-12">
                                                   <div class="my_profile_setting_input">
                                                       <button type="submit" class="btn btn1 float-left">Add Property</button>
                                                   </div>
                                               </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection