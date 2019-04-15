<?php $this->title = "Modifier un article"; ?>
<h1>Mon blog</h1>
<p>En construction</p>
<div>
    <?php
    var_dump($article);
    ?>
    <form method="post" action="../public/index.php?route=editArticle&articleId=<?= $article->getId();?>">
        <label for="title">Titre</label><br>
        <input type="text" id="title" name="title" value="<?= $article->getTitle(); ?>"><br>
        <label for="content">Contenu</label><br>
        <textarea id="content" name="content"><?= $article->getContent(); ?></textarea><br>
        <label for="author">Auteur</label><br>
        <input type="text" id="author" name="author"value="<?= $article->getAuthor(); ?>"><br>
        <input type="submit" value="Envoyer" id="submit" name="submit">
    </form>
    <a href="../public/index.php">Retour à l'accueil</a>
</div>