
let tasks;
let xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
        tasks = JSON.parse(this.responseText);
        console.log(tasks);
        
    for(i in tasks){        
        let strikeThrough = "";
        console.log(tasks[i].completed);
        
        if(tasks[i].completed == "1"){
            strikeThrough = "cross"
        }
        document.getElementById("taskList").innerHTML += `
                <li id=${i} class="list-group-item ${strikeThrough}"> 
                    ${tasks[i].description} 
                </li>`;
    }
  }
};
xmlhttp.open("GET", "../controllers/taskFunctions/getTask.php", true);
xmlhttp.send();

