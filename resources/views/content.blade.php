@extends('layout')


@section('main_content')
    <h1>Form for comments</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="/store">
        @csrf
        <textarea name="content" id="content" class="form-control" placeholder="Type comment"></textarea><br>
        <button type="submit" class="btn btn-success">Send</button>
    </form>

@endsection