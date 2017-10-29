@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $link->title }}</div>

                    <div class="panel-body">
                        <article>
                            <p>Url: {{ $link->url }}</p>
                            <p>Description: {{ $link->description }}</p>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
