@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <h1>Planos <a href="{{ route('plans.create') }}" class="btn btn-primary" role="button" data-bs-toggle="button"><i class="fas fa-plus"></i></a></h1>
@stop

@section('content')
    <div class="card  card-primary">
        <div class="card-header">
            <h3 class="card-title">Gestão de planos</h3>
            <div class="card-tools">
                <span class="badge badge-primary">Label</span>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->price }}</td>
                            <td><a href="#" class="btn btn-info">VER</a></td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">Nenhum item cadastrado!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $data->links() }}
        </div>
    </div>
@stop