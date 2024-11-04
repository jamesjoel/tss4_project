let routes = require("express").Router();
let Cart = require("../models/Cart");
let jwt = require("jsonwebtoken")

routes.get("/", async(req, res)=>{
    let result = await Cart.find();
    res.send(result);
    
})

routes.get("/cartdata", async(req, res)=>{
    let token = req.headers.authorization;
    let obj = jwt.decode(token, "hello");
    let result = await Cart.find({ userid : obj.id });
    res.send(result);
    
})

routes.post("/", async(req, res)=>{
    let result = await Cart.create(req.body);
    res.send({ success : true, result : result });
})
routes.put("/:id", async(req, res)=>{
    let id = req.params.id;
    let result=await Cart.updateMany({userid : id }, req.body);
    res.send({ success : true, result : result });
})


// routes.delete("/:id", async(req, res)=>{
//     let id = req.params.id;
//     let result=await Cate.deleteMany({_id : id });
//     res.send({ success : true, result : result });
// })




module.exports = routes;

/*

    function asnyc hello()
    {
    

        



        Promise.all(data.map(async()=>{
            
                await 
            
            }))
    
    }    





*/