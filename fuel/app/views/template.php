
<head>
    <title><?php echo $title; ?></title>
    <meta charset="UTF-8">
    <meta name="description" content="MileStone 1 Assignment">
    <meta name="author" content="Terryn Gabel, Rachel Hall, Ashlyn Hillyard, Cyrus Turner">

    <img <?php echo Asset::img('ramlogo.png'); ?>
    <?php echo Asset::css($css) ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <?php echo Asset::js($js) ?>

</head>


<body>
    <header>
        <h1>Cam's Interior Design Co.</h1>
    </header>

    <ul>
        <li><a href="./home">Home</a></li>
        <li><a href="./about">About</a></li>
        <li><a href="./color">Color Coordinate Generation</a></li>
    </ul>

    <main>
        <h2><?php echo $title; ?></h2>

        <?php echo $content; ?> 
    </main>

    </div>
</body>

<p class='bottom'> * This is a website for a fake business created for CS312 at CSU. </p>
