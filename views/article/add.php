
<h2><?= $addArticleTitle ?></h2>
<form method="post" action="<?= \core\mvc\view\Url::link("article/add")?>"> 
    <h5>Введите название статьи</h5>
    <input type="text" name="title" value="*название статьи*"><br>
    <h5>Выберите категорию статьи</h5>
    <select name="categoryId">
         <?php  
        foreach ($changeCategory['results'] as $k => $value) : ?>
            <option value="<?= $changeCategory['results'][$k]->name?>"><?= $changeCategory['results'][$k]->name; ?></option>
        <?php endforeach; ?>
    </select>
        <br>
    <h5>Краткое описание статьи</h5>
    <textarea rows="5" cols="100" name="summary">*краткое описание*</textarea><br>
    <h5>Текст статьи</h5>
    <textarea rows="20" cols="100" name="content">*текст статьи*</textarea><br>
    <!--<h5>Дата публикации</h5>-->
    <!--<input type="text" name="publicationDate" value="<?= date('d M Y H:i:s'); ?>"><br><br>-->
    <input type="submit" name="saveNewArticle" value="Сохранить">
    <input type="submit" name="cancel" value="Назад"><br>
</form>

