<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CKEditor 5 – Classic editor</title>
    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor/4.17.2/standard/ckeditor.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>Editor</h1>

    <form method="post" action="/store" enctype="multipart/form-data">
        @csrf
        <textarea id="editor" name="content"></textarea>
        <button type="submit" type="button" class="btn btn-secondary mt-2">Send</button>
    </form>


    <div id="editor"></div>

    <script>
        var editor = new YourChosenEditor('#editor', {
            imageUpload: true,
        });
    </script>
    <script>
    ClassicEditor
        .create(document.querySelector('#editor'), {
            ckfinder: {
                uploadUrl: '{{ route("upload") }}'
            }
        })
        .catch(error => {
            console.error(error);
        });
    </script>

</body>
</html>
