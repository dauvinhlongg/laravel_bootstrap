
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User Information</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr> 
                                <td>{{ Auth::user()->name }}</td>
                                <td>{{ Auth::user()->email }}</td>
                                <td>{{ Auth::user()->created_at }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>  
            </div>
        </div>
    </div>
</div>
@endsection

