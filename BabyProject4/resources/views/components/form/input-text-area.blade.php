<div class="form-group mb-4">
    <label for="{{$name}}">{{ucwords($name)}}</label>
    <textarea name="{{$name}}" class="form-control" id="{{$name}}" rows="3">{{$old ?? ""}}</textarea>
    @error($name)
    <p class="text-danger">{{$message}}</p>
    @enderror
</div>