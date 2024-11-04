const routes = require("express").Router();
const User = require("../models/User");
const sha1 = require("sha1");
const jwt = require("jsonwebtoken")
const Cart = require("../models/Cart")

routes.post("/signup", async (req, res) => {
  req.body.password = sha1(req.body.password);
  let result =await User.create(req.body);
  // console.log(result);
  let userid = result._id;
  await Cart.create({ userid: userid });
  res.send({ success: true });
});

routes.get("/", async(req, res)=>{
  let result = await User.find();
  res.send(result);
})

routes.get("/info", async(req, res)=>{
  // console.log(req.headers);
  let token = req.headers.authorization;
  let obj = jwt.decode(token, "hello");
  // console.log(obj);
  let id = obj.id;
  let result = await User.find({ _id : id }, "name email contact gender state city address");
  console.log(result[0]);
  res.send(result[0])
    
})

routes.post("/update", async(req, res)=>{
  // console.log(req.headers);
  let token = req.headers.authorization;
  let obj = jwt.decode(token, "hello")
  let id = obj.id;
  await User.updateMany({_id : id}, req.body);
  res.send({success:true, name : req.body.name});
})

routes.post("/changepass", async(req, res)=>{
  // console.log(req.headers)
  let token = req.headers.authorization;
  let obj = jwt.decode(token, "hello");
  let id = obj.id;
  let result = await User.find({_id : id});

  if(result[0].password == sha1(req.body.password))
  {
    let passobj = {password : sha1(req.body.repass)};
    await User.updateMany({_id : id}, passobj);
    res.send({success : true})
  }
  else{
    res.send({success : false})
  }
})

// localhost:3000/api/v1/user/changestatus/547854/1
routes.get("/changestatus/:id/:status", async(req, res)=>{
  let id = req.params.id;
  let status = req.params.status==1 ? 0 : 1;

  
  await User.updateMany({_id : id}, {status:status});
  res.send({success:true});
})




// localhost:3000/api/user/checkusername/rohit@gmail.com
routes.get("/checkusername/:a", async(req, res)=>{
  let u = req.params.a;
  let result = await User.find({email : u});
  if(result.length == 0){
    res.send({success : true})
  }
  else{
    
    res.send({success : false})
  }
})

module.exports = routes;


/*
  let result = await User.find({}, "name email address")

*/
