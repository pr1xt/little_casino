let cell1 = "";
let cell2 = "";
let cell3 = "";

function ran_num(){
  return new Promise((resolve, reject) => {
    fetch('funcs.php')
        .then(response => response.text())
        .then(data => {
            resolve(data); // Возвращаем результат через resolve
        })
        .catch(error => {
            reject(error); // Возвращаем ошибку через reject в случае неудачи
        });
});
}
let cnt = false;

function changeFunc() {
  ran_num().then(result => {
    cell1 = result;
  })
  ran_num().then(result => {
    cell2 = result;
  })
  ran_num().then(result => {
    cell3 = result;
  })
  document.getElementById("p_cell1").innerHTML = cell1;
  document.getElementById("p_cell2").innerHTML = cell2;
  document.getElementById("p_cell3").innerHTML = cell3;
    
  if (!cnt) {
      setTimeout(changeFunc, 300); 
  }
}

changeFunc(); // Начинаем выполнение