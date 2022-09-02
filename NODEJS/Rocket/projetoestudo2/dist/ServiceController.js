"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
class ServiceController {
    execute({ name, service, price = 0.00, date }) {
        console.log(name, service, date, price);
    }
    ;
}
exports.default = new ServiceController();
