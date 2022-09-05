import { Router } from "express";
import { SpecificationsRespository } from "../modules/cars/repositories/SpecificationsRepository";
import { CreateSpacificationService } from "../modules/cars/services/CreateSpecificationService";

const specificationsRoutes = Router();

const specificationsRepository = new SpecificationsRespository();

specificationsRoutes.post("/", (req, res) => {
    const { name, description } = req.body;
    const createSpacificationService = new CreateSpacificationService(specificationsRepository);

    createSpacificationService.execute({ name, description });

    return res.status(201).send();
});

specificationsRoutes.get("/", (req, res) => {
    const all = specificationsRepository.list();

    const specificationsExist = all.some(item => item);

    if(!specificationsExist){
        return res.status(400).json({error: "Nothing specifications"});
    }

    return res.json(all);
});

export { specificationsRoutes };