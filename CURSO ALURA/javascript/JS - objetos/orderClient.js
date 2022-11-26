const data = require("./clientes.json");

function orderClientIncreasing(list, property) {
  const result = list.sort((a, b) => {
    if (a[property] < b[property]) {
      return -1;
    }
    if (a[property] > b[property]) {
      return 1;
    }
    return 0;
  });

  return result;
}

function orderClientDecreasing(list, property) {
  const result = list.sort((a, b) => {
    if(a[property] < b[property]){
      return 1;
    }
    if(a[property] > b[property]){
      return -1;
    }
    return 0;
  });

  return result;
}

const orderName = orderClientDecreasing(data, "nome");

console.log(orderName);
