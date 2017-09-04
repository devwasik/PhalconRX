<nav class="navbar navbar-inverse">
<div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navBar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Realm-X</a>
    </div>
    <div class="collapse navbar-collapse" id="navBar">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li class="active"><a href="#">Forum</a></li>
            <li class="active"><a href="#">About</a></li>
            <li class="active"><a href="#">News</a></li>
            <li class="active"><a href="#">Leaderboard</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><?= $this->tag->linkTo(['index/register', 'Register']) ?></li>
        </ul>
    </div>
</div>
</nav>

