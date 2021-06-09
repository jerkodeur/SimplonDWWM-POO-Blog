<div>
    <div class="container">
        <div class="row row-cols-3 gx-3 gy-2 mt-3">
            <?php
            foreach ($posts as $post) :
            ?>
                <div class="col">
                    <div class="bs-component">
                        <div class="alert alert-danger">
                            <div class="text-primary pb-3"><small><?= Date::formatSqlDate($post['date']) ?></small></div>
                            <h3><?= Format::echapHTML($post['title']) ?></h3>
                            <div><?= Format::n2lbrAndEchapHtml($post['content']) ?> ...</div>
                            <div class="text-end">
                                <figcaption class="blockquote-footer  mt-2">
                                    <?= Format::echapHTML($post['user']) ?>
                                </figcaption>
                            </div>
                            <div class="border-top border-primary mt-2 pt-2"><a href=<?= "?page=post.show&id=" . $post['id'] ?>>Voir la suite</a></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>