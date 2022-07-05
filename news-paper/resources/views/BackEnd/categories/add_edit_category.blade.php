@extends("layouts.admin_layouts.admin_layout")
@section('title',$name)
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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Categories</a></li>
                            <li class="breadcrumb-item active">{{$name}}</li>
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
                    <form class="form-horizontal form-material mb-0" @if(empty($categorydata->id)) action="{{route('admin.addEditCategory')}}" @else   action="{{route('admin.addEditCategory',$categorydata->id )}}" @endif method="post" enctype="multipart/form-data">
                        @csrf 
                        <div class="form-group row">
                            <div class="col-md-10">
                                <input type="text" placeholder="Category Name" class="form-control" name="name" @if(!empty($categorydata->name)) value="{{$categorydata->name}}" @else value="{{ old('name')}}" @endif>
                            </div>
                            <div class="col-md-2" style="margin-top:-14px">
                                <button class="btn btn-success btn-md text-light px-4 mt-3 float-right mb-0">{{$name}}</button>
                            </div>
                        </div>
                        
                    </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
        
    </div> <!-- container-fluid -->
</div>
				

@endsection