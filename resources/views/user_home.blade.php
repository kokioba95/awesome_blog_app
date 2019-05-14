@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="rounded p-4" style="background-color:white">
                <div class="body text-center">
                    <div class="py-1">
                        <img class="rounded img-thumbnail" src="/images/account.png" alt="account" style="width:100px; heigh:100px;">
                        <h2>{{ $user->first_name }} {{ $user->last_name }}</h2>
                    </div>
                    <div>
                    @if (auth()->user()->following()->find($user->id) !== null)
                    <a class="btn btn-secondary " href="/user/{{$user->id}}/unfollow" role="button">
                        <small>
                            Unfollow
                        </small>
                    </a>
                    @else
                    <a class="btn btn-primary " href="/user/{{$user->id}}/follow" role="button">
                        <small>
                            Follow
                        </small>
                    </a>
                    @endif
                    </div>
                    <div class="dropdown-divider py-1"></div>
                    <div class="row">
                        <div class="col-sm-6">
                            <a class="pb-3" href=""><strong>{{ $user->following()->count() }}</strong></a>
                            <p>following</p>
                        </div>
                        <div class="col-sm-6">
                            <a class="pb-3" href="#"><strong>{{ $user->follower()->count() }}</strong></a>
                            <p>followers</p>
                        </div>
                    </div>
                    <div class="dropdown-divider py-1"></div>
                    <div class="card bg-light">
                        <div class="card-body">
                            <div class="card-title">
                                <h3>{{ count($blogs) }}</h3>
                            </div>
                            <div>
                                <p>blogs posted</p>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div>
                <div class="card bg-light mb-4">
                    <div class="card-body">
                        <div class="card-title">
                            <h3><strong>Blogs</strong></h3>
                        </div>
                        <div class="list-group">
                            @if (auth()->user()->following()->find($user->id) !== null)
                            @foreach ($blogs as $blog)
                                <div class="list-group-item list-group-item-action mb-3 rounded">
                                    <div class="w-100">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="mb-1">{{ $blog->title }}</h5>
                                            <small>Posted : {{ \Carbon\Carbon::createFromTimeStamp(strtotime($blog->created_at)) ->diffForHumans() }}</small>
                                        </div>
                                        <div class="dropdown-divider py-1"></div>
                                        <p>{{ $blog->content }}</p>
                                        @if(auth()->user()->like_user()->find($blog->id) !==null)
                                        <a class="btn btn-secondary" href="/blog/{{$blog->id}}/dislike" role="button">
                                            Dislike
                                        </a>
                                        @else
                                        <a class="btn btn-primary" href="/blog/{{$blog->id}}/like" role="button">
                                            like
                                        </a>
                                        @endif
                                    </div>
                                </div>
                                @endforeach
                                @else
                                <h5>You are not following</h5>
                                @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection