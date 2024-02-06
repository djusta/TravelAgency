<div class="form-group mb-3">
    <label for="{{ $name }}">{{ $label }}</label>
    <input type="{{ $type ?? 'text' }}" name="{{ $name }}" id="{{ $id ?? $name }}"
           class="form-control @error($name) is-invalid @enderror" value="{{ old($name, $value) }}">
    @error($name)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

{{-- Usage --}}
{{-- <x-forms.input label="Package Name" name="name" type="text" value="" /> --}}