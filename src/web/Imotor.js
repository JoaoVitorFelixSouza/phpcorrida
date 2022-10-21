class Imotor  {
motor;    
#nitro = 'STUTUTUTU (Turbina)';
set motor(motor){

    this.motor = motor

}



get motor(){

    return this.motor

}

    constructor(){

    }

    acelerarGOL(){
        return "VRUMMMMMMM....(Gol)";
    } 
    acelerarBMW(){
        return `BMW: VRUMMMMMMMMM!!!....${this.#nitro}` ;

    } 
    acelerarUp(){
        return "VRUMMMMMMMM!!...(Up)";
    }

}
