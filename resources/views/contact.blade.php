<html>
<head>




</head>
<body>

<ul>
@foreach($tasks as $index=>$task)

    <li>{{$index}}</li>
    <li>{{$task}}</li>
    @endforeach
</ul>
<form action="/contact" method="post">
    @csrf



</form>

</body>



</html>
