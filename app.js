const express = require("express");
const app = express();
const cors = require("cors")
const upload = require("express-fileupload")

// this folder is used for live server
// ----------------- LIVE SERVER ----------------
const root = require("path").join(__dirname, "dist");
app.use(express.static(root));
// ----------------- LIVE SERVER ----------------


app.use(express.static(__dirname+"/assets"));


app.use(express.json())
app.use(express.urlencoded({ extended : true }));
app.use(upload());
app.use(cors());

app.use(require("./allRoutes/routes"));
// ----------------- LIVE SERVER ----------------
app.get("*", (req, res)=>{
    res.sendFile("index.html", {root});
})
// ----------------- LIVE SERVER ----------------


let port = process.env.PORT || 3000;

app.listen(port, ()=>console.log("server running with port", port));