@php
    $label ??= null;
    $class ??= null;
    $name ??= '';
    $value ??= '';
@endphp

<div @class(['form-group mb-4', $class])>
    <label for="{{ $name}}" class="form-label mb-2">{{ $label }}</label>
    <select name="{{ $name }}" class="form-select @error($name) is-invalid @enderror" id="{{$name}}" data-control="select2" data-hide-search="true"
    data-placeholder="Select">
        <option value="">-- select --</option>
        @foreach ($options as $k => $v)
            <option @selected($value == $k) value="{{ $k }}">{{ $v }}</option>
        @endforeach
    </select>
    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
