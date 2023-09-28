<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $post->title }}</td>
    <td>
        @if(strlen($post->content) > 100)
            {{ substr($post->content, 0, 100) }}...
        @else
            {{ $post->content }}
        @endif
    </td>
    <td>{{ $post->user->first_name }}</td>
    <td>{{ $post->created_at }}</td>
    <td>{{ $post->updated_at }}</td>
    <td style="text-align: right">
        <a href="{{ route('posts.show', ['post' => $post->id]) }}" class="btn bg-info">show</a>
        <a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="btn bg-warning">edit</a>
        <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Are you sure?')" class="btn bg-danger text-light">delete</button>
        </form>
    </td>
</tr>
