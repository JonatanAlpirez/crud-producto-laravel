Formulario de creación de un producto
POST
<form action="{{ url('/producto') }}" method="post">
    @csrf
    <label for="Name">Name:</label>
    <input type="text" name="name" id="name"><br/>

    <label for="Price">Price:</label>
    <input type="text" name="price" id="price"><br/>

    <label for="Status">Status:</label>
    <input type="text" name="status" id="status"><br/>
    
    <label for="Stock">Stock:</label>
    <input type="text" name="stock" id="stock"><br/>

    <input type="submit" value="Submit">

</form>