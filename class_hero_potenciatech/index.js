class heroi {
    constructor(nome, idade, tipo) {
        this.nome = nome
        this.idade = idade
        this.tipo = tipo
    }

atacar() {

    let ataque
    
    switch (this.tipo) {
        case 'Mago':
            ataque = 'magia';
            break;
        
        case 'Guerreiro':
            ataque = 'espada';
            break;

        case 'Monge':
            ataque = 'artes marciais';
            break;

        case 'Ninja':
            ataque = 'shuriken';
            break;
            
        default:
            ataque = 'Ataque indefinido';
            break;
    }
    console.log(`O ${this.tipo} atacou usando ${ataque}`);
}
}

const meuHeroi = new heroi('Clebinho', 22, 'Mago');
meuHeroi.atacar();


