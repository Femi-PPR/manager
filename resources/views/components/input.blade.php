@props(['name', 'label'])

<div class="mb-3 form-floating">
    <input
    class="form-control {{ $errors->has($name)? 'is-invalid' : '' }}"
    name="{{ $name }}"
    id="{{ $name }}"
    placeholder=""
    {{ $attributes(['value' => old($name), 'type'=> 'text']) }}
    />
    <label for="{{ $name }}" class="form-label"> {!! $label !!} </label>
    @error($name)
        <div class="invalid-feedback">
        {{ $message }}
        </div>
    @enderror
</div>