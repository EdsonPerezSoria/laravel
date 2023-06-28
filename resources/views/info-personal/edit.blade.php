@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Info Personal
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Info Personal</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('info-personals.update', $infoPersonal->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('info-personal.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
