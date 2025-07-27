@props(['type' => 'text', 'name', 'label', 'value' => '', 'required' => false, 'rules' => []])

<div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <input type="{{ $type }}" 
           class="form-control @error($name) is-invalid @enderror" 
           id="{{ $name }}" 
           name="{{ $name }}" 
           value="{{ old($name, $value) }}"
           data-label="{{ $label }}"
           {{ $required ? 'required' : '' }}
           {{ $attributes }}
    
    @error($name)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
