// This controls the cute kitty icon :)
const kitty = $('#kitty');
  
kitty.click(function(){

kitty.addClass('animate__tada');
setTimeout(function() {
		kitty.removeClass('animate__tada');
}, 1000);
});

// Controls the side menu behavior
const abtLi = document.querySelector('#abtBtn');
const contactLi = document.querySelector('#contactBtn');
const homeHTML = document.querySelector('#homeHTML');
const aboutHTML = document.querySelector('#aboutHTML');
const portfolioHTML = document.querySelector('#portfolioHTML');
const contactHTML = document.querySelector('#contactHTML');
const projectLi = document.querySelector('#projectsBtn');
const funBtn = document.querySelector("#funBtn");
const funHTML = document.querySelector("#funHTML");

function openNav1(){
aboutHTML.classList.toggle('show');
portfolioHTML.classList.add('show');
contactHTML.classList.remove('show2')
funHTML.classList.add('show');
}
function openNav2(){
portfolioHTML.classList.toggle('show');
aboutHTML.classList.add('show');
contactHTML.classList.remove('show2');
funHTML.classList.add('show');
}
function openNav3(){
contactHTML.classList.toggle('show2');
aboutHTML.classList.add('show');
portfolioHTML.classList.add('show');
funHTML.classList.add('show');
}
function openNav4(){
funHTML.classList.toggle('show');
contactHTML.classList.remove('show2');
aboutHTML.classList.add('show');
portfolioHTML.classList.add('show');
}


window.addEventListener('load', ()=> {
let long;
let lat;
let tempDegree = document.querySelector("#tempDegree");
let locationTimezone = document.querySelector("#locationTimezone");
let tempDescription = document.querySelector("#tempDescription");
if (navigator.geolocation){
navigator.geolocation.getCurrentPosition(position =>{
long = position.coords.longitude;
lat = position.coords.latitude;


const api = `https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${long}&appid=ff94ff712c528b0244565d5ae46fbd75&units=imperial`;

fetch(api)
.then(temp => {
return temp.json();
})
.then(data => {
console.log(data);
const {temp} = data.main;
//set DOM elements from the API
tempDegree.textContent = temp;
tempDescription.textContent = data.weather[0].description;
locationTimezone.textContent = data.name;
const iconCode = data.weather[0].icon;
const iconURL = "https://openweathermap.org/img/w/" + iconCode + ".png";
iconsW.innerHTML = "<img src='" + iconURL + "'>"
});

});

};

});