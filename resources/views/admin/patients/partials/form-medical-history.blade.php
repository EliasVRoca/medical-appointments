<div class="grid lg:grid-cols-2 gap-4">
    <div>
        <x-wireui-textarea label="Alergias Conocidas" name="allergies"
            placeholder="Describe las alergias conocidas del paciente"
            rows="6">
          {{ old('allergies', $patient->allergies) }}
          </x-wireui-textarea>
    </div>
    <div>
        <x-wireui-textarea label="Enfermedades Crónicas" name="chronic_conditions"
            placeholder="Describe las enfermedades crónicas del paciente"
            rows="6">
          {{ old('chronic_conditions', $patient->chronic_conditions) }}
          </x-wireui-textarea>
    </div>
    <div>
        <x-wireui-textarea label="Antesedentes Quirúrgicos" name="surgical_history"
            placeholder="Describe los antecedentes quirúrgicos del paciente"
            rows="6">
          {{ old('surgical_history', $patient->surgical_history) }}
          </x-wireui-textarea>
    </div>
    <div>
        <x-wireui-textarea label="Antesedentes Familiares" name="family_history"
            placeholder="Describe los antecedentes familiares del paciente"
            rows="6">
          {{ old('family_history', $patient->family_history) }}
          </x-wireui-textarea>
    </div>
</div>
