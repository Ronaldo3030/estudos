import mongoose from "mongoose";

mongoose.connect("mongodb+srv://jukita:Bolo-123@cluster0.w1xjcj1.mongodb.net/alura-node");

let db = mongoose.connection;

export default db;