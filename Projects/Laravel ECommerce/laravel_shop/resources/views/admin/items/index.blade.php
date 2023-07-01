@extends('layouts.admin')

@section('content')
        <h1 class="text-center">Manage Items</h1>
        <div class="container">
            <div class="table-responsive">
                <table class="main-table text-center table table-bordered">
                    <tr>
                        <td>Id</td>
                        <td>User</td>
                        <td>Name</td>
                        <td>Description</td>
                        <td>Price</td>
                        <td>Country</td>
                        <td>Photo</td>
                        <td>Category</td>
                        <td>control</td>
                    </tr>
                    @foreach($items as $item)
                        <tr>
                            <td>{{$item['id'] }}</td>
                            <td>{{$item->user->name}}</td>
                            <td>{{$item['name']}} </td>
                            <td>{{$item['description'] }}</td>
                            <td>{{$item['price']}} </td>
                            <td>{{$item['country'] }}</td>
                            <td><img width="50px" src="{{$item->photo ? '/images/'.$item->photo->name : "https://www.placehold.it/50"}}" alt=""></td>
                            <td>{{$item->category ?  $item->category->name : 'uncategorized' }} </td>
                            <td>
                                <a href='{{url('/admin/items/' . $item->id . '/edit')}}' class='btn btn-success'><i class='fa fa-edit'></i> Edit</a>
                                @if ($item['is_approved'] == 0)
                                    <a href='{{url('/admin/items/' . $item->id . '/activateItem')}}' class='btn btn-info activate'><i class='fa fa-check'></i> Approve</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <a href = "{{url('/admin/items/create')}}" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Add New Item</a>
        </div>
@endsection
