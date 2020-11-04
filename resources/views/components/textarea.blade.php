<div class="form-group">
<label for="{{$field}}">{{$label}}</label>
        <textarea name="{{$field}}" id="{{$field}}" rows="3" class="form-control">
@isset($value){{old($field) ? old($field) : $value}}
@else{{old($field)}}@endisset</textarea>
</div>
@error($field)
    <div class="alert alert-danger mt-2">{{ $message }}</div>
@enderror