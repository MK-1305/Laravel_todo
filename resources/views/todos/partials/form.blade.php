<div class="form-group">
    <label for="title">タイトル</label>
    <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $todo->title ?? '') }}" required>
</div>

<button type="submit" class="btn btn-primary">保存する</button>