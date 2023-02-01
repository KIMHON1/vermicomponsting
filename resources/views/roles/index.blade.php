@extends('Dashboard.master')
@section('content')
{{-- <p></p>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Role Management</h2>
        </div>
        <div class="pull-right">
        @can('role-create')
            <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role</a>
            @endcan
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th width="280px">Action</th>
    </tr>
    
    @foreach ($roles as $key => $role)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $role->name }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
            @can('role-edit')
                <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
            @endcan
            @can('role-delete')
                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            @endcan
        </td>
    </tr>
    @endforeach
</table>
{!! $roles->render() !!}
<p class="text-center text-primary"><small>Tutorial by LaravelTuts.com</small></p> --}}


        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<h4>Manage</h4>
					<ol class="breadcrumb">
						
						<li class="breadcrumb-item active"><a href="javascript:void(0)">User</a></li>
					</ol>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-sm mb-0 table-responsive-lg text-black">
                                        <thead>
                                            <tr>
                                             
                                                <th class="align-middle">#</th>
                                                <th class="align-middle pr-7">RoleName</th>
                                               
                                                <th class="align-middle text-right">Action</th>
                                                <th class="no-sort"></th>
                                            </tr>
                                        </thead>

                                        @foreach ($roles as $key => $role)
                                     
                                        <tbody id="orders">
                                           
                                            <tr class="btn-reveal-trigger">
                                            
                                               
                                                <td class="py-2">   {{ ++$i }}</td>
                                            
                                                <td class="py-2">    
                                                    {{ $role->name }}
                                                    <p class="mb-0 text-500"></p>
                                                </td>
                                              
                                               
                                                <td class="py-2 text-right">
                                                    <div class="dropdown text-sans-serif"><button class="btn btn-primary tp-btn-light sharp" type="button" id="order-dropdown-0" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-0">
                                                            <div class="py-2">
                                                                <a class="dropdown-item" href="#!">View</a>
                                                                <a class="dropdown-item" href="{{ route('roles.create') }}">create</a>
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!--**********************************
            Content body end
        ***********************************-->
@endsection