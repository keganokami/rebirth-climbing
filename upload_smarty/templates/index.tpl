<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Smarty のテスト</title>
</head>
<body>

<h1>{$message}</h1>
<p>{$arr}</p>
<ul>
{foreach $myColors as $color}
    <li>{$color}</li>
{/foreach}
</ul>
</body>
</html>
