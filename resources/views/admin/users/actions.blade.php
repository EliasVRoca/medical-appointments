<div class="flex items-center space-x-2">
    <x-wireui-button
        href="{{ route('admin.users.edit', $user->id) }}"
        blue xs
        title="Editar Usuario">
        <i class="fas fa-edit"></i>
    </x-wireui-button>
    {{-- Delete Usuario --}}
    <form data-form="actionTableDelete" action="{{route('admin.users.destroy', $user)}}" method="POST" class="inline">
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