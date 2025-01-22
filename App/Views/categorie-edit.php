

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorie Edit Form</title>
    <link rel="stylesheet" href="/css/course.css">
</head>
<body>
    <div class="form-container">
        <h1>Edit categorie</h1>
        <form action="/edit-categorie" METHOD="POST">
            <div class="form-group">
                <input type="hidden" name="ido" value= "<?php echo $id_categorie; ?>">
                <label for="title">Categorie Name</label>
                <input type="text" id="title" name="name" >
            </div>

            <div class="form-group">
                <label for="description"> Description</label>
                <input type = "text"id="description" name="description">
            </div>

            <div class="form-group">
                <label for="duration">Specialite</label>
                <input type="text" id="duration" name="Specialite">
            </div>
            <div class="button-group">
                <button name = "sendcategorie" type="button" class="btn-cancel">Cancel</button>
                <button name ="save" type = "submit"  class="btn-save">Save Changes</button>
            </div>
        </form>
    </div>
</body>
</html>