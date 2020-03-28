<? require (__DIR__.'/partialviews/header'); ?>


<div id="root" class="container d-flex justify-content-center mt-5">
    <div class="col-lg-5 col-sm-10 card">
        <h3 class="card-header">To Do Items:</h3>
        <ul id="taskList" v-if="this.isLoaded" class="list-group list-group-flush">
           <li v-for="task in tasks" :bind="tasks" 
                class="list-group-item"
                :class="{ cross: (task.completed == '1') }">
               {{ task.description }} 
        </ul>
        <div v-else class="header">
            <p>loading...</p>
        </div>
        <div class="p-3 form-group">
            <form method="POST" action="/../controllers/taskFunctions/updateTask.php" class="row justify-content-between">
                <input class="form-text p-2 col-lg-8 col-md-6" type="text" name="newTask" id="newTask" placeholder="Write a new task...">
                <input type="submit" class="btn btn-secondary justify-self-end"> 
            </form>
        </div>
    </div> 
</div> 
