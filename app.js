const express = require("express");

const app = express();

app.get('/healthy', (req, res)=>{
   res.send("Healthy...");
});

// Expose static resources.
app.use('/css', express.static(__dirname + '/css'));
app.use('/image', express.static(__dirname + '/image'));

// Expose html pages.
app.get('/', (req, res) => {
  res.sendFile(__dirname + '/index.html');
});

app.get('/registration.html', (req, res) => {
  res.sendFile(__dirname + '/registration.html');
});

app.get('/login.html', (req, res) => {
  res.sendFile(__dirname + '/login.html');
});

app.listen(3000, ()=>{
   console.log("Server running on port 3000");
});

