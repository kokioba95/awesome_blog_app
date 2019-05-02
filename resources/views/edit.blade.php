@extends('layouts.app')

@section('content')
    <div>
        <h2>{{ $blog->id }}</h2>
        <a href="/home">Back</a>
    </div>
    <div class="containeer">
        <form action="/Blog/{{$blog->id}}/update" method="POST">
            @csrf
            <div>
                <label>Blog</label>
                <input name="content" value="{{ $blog->content }}">
            </div>


            <div>
                <button> Submit </button>
            </div>

        </form>
    </div>

@endsection