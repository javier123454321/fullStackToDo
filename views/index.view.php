<? require (__DIR__.'/partialviews/header'); ?>


<div class="container d-flex justify-content-center mt-5">
    <div class="col-lg-5 col-sm-10 card">
        <h3 class="card-header">To Do Items:</h3>
        <ul class="list-group list-group-flush">
            <?php foreach ($tasks as $task) :?>

                <li class="list-group-item">

                    <?php if($task -> completed) :?>
                        <strike>
                    <?php endif ?>

                    <?= $task -> description ?>

                    <?php if($task -> completed) :?>
                        </strike>
                    <?php endif ?>
                    
                </li> 
                
            <?php endforeach ?>
        </ul>
        <div class="p-3 form-group">
            <form method="POST" action="/../controllers/taskFunctions/updateTask.php" class="row justify-content-between">
                <input class="form-text p-2 col-lg-8 col-md-6" type="text" name="newTask" id="newTask" placeholder="Write a new task...">
                <input type="submit" class="btn btn-secondary justify-self-end"> 
            </form>
        </div>
    </div> 
</div> 

</body>
</html>
