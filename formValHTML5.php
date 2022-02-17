<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Your Information</title>
    <style>
      input:invalid {
        border: 2px dashed red;
      }

      input:invalid:required {
        background-image: linear-gradient(to right, pink, lightgreen);
      }

      input:valid {
        border: 2px solid black;
      }
    </style>
</head>

<body>
    <form>
      <label >Your Full Name</label>
      <input  name="fname" required> <br><br>
      <label>Your Email ID</label>
      <input type="email"  name="email" placeholder="Please enter a valid email address" size="50"> <br><br>

        <label >Your Group ID</label>
        <input type="text" name="gid" required minlength="7" maxlength="7"><br><br>
        <label >When did you start your studies ?</label>
        <input type="number"  name="year" value="2019" min="2019" max="2022"><br><br>
        <label >Your Mobile Number </label><input type="tel"  name="tel"><br><br>
        <label >Date & Time </label><input type="datetime-local" name="datetime"><br><br>
        <label >Month & Year </label><input type="month" name="month" ><br><br>
        <label > Time </label> <input type="time" name="time" ><br><br>
        <label >Week Number </label><input type="week" name="week" ><br><br>
        <label >Color Picker </label><input type="color" name="color" ><br><br>
        <label >Range </label> <input type="range" size="2" name="range" min="1" max="5" value="2">
      <button>Submit</button>
    </form>

   <!-- 


   

    -->
</body>

</html>
