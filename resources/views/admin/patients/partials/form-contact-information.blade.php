<div class="space-y-4">
    <x-wireui-input label="Nombre del Contacto" name="emergency_contact_name"
        :value="old('emergency_contact_name', $patient->emergency_contact_name)"
        placeholder="Ingrese el nombre del contacto de emergencia" />
    <x-wireui-input label="Teléfono del Contacto" name="emergency_contact_phone"
        :value="old('emergency_contact_phone', $patient->emergency_contact_phone)"
        placeholder="Ingrese el teléfono del contacto de emergencia" />
    <x-wireui-input label="Relación con el Contacto" name="emergency_contact_relationship"
        :value="old('emergency_contact_relationship', $patient->emergency_contact_relationship)"
        placeholder="Ingrese la relación con el contacto de emergencia" />
</div>
