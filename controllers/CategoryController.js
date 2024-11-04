let routes = require("express").Router();
let Cate = require("../models/Category");
let SubCate = require("../models/SubCategory")


routes.get("/", async(req, res)=>{
    let result = await Cate.find();
    res.send(result);
    
})

routes.get("/subcate", async(req, res)=>{
    let result = await Cate.find();
    let data = [];
    await Promise.all(result.map(async(item)=>{
        let result2 = await SubCate.find({ category : item.name });
        let obj = { _id : item._id, category : item.name, info : result2 }
        data.push(obj);
    }))

    res.send(data);
    
})


routes.get("/:id", async(req, res)=>{
    let id = req.params.id;
    let result = await Cate.find({ _id : id });
    res.send(result[0]);
    
})

routes.post("/", async(req, res)=>{
    let result = await Cate.create(req.body);
    res.send({ success : true, result : result });
})
routes.delete("/:id", async(req, res)=>{
    let id = req.params.id;
    let result=await Cate.deleteMany({_id : id });
    res.send({ success : true, result : result });
})
routes.put("/:id", async(req, res)=>{
    let id = req.params.id;
    let result=await Cate.updateMany({_id : id }, req.body);
    res.send({ success : true, result : result });
})




module.exports = routes;

/*

    function asnyc hello()
    {
    

        



        Promise.all(data.map(async()=>{
            
                await 
            
            }))
    
    }    





*/