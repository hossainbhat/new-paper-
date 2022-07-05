@extends("layouts.admin_layouts.admin_layout")
@section('title','Dashboard')
@section("content")
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Roles and Permission</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                            <li class="breadcrumb-item active">Roles and Permission</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @if (Auth::guard('admin')->user()->can('role.create'))
                        <h5 class="card-title" style="float:right;"><a href="{{route('admin.roles.create')}}" class="btn btn-success btn-md">Add Rolse and Permission <i class="fas fa-plus-circle"></i></a></h5>
                        @endif 
                        <div class="table-responsive">
                            <table id="datatable-buttons" class="table table-striped table-bordered w-100">
                                <thead>
                                <tr>
                                    <th Width="15%">ID</th>
                                    <th>Name</th>
                                    <th width="60%">Permissions</th>
                                    @if (Auth::guard('admin')->user()->can('role.edit') || Auth::guard('admin')->user()->can('role.delete') )
                                    <th Width="15%">Action</th>
                                    @endif 
                                </tr>
                                </thead>
                                <tbody>
                                    @if(count($roles) >0)
                                         @foreach ($roles as $key => $role)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$role->name}}</td>
                                            <td>
                                                @foreach ($role->permissions as $perm)
                                                    <span class="badge badge-info mr-1">
                                                        {{ $perm->name }}
                                                    </span>
                                                @endforeach
                                            </td>
                                            @if (Auth::guard('admin')->user()->can('role.edit') || Auth::guard('admin')->user()->can('role.delete') )
                                            <td>
                                            @if (Auth::guard('admin')->user()->can('role.edit'))
                                                <a href="{{route('admin.roles.edit',$role->id)}}"><i class="fas fa-edit btn btn-success btn-sm"></i></a>
                                                @endif 
                                                @if (Auth::guard('admin')->user()->can('role.delete') )
                                                <a class="confirmDelete" record="role" recoedid="{{$role->id}}" href="javascript:void('0')"><i class="fas fa-trash-alt btn btn-danger btn-sm"></i></a>
                                                @endif 
                                            </td>
                                            @endif 
                                        </tr>
                                        @endforeach
                                    @endif 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
        
    </div> <!-- container-fluid -->
</div>
				

@endsection