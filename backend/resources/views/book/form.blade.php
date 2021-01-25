<div class="container ops-main">
    <div class="row">
        <div class="col-md-6">
            <h3 class="ops-title">書籍登録</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            @if($target == 'store') {{-- 新規作成 --}}
                <form action="{{ route('book.store') }}" method="post">
            @elseif($target == 'update')
            <form action="{{ route('book.update', $book->id) }}" method="post">
                <input type="hidden" name="_method" value="PUT">
            @endif
                @csrf

                <div class="form-group">
                    <label for="name">書籍名</label>
                    <input type="text" class="form-control" name="name" value="{{ $book->name }}">
                </div>
                <div class="form-group">
                    <label for="price">価格</label>
                    <input type="text" class="form-control" name="price" value="{{ $book->price }}">
                </div>
                <div class="form-group">
                    <label for="author">著者</label>
                    <input type="text" class="form-control" name="author" value="{{ $book->author }}">
                </div>
                <button type="submit" class="btn btn-default">登録</button>
                <a href="/book">戻る</a>
            </form>
        </div>
    </div>
</div>
