
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enseignant Edit Form</title>
    <link rel="stylesheet" href="/css/course.css">
</head>
<body>
    <div class="form-container">
        <h1>Edit Course</h1>
        <form action="/admin-edit-instructor" METHOD="POST">
            <div class="form-group">
                <input type="hidden" name="id" value= "<?php echo $id_course; ?>">
                <label for="title">Course Title</label>
                <input type="text" id="title" name="title" required>
            </div>

            <div class="form-group">
                <label for="description">Course Description</label>
                <textarea id="description" name="description" required></textarea>
            </div>

            <div class="form-group">
                <label for="duration">thumbnail</label>
                <input type="text" id="duration" name="thumbnail"  required>
            </div>

            <div class="form-group">
                <label for="prerequisites">document</label>
                <input type="text" id="prerequisites" name="document">
            </div>

            <div class="form-group">
                <label for="price">Price ($)</label>
                <input type="number" id="price" name="price"required>
            </div>
            <div class="button-group">
                <button type="button" class="btn-cancel">Cancel</button>
                <button name ="save" type = "submit"  class="btn-save">Save Changes</button>
            </div>
        </form>
    </div>
</body>
</html>
