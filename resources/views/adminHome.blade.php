@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    Logged In as an Admin...!!!
                </div>
                
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Books Count</div>
                <div class="card-body">
                   <h4><center>{{$booksCount}}</center></h4>
                </div>
            </div>
        </div>
    </div>
    <br />
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Subscription Count</div>
                <div class="card-body">
                   <h4><center></center></h4>
                </div>
            </div>
        </div>
    </div>
  </div>
  <br />
  <a href="{{ route('books.index')}}" class="btn btn-primary">Show Book</a>
  <br />
  <br />
  <a href="{{ route('books.create')}}" class="btn btn-primary"  style='width:14%'>Add Book</a>
@endsection