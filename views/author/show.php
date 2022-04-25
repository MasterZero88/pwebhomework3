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
                            <dt>author</dt>
                            <dd><?php echo $author[0]['author']; ?></dd>
                            <dt>nationality</dt>
                            <dd><?php echo $author[0]['nationality']; ?></dd>
                            <dt>birth_year</dt>
                            <dd><?php echo $author[0]['birth_year']; ?></dd>
                            <dt>fields</dt>
                            <dd><?php echo $author[0]['fields']; ?></dd>
                        </dl>
                    </div>
                </div>
                <div>
                <h3 class="uk-heading-line uk-text-center"><span> Books</span></h3>
                    <div class="uk-card uk-card-default uk-card-body">
                        <ul class="uk-list uk-list-bullet">
                            <?php foreach ($books as $book) { ?>
                            <li> <a href="book/<?php echo $book['id'] ?>"><?php echo $book['title']; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                
            </div>

        </div>

    </body>
</html>