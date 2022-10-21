class car{
motor;
#nitro = 'STUTUTUTU (Turbina)';


    constructor(motor){
        
        this.motor = motor;
        
    }   
    acelerarGOL(){
        return "VRUMMMMMMM....(Gol)";
    } 
    acelerarBMW(){
        return `BMW: VRUMMMMMMMMM!!!....${this.#nitro}`;

    }
    acelerarUp(){
        return "VRUMMMMMMMM!!...(Up)";
    }
}
