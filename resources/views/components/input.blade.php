<div class="form-group">
    <label for="{{$field}}">{{$label}}</label>
    <input type="{{$type}}" class="form-control" id="{{$field}}" name="{{$field}}"  placeholder="{{$placeholder ?? ''}}"
@isset($value)value="{{old($field) ? old($field) : $value}}"
@else value="{{old($field)}}" @endisset
    >
</div>
@error($field)
<div class="alert alert-danger mt-2">{{ $message }}</div>
@enderror