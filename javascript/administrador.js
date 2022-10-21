var date = document.getElementById('date')

var now = new Date();
let day = now.getDate();
let month = now.getMonth() + 1;
let year = now.getFullYear();

var dateNow = year + "-" + month +  "-" + day;

date.setAttribute("min", dateNow);