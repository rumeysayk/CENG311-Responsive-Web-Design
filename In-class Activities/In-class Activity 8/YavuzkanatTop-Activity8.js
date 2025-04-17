var names = ["Ben", "Joel", "Judy", "Anne"];
var scores = [88, 98, 77, 88];

var $ = function (id) {
  return document.getElementById(id);
};

window.onload = function () {
  $("display_results").onclick = displayResults;
  $("display_scores").onclick = displayScores;
  $("add").onclick = addScore;
  $("name").focus();
};

function displayResults() {
  let total = 0;
  let highestScore = scores[0];
  let highestName = names[0];

  for (let i = 0; i < scores.length; i++) {
    total += scores[i];
    if (scores[i] > highestScore) {
      highestScore = scores[i];
      highestName = names[i];
    }
  }

  var average = 0;
  for (var i = 0; i < scores.length; i++) {
    average = (average * i + scores[i]) / (i + 1);
  }

  document.getElementById("results").innerHTML =
    "<h2> Results </h2>Average score is " +
    average +
    "<br >  " +
    "<p>High score = " +
    highestName +
    " with a score of " +
    highestScore +
    "</p>";
}

function displayScores() {
  let table = $("scores_table");
  table.innerHTML = " <h2>Scores</h2><tr><th>Name</th><th>Score</th></tr>";

  for (let i = 0; i < names.length; i++) {
    let row = table.insertRow(-1);
    let nameCell = row.insertCell(0);
    let scoreCell = row.insertCell(1);
    nameCell.textContent = names[i];
    scoreCell.textContent = scores[i];
  }
}

function addScore() {
  let name = $("name").value.trim();
  let scoreStr = $("score").value.trim();

  if (name === "" || scoreStr === "" || isNaN(scoreStr)) {
    alert("You must enter a name and a valid score");
    return;
  }

  // check
  let score = Number(scoreStr);
  if (score < 0 || score > 100) {
    alert("You must enter a name and a valid score");
    return;
  }

  names.push(name);
  scores.push(score);

  $("name").value = "";
  $("score").value = "";
  $("name").focus();

  console.log(names);
  console.log(scores);
}
