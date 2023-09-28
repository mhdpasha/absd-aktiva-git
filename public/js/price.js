const currency = [2000, 1000, 500, 200, 100, 50, 20, 10, 5, 2, 1];
const valueRef = document.querySelector("#price");

function getCurrency(value) {
  let map = new Map();
  let i = 0;
  //loop unitll value 0
  while (value) {
    //if divide in non-zero add in map
    if (Math.floor(value / currency[i])  != 0) {
      map.set(currency[i],Math.floor( value / currency[i]));
      //update value using mod
      value = value % currency[i];
    }
    i++;
  }
  
  debugger;
  for (var [key, value] of map) {
     console.log(key + ' = ' + value);
  }
}

function getChange() {
  // 48 - 57 (0-9)
  var str1 = valueRef.value;
  if (
    str1[str1.length - 1].charCodeAt() < 48 ||
    str1[str1.length - 1].charCodeAt() > 57
  ) {
    valueRef.value = str1.substring(0, str1.length - 1);
    return;
  }

  // t.replace(/,/g,'')
  let str = valueRef.value.replace(/,/g, "");

  let value = +str;
   getCurrency(value)
  valueRef.value = value.toLocaleString();
}

valueRef.addEventListener("keyup", getChange);