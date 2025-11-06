<div class="grid gap-4">
    <x-wireui-native-select label="Tipo de Sangre" name="blood_type_id">
        <option value="">Seleccione un tipo de sangre</option>
        @foreach ($bloodTypes as $bloodType)
            <option @selected(old('blood_type_id', $patient->blood_type_id) == $bloodType->id) value="{{ $bloodType->id }}">{{ $bloodType->name }}</option>
        @endforeach
    </x-wireui-native-select>
    <x-wireui-textarea label="Observaciones" name="observations" placeholder="" rows="6">
      {{ old('observations', $patient->observations) }}
    </x-wireui-textarea>
</div>
