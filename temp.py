#!python
print("content-type: text/html; charset=utf-8\n")
print('''
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index.html</title>
    <link rel="stylesheet" type = "text/css" href="style.css">    
</head>

<body id="target">
    <header>
        <h1><a href = "index.html">JavaScript</a></h1>
    </header>

    <nav>
        <ol>
            <li><a href = "page_html.html">JavaScript란?</a></li>
            <li><a href = "page_vc.html">변수와 상수</a></li>
            <li><a href = "page_op.html">연산자</a></li>    
        </ol>
    </nav>

        <!--버튼-->
    <div id="control">
        <input type="button" value="white"
            onclick="document.getElementById('target').className='white'" />
        <input type="button" value="black"
            onclick="document.getElementById('target').className='black'" />
    </div>

</body>
</html>
''')