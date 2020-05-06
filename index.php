<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index.html</title>
    <link rel="stylesheet" type = "text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<!--Start of Tawk.to Script (채팅)-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5eae73c210362a7578be83e5/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
</script>
    <!--End of Tawk.to Script-->

<body id="target">
    <header>
        <h1><a href = "index.php">JavaScript</a></h1>
        <img src="logo.png" alt="생활코딩">

    </header>

    <nav>
        <ol>
        <?php
          echo file_get_contents("list.txt")
        ?>
        </ol>
    </nav>

        <!--버튼-->
    <div id="control">
        <input type="button" value="white"
            onclick="document.getElementById('target').className='white'" />
        <input type="button" value="black"
            onclick="document.getElementById('target').className='black'" />
    </div>

    <article style="width:500px">
        <?php
            if(empty($_GET['id'])==false){
                echo file_get_contents($_GET['id'].".txt");
            }            
        ?>

        <div id="disqus_thread"></div>
        <script>
        /**disqus.com 댓글
        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
        /*
        var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        */
        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://dsdsaengko.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

    </article> 

</body>
</html>
