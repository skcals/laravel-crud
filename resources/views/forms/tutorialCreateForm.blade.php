@csrf
<div class="mb-3">
    <label class="text-muted my-2" for="title">Title</label>
    <input type="text" name="title" class="form-control" value="{{ old('title', $tutorial->title) }}">
    <div class="form-text text-danger">{{ $errors->first('title') }}</div>
</div>
<div class="mb-3">
    <label class="text-muted my-2" for="tags">Tags (comma saperated)</label>
    <input type="text" name="tags" class="form-control" value="{{ old('tags', $tutorial->tags) }}">
    <div class="form-text text-danger">{{ $errors->first('tags') }}</div>
</div>
<div class="row mb-3">
    <div class="col">
        <label class="text-muted my-2" for="price">Price</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">$</span>
            </div>
            <input type="number" name="price" class="form-control" value="{{ old('price', $tutorial->price) }}">
        </div>
        <div class="form-text text-danger">{{ $errors->first('price') }}</div>
    </div>
    <div class="col">
        <label class="text-muted my-2" for="level">Level</label>
        <select name="level" class="form-control">
            <option value="" disabled>Select A Level</option>
            @foreach($tutorial->getAllLevels() as $levelKey => $levelValue)

            @if(old('level', $tutorial->level) == $levelKey)
            <option value="{{$levelKey}}" selected>{{$levelValue}}</option>
            @else
            <option value="{{$levelKey}}">{{$levelValue}}</option>
            @endif

            @endforeach

        </select>
        <div class="form-text text-danger">{{ $errors->first('level') }}</div>
    </div>
</div>
<div class="mb-3">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>