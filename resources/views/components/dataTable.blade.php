<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Tags</th>
            <th>Level</th>
            <th>price</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tutorials as $tutorial)
        <tr>
            <td>{{$tutorial->id}}</td>
            <td>{{$tutorial->title}}</td>
            <td>{{$tutorial->tags}}</td>
            <td>@include('components.levelBadges', ['level'=> $tutorial->level_name])</td>
            <td>${{$tutorial->price}}</td>
            <td>
                <div class="d-flex gap-2">
                    <a href="{{route('tutorials.show', $tutorial->id)}}"><i class="bi bi-eye"></i></a>
                    <a href="{{route('tutorials.edit', $tutorial->id)}}"><i class="bi bi-pencil-square"></i></a>
                    <form action="{{ route('tutorials.destroy', $tutorial->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn p-0 btn-link"><i class="bi bi-trash"></i></button>
                    </form>
                </div>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>

{{$tutorials->onEachSide(3)->links()}}