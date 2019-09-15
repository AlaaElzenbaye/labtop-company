
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<style >
body{background:gray}
</style>

<table class="table table-responsive">
    <tr><th>id</th><th>name</th><th>origin</th><th>price</th><th>edit</th><th>delete</th><th>show comments</th></tr>
    @foreach($products as $prod)
        <form method="post" action="{{route('edit_product',$prod->id)}}">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <tr>
                <td>{{$prod->id}}</td><td><input name="name" value="{{$prod->name}}" ></td>
                <td><img src="{{asset('images/'.$prod->image)}}" style="width:100px;height: 100px;border-radius: 12px;" /></td>
                <td><input name="origin" value="{{$prod->prod_origin}}" ></td>
                <td><input name="price" value="{{$prod->prod_price}}" ></td>
                <td><button type="submit" class="btn btn-primary">edit</button></td>
                <td><a href="{{route('delete_product',$book->id)}}" class="btn btn-danger">delete</a></td>
                <td><a href="" class="btn btn-success">view Comments</a></td>
                <input type="hidden" name="id" value="{{$book->id}}" />
            </tr>
        </form>
    @endforeach

</table>
<br/><h2>Add new Book</h2>
<table class="table">
<form method="post" action="{{route('add_product')}}" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <tr><td>name:</td><td> <input name="prod_name" placeholder="product name" /></td></tr>
    <tr><td>image: </td><td><input type="file" name="image" /></td></tr>
    <tr><td>Origin: </td><td><input  name="prod_origin" /></td></tr>
	<tr><td>poduct_price: </td><td><input  name="prod_price" /></td></tr>
    <tr><td colspan="2"><button type="submit" class="btn btn-success btn-lg">Add</button></td></tr>

</form>
</table>
<a class="btn btn-primary" href=""> go to home page</a><br>
<a class="btn btn-primary" href=""> go to home section page</a>
<center><cite>All rights are reserved for Alaa elzenbaye ahmed</cite><center>

