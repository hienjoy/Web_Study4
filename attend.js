var express = require("express");
var app=express();

app.use(express.urlencoded({extended:true}));
app.use(express.json());


app.listen(4000,function(){
	console.log("server on");
});

app.get("/",function(req,res){
		res.sendFile(__dirname+"/check.html");
});

app.post('/',function(req,res){
		console.log(req.body.num);
		res.send('출석했습니다.');
});