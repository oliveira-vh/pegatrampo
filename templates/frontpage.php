<?php include 'inc/header.php'; ?>
      <div class="jumbotron">
        <h1 class="display-3">Encontre Vagas</h1>
        <form method="GET" action="index.php">
            <select name="category" class="form-control">
              <option value="0">Escolha a Categoria</option>
              <?php foreach($categories as $category): ?>
                <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
              <?php endforeach; ?>
            </select>
            <input type="submit" class="btn btn-lg btn-success mt-3" value="Encontrar">
        </form>
      </div>
    <h3><?php echo "Últimas Vagas" ?></h3>
    <?php foreach($jobs as $job): ?>
    <div class="row marketing">
        <div class="col-md-10">
          <h4><?php echo $job->job_title; ?></h4>
          <p><?php echo $job->description; ?></p>
        </div>
        <div class="col-md-2">
            <a class="btn btn-primary" href="job.php?id=<?php echo $job->id ?>">Ver</a>
        </div>
    </div>
    <?php endforeach; ?>


<?php include 'inc/footer.php' ?>