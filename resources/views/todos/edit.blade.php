<x-layout>
    <div class="container">
        <h1>タスクの編集</h1>
        
        <form action="{{route('todos.update', $todo->id)}}" method="POST">
            @csrf
            @method('PUT')
            @include('todos.partials.form')
        </form>
    </div>
</x-layout>