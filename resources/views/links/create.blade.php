@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create new link</div>

                    <div class="panel-body">
                        <form method="post" action="/links/insert">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <label for="title">Url</label>
                                <input type="text" class="form-control" name="url" id="url" placeholder="Url">
                            </div>
                            <div class="form-group">
                                <label for="title">Description</label>
                                <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
                            </div>
                            <input class="btn btn-primary" type="submit" value="Submit">
                            <a class="btn btn-primary" href="/links">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
