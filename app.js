var express = require("express");
var app=express();
app.listen(3000,function(){
	console.log("listening in port 3000");
});

app.get("/",function(req,res){
		res.sendFile(__dirname+"/index.html");
});