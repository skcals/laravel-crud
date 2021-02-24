@if($level == 'Beginner')
<span class="badge bg-primary">{{$level}}</span>
@elseif($level == "Intermediate")
<span class="badge bg-success">{{$level}}</span>
@elseif($level == "Advance")
<span class="badge bg-info">{{$level}}</span>
@else
{{$level}}
@endif