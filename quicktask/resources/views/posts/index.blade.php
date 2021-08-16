@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <div class="pull-left">
                    @if( Config::get('app.locale') == 'en')
                        <a href="{{route('language', 'vi')}}" class="btn btn-primary">{{ __('index.language') }}</a>
                    @elseif( Config::get('app.locale') == 'vi' )
                        <a href="{{route('language', 'en')}}" class="btn btn-primary">{{ __('index.language') }}</a>
                    @endif
                </div>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('posts.create') }}">{{ __('index.create') }}</a>
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
            <th>{{ __('index.title') }}</th>
            <th>{{ __('index.description') }}</th>
            <th>{{ __('index.type') }}</th>
        </tr>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->description }}</td>
                    <td>{{ $post->type->name }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('posts.edit', $post->id) }}">{{ __('index.edit') }}</a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">

                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">{{ __('index.delete') }}</button>
                        </form>
                    </td>
                </tr>
            @endforeach

    </table>

@endsection
