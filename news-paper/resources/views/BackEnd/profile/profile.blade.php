@extends("layouts.admin_layouts.admin_layout")
@section('title','Profile')
@section("content")

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Profile</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-3">
                <div class="card profile">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{asset('BackEnd/images/users/user-3.jpg')}}" alt="" class="rounded-circle img-thumbnail avatar-xl">
                            <div class="online-circle">
                                <i class="fa fa-circle text-success"></i>
                            </div>                                        
                            <h4 class="mt-3">{{$admin->name}}</h4>
                            <p class="text-muted font-12">Project Manager</p>
                            <a href="#" class="btn btn-pink btn-round px-5">Follow Me</a>                                    
                        </div>                                    
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="mt-0">About</h5>
                        <p class="card-title-desc">
                            {{$admin->bio}}
                        </p>
                        <hr>
                        <div class="button-list btn-social-icon">                                                
                            <a href="{{$admin->facebook}}">
                                <button type="button" class="btn btn-facebook rounded-circle">
                                    <i class="fab fa-facebook"></i>
                                </button>
                            </a>
                            <a href="{{$admin->twitter}}">
                            <button type="button" class="btn btn-twitter rounded-circle ml-2">
                                <i class="fab fa-twitter"></i>
                            </button>
                            </a>
                            <a href="{{$admin->linkdin}}">
                            <button type="button" class="btn btn-linkedin rounded-circle  ml-2">
                                <i class="fab fa-linkedin"></i>
                            </button>
                            </a>
                            <a href="{{$admin->instagram}}">
                            <button type="button" class="btn btn-dribbble rounded-circle  ml-2">
                                <i class="fab fa-instagram"></i>
                            </button>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Contact</h5>   
                        <ul class="list-unstyled mb-0">
                            <li class=""><i class="mdi mdi-phone mr-2 text-success font-size-18"></i> <b> phone </b> : +88 {{$admin->mobile}}</li>
                            <li class="mt-2"><i class="mdi mdi-email-outline text-success font-size-18 mt-2 mr-2"></i> <b> Email </b> : {{$admin->email}}</li>
                            <li class="mt-2"><i class="mdi mdi-map-marker text-success font-size-18 mt-2 mr-2"></i> <b>Location</b> : {{$admin->location}}</li>
                        </ul>
                    </div>
                </div>                                                     
            </div>
            <div class="col-xl-9">
              
                <div class="">
                    <div class="custom-tab tab-profile">
                        
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active pb-3 pt-0" data-toggle="tab" href="#projects" role="tab"><i class="fab fa-product-hunt mr-2"></i>Posts</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pb-3 pt-0" data-toggle="tab" href="#activity" role="tab"><i class="fas fa-key mr-2"></i></i>Change Password</a>
                            </li>                                       
                            <li class="nav-item">
                                <a class="nav-link pb-3 pt-0" data-toggle="tab" href="#settings" role="tab"><i class=" fas fa-user mr-2"></i>Update User</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content pt-4">
                            <div class="tab-pane active" id="projects" role="tabpanel">
                                <div class="row">
                                   
                                    <div class="col-xl-12">
                                        <div class="card">                                
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-centered table-nowrap table-hover mb-0">
                                                        <thead>
                                                            <tr class="align-self-center">
                                                                <th>Title</th>
                                                                <th>Post Image</th>
                                                                <th>Date</th>
                                                                <th>Status</th>                                                                                    
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Product Devlopment</td>
                                                                <td>
                                                                    <img src="{{asset('BackEnd/images/users/user-2.jpg')}}" alt="" class="avatar-xs rounded-circle mr-2">
                                                                    Kevin Heal
                                                                </td>
                                                                <td>5/8/2018</td>
                                                                <td><span class="badge badge-boxed  badge-warning">panding</span></td>                                                                        
                                                            </tr>
                                                            <tr>
                                                                <td>New Office Building</td>
                                                                <td>
                                                                    <img src="{{asset('BackEnd/images/users/user-3.jpg')}}" alt="" class="avatar-xs rounded-circle mr-2">
                                                                    Frank M. Lyons
                                                                </td>
                                                                <td>15/7/2018</td> 
                                                                <td><span class="badge badge-boxed  badge-primary">Success</span></td>
                                                            </tr>
                                                            
                                                            
                                                        </tbody>
                                                    </table>
                                                </div><!--end table-responsive-->
                                                <div class="pt-3 border-top text-right">
                                                    <a href="#" class="text-primary">View all <i class="mdi mdi-arrow-right"></i></a>
                                                </div> 
                                            </div>
                                        </div>                                                                   
                                    </div>
                                      
                                </div>
                                
                            </div>
                            <div class="tab-pane" id="activity" role="tabpanel"> 
                                <div class="row">                                                
                                    
                                    <div class="col-xl-12">
                                        <div class="card">                                       
                                            <div class="card-body">
                                                <form class="form-horizontal form-material mb-0" action="{{route('admin.updatePassword')}}" method="post">
                                                    @csrf 
                                                    <div class="form-group row">
                                                        <div class="col-md-4">
                                                            <input type="password" placeholder="Current Password" class="form-control" name="current_pwd" id="current_pwd">
                                                            <span id="chkPwd"></span>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="password" placeholder="New Password" name="new_pwd" id="new_pwd" class="form-control">
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="password" placeholder="Confirm New Password" name="confirm_pwd" id="confirm_pwd" class="form-control">
                                                        </div>
                                                        <div class="col-md-2" style="margin-top:-13px;">
                                                            <button type="submit" class="btn btn-success btn-md text-light px-4 mt-3 float-right mb-0">Update</button>
                                                        </div>
                                                    </div>
                                                    
                                                </form>                                                                                                                         
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                            
                            <div class="tab-pane" id="settings" role="tabpanel">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                @if ($errors->any())
                                                    <div class="alert alert-danger" style="margin-top: 10px;">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif

                                                <div class="">
                                                    <form class="form-horizontal form-material mb-0" action="{{route('admin.profile')}}" method="post" enctype="multipart/form-data">
                                                        @csrf 
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <input type="text" placeholder="Full Name" class="form-control" name="name" id="name" value="{{$admin->name}}">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="text" readonly placeholder="Email" name="email" id="email" class="form-control" value="{{$admin->email}}">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="text" placeholder="Mobile" name="mobile" id="mobile" class="form-control" value="{{$admin->mobile}}">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <input type="text" placeholder="Address" class="form-control" name="address" id="Address" value="{{$admin->address}}">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="text" placeholder="Location" name="location" id="location" class="form-control" value="{{$admin->location}}">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="text" placeholder="Facebook" class="form-control" name="facebook" id="facebook" value="{{$admin->facebook}}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            
                                                            <div class="col-md-4">
                                                                <input type="text" placeholder="Twitter" name="twitter" id="twitter" class="form-control" value="{{$admin->twitter}}">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="text" placeholder="Linkdin" name="linkdin" id="linkdin" class="form-control" value="{{$admin->linkdin}}">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="text" placeholder="Instagram" name="instagram" id="instagram" class="form-control" value="{{$admin->instagram}}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-6">
                                                            <textarea rows="5" placeholder="About Your Self" name="bio" class="form-control">{{$admin->bio}}</textarea>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="file" name="image" class="form-control">
                                                                @if($admin->image > 0)
                                                                <div class="mt-2">
                                                                    <img class="rounded-circle" src="{{asset('uploads/profile/'.$admin->image)}}" width="70" alt=""> 
                                                                    &nbsp; 
                                                                    <a class="confirmDelete" record="profile-image" recoedid="{{ $admin->id }}" href="javascript:void('0')"><i class="btn btn-danger btn-sm fas fa-trash-alt"></i></a>
                                                                </div>
                                                                @else 
                                                                <div class="mt-2">
                                                                    <img class="rounded-circle" src="{{asset('uploads/profile/no-image.jpg')}}" width="70" alt="">
                                                                </div>
                                                                @endif 
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <button class="btn btn-success btn-md text-light px-4 mt-3 float-right mb-0">Update</button>
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
            </div>
        </div>
        
    </div> <!-- container-fluid -->
</div>
@endsection