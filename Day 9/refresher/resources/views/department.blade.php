<form action="{{URL::route('save')}}" method="post">
    @csrf
<input type="text" name="name" required>

<select name="status" id="status" required>
    <option value="Active">Active</option>
    <option value="Inactive">Inactive</option>
</select>
<button >Save</button>
</form>
<hr>
<ol>
    @foreach ($data as $d)

    <li>{{$d->name}}
        <small>({{$d->status}})</small>
        <a href="{{URL::route('delete')}}?id={{$d->id}}">X</a>
    </li>
     
    @endforeach
</ol>