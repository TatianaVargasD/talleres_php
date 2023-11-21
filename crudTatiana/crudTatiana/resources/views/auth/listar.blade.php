@extends('../layouts.app')
@section('titulo')
    Listar usuarios
@endsection
@section('contenido')
<div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full">
          <thead class="bg-white border-b">
            <tr>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
               Nombre
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
               Identificación
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Email
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
               Telefono
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
               Dirección
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Admin
              </th>
            </tr>
          </thead>
            <tbody>
                @foreach ($datos as $item)
                    <tr class="bg-gray-100 border-b">
                     
                        <td class="px-6 py-4">{{ $item->name }}</td>
                        <td class="px-6 py-4">{{ $item->cedula }}</td>
                        <td class="px-6 py-4">{{ $item->telefono }}</td>
                        <td class="px-6 py-4">{{ $item->direccion }}</td>
                        <td class="px-6 py-4">{{ $item->correo }}</td>
                        <td class="flex px-6 py-4">
                            <a href="/actualizar-User/{{ $item->id }}" class="btn p-2  flex flex-row rounded-2xl mx-2">
                                <svg class="h-8 w-8 text-green-600"  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />  <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />  <line x1="16" y1="5" x2="19" y2="8" /></svg>
                                    <form id="formEliminar" action="{{ route('eliminar-User', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="w-full btn rounded-2xl">
                                            <svg class="h-8 w-8 text-red-600"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                              </svg>
                                              
                                        </button>
                                    </form>


                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
{{-- @section('scripts')
    <script>
        $('#formEliminar').on('submit', funtion(e) {
            e.preventDefault();
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                    });
                }
            });
        })
    </script>
@endsection --}}
