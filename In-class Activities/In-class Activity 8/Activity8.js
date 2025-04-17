var names = ["Ben", "Joel", "Judy", "Anne"];
var scores = [88, 98, 77, 88];

var $ = function (id) { return document.getElementById(id); };



window.onload = function () {
	$("display_results").onclick = displayResults;
	$("display_scores").onclick = displayScores;
	$("add").onclick = addScore;
	
	
};

function addScore() {
	var sc = document.getElementById("score").value;
	scores.push(parseInt(sc));
}

function displayResults()
{
	var average = 0;
	var max = Math.max.apply(null,scores);

	for(var i=0;i<scores.length;i++)
	{
		average= (average*(i)+scores[i])/(i+1);
	}
	
	document.getElementById("results").innerHTML="<h2> Results </h2><br /> Average score is "+average + "<br \> High Score:" + max + "<br\>";
}


