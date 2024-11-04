require("../config/db");

let mongoose = require("mongoose");

let CateSchema = mongoose.Schema({
    name : String
    
})

let Cate = mongoose.model("category", CateSchema);

module.exports = Cate;