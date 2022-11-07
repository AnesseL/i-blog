@extends('layouts.master')
@section('title', 'Admin Panel - Create new post')

@section('content')
    <h1 class="text-center pt-3">Create new post</h1>
<form method="POST" action="{{ route('admin.post.create') }}" class="row m-auto py-5 form-group text-start">
    @csrf  
      <div class="col-10">
        <div class="form-group row mb-4">
            <label for="title" class="col-3 col-form-label">Insert Post Title:</label>
            <div class="col-7">
              <input id="title" type="text" class="form-control" placeholder="Title" name="title" value="" >
            </div>
        </div>
        <div class="form-group row mb-4">
            <label for="type" class="col-3 col-form-label">Select Post Type:</label>
            <div class="col-7">
                <select name="type" class="form-select">
                    <option selected>Open this select menu and choose type</option>
                    <option value="text">Type: Text</option>
                    <option value="photo">Type: Photo</option>
                </select>
            </div>
        </div>
        <div class="form-group row mb-4">
            <label for="date" class="col-3 col-form-label">Choose Date:</label>
            <div class="col-7">
                <input id="date" type="date" class="form-control" placeholder="Date" name="date" value="" >
            </div>
        </div>
        <div class="form-group row mb-4">
            <label for="image" class="col-3 col-form-label">Choose Image:</label>
            <div class="col-7">
                <input id="image" type="file" class="form-control" placeholder="Image" name="image" value="" >
            </div>
        </div>
        <div class="form-group row mb-4">
            <label for="content" class="col-3 col-form-label">Fill In The Content:</label>
            <div class="col-7">
                <textarea id="textarea" rows="7"class="form-control" placeholder="Fill It Up, Please!" name="content" value="" >
                </textarea>
            </div>
        </div>
        <div class="form-group row mb-4">
            <label for="premium" class="col-3 col-form-label">Post Premium:</label>
            <div class="col-7">
                <div class="form-check">
                    <input id="permium" type="checkbox" class="form-check-input" >
                    <label for="permium" class="form-check-label col-7" >Select Me, If Need Premium Article!</label>
                </div>
            </div>
        </div>
      </div>
      <div class="col-10 mt-3">
          <button type="submit" class="col-2 btn btn-primary">Add Post</button>
      </div>   
  </form>
@endsection