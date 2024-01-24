
<html>

<head>
  <title>Calculator</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f4f4f4;
      text-align: center;
    }

    h1 {
      color: #333;
    }

    form {
      max-width: 300px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    input {
      width: 50px;
      height: 50px;
      font-size: 18px;
      margin: 5px;
      border: 1px solid #ccc;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    input:hover {
      background-color: #e0e0e0;
    }

    input[type="text"] {
      width: 80%;
      margin-bottom: 10px;
      display: block;
      margin: 0 auto;
      padding: 10px;
      font-size: 18px;
      text-align: right;
    }

    input[type="button"]:active {
      transform: scale(0.95);
    }
  </style>
</head>

<body>
  <h1>Calculator</h1>
  <form>
    <input type="text" id="result" disabled />
    <br><br>
    <input type="button" value="1" onclick="document.getElementById('result').value+='1'" />
    <input type="button" value="2" onclick="document.getElementById('result').value+='2'" />
    <input type="button" value="3" onclick="document.getElementById('result').value+='3'" />
    <input type="button" value="+" onclick="document.getElementById('result').value+='+'" />
    <br>
    <input type="button" value="4" onclick="document.getElementById('result').value+='4'" />
    <input type="button" value="5" onclick="document.getElementById('result').value+='5'" />
    <input type="button" value="6" onclick="document.getElementById('result').value+='6'" />
    <input type="button" value="-" onclick="document.getElementById('result').value+='-'" />
    <br>
    <input type="button" value="7" onclick="document.getElementById('result').value+='7'" />
    <input type="button" value="8" onclick="document.getElementById('result').value+='8'" />
    <input type="button" value="9" onclick="document.getElementById('result').value+='9'" />
    <input type="button" value="*" onclick="document.getElementById('result').value+='*'" />
    <br>
    <input type="button" value="C" onclick="document.getElementById('result').value=''" />
    <input type="button" value="0" onclick="document.getElementById('result').value+='0'" />
    <input type="button" value="="
      onclick="document.getElementById('result').value=eval(document.getElementById('result').value)" />
    <input type="button" value="/" onclick="document.getElementById('result').value+='/'" />
    <br>
  </form>
</body>

</html>
