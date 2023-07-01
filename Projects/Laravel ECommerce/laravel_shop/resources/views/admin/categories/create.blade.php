@extends('layouts.admin')

@section('content')

    <h1 class="text-center">Add New Category</h1>
    <div class="container">
        <form class="form-horizontal" action="{{url('/admin/categories')}}" method="POST">
            {{csrf_field()}}
            <!--start name-->
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10 col-md-8">
                    <input type="text" name="name" class="form-control"  autocomplete="off" required='required' placeholder='Name of The Category'/>
                </div>
            </div>
            <!--start Description-->
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label">Description</label>
                <div class="col-sm-10 col-md-8">
                    <input type="text" name="description" class=" form-control"  placeholder="Description of the category" />
                </div>
            </div>
            <!--start parent of subcategories-->
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label">Parent?</label>
                <div class="col-sm-10 col-md-8">
                    <select name="parent" class="parent">
                        <option value ="0">None</option>
                        @foreach($parents as $parent)
                            <option value ="{{$parent->id}}">{{$parent->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Add button-->
            <div class="form-group form-group-lg">
                <div class="col-sm-offset-2 col-sm-10 ">
                    <input type="submit" value="Add Category" class="btn btn-primary btn-lg" />
                </div>
            </div>
        </form>
    </div>

@endsection
