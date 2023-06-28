@extends('layouts.app')

@section('template_title')
    {{ $infoPersonal->name ?? "{{ __('Show') Info Personal" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Info Personal</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('info-personals.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $infoPersonal->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $infoPersonal->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Nacimientp:</strong>
                            {{ $infoPersonal->fecha_nacimientp }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
