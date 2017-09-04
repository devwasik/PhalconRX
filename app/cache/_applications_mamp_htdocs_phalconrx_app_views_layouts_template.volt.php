<!DOCTYPE HTML>
<html>
<head>

    <title>Realm-x</title>

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Unica+One' rel='stylesheet' type='text/css'>

    <!-- Frameworks -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>

    <!-- CSS -->
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' integrity='sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN' crossorigin='anonymous'>
    <?php $this->assets->outputCss('headercss'); ?>

    <meta name='viewport' content='width=device-width, initial-scale=1.0'>

    <!-- Not in use - move to bottom of page when needed -->
    <?= $this->assets->outputJs() ?>

</head>
<body>


<?= $this->partial('partials/topMenu') ?>

<div class="container">
    <div class="banner">
        <div onclick='<?= $this->tag->linkTo(['index/index']) ?>' style="cursor: pointer;">
            <div class='col-xs-8' id="bannertext">
                Realm-X
            </div>

            <div class='col-xs-4'>
                <?= $this->tag->image(['img/globe.png', 'alt' => 'Logo', 'id' => 'bannerimg']) ?>
            </div>
        </div>
    </div>


    <div class="row">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-2">
                <div id="userMenu">
                    <?= $this->partial('partials/leftColMenu') ?>

                </div>
            </div>

            <div class="col-xs-9 col-sm-6 zcolzz-md-8 col-lg-8">
                <!--MAIN CONTENT -->
                <div id="mainMid">
                    <?= $this->getContent() ?>

                </div>
                </div>
                <div class="col-xs-2 col-sm-3 col-md-3 col-lg-2">
                <!--TOP RIGHT COL -->
                <div id="rightColMenu">

                    <?= $this->partial('partials/rightColMenu') ?>
                </div>
            </div>

        </div>
        </div>

        <footer>
            Coming Soon
        </footer>
    </div>
</body>

</html>
