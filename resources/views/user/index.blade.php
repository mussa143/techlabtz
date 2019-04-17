@extends('layouts.master')

@section('content')

<div class="row">
            <div class="col-md-12">
            <a href="{{ route('register') }}" class="btn btn=primary">Register Users</a>
              <div class="card">
              
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Techlabtz Employees</h4>
                  <p class="card-category">Recent Users</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Address
                        </th>
                        <th>
                          Username
                        </th>
                        <th>
                          Designation
                        </th>
                        <th>
                          Emplpyed At
                        </th>
                        <th>
                          Action
                        </th>
                      </thead>
                      <tbody>
                      @foreach($users as $user)
                          <tr>
                          <td>{{$user->id}} </td>
                          <td>{{$user->fname}}{{$user->lname}} </td>
                          <td>{{$user->address}} </td>
                          <td>{{$user->uname}} </td>
                          <td>{{$user->role}} </td>
                          <td>{{$user->created_at}} </td>
                          <td>
                          <a href="" class="btn btn-secondary"> view</a>
                          <a href="" class="btn btn-primary"> edit</a>
                          <a href="" class="btn btn-danger"> delete</a>
                           </td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>

@endsection('content')