require("../config/db");

let mongoose = require("mongoose");
let ProductSchema = require("./ProductScema");


let Prodcut = mongoose.model("product", ProductSchema);

module.exports = Prodcut;