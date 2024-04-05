<x-layout>
  <div class="container">
    <h1>タスクの追加</h1>
    
  <form action="{{ route('todos.store') }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="タスクを入力する" required>
    <input type="submit" value="保存する">
  </form> 
  <a href="{{ route('todos.index') }}">タスク一覧に戻る</a>
  </div>
</x-layout>