@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Latest Links
                        <a class="pull-right" href="/links/create">Create Link</a>
                    </div>

                    <div class="panel-body">
                        <ul>
                            @foreach($links as $link)
                                <li>
                                    <a href="links/delete/{{ $link->id }}">[delete]</a> &nbsp;
                                    <a href="{{ $link->path }}">{{ $link->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
