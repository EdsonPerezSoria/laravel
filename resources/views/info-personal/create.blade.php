@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Info Personal
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Info Personal</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('info-personals.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('info-personal.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
