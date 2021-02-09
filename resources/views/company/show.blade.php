@extends('layouts.app')

@section('content')

    <div class="container col-8 offset-2">
        <div class="row pt-5">
            <div class="card card-body">
                <form action="/company/delete/{{ $company->id }}" method="post" class="col-8 offset-2">
                @method('delete')
                    <div class="form-group">
                        <label for="Name">Company Name</label>
                        <input disabled type="text" name="name" id="name" value="{{ $company->name }}"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Name">Description</label>
                        <textarea disabled type="text" name="description" id="description"
                            class="form-control">{{ $company->description }}
                        </textarea>
                    </div>
                    <div class="d-flex">
                        <div class="from-group pr-3">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                        <div class="from-group pr-3">
                            <a href="/company/index" class="btn btn-secondary">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection