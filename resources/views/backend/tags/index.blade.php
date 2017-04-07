@extends('layouts.app')

@section('content')
        <div class="row page-title-row">
            <div class="col-md-6">
                <h3>Tags <small>» Listing</small></h3>
            </div>
            <div class="col-md-6 text-right" style="padding-top: 1.4em">
                <a href="/backend/tags/create" class="btn btn-success btn-md">
                    <i class="fa fa-plus-circle"></i> New Tag
                </a>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-sm-12">

                @include('backend.partials.errors')
                @include('backend.partials.success')

                <table id="tags-table" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Tag</th>
                        <th>Title</th>
                        <th class="hidden-sm">Subtitle</th>
                        <th class="hidden-md">Page Image</th>
                        <th class="hidden-md">Meta Description</th>
                        <th class="hidden-md">Layout</th>
                        <th class="hidden-sm">Direction</th>
                        <th data-sortable="false">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{ $tag->tag }}</td>
                            <td>{{ $tag->title }}</td>
                            <td class="hidden-sm">{{ $tag->subtitle }}</td>
                            <td class="hidden-md">{{ $tag->page_image }}</td>
                            <td class="hidden-md">{{ $tag->meta_description }}</td>
                            <td class="hidden-md">{{ $tag->layout }}</td>
                            <td class="hidden-sm">
                                @if ($tag->reverse_direction)
                                    Reverse
                                @else
                                    Normal
                                @endif
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <a href="/backend/tags/{{ $tag->id }}/edit" class="btn btn-xs btn-info">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <form action=" /backend/tags/{{$tag->id}}" method="post">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs-3.3.7/dt-1.10.13/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#tags-table').DataTable();
        });
    </script>
@endsection