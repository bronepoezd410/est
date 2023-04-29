<h1>
    Создать продукт
</h1>

<form action="create.php" method="post">

    <p>Название товара</p>
    <input type="text" name="title">

    <p>Описание товара</p>
    <textarea type="text" name="decription"> </textarea>

    <p>Название бренда</p>
    <input type="text" name="brand">

    <p>Стоимость</p>
    <input type="number" name="price">

    <p>Доступность</p>
    <input type="number" name="availb">

    <p>Размер дисплея</p>
    <input type="number" name="dispsize">

    <p>Разрешение дисплея</p>
    <input type="text" name="dispres">

    <p>Название процессора</p>
    <input type="text" name="proc">

    <p>Количество RAM</p>
    <input type="number" name="ram">

    <p>Количество ROM</p>
    <input type="number" name="storage">

    <p>Вместимость аккумулятора</p>
    <input type="text" name="batcapac">
    <br>
    <br>
    <button type="submit"> Add New Product</button>


</form>
