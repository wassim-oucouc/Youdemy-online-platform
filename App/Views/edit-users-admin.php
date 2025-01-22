<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Edit Form</title>
    <link rel="stylesheet" href="/css/course.css">
</head>
<body>
    <div class="form-container">
        <h1>Edit Users</h1>
        <form action="/user-edit-admin" METHOD="POST">
            <div class="form-group">
                <input type="hidden" name="id" value = "<?php echo $id_user; ?>">
                <label for="title">Prenom</label>
                <input type="text" id="title" name="Prenom" required>
            </div>

            <div class="form-group">
                <label for="description">Nom</label>
                <input type = "text"id="title"  name="Nom" required>
            </div>

            <div class="form-group">
                <label for="duration">Email</label>
                <input type="text" id="duration" name="Email"  required>
            </div>

            <div class="form-group">
                <label for="prerequisites">Password</label>
                <input type="password" id="prerequisites" name="password">
            </div>
            <div class="form-group">
                <label for="price">Status</label>
                <select name = "status" id="status">
     <option value="Active">Active</option>
       <option value="Suspendu">Suspendu</option>
</select>
            </div> 

             <div class="form-group">
                <label for="price">Photo</label>
                <input type="text" id="price" name="photo" required>
            </div>
            <div class="button-group">
                <button type="button" class="btn-cancel">Cancel</button>
                <button name ="save" type = "submit"  class="btn-save">Save Changes</button>
            </div>
          
           
        </form>
    </div>
</body>
</html>