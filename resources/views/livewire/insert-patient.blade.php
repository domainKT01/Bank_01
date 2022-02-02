<!-- component -->
<div class="max-w-lg max-w-xs rounded-lg mx-auto text-center py-12 mt-4 rounded-xl">
    <h1 class="text-gray-200 text-center font-extrabold -mt-3 text-3xl">Paciente</h1>
    <div class="container py-5 max-w-md mx-auto">
        <form method="POST" action="{{ route('forms') }}">
            @csrf
            <div class="mb-4">
                <input placeholder="Nombre" name="patientName" class="shadow appearance-none  rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text">
            </div>
            <div class="mb-4">
                <input placeholder="Talla" name="talla" class="shadow appearance-none  rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text">
            </div>
            <div class="mb-6">
                <input placeholder="Peso" name="peso" class="shadow appearance-none  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="text">
            </div>
            <div class="flex justify-center">
                <select style="color: black;" class="form-select" aria-label="Default select example">
                    <option selected>Sexo</option>
                    <option value="Hombre">Hombre</option>
                    <option value="Mujer">Mujer</option>
                </select>
            </div>
            <button type="submit" style="color: white;" class="shadow appearance-none  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" aria-label="Default select example">Calcular</button>
        </form>
    </div>
</div>