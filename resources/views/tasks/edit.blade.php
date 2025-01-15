@extends('layouts.tasks')

@section('content')
<h1>Editar Tarea</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('tasks.update', $task->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="title" class="form-label">Título</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ $task->title }}" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descripción</label>
        <textarea name="description" id="description" class="form-control">{{ $task->description }}</textarea>
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Estado</label>
        <select name="status" id="status" class="form-control" required>
            <option value="1" {{ $task->status ? 'selected' : '' }}>Completada</option>
            <option value="0" {{ !$task->status ? 'selected' : '' }}>Pendiente</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
