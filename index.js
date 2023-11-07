let nomeHeroi = ""
let xpHeroi = 0 //alterar para que possa ser exibido outros ranks
let eloHeroi = ""

//estrutura de switch case, alterando conforme a alteração do xpHeroi recebido.

switch (true) {
    case xpHeroi >= 1 && xpHeroi < 1000:
        nomeHeroi = "Kanye"
        eloHeroi = "Ferro"
        break;

    case xpHeroi >= 1001 && xpHeroi <= 2000: {
        nomeHeroi = "Tyler"
        eloHeroi = "Bronze"
        break;
    }
    case xpHeroi >= 2001 && xpHeroi <= 5000: {
        nomeHeroi = "Bryson"
        eloHeroi = "Prata"
        break;
    }
    case xpHeroi >= 6001 && xpHeroi <= 7000: {
        nomeHeroi = "Abel"
        eloHeroi = "Ouro"
        break;
    }
    case xpHeroi >= 7001 && xpHeroi <= 8000: {
        nomeHeroi = "Drake"
        eloHeroi = "Platina"
        break;
    }
    case xpHeroi >= 8001 && xpHeroi <= 9000: {
        nomeHeroi = "Frank"
        eloHeroi = "Ascendente"
        break;
    }
    case xpHeroi >= 9001 && xpHeroi <= 1000: {
        nomeHeroi = "Travis"
        eloHeroi = "Imortal"
        break;
    }
    case xpHeroi >= 1001: {
        nomeHeroi = "Kendrick"
        eloHeroi = "Radiante"
        console.log(msgNomeHeroi + nomeHeroi + "**" + msgNivelHeroi + eloHeroi + "**")
        break;
    }

    default:
        if (xpHeroi == 0) {
            console.log("Nível de expericiência insuficiente")
            break;
        }
}

console.log("O Herói de nome: " + nomeHeroi + " Está no nível: " + eloHeroi)



