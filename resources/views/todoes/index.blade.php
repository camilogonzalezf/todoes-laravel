@extends('todoes');

@section('content')
    <div class="container w-25 border p-4">
        <form>
<form>
  <fieldset disabled>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Titulo de la tarea</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Ingresa tarea">
    </div>
    <button type="submit" class="btn btn-primary">Crear tarea</button>
  </fieldset>
</form>
        </form>
    </div>
@endsection
