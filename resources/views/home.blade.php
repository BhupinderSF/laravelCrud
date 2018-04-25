@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard <a href="{{url('/create')}}" class='pull-right'><button>Add New Book</button></a></div>

                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Book Name</th>
                            <th>Author</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @if (count($bookList))
                        @foreach ($bookList as $row)
                          <tr>
                            <td>{{$row->book_name}}</td>
                            <td>{{$row->author}}</td>
                            <td><a href="">Edit</a> | <a href="">Delete</a></td>
                          </tr>
                        @endforeach
                        @else
                            <tr>
                                <td colspan="3"> No Record Found !!!</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
