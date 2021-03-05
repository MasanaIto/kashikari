@csrf
<div class="md-form">
    <input type="radio" name="transaction" value="lent" id="lent">自分が貸した
    <input type="radio" name="transaction" value="borrowed" id="borrowed">相手から借りた
</div>

<div class="md-form">
    <label>モノの名前</label>
    <input type="text" name="article_name" class="form-control" required value="{{ old('article_name') }}">
</div>

<div class="md-form">
    <label>取引の相手</label>
{{--    <select class="form-control">--}}
{{--        <option>--}}
{{--            <!-- 友達登録してる人を一覧で出す -->--}}
{{--        </option>--}}
{{--    </select>--}}
    <input type="text" name="partner" class="form-control" required value="{{ old('partner') }}">
</div>

<div class="form-group">
    <label>返却期限</label>
{{--    <select class="form-control">--}}
{{--        <option>期限なし</option>--}}
{{--        <option>期限を設定する</option>--}}
{{--    </select>--}}
    <input type="date" name="deadline" class="form-control" required value="{{ old('deadline') }}">
</div>

<div class="form-group">
    <label>メモ（自由）</label>
    <textarea name="description" required class="form-control" rows="2" placeholder="">{{ old('description') }}</textarea>
</div>
