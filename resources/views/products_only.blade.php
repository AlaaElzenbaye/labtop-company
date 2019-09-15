
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<table class="table table-responsive">
    <tr><th>id</th><th>name</th><th>image</th><th>origin</th><th>price</th><th>quantity</th><th>Add comments</th></tr>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
    @foreach($product as $prod)
        <form method="post" action="{{route('edit_product',$prod->id)}}">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <tr>
                <td>{{$prod->id}}</td><td><input name="prod_name" value="{{$prod->prod_name}}" ></td>
                <td><img src="{{asset('images/'.$prod->image)}}" style="width:100px;height: 100px;border-radius: 12px;" /></td>
                <td><input name="prod_origin" value="{{$prod->prod_origin}}" ></td>
                <td><input name="prod_price" value="{{$prod->prod_price}}" ></td>
                <td><input name="prod_quantity" value="{{$prod->prod_quantity}}" ></td>
                <td><a href="" class="btn btn-success">Add Comments</a></td>
                <input type="hidden" name="id" value="{{$prod->id}}" />
            </tr>
        </form>
    @endforeach
</div>
</div>
</div>
</table>
<section class="our links">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12">
            <a class="btn btn-primary" href="{{route('show_products_homepage')}}"> go to home page</a>
           </div>

            
        </div>
    </div>
</section>


<marquee><cite>All rights are reserved for Alaa elzenbaye ahmed</cite><marquee>

