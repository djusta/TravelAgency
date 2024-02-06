<div class="form-group mb-3">
    <label for="{{ $name }}">{{ $label }}</label>
    <textarea name="{{ $name }}" id="{{ $name }}" class="form-control @error($name) is-invalid @enderror">{{ old($name, $value) }}</textarea>
    @error($name)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

{{-- Usage --}}
{{-- <x-forms.textarea label="Description" name="description" value="" /> --}}