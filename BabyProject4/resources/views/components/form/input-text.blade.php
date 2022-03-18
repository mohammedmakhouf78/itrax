<div class="form-group mb-4">
    <label for="{{$name}}">{{ucwords($name)}}</label>
    <input name="{{$name}}" type="text" class="form-control" id="{{$name}}" value="{{$old ?? ""}}">
    @error($name)
    <p class="text-danger">{{$message}}</p>
    @enderror
</div>