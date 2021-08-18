@extends('layouts.app')
@section('content')

    <div class="row height-title">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>{{ __('index.title_create') }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('types.index') }}">{{ __('index.back') }}</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('types.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{ __('index.title') }}:</strong>
                    <input type="text" name="name" class="form-control" placeholder="{{ __('index.title') }}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">{{ __('index.btn_submit') }}</button>
            </div>
        </div>
    </form>
@endsection
