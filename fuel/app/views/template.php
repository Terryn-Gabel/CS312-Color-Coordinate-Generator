<!DOCTYPE html>
<head>
    <title><?php echo $title; ?></title>
    <meta charset="UTF-8">
    <meta name="description" content="MileStone 1 Assignment">
    <meta name="author" content="Terryn Gabel, Rachel Hall, Ashlyn Hillyard, Cyrus Turner">

    <?php echo Asset::css($css) ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <?php echo Asset::js($js) ?>

</head>


<body>
    <header>
        <?php echo Asset::img('ramlogo.png', array('class' => 'headImg')); ?>
        <h1>Old Town Painting Studio</h1>
    </header>

    <ul>
        <li><a href="./home">Home</a></li>
        <li><a href="./about">About</a></li>
        <li><a href="./color">Virtual Painting Tool</a></li>
    </ul>

    <main>
        <h2><?php echo $title; ?></h2>
        
        <?php echo $content; ?> 
    </main>

    </div>
</body>
<footer>
    <p>Part of a CS312 web design project.  Not a real company.</p>
</footer>