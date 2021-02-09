@extends('layouts.app')

@section('content')

    <div class="container pt-5">
        <div class="card card-body">
        <div class="pb-2">
            <a href="/company/create" class="btn btn-primary">Add New Company</a>        
        </div>
        <div class="table-responsive-sm">
            <table class="table table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col-sm-3">ID</th>
                        <th scope="col-sm-3">NAME</th>
                        <th scope="col-sm-3">DESCRIPTION</th>
                        <th scope="col-sm-3">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($companies as $company)
                    <tr>
                        <td scope="col-sm-3">{{ $company->id }}</td>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->description }}</td>
                        <td class="d-flex">
                            <div class="pr-1">
                                <a href="/company/edit/{{ $company->id }}" class="btn btn-secondary btn-sm">View</a>
                            </div>
                            <div class="pr-1">
                                <a href="/company/show/{{ $company->id }}" class="btn btn-danger btn-sm">Delete</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $companies->links() }}
        </div>
    </div>

@endsection