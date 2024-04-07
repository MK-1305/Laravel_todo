<x-layout>
  <div class="container">
    <h1>タスクの追加</h1>
    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif
  <form action="{{ route('todos.store') }}" method="POST">
    @csrf
    @include('todos.partials.form')
  </form> 
  <a href="{{ route('todos.index') }}">タスク一覧に戻る</a>
  </div>
</x-layout>