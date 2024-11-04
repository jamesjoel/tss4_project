const routes = require("express").Router();
const path = require("path")

routes.post("/", async(req, res)=>{
    // console.log(req.files);
    // console.log(path.resolve())
    let file = req.files.myimage;
    let upload_path = path.resolve()+"/assets/images/"+file.name;
    await file.mv(upload_path);
    res.send({success:true})
})

module.exports = routes;