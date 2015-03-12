<html>
<head>
    <meta charset="UTF-8";
</head>

<body>
        {{Form::open(array('url' => 'test'))}}
           <input type="checkbox" name="select[]" value="ajabuaja">
        <input type="checkbox" name="select[]" value="adsdajabuaja">
        <input type="checkbox" name="select[]" value="ajabuajaasdasd">
        <input type="checkbox" name="select[]" value="ajabuasdadasdsaasdassadaja">
        <input type="submit" name="submit" >
{{Form::close()}}
</body>
</html>