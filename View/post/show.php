<div class="row">
    <div class="col-10 m-auto mt-3">
        <div class="bs-component">
            <h2 class="mb-3"><?= Format::echapHTML($post['title']) ?></h2>
            <p><?= Format::n2lbrAndEchapHtml($post['content']) ?></p>
            <figcaption class="blockquote-footer pt-2">
                <?= Format::echapHTML($post['user']) ?>
            </figcaption>
            <div><a href="?">Revenir à la page des articles</a></div>
        </div>
    </div>
</div>