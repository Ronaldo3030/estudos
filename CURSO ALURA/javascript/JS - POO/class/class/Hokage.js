import Ninja from "./Ninja.js";

export default class Hokage extends Ninja{
  constructor(name, year, village, type, kg){
    super(name, year, village, type);
    this.kg = kg;
  }
}