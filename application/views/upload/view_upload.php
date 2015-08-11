<!DOCTYPE html>
<html>
    <head>
        <title>Upload Form</title>
        <style>
            .btn {
                
            }
    </style>
    </head>
    <body>
        <?php echo isset($error) ? $error : ''; ?>
        <form action="<?php echo $site_url; ?>" method="post" enctype="multipart/form-data">
            <label>
                <input type="file" name="image" size="20" />
            </label>
            <label>
                <input type="file" multiple="multiple" name="file[]" size="20" />
            </label>
            <label>
                <input type="file" multiple="multiple" name="file[]" size="20" />
            </label>
            <label>
                <input type="file" multiple="multiple" name="file[]" size="20" />
            </label>
            <label>
                <input type="file" multiple="multiple" name="file[]" size="20" />
            </label>
            <input type="submit" name="submit" value="Upload" class="btn btn-success" />
        </form>

    </body>
</html> 