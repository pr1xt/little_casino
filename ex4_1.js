let cell1 = "";
let cell2 = "";
let cell3 = "";

function ran_num(){
  return new Promise((resolve, reject) => {
    fetch('funcs.php?action=rand_cell')
        .then(response => response.text())
        .then(data => {
            resolve(data);
        })
        .catch(error => {
            reject(error);
        });
});
}
let cnt = false;
let stop_sw = false;


function changeFunc() {
  if (!cnt) {
    setTimeout(changeFunc, 300); 
  }else{
    
    document.getElementById("p_cell1").innerHTML = cell1;
    document.getElementById("p_cell2").innerHTML = cell2;
    document.getElementById("p_cell3").innerHTML = cell3;
    document.getElementById("cell1").style.animationName = "none"; 
    document.getElementById("cell2").style.animationName = "none"; 
    document.getElementById("cell3").style.animationName = "none"; 
  }
  if (!cnt){
    ran_num().then(result => {
      cell1 = result;
    })
    ran_num().then(result => {
      cell2 = result;
    })
    ran_num().then(result => {
      cell3 = result;
    })
  }
  document.getElementById("p_cell1").innerHTML = cell1;
  document.getElementById("p_cell2").innerHTML = cell2;
  document.getElementById("p_cell3").innerHTML = cell3;
}


document.getElementById("cell1").style.animationName = "none"; 
document.getElementById("cell2").style.animationName = "none"; 
document.getElementById("cell3").style.animationName = "none"; 
stop_sw = true;


function result_fun() {
  if((cell1==cell2) && (cell2==cell3)){
    document.getElementById("summ_bg2").style.display = "inherit"; 
    // document.getElementById("balance").innerHTML = Number(document.getElementById("balance").innerHTML) + 200;
  }else{
    document.getElementById("summ_bg1").style.display = "inherit"; 
    // document.getElementById("balance").innerHTML = Number(document.getElementById("balance").innerHTML) - 200;
  }
}


function stop_f(){
  if(!stop_sw){
    cnt = true;
    stop_sw = true;
    console.log(cell1,cell2,cell3)
    setTimeout(result_fun, 500);
    
  }
  else if(stop_sw){
    cnt = false;
    stop_sw = false;
    document.getElementById("blur_b").style.cssText = 
    "background: rgba(199, 205, 21, 0.358);"+
    "width: 62vw;"+
    "height: 21vw;"+
    "top: 0px;"+
    "left:19vw;";
    
    document.getElementById("cell1").style.animationName = "spin"; 
    document.getElementById("cell2").style.animationName = "spin"; 
    document.getElementById("cell3").style.animationName = "spin"; 
    changeFunc(); 

  }
}
changeFunc(); 