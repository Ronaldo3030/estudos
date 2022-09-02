"use strict";
var __importDefault = (this && this.__importDefault) || function (mod) {
    return (mod && mod.__esModule) ? mod : { "default": mod };
};
Object.defineProperty(exports, "__esModule", { value: true });
exports.createService = void 0;
const ServiceController_1 = __importDefault(require("./ServiceController"));
// ISSO SERIA UMA ROTA
function createService(req, res) {
    const date = new Date();
    ServiceController_1.default.execute({
        name: "Ronaldo",
        service: "Formatar computador",
        date: date.toString(),
    });
    ServiceController_1.default.execute({
        name: "Carlos",
        service: "Limpar motos",
        date: date.toString(),
        price: 45.00
    });
    return res.send();
}
exports.createService = createService;
