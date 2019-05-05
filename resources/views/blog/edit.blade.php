@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="rounded p-4" style="background-color:white">
                <form action="/blog/{{ $blog->id }}/update">
                    @csrf
                    <label for="">Title</label>
                    <input type="text" class="form-control form-group" name="blog_title" value="{{ $blog->title }}">
                    <div class="dropdown-divider py-1"></div>
                    <label for="">Content</label>
                    <textarea name="blog_content" class="form-control form-group" rows="4">{{ $blog->content }}</textarea>
                    <div align="right">
                        <input type="submit" class="btn btn-primary" value="Update" style="width:170px;">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
@endsection