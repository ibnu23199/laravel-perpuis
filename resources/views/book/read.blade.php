<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>{{$book->judul}}</title>
</head>
<body>
     <!-- <iframe src = "{{ url('filebook/', $book->file) }}" width='100%' height='724' allowfullscreen webkitallowfullscreen></iframe> -->

     <embed src="{{ $book->file }}" type="application/pdf" width="100%"
      height="724"></embed>
</body>
</html>