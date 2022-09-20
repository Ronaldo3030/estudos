import { Router } from 'express';
import multer from 'multer';
import { CategoriesRepository } from '../modules/cars/repositories/CategoriesRepository';
import { createCategoryController } from '../modules/cars/useCases/createCategory';

const categoriesRoutes = Router();
const categoriesRepository = new CategoriesRepository();

const upload = multer({
    
});

categoriesRoutes.post("/", (req, res) => {
    return createCategoryController.handle(req, res);
});

categoriesRoutes.get("/", (req, res) => {
    const all = categoriesRepository.list();

    const categoriesExist = all.some((item) => item);

    if (!categoriesExist) {
        return res.status(400).json({ error: "Nothing categories" });
    }

    return res.json(all);
});

categoriesRoutes.post("/import", (req,res) => {

});

export { categoriesRoutes };