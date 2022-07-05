@extends("layouts.admin_layouts.admin_layout")
@section('title','Dashboard')
@section("content")
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Categories</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                            <li class="breadcrumb-item active">Categories</li>
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
                        @if (Auth::guard('admin')->user()->can('category.create'))
                            <h5 class="card-title" style="float:right;"><a href="{{route('admin.addEditCategory')}}" class="btn btn-success btn-md">Add Ctegory <i class="fas fa-plus-circle"></i></a></h5>
                        @endif 
                        <div class="table-responsive">
                            <table id="datatable-buttons" class="table table-striped table-bordered w-100">
                                <thead>
                                <tr>
                                    <th Width="15%">ID</th>
                                    <th>Name</th>
                                    @if (Auth::guard('admin')->user()->can('category.approve') || Auth::guard('admin')->user()->can('category.edit') || Auth::guard('admin')->user()->can('category.delete') )
                                    <th Width="15%">Action</th>
                                    @endif 
                                </tr> 
                                </thead>
                                <tbody>
                                    @if(count($categories) >0)
                                        @foreach($categories as $key => $category)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$category->name}}</td>
                                            @if (Auth::guard('admin')->user()->can('category.edit'))
                                                <td>
                                                @if (Auth::guard('admin')->user()->can('category.approve'))
                                                    @if($category->status ==1)
                                                        <a class="updateCategoryStatus" id="category-{{$category->id}}" category_id="{{$category->id}}" href="javascript:void(0)"><i class='btn btn-sm  btn-warning fas fa-bookmark' status="Inactive"></i></a>  
                                                    @else
                                                        <a class="updateCategoryStatus" id="category-{{$category->id}}" category_id="{{$category->id}}" href="javascript:void(0)"><i class='btn btn-sm  btn-warning far fa-bookmark' status='Active'></i></a>  
                                                    @endif
                                                @endif
                                                @if (Auth::guard('admin')->user()->can('category.edit'))
                                                    <a href="{{route('admin.addEditCategory',$category->id)}}"><i class="fas fa-edit btn btn-success btn-sm"></i></a>
                                                @endif 
                                                @if (Auth::guard('admin')->user()->can('category.delete'))
                                                    <a class="confirmDelete" record="category" recoedid="{{$category->id}}" href="javascript:void('0')"><i class="fas fa-trash-alt btn btn-danger btn-sm"></i></a>
                                                </td>
                                                @endif 
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