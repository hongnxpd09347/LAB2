<h1>Đây là trang chủ</h1><hr>
<h1>About Page</h1>

<form action="/about" method="post">
    @csrf
    <input name="username" type="text">
    <input name="password" type="password">
    <button type="submit" class="btn btn-info">Submit</button>
</form>