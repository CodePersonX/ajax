<html>
  <head>
    <script>
      function getSubjects(code){
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
          if(this.readyState == 4 && this.status == 200){
            document.getElementById("mySubjects").innerHTML = this.responseText;
          }
        };
        xmlhttp.open("GET", "subject.php?code="+code, true);
        xmlhttp.send();
      }
    </script>
  </head>
  <body>
    <form name="subjectForm" id="subjectForm" action="subject.php">
      <select name="subjects" id="subjects" onchange="getSubjects(this.value)">
      <option value="-1">Select Subject</option>
      <option value="cosc">COSC</option>
      <option value="math">MATH</option>
      <option value="english">ENGLISH</option>
      </select>
      <div id="mySubjects"></div>
    </form>
  </body>
</html>