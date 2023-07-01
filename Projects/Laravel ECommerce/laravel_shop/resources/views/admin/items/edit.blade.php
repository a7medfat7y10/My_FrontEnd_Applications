@extends('layouts.admin')

@section('content')
    @if($item)

    <h1 class="text-center">Edit Item</h1>
<div class="container">
    <div class="row">
        <div class="col-sm-9">
        <form class="form-horizontal" action="{{url('/admin/items/' . $item->id)}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PUT">
            <!--start name-->
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label ">Name</label>
                <div class="col-sm-10 col-md-10">
                    <input type="text" name="name" class="form-control"  required='required' placeholder='Name of The Item' value="{{$item->name}}"/>
                </div>
            </div>
            <!--start description-->
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label">Description</label>
                <div class="col-sm-10 col-md-10">
                    <input type="text" name="description" class="form-control"  placeholder='Description of The Item' value='{{$item->description}}'/>
                </div>
            </div>
            <!--start photo-->
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label">Photo</label>
                <div class="col-sm-10 col-md-10">
                    <input type="file" name="photo_id" class="form-control" />
                </div>
            </div>
            <!--start Price-->
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label">Price</label>
                <div class="col-sm-10 col-md-10">
                    <input type="text" name="price" class="form-control"  placeholder='Price of The Item' value='{{$item->price}}'/>
                </div>
            </div>
            <!--start country-->
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label">Country</label>
                <div class="col-sm-10 col-md-10">
                    <input type="text" name="country" class="form-control"  placeholder='Country Of Made' value='{{$item->country}}'/>
                </div>
            </div>
            <!--start member-->
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label">Member</label>
                <div class="col-sm-10 col-md-10">
                    <select class="form-control" name="user_id">
                        @foreach ($users as $user)
                            <option value="{{$user->id}}" {{($user->id == $item->user_id) ? 'selected' : ''}}>{{$user->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <!--start category-->
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label">Category</label>
                <div class="col-sm-10 col-md-10">
                    <select class="form-control" name="category_id">
                        @foreach ($categories as $category)
                            <option value='{{$category->id}}' {{($category->id == $item->category_id) ? 'selected' : ''}}>{{$category['name']}} </option>
                            <?php $childCats = App\Category::where('parent' , $category->id)->get() ?>
                            @foreach($childCats as $child)
                                <option value='{{$child->id}}' {{($child->id == $item->category_id) ? 'selected' : ''}}>{{"---" . $child['name']}}</option>
                            @endforeach
                        @endforeach
                    </select>
                </div>
            </div>
            <!--start tags-->
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label">Tags</label>
                <div class="col-sm-10 col-md-10">
                    <input type="text" name="tags" class="form-control"  placeholder='Seperate tags with Comma' value = "{{$item->tags}}"/>
                </div>
            </div>



            <!-- Add button-->
            <div class="form-group form-group-lg">
                <div class="col-sm-offset-2 col-sm-10 ">
                    <input type="submit" value="Update" class="btn btn-primary btn-sm" />
                </div>
            </div>


        </form>
        <form class="form-horizontal" action="{{url('/admin/items/' . $item->id)}}" method="POST">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE">
            <div class="form-group form-group-lg">
                <div class="col-sm-offset-2 col-sm-10 ">
                    <input type="submit" value="Delete" class="btn btn-danger btn-sm" />
                </div>
            </div>
        </form>
        </div>

        <div class="col-sm-3">
            <img src="{{($item->photo ? '/images/' . $item->photo->name : 'https://www.placehold.it/300')}}" alt="" width="100%">
        </div>
    </div>
</div>
    @else
        <div class="container">
            <div class="alert alert-danger"> THere is no such id</div>
        </div>

    @endif
@endsection
