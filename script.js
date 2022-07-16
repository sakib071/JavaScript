//Guessing game

var numWin = 0;
var numLose = 0;

for (i = 0; i < 5; i++) {
  var guessNum = parseInt(prompt("Enter a number from 1 to 5 :"));
  var randomNum = Math.floor(Math.random() * 5) + 1;

  if (guessNum == randomNum) {
    console.log("You have won");
    numWin++;
  } else {
    console.log("You have lost. Random number was " + randomNum);
    numLose++;
  }
}
document.write("Time's UP<br>");
document.write("Won = " + numWin + "</br>");
document.write("Lost = " + numLose + "</br>");
