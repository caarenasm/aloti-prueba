@extends('layouts.tasks')

@section('content')
<h1>Nueva Tarea</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Título</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descripción</label>
        <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Estado</label>
        <select name="status" id="status" class="form-control" required>
            <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Completada</option>
            <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Pendiente</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
