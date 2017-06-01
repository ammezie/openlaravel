@extends('layouts.dashboard')

@section('content')
<div class="panel panel-default">
	<div class="panel-heading">
		Projects
	</div>

	<div class="panel-body">
		 @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        
    	<table class="table">
		   <thead>
		   	<tr>
		   		<td>Title</td>
		   		<td>Project URL</td>
		   		<td>Repo URL</td>
		   		<td>Short Desc</td>
		   		<td>Status</td>
		   		<td colspan="2">Actions</td>
		   	</tr>
		   </thead>
		   <tbody>
	   		@foreach ($projects as $project)
	   			<tr>
					<td>
						<a href="{{ url('projects/' . $project->slug) }}" target="_blank">
							{{ $project->title }}
						</a>
					</td>
					<td>{{ $project->project_url }}</td>
					<td>{{ $project->repo_url }}</td>
					<td>{{ $project->short }}</td>
					<td>{{ $project->status }}</td>
					<td>
						<a class="btn btn-primary" href="{{ route('project.edit', $project->slug) }}">
	                        <i class="fa fa-thumbs-o-up"></i> 
	                    </a>
					</td>
					<td>
						<a class="btn btn-danger"
							href="{{ route('delete', $project->id) }}"
							data-method="delete"
							data-token="{{ csrf_token() }}"
							data-confirm="Are you sure?">
	                        <i class="fa fa-trash-o"></i> 
	                    </a>
					</td>
				</tr>
	   		@endforeach
		   </tbody>
		</table>

		{{ $projects->links() }}
  	</div>
</div>
@stop

@push('scripts')
    <script src="{{ asset('js/laravel.js') }}"></script>
@endpush