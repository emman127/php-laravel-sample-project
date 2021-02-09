@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row pt-5">
            <div class="card card-body">
                <form action="/company/store" method="post" class="col-8 offset-2">
                @csrf
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" name="name" id="name" 
                            class="form-control @error('name') is-invalid @enderror">

                        @error('name') 
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="Description">Description</label>
                        <textarea name="description" id="description" 
                            class="form-control @error('description') is-invalid @enderror">
                        </textarea>

                        @error('description')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="d-flex offset-10">
                        <div class="form-group pr-2">
                            <button type="submit" class="btn btn-primary">Add</button>
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