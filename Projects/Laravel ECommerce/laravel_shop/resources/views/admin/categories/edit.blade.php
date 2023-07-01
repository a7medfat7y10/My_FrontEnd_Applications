@extends('layouts.admin')

@section('content')

    <h1 class="text-center">Edit Category</h1>
    <div class="container">
        <form class="form-horizontal" action="{{url('/admin/categories/' . $category->id)}}" method="POST">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PUT">
            <!--start name-->
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10 col-md-8">
                    <input type="text" name="name" class="form-control"  required='required' placeholder='Name of The Category' value="{{$category->name}}"/>
                </div>
            </div>
            <!--start Description-->
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label">Description</label>
                <div class="col-sm-10 col-md-8">
                    <input type="text" name="description" class=" form-control"  placeholder="Description of the category" value="{{$category->description}} "/>
                </div>
            </div>
            <!--start parent of subcategories-->
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label">Parent?</label>
                <div class="col-sm-10 col-md-8">
                    <select name="parent" class="parent">
                        @if($category->parent == 0)
                            <option value ="0" selected> None</option>
                                @foreach($parents as $parent)
                                    <option value ="{{$parent->id}}">{{$parent->name}}</option>
                                @endforeach
                            @else
                                <option value ="0" > None</option>
                                @foreach($parents as $parent)
                                    <option value ="{{$parent->id}}"{{($parent->id == $category->parent) ? "selected" : ""}}>{{$parent->name}}</option>
                                @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <!-- Add button-->
            <div class="form-group form-group-lg">
                <div class="col-sm-offset-2 col-sm-4 ">
                    <input type="submit" value="Update Category" class="btn btn-primary" />
                </div>
            </div>


        </form>
        <form class="form-horizontal" action="{{url('/admin/categories/' . $category->id)}}" method="POST">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE">
            <!-- Add button-->
            <div class="form-group form-group-lg">
                <div class="col-sm-offset-2 col-sm-4 ">
                    <input type="submit" value="Delete Category" class="btn btn-danger" />
                </div>
            </div>


        </form>
    </div>

@endsection
