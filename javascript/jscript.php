<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        document.write("This is in head");
        </script>
       <script src="myjs.js"></script>
</head>
<body>
    <script>
document.write("hello world");
// this is a comment 
/* thi is multiple line c
comment */

// window.alert
//window.alert("This will create an alert box");
//window.alert(5+5);
</script>

<button type="button" onclick="myjsfunction()">Click Me </button>
<noscript>
    You need to enable javasript to see this content.
</noscript>
<p id="test" style="color:yellow;"></p>
<p id="test1" style="color:red;"></p>
<script>
    document.getElementById("test").innerHTML = "content goes to paragraph 1 with id test";
    document.getElementById("test1").innerHTML = 5+6;
    </script>
<h2> Example of Console.log() </h2>
<script>

console.log("this is printed in the console");
</script>
<button onclick="myjsfunction()"> Click Me </button>

<script>

var name = "Deepak";
document.write(name);
let name1 = "John";
document.write("<br>" + name1);
let num = 25; 
let name2 = "<br>" + name1 + " is " + num + " years old ";
document.write(name2);
document.write(typeof name1 + "<br>");
document.write(typeof num + "<br>");
const address="Helsinki";
document.write("<br> Deepak lives in " + address  );
numbers = [1,2,3,4];
document.write("<br>" + typeof numbers);
</script>
<hr><h2> Conditional Statements</h2>
<script>
let age = 22;
    if(age >= 20) {
      document.write('You are elligible for voting');    
    } else {
        document.write('Not elligible for voting');    
    }
</script>
<hr><h2> Functions</h2>
<script>
        function add(num1,num2) {
            let result = num1 + num2;
            return result;
          }
          document.write(add (5, 7));
          document.write('<br>' + add (5, 5));
        </script>
<h2>JavaScript Events</h2>
<h3>On clikcing the button the date method displays date</h3>
<button onclick='getElementById("time").innerHTML=Date()'> Date & Time </button>
<p id="time"></p>
<hr>
<button onclick="this.innerHTML = Date()">Date and Time - changes the original content </button>

<input type="button" onclick="hello()" value="Click Here">
<input type="button" onclick="document.write(add(5,6))" value="Add Numbers">
<hr>
<h2>Changing Font  & Background Color </h2>
    <form action = "">
        <label>
         Select your Background color: 
          <input type = "color"  name = "background" size = "10"
                 onchange = "setColor('background', this.value)" />
        </label>
        <br />
        <label>
          Font color: 
          <input type = "color"  name = "foreground" size = "10"
                 onchange = "setColor('foreground', this.value)" />
        </label>
        <br />
    </form>
    <script>
    function setColor(where, newColor) {
  if (where == "background")
    document.body.style.backgroundColor = newColor;
  else
    document.body.style.color = newColor;
}
    </script>
  <hr>
  <h2>Onmouseover and onmouseout</h2>

  <span
         onmouseover = "this.style.color = 'blue'; 
                        this.style.fontStyle = 'italic';
                        this.style.backgroundColor  = 'yellow';
                        this.style.fontSize = '2em';";
         onmouseout = "this.style.color = 'red';
                       this.style.fontStyle = 'normal';
                       this.style.fontSize = '1.1em';";>
         Hello World
      </span>
</body>
</html>