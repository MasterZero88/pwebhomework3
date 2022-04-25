<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../css/uikit.min.css" />
        <script src="../../js/uikit.min.js"></script>
        <script src="../../js/uikit-icons.min.js"></script>
        <script src="../../js/uikit-icons.min.js"></script>
    </head>
    <body>
        <div>

            <h1 class="uk-heading-line uk-text-center"><span><?php echo $title ?></span></h1>
            <a class="uk-button uk-button-primary" href="/book">Back</a>
            <div class="uk-child-width-expand@s uk-text-center" uk-grid>
        
                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <dl class="uk-description-list">
                            <dt>title</dt>
                            <dd><?php echo $book[0]['title']; ?></dd>
                            <dt>edition</dt>
                            <dd><?php echo $book[0]['edition']; ?></dd>
                            <dt>copyright</dt>
                            <dd><?php echo $book[0]['copyright']; ?></dd>
                            <dt>language</dt>
                            <dd><?php echo $book[0]['language']; ?></dd>
                            <dt>pages</dt>
                            <dd><?php echo $book[0]['pages']; ?></dd>
                            <dt>author</dt>
                            <dd><a href="author/<?php echo $book['author_id'] ?>"> <?php echo $book[0]['author']; ?> </a>  </dd>
                            <dt>publisher</dt>
                            <dd><a href="publisher/<?php echo $book['author_id'] ?>"> <?php echo $book[0]['publisher']; ?> </a> </dd>
                        </dl>
                    </div>
                </div>
            </div>

        </div>

    </body>
</html>