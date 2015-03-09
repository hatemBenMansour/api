<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <style>
        body {
            background: #ecf0f1;
        }

        table {
            border: dashed 1px #00c09e;
            font-size: 1.1em;
            color: #6a6a6d;
            padding: 3px;
            width: 600px;
        }

        a, span {
            display: block;
            padding: 5px;
            color: #6a6a6d;
            width: 250px;
            text-decoration: none;
            font-size: 1em;
        }
    </style>
</head>
<body>
<table border="0" align="center">
    <thead>
    <tr>
        <th><h2>Email de contact</h2></th>
    </tr>

    </thead>
    <tbody>

    <tr>
        <td align="left">De  : <br><span>{{$name}}</span><br></td>
    </tr>
    <tr>
        <td align="left">E-mail : <br><span>{{$email}}</span><br></td>
    </tr>

    <tr>
        <td align="left">Message : <br> {{$content}}</td>
    </tr>


    </tbody>


</table>

</body>
</html>