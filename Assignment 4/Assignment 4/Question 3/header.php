<div class="header">
    <table>
      <tr>
        <td> <h1>GivPet</h1></td>
        <td> <a href="homepage.php"><img src="Golden-Retriever.png" alt="dog picture" width="150"> </a> </td>
          <td id="clock"></td>
      </tr>
    </table>
  </div>

  <script>
          function dateTime(){
          var date = new Date();
          var n = date.toDateString();
          var time = date.toLocaleTimeString();
          document.getElementById('clock').innerHTML = "Date: " + n +"<br> Time: " + time;
        }
          setInterval("dateTime()", 1000);
        </script>