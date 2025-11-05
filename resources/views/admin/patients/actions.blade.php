<div class="flex items-center space-x-2">
    <x-wireui-button
        href="{{ route('admin.patients.edit', $patient->id) }}"
        blue xs
        title="Editar Paciente">
        <i class="fas fa-edit"></i>
    </x-wireui-button>
    {{-- Delete Paciente --}}
    <form data-form="actionTableDelete" action="{{route('admin.patients.destroy', $patient)}}" method="POST" class="inline">
        @csrf
        @method('DELETE')
        <x-wireui-button
            type="submit"
            red xs
            title="Eliminar Rol">
            <i class="fas fa-trash-alt"></i>
        </x-wireui-button>
    </form>
</div>