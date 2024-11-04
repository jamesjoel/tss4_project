let routes = require("express").Router();
let SubCate = require("../models/SubCategory");

// :3000/api/v1/subcategory
routes.get("/", async(req, res)=>{
    let result = await SubCate.find();
    res.send(result);
    
})
routes.get("/findbycategory/:a", async(req, res)=>{
    let a = req.params.a;
    let result = await SubCate.find({ category : a });
    res.send(result);
});

// :3000/api/v1/subcategory/findbycategory
routes.get("/:id", async(req, res)=>{
    let id = req.params.id;
    let result = await SubCate.find({ _id : id });
    res.send(result[0]);
    
})



routes.post("/", async(req, res)=>{
    let result = await SubCate.create(req.body);
    res.send({ success : true, result : result });
})
routes.delete("/:id", async(req, res)=>{
    let id = req.params.id;
    let result=await SubCate.deleteMany({_id : id });
    res.send({ success : true, result : result });
})
routes.put("/:id", async(req, res)=>{
    let id = req.params.id;
    let result=await SubCate.updateMany({_id : id }, req.body);
    res.send({ success : true, result : result });
})


// :3000/api/v1/subcategory/hello/Kitchen





module.exports = routes;