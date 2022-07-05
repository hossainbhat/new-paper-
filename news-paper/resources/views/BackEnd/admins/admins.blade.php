@extends("layouts.admin_layouts.admin_layout")
@section('title','Dashboard')
@section("content")
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Admins</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                            <li class="breadcrumb-item active">Admins</li>
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
                        @if (Auth::guard('admin')->user()->can('admin.create') )
                        <h5 class="card-title" style="float:right;"><a href="{{route('admin.admins.create')}}" class="btn btn-success btn-md">Add Admon <i class="fas fa-plus-circle"></i></a></h5>
                        @endif 
                        <div class="table-responsive">
                            <table id="datatable-buttons" class="table table-striped table-bordered w-100">
                                <thead>
                                <tr>
                                    <th width="5%">Sl</th>
                                    <th width="10%">Name</th>
                                    <th width="10%">Email</th>
                                    <th width="20%">Roles</th>
                                    @if (Auth::guard('admin')->user()->can('admin.edit') || Auth::guard('admin')->user()->can('admin.delete') )
                                    <th width="15%">Action</th>
                                    @endif 
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($admins as $admin)
                               <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $admin->name }}</td>
                                    <td>{{ $admin->email }}</td>
                                    <td>
                                        @foreach ($admin->roles as $role)
                                            <span class="badge badge-info mr-1">
                                                {{ $role->name }}
                                            </span>
                                        @endforeach
                                    </td>
                                    @if (Auth::guard('admin')->user()->can('admin.edit') || Auth::guard('admin')->user()->can('admin.delete'))
                                    <td>
                                        @if (Auth::guard('admin')->user()->can('admin.edit'))
                                        <a href="{{route('admin.admins.edit',$admin->id)}}"><i class="fas fa-edit btn btn-success btn-sm"></i></a>
                                        @endif 
                                        @if (Auth::guard('admin')->user()->can('admin.delete'))
                                        <a class="confirmDelete" record="admin" recoedid="{{$admin->id}}" href="javascript:void('0')"><i class="fas fa-trash-alt btn btn-danger btn-sm"></i></a>
                                        @endif 
                                    </td>
                                    @endif 
                                </tr>
                               @endforeach
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