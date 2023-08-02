@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{$title}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="d-none d-md-block main-nav-links">
                        <ul class="nav nav-pills nav-fill form-tabs" role="tablist">
                          <li class="nav-item">
                              <a class="main-link nav-link active create" data-toggle="tab" href="#create" role="tab">
                                  <span>New</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="main-link nav-link list" data-toggle="tab" href="#list" role="tab">
                                  <span>List all </span>
                              </a>
                          </li>
                        </ul>
                    </div>
                    <div class="d-none d-md-block">
                        <div class="tab-content mt-2">
                          @include('employees.create')  
                          @include('employees.list')
                      </div>                     
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
