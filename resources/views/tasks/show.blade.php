@extends('layouts.tasks')

@section('content')
<h1>Detalles de la Tarea</h1>

<div class="mb-3">
    <strong>ID:</strong> {{ $task->id }}
</div>
<div class="mb-3">
    <strong>Título:</strong> {{ $task->title }}
</div>
<div class="mb-3">
    <strong>Descripción:</strong> {{ $task->description }}
</div>
<div class="mb-3">
    <strong>Estado:</strong> {{ $task->status ? 'Completada' : 'Pendiente' }}
</div>

<a href="{{ route('tasks.index') }}" class="btn btn-secondary">Volver</a>
@endsection
