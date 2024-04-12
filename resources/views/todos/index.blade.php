<x-layout>
    <div class="container">
        <h1>タスク一覧</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

    <ul>
        @foreach ($todos as $todo)
            <li>
                {{ $todo->title }}
                <button><a href="{{route('todos.edit', $todo->id)}}">編集する</a></button>
                <form action="{{route('todos.destroy', $todo->id)}}" method="post" style='display: inline'>
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('本当に削除していいですか？')">削除する</button>
                </form>
            </li>
        @endforeach
    </ul> 

        <a href="{{ route('todos.new') }}">タスクを追加する</a>
    </div>
</x-layout>