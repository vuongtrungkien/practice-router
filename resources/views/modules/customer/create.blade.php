<form method="post" action="{{route('customer_create')}}">
    @csrf
    <label> Họ và tên :
        <input type="text" name="name">
    </label>
    <br>
    <label> Số điện thoại:
        <input type="number" name="phone">
    </label>
    <br>
    <label> Email:
        <input type="text" name="email">
    </label>
    <br>
   <input type="submit" value="Thêm">
</form>
