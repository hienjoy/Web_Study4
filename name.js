var express = require("express");
var app=express();

app.use(express.urlencoded({extended:true}));
app.use(express.json());


app.listen(3000,function(){
	console.log("server on");
});

app.get("/",function(req,res){
		res.sendFile(__dirname+"/input.html");
});

app.post('/',function(req,res){
		console.log(req.body.iname,req.body.iage);
		var name=req.body.iname;
		var age=req.body.iage;
		res.send('이름 : '+name+'<br>'+'나이 : '+age);
});



