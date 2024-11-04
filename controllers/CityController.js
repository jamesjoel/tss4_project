let routes = require("express").Router();
let City = require("../models/City");


routes.get("/", async(req, res)=>{
    let result = await City.distinct("state");
    res.send(result);
    
})
// localhost:3000/api/v1/city/state/Mahar

routes.get("/state/:a", async(req, res)=>{
    let s = req.params.a;
    let result = await City.find({ state : s });
    res.send(result);
})

routes.get("/all", async(req, res)=>{
    // let result = await City.find({ name : /^I/});
    let result = await City.find();
    res.send(result);
})

routes.get("/search/:a", async(req, res)=>{
    let x = req.params.a;
    let result = await City.find({ name : '/^'+x+'/'})
    res.send(result);
})

routes.get("/pagination/:a/:b", async(req, res)=>{
    let a = req.params.a; // 100
    let b = req.params.b; // 8
    let s = (b-1)*a;
    let result = await City.find().skip(s).limit(a).exec();
    // let result = await City.find().skip(5).limit(10).exec();
    res.send(result);
})

routes.get("/totalrec", async(req, res)=>{
    let result = await City.countDocuments();
    res.send({total : result});
})






module.exports = routes;