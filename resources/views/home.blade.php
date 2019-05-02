@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
                <main>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="panel user-profile">
                                <div class="panel-body">
                                    <div class="text-center">
                                        <div class="avatar">
                                            <div class="default">
                                                <img src="/images/default.jpg" style="width: 100px; height: 100px;">
                                            </div>
                                        </div>
                                        <div class="py-2">
                                            <h2></h2>
                                        </div>
                                        <div class="btn-group-justified">
                                            <a href="#" class="btn btn-primary">Edit Profile</a>
                                        </div>
                                        <div class="dropdown-divider my-4">
                                        </div>
                                        <div class="row mt-15">
                                            <div class="col-sm-6">
                                                <strong>
                                                    <a href="#"></a>
                                                </strong>
                                                <div>
                                                    following
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <strong>
                                                    <a href="#"></a>
                                                </strong>
                                                <div>
                                                    followers
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider my-4">
                                    </div>
                                    <div class="media">
                                        <div class="media-body">
                                            <div class="btn-group btn-group-justified">
                                                <div class="well text-center">
                                                    <h4></h4>
                                                    <small>blogs posted</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="new-post mb-4">
                                <form action="http://awesome-blog-app.herokuapp.com/blog/store" method="POST">
                                    <input type="hidden" name="_token" value="RR0mE5Vn4nUcxt9R9vgQ26tHJG7k6C2EvkCVWyzc">
                                        <div class="form-group">
                                            <textarea rows="3" placeholder="Share your thoughts..." name="blog_content" class="form-control">
                                            </textarea>
                                        </div>
                                        <div class="text-right">
                                            <button type="submit" class="create-post btn btn-primary">Post</button>
                                        </div>
                                </form>
                            </div>
                            <div class="activity-feed">
                                <div class="well">
                                    <div class="page-header mt-0 text-center">
                                        <h2>Blogs</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            </div>
        </div>
    </div>
</div>
@endsection
