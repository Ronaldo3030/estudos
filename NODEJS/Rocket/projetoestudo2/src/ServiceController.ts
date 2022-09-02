interface Service{
    name: string;
    service: string;
    date: string;
    price?: number;
}

class ServiceController{
    execute({ name, service, price = 0.00, date }: Service){
        console.log(name, service, date, price);
    };
}

export default new ServiceController();