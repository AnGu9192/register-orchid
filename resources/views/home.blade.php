@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="pricing-header p-3 pb-md-4 mx-auto text-center bg-warning">
        <h1 class="display-4 fw-normal text-body-emphasis">Laravel Project</h1>
        <p class="fs-5 text-body-secondary">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
        <a class="btn btn-warning text-white" href="/redactor">WYSIWYG</a>
        <a class="btn btn-warning bg-dark text-white"  href="{{ url('review') }}">Comment</a>
    </div>

    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
        <div class="col bg-dark">
            <div class="card mb-4 rounded-3 shadow-sm bg-dark text-white">
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">Heading</h1>
                    <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </span>
                    <a class="btn btn-warning text-white" href="/redactor">WYSIWYG</a>
                    <a class="btn btn-warning bg-dark text-white"  href="{{ url('review') }}">Comment</a>
                </div>
            </div>
        </div>
        <div class="col bg-dark">
            <div class="card mb-4 rounded-3 shadow-sm bg-dark text-white">
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">Heading</h1>
                    <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </span>
                    <a class="btn btn-warning text-white" href="/redactor">WYSIWYG</a>
                    <a class="btn btn-warning bg-dark text-white"  href="{{ url('review') }}">Comment</a>
                </div>
            </div>
        </div>
        <div class="col bg-dark">
            <div class="card mb-4 rounded-3 shadow-sm bg-dark text-white">
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">Heading</h1>
                    <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </span>
                    <a class="btn btn-warning text-white" href="/redactor">WYSIWYG</a>
                    <a class="btn btn-warning bg-dark text-white"  href="{{ url('review') }}">Comment</a>
                </div>
            </div>
        </div>

    </div>


@endsection

