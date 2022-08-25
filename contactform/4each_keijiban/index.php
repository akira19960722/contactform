<!doctype html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>4eachblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

    <body>
    <?php
        mb_internal_encoding("utf8");
        $pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","root");
        $stmt = $pdo->query("select * from 4each_keijiban");
    ?>

      <div class="logo"><img src="4eachblog_logo.jpg"></div>

      <header>
          <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
      </header>

    <main>
        <div class="main-container">
            <div class="left">
                <h1>プログラミングに役立つ掲示板</h1>
                    <br> 
                <form method="post" action="insert.php">
                        <h2>入力フォーム</h2>
                    <div>
                        <lavel>ハンドルネーム</lavel> 
                        <br>
                        <input type="text" class="text" size="50" name="handlename">
                    </div>

                    <div>
                        <lavel>タイトル</lavel>
                        <br>
                        <input type="text" class="text" size="50" name="title">
                    </div>

                    <div>
                        <lavel>コメント</lavel>
                        <br>
                        <textarea cols="70" class="text" rows="7" name="comments"></textarea>
                    </div>

                    <div>
                        <input type="submit"  class="submit" value="投稿する">
                    </div>
                </form>       

            

            <?php
            while($row = $stmt->fetch()){
                echo"<div class='kiji'>";
                echo"<h3>".$row['title']."</h3>";
                        echo"<div class='contents'>";
                        echo $row['comments'];
                            echo"<div class='handlename'>post by".$row['handlename']."</div>";
                        echo"</div>";
                        echo"</div>";
            }
            ?>
            
            </div>
            <div class="right">
                <h4>人気の記事</h4>
                    <ul>
                        <li>PHP おすすめ本</li>
                        <li>PHP MyAdminの使い方</li>
                        <li>今人気のエディタ</li>
                        <li>HTMLの基礎</li>
                    </ul>
                <h4>オススメリンク</h4>
                    <ul>
                        <li>インターノウス株式会社</li>
                        <li>XAMPPのダウンロード</li>
                        <li>Eclipse</li>
                        <li>Bracketsのダウンロード</li>
                    </ul>
                <h4>カテゴリ</h4>
                    <ul>
                        <li>HTML</li>
                        <li>PHP</li>
                        <li>MySQL</li>
                        <li>JavaScript</li>
                    </ul>
            </div>
        </div>
    </main>
        <footer>
            copyright ©️ internous|4each blog is the one which provides A toZ about programming.
        </footer>
    </body>
    </html>
<body>