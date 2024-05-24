@php
    $label ??= null;
    $type ??= 'text';
    $class ??= null;
    $name ??= '';
    $value ??= '';
@endphp

<div @class(['form-group mb-4', $class])>
    <label for="{{ $name}}">{{ $label }}</label>
    <textarea name="{{ $name }}" class="form-control @error($name) is-invalid @enderror" id="{{ $name }}" cols="30" rows="5">{{ old($name, $value) }}</textarea>
    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
