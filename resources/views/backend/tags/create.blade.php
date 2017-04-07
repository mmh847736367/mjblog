@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row page-title-row">
            <div class="col-md-12">
                <h3>Tags <small>» Create New Tag</small></h3>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">New Tag Form</h3>
                    </div>
                    <div class="panel-body">

                        @include('backend.partials.errors')

                        <form class="form-horizontal" role="form" method="POST" action="/backend/tags">

                            @include('backend.tags._form', compact('tag'))

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection