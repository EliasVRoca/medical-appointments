<div class="flex items-center space-x-2">
    <x-wireui-button
        href="{{ route('admin.roles.edit', $role->id) }}"
        blue xs
        title="Editar Rol">
        <i class="fas fa-edit"></i>
    </x-wireui-button>
    {{-- Delete Role --}}
    <form data-form="actionTableDelete" action="{{route('admin.roles.destroy', $role)}}"
        method="POST" class="inline">
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