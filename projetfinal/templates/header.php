<!DOCTYPE html>

<html>

    <head>

        <link href="/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/css/bootstrap-theme.min.css" rel="stylesheet"/>
        <link href="/css/styles.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title>library app: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>library app</title>
        <?php endif ?>

        <script src="/js/jquery-1.10.2.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/scripts.js"></script>

    </head>

    <body>

        <div class="container">

            <div id="top">
                 <div class="titre">
                     <a href="index.php"><strong>SciencesPo's Library app</strong></a> <br>
                     <div class="petit">want to find a free Library spot in a few clicks? we got you</div>
                 </div>
                <a href="/"><img alt="bibli" img class="imgBox" src="/img/sciencespo.jpg" width="320" height="120"/></a>
               <br>
            </div>
            <div id="middle">
