<?php include 'inc/header.php'; ?>
    <h2 class="page-header">Editar Vaga</h2>
    <form method="post" action="edit.php?id=<?php echo $job->id; ?>">
        <div class="form-group">
            <label>Empresa</label>
            <input type="text" class="form-control" name="company" value="<?php echo $job->company; ?>">
        </div>
        <div class="form-group">
            <label>Categoria</label>
            <select type="select" class="form-control" name="category">
                <option value="0">Escolher Categoria</option>
                <?php foreach($categories as $category): ?>
                    <?php if($job->category_id == $category->id) : ?>
                        <option value="<?php echo $category->id; ?>" selected><?php echo $category->name; ?></option>
                    <?php else : ?>
                        <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Título da Vaga</label>
            <input type="text" class="form-control" name="job_title" value="<?php echo $job->job_title; ?>">
        </div>
        <div class="form-group">
            <label>Descrição</label>
            <textarea type="text" class="form-control" name="description" ><?php echo $job->description; ?></textarea>
        </div>
        <div class="form-group">
            <label>Local</label>
            <input type="text" class="form-control" name="location" value="<?php echo $job->location; ?>">
        </div>
        <div class="form-group">
            <label>Salário</label>
            <input type="text" class="form-control" name="salary" value="<?php echo $job->salary; ?>">
        </div>
        <div class="form-group">
            <label>Nome do Contato</label>
            <input type="text" class="form-control" name="contact_user" value="<?php echo $job->contact_user; ?>">
        </div>
        <div class="form-group">
            <label>Email do Contato</label>
            <input type="text" class="form-control" name="contact_email" value="<?php echo $job->contact_email; ?>">
        </div>
        <input type="submit" class="btn btn-primary" value="Enviar" name="submit">
    </form>
<?php include 'inc/footer.php'; ?>