import { Request, Response } from 'express';
import ServiceController from './ServiceController';

// ISSO SERIA UMA ROTA
export function createService(req: Request, res: Response) {
    const date = new Date();
    ServiceController.execute({
        name: "Ronaldo",
        service: "Formatar computador",
        date: date.toString(),
    });
    ServiceController.execute({
        name: "Carlos",
        service: "Limpar motos",
        date: date.toString(),
        price: 45.00
    });

    return res.send();
}