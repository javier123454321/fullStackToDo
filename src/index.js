let app = new Vue({
    el: '#root',
    data:{
        isLoaded: false,
        tasks: [],
        newTask: ""
        },

    methods:{ 
        updateTask: function(){
            fetch(`../controllers/taskFunctions/updateTask.php`, {
                method: 'POST',
                headers: {'Content-Type':'application/x-www-form-urlencoded'},
                body: `newTask=${this.newTask}`
            }).then((response) => {
                this.fetchTasks();
                this.newTask="";
                })
        },
        fetchTasks: async function(){
            fetch(`../controllers/taskFunctions/getTask.php `)
                .then((response) => response.json())
                .then((data) => {
                    this.tasks = data;
                    this.isLoaded = true;
                })
            }
    },
    mounted() {
            this.fetchTasks();
        }
})

  