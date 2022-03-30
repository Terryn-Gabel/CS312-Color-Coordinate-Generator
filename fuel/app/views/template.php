
<head>
    <title><?php echo $title; ?></title>
    <meta charset="UTF-8">
    <meta name="description" content="MileStone 1 Assignment">
    <meta name="author" content="Terryn Gabel, Rachel Hall, Ashlyn Hillyard, Cyrus Turner">

    <?php echo Asset::css($css) ?>
</head>


<body>
    <header>
        <h1><?php echo $title; ?></h1>
    </header>

    <ul>
        <li><a href="./home">Home</a></li>
        <li><a href="./about">About</a></li>
        <li><a href="./color">Color Coordinate Generation</a></li>
    </ul>

    <main>
        <?php echo $content; ?> 
    </main>

    </div>
</body>