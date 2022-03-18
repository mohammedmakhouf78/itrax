<div class="form-group mb-4">
    <label for="exampleFormControlSelect1">{{$name}}</label>
    <select name="{{$name}}" class="form-control" id="exampleFormControlSelect1">
        @foreach ($elements as $item)
        <option value="{{$item->id}}" {{$old==$item->id ?"selected" : ''}}>{{$item->$sname}}</option>
        @endforeach
    </select>
</div>