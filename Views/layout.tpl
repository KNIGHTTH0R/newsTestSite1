<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/../web/css/style.css">
    <script src="/../web/js/search.js"></script>
    <script src="/../web/js/main.js"></script>
    <link rel="stylesheet" href="/../web/css/main.css">
    <title>Document</title>
</head>
<body>
{block name=nav}
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">WebSiteName</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="/category/GetOnlyCategories">Categories</a></li>
                <li><a href="/news/show/1">News</a></li>
                <li><a href="/comment/index">Comments</a></li>
            </ul>
            <form class="navbar-form navbar-left">

                <div class="form-group">
                    <input type="text" class="form-control who" placeholder="Search" name="referal" autocomplete="off">
                    <ul class="search_result"></ul>
                </div>

                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
            {if !isset($smarty.session.user)}

                <li><a href="/auth/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="/auth/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

            {else}
                <li><a href="#"><span class="glyphicon glyphicon-user"></span>{$smarty.session.user['email']} </a></li>
                <li><a href="/auth/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            {/if}
            </ul>
        </div>
    </nav>
{/block}


{block name=body}




{/block}












</body>
</html>