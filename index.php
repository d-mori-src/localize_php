<?php
    $defaultLang = 'ja';
    $lang = isset($_COOKIE['lang']) ? $_COOKIE['lang'] : $defaultLang;
    if (isset($_GET['lang'])) {
        $lang = $_GET['lang'];
        setcookie('lang', $lang, time() + (10 * 365 * 24 * 60 * 60));
    }
?>
<html lang="<?= $lang; ?>">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php if ($lang == 'en'): ?>
            <title>English</title>
        <?php else: ?>
            <title>日本語</title>
        <?php endif; ?>
    </head>

    <body>
        <ul>
            <li>
                <button onclick="changeLanguage('ja')">JP</button>
            </li>
            <li>|</li>
            <li>
                <button onclick="changeLanguage('en')">EN</button>
            </li>
        </ul>
        <div>
            <?php if ($lang == 'en'): ?>
                English
            <?php else: ?>
                日本語
            <?php endif; ?>
            <?php // echo $lang === 'en' ? 'English' : '日本語'; ?>
        </div>

        <script>
            function changeLanguage(lang) {
                document.cookie = 'lang=' + lang + ';path=/';
                location.reload();
            }
        </script>
    </body>
</html>
