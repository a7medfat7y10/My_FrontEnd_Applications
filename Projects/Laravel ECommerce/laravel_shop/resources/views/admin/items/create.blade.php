@extends('layouts.admin')

@section('content')
    <h1 class="text-center">Add New Item</h1>
    <div class="container">
        <form class="form-horizontal" action="{{url('/admin/items')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <!--start name-->
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label ">Name</label>
                <div class="col-sm-10 col-md-10">
                    <input type="text" name="name" class="form-control"  required='required' placeholder='Name of The Item'/>
                </div>
            </div>
            <!--start description-->
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label">Description</label>
                <div class="col-sm-10 col-md-10">
                    <input type="text" name="description" class="form-control" required='required' placeholder='Description of The Item'/>
                </div>
            </div>
            <!--start photo-->
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label">Photo</label>
                <div class="col-sm-10 col-md-10">
                    <input type="file" name="photo_id" class="form-control" required='required' placeholder='Description of The Item'/>
                </div>
            </div>
            <!--start user-->
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label">User</label>
                <div class="col-sm-10 col-md-10">
                    <select class="form-control" name="user_id">
                        <option value="0">...</option>
                        @foreach ($users as $user)
                            <option value='{{$user->id}}'>{{$user['name']}} </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <!--start Price-->
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label">Price</label>
                <div class="col-sm-10 col-md-10">
                    <input type="text" name="price" class="form-control" required='required' placeholder='Price of The Item'/>
                </div>
            </div>
            <!--start country-->
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label">Country</label>
                <div class="col-sm-10 col-md-10">
                    <input type="text" name="country" class="form-control" required='required' placeholder='Country Of Made'/>
                </div>
            </div>
            <!--start category-->
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label">Category</label>
                <div class="col-sm-10 col-md-10">
                    <select class="form-control" name="category_id">
                        <option value="0">...</option>

                        @foreach ($categories as $category) {
                            <option value='{{$category->id}}'>{{$category['name']}} </option>
                            <?php $childCats = App\Category::where('parent' , $category->id)->get() ?>
                            @foreach($childCats as $child) {
                                <option value='{{$child->id}}'>{{"---" . $child['name']}}</option>
                            @endforeach
                        @endforeach
                    </select>
                </div>
            </div>
            <!--start tags-->
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label">Tags</label>
                <div class="col-sm-10 col-md-10">
                    <input type="text" name="tags" class="form-control"  placeholder='Seperate tags with Comma'/>
                </div>
            </div>
            <!-- Add button-->
            <div class="form-group form-group-lg">
                <div class="col-sm-offset-2 col-sm-10 ">
                    <input type="submit" value="Add Item" class="btn btn-primary btn-sm" />
                </div>
            </div>
        </form>
    </div>

@endsection
