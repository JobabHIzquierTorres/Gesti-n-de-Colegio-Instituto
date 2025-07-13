@extends('layouts.main')
@section('title', 'Modificar Profesor')
@section('content')

        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Modificar Datos del Profesor</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('profesores.update', $profesor->ID_Profesor) }}">
                                            @csrf
                                            @method('PUT') <!-- spoof -->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" name="Nombre" type="text" placeholder="Nombre del alumno..." value="{{$profesor->Nombre}}" required/>
                                                <label for="inputEmail">Nombre</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" name="Especialidad" type="text" placeholder="Especialidad...." value="{{$profesor->Especialidad }}" required/>
                                                <label for="inputPassword">Especialidad</label>
                                            </div>
                                            <div class="form-check mb-3">                                     
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a href="{{ route('home-profesores') }}" class="btn btn-secondary">Cancelar</a>
                                              <button type="submit" class="btn btn-primary">Modificar Profesor</button>
                                            </div>
                                            <div class="form-check mb-3"></div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
            </div>
        </div>
@endsection