@extends('layouts.admin')

@section('content')


    @if(! empty($categories))
    <h1 class="text-center">Manage Categories</h1>
    <div class="container category">
        <div class="panel panel-default">
            <div class="panel-heading">
                Manage Categories
                <div class="option pull-right">
                    View:[
                    <span class="active" data-view= "full" >Full</span> |
                    <span >Classic</span>]
                </div>
            </div>
            <div class="panel-body">
                @foreach($categories as $category)
                    <div class='cat'>
                        <div class='hidden-buttons'>
                            <a href="{{url('/admin/categories/' . $category->id . '/edit')}}" class='btn btn-primary btn-xs'><i class='fa fa-edit'></i>Edit</a>
                        </div>
                        <h3>{{$category['name']}} </h3>
                        <div class='full-view'>
                            <p>
                                @if($category['description'] == '')
                                    {{'There is no description for this category'}}
                                 @else
                                    {{$category['description']}}
                                @endif
                            </p>
                        </div>
                        @if (! empty ($childCats))
                            <h4 class='child-head'>Sub Categories</h4>
                            <ul class='list-unstyled child-cats'>
                                @if($childCats)
                                    @foreach ($childCats as $child)
                                        @if($child->parent == $category->id)
                                            <li class='child-link'>
                                                <a href="{{url('/admin/categories/' . $child->id . '/edit' )}}">{{$child['name']}} </a>
                                            </li>
                                        @endif
                                    @endforeach
                                @endif
                            </ul>
                        @endif
                        <hr>
                    </div>
                @endforeach
            </div>
        </div>
        <a href="{{url('/admin/categories/create')}}" class="btn btn-primary"><i class='fa fa-plus'></i> Add New Category</a>
    </div>
    @else
        <div class="container">
            <div class="alert alert-info">There is no categories to show </div>
            <a href = "" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Add New Category</a>
        </div>
    @endif
@endsection
