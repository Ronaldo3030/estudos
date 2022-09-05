import { ISpecificationsRespository } from "../repositories/ISpecificationsRepository";

interface IRequest {
    name: string;
    description: string;
}

class CreateSpacificationService {
    constructor(private specificationsRepository: ISpecificationsRespository) { }
    execute({ name, description }: IRequest): void {
        const specificationAlreadyExists = this.specificationsRepository.findByName(name);

        if(specificationAlreadyExists){
            throw new Error("Specification already exists!");
        }

        this.specificationsRepository.create({
            name,
            description
        });
    }
}

export { CreateSpacificationService };