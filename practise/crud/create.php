<html lang="en">
<body>

<div style="width: 500px; margin: 0 auto">

<a href="./index.php">List</a>

<form action="store.php" method="post" enctype="multipart/form-data">
    <label for="value1">Title: </label><input name="title" id="value1" placeholder="put the title"/><br>
    <label for="value2">Image: </label><input type="file" id="value2" name="image"/><br>
    <button type="submit">Save</button>
</form>
</div>

</body>
</html>