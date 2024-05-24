@php
    $label ??= null;
    $type ??= 'text';
    $class ??= null;
    $name ??= '';
    $value ??= '';
@endphp

<div @class(['form-group mb-4', $class])>
    <label for="{{ $name}}" class="form-label mb-2">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" class="form-control @error($name) is-invalid @enderror" id="{{$name}}" value="{{ old($name, $value) }}">
    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
