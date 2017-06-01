@extends('layouts.dashboard')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
@endpush

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Project</div>

                <div class="panel-body">
                    <form class="form" method="POST" action="{{ route('project.update', $project->slug) }}">
                        <input type="hidden" name="_method" value="PATCH">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title">Title</label>

                            <input id="title" type="text" class="form-control" name="title" value="{{ $project->title }}">

                            @if ($errors->has('title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('short') ? ' has-error' : '' }}">
                            <label for="short">Short Description</label>

                            <input id="short" type="text" class="form-control" name="short" value="{{ $project->short }}">

                            @if ($errors->has('short'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('short') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                            <label for="url">Project URL</label>

                            <input id="url" type="text" class="form-control" name="url" value="{{ $project->project_url }}">

                            @if ($errors->has('url'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('url') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('repo_url') ? ' has-error' : '' }}">
                            <label for="repo_url">Repository URL</label>

                            <input id="repo_url" type="text" class="form-control" name="repo_url" value="{{ $project->repo_url }}">

                            @if ($errors->has('repo_url'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('repo_url') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description">description</label>
                            <textarea rows="10" id="description" class="form-control" name="description">{{ $project->description }}</textarea>

                            @if ($errors->has('description'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="description">Approve</label>
                            <select class="form-control" name="approve">
                                <option value=""></option>
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-thumbs-o-up"></i> Approve
                            </button>
                            <a class="btn btn-default" href="{{ url('/dashboard') }}">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@push('scripts')
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
    <script>
        var simplemde = new SimpleMDE({
            element: document.getElementById("description")
        });
    </script>
@endpush