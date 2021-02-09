@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row pt-5">
            <div class="card card-body">
                <form action="/company/update/{{ $company->id }}" method="post" class="col-8 offset-2">
                @method('put')
                @csrf
                    <div class="form-group">
                        <label for="Name">Company Name</label>
                        <input type="text" name="name" id="name" 
                            value="{{ $company->name }}" class="form-control @error('name') is-invalid @enderror">

                        @error('name')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" 
                            class="form-control @error('description') is-invalid @enderror">{{ $company->description }}
                        </textarea>
                        
                        @error('description')
                            <span class="invalid-feedback">
                                <strong>{{ @message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="d-flex offset-10">
                        <div class="form-group pr-2">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                        <div class="form-group pr-2">
                            <a href="/company/index" class="btn btn-secondary">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection