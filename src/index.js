let app = new Vue({
    el: '#root',
    data:{
        isLoaded: false,
        tasks: [],
        },

    methods:{ 
    },
    mounted() {
        fetch(`../controllers/taskFunctions/getTask.php `)
            .then((response) => response.json())
            .then((data) => {
                this.tasks = data;
                this.isLoaded = true;
            console.log('Success:', data);
            })
        }
})

  