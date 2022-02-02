@if(! isset($request))

<form method="POST" action="{{ route('forms') }}">
  @csrf

  <div>
    <label>
      Paciente
    </label>
  </div>
  <div class="mt-4">
    <x-jet-label for="email" value="{{ __('talla') }}" />
    <x-jet-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required />
  </div>

  <div class="mt-4">
    <x-jet-label for="email" value="{{ __('peso') }}" />
    <x-jet-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required />
  </div>

  <div class="mt-4">
    <select class="form-select" aria-label="Default select example" name="sexo">
      <option selected>Sexo</option>
      <option value="Hombre">Hombre</option>
      <option value="Mujer">Mujer</option>
    </select>
  </div>

  <div class="flex items-center justify-end mt-4">

    <button style="font-family: cursive;" type="submit" class="ml-4">Calcular</button>
  </div>
</form>

@else
<table class="table table-dark table-borderless">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">IMC</th>
      <th scope="col">volemia</th>
      <th scope="col">Apto?</th>
      <th scope="col">Estado</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{ $namePatient }}</td>
      <td>{{ $response }}</td>
      <td>{{ $volemia }}</td>
      <td>{{ $apto }}</td>
      <td>{{ $categoria }}</td>
    </tr>
  </tbody>
</table>
@endif