@extends('layouts.app')
@section('content')

    <div class="row height-title" >
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <div class="pull-left">
                    <h1>{{ __('index.types_list') }}</h1>
                </div>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('types.create') }}">{{ __('index.create') }}</a>
                <a class="btn btn-success" href="{{ route('posts.index') }}">{{ __('index.controller_posts') }}</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>{{ __('index.type') }}</th>
        </tr>
            @foreach($types as $type)
                <tr>
                    <td>{{ $type->name }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('types.edit', $type->id) }}">{{ __('index.edit') }}</a>
                        <form action="{{ route('types.destroy', $type->id) }}" method="POST">

                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">{{ __('index.delete') }}</button>
                        </form>
                    </td>
                </tr>
            @endforeach
    </table>

@endsection
