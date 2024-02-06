<div class="form-group mb-3">
    <label for="{{ $name }}">{{ $label }}</label>
    <select name="{{ $name }}" id="{{ $id ?? $name }}" class="form-control @error($name) is-invalid @enderror" {{ $attributes }}>
        {{ $slot }}
    </select>
    @error($name)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

{{-- Usage --}}
{{-- <x-forms.select label="Select Option" name="selectOption" selected="{{ old('selectOption') }}">
    <option value="option1">Option 1</option>
    <option value="option2">Option 2</option>
    <option value="option3">Option 3</option>
</x-forms.select> --}}