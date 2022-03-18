<div class="form-group mb-4 mt-3">
    <label for="{{$name}}">Choose an {{$name}}</label>
    <input name="{{$name}}" type="file" class="form-control-file" id="{{$name}}">
    @error($name)
    <p class="text-danger">{{$message}}</p>
    @enderror
</div>