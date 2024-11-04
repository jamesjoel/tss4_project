require("../config/db");

let mongoose = require("mongoose");
let ProductScema = require("./ProductScema");

let CartSchema = mongoose.Schema({
    userid : { type : mongoose.Schema.Types.ObjectId, ref : "user" },
    products :{type :  [mongoose.Schema.Types.ObjectId], ref : "product", default : [] },
})

module.exports = mongoose.model("cart", CartSchema);

