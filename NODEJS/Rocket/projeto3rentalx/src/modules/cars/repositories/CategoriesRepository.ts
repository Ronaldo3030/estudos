import { Category } from '../model/Category';
import { ICategoryRepository, ICreateCategoryDTO } from './ICategoriesRepository';

class CategoriesRepository implements ICategoryRepository {

    private categories: Category[];

    constructor() {
        this.categories = [];
    }

    create({ name, description }: ICreateCategoryDTO) {
        const category = new Category();

        Object.assign(category, {
            name,
            description,
            date: new Date()
        });

        this.categories.push(category);
    }

    list(): Category[] {
        return this.categories;
    }

    findByName(name: string): Category {
        const category = this.categories.find(category => category.name === name);
        return category;
    }
}

export { CategoriesRepository };