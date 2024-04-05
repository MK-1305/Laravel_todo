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
                <li>{{ $todo->title }}</li>
            @endforeach
        </ul>

        <a href="{{ route('todos.new') }}">タスクを追加する</a>
    </div>
</x-layout>