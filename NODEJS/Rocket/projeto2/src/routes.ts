import { Request, response, Response } from 'express';
import CreateCourseService from './CreateCourseService';

export function createCourse(req: Request, res: Response) {
    CreateCourseService.execute({
        name: "NodeJS",
        educator: "Ronaldo",
        duration: 11
    });

    return res.send();
}