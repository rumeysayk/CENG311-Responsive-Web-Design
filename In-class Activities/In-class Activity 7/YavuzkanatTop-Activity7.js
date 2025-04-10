let button = document.getElementById("myButton");
let container = document.getElementById("container");
let clicks = 0;
let level = 1;
let timeout = 500;

let clickText = document.getElementById("click");
let levelText = document.getElementById("level");

button.addEventListener("mouseover", startMoving);

function startMoving() {
  setTimeout(moveButton, timeout);
}

function moveButton() {
  button.style.marginLeft = (Math.random() * 1300) + "px";
  button.style.marginTop = (Math.random() * 600) + "px";
}

button.addEventListener("click", handleClick);

function handleClick() {
    
    clicks++
   // console.log("click" , clicks);
   // console.log("level" , level);
   
    if (clicks === 3) {
        clicks = 0;
        level++;
        timeout -= 100;
        if (level > 1) {
        alert(`Congratulations! Next Level: ${level}`);
        return;
        }
        else if (level === 6) {
            alert("Congratulations! You won the game!");
        return;
        }

    setTimeout(moveButton, timeout);
  }

  
}
