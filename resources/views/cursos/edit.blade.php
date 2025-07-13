@extends('layouts.main')
@section('title', 'Modificar Curso')
@section('content')

        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Modificar Datos Curso</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('cursos.update', $curso->ID_Curso) }}">
                                            @csrf
                                            @method('PUT') <!-- spoof -->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" name="Nombre" type="text" placeholder="Nombre del curso..." value="{{ $curso->Nombre }}" required/>
                                                <label for="inputEmail">Nombre del Curso</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" name="Descripcion" type="text" placeholder="Descripción del curso...." value="{{ $curso->Descripcion }}" required/>
                                                <label for="inputPassword">Descripción</label>
                                            </div>
                                            <div class="form-check mb-3">                                     
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a href="{{ route('home-cursos') }}" class="btn btn-secondary">Cancelar</a>
                                              <button type="submit" class="btn btn-primary">Modificar Curso</button>
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