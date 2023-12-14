<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Website</title>
</head>

<body>
  <main>
    <form action="includes/formhandler.php" method="post">
      <label for="firstname">Firstname?</label>
      <input type="text" id="firstname" name="firstname" placeholder="Firstname...">

      <label for="lastname">Lastname?</label>
      <input type="text" id="lastname" name="lastname" placeholder="Lastname...">

      <label for="favouritepet">Favouritepet?</label>
      <select id="favouritepet" name="favouritepet">
        <option value="none">None</option>
        <option value="dog">Dog</option>
        <option value="cat">Cat</option>
        <option value="bird">Bird</option>
      </select>

      <button type="submit">Submit</button>

    </form>
  </main>
</body>

</html>