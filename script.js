let title = document.querySelector('h1');
let slogan = document.querySelector('p');
let main = document.querySelector('main');

console.log(title.clientWidth);
let r = document.querySelector(':root');

document.addEventListener("load", myFunction_set());

// Get the root element

// Create a function for getting a variable value
function myFunction_get() {
  // Get the styles (properties and values) for the root
  var rs = getComputedStyle(r);
  // Alert the value of the --blue variable
  alert("The value of --blue is: " + rs.getPropertyValue('--breedteTitel'));
}

// Create a function for setting a variable value
function myFunction_set() {
  // Set the value of variable --blue toanother value (in this case "lightblue")
  r.style.setProperty('--breedteTitel', title.clientWidth + 'px');
  r.style.setProperty('--logoHoogte', slogan.clientHeight + 'px');
  r.style.setProperty('--fotoHoogte', main.clientHeight + 'px');
}
