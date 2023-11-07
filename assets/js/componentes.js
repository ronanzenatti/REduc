import { criarRodape } from "./componente_footer.js";
import { criarHeader } from "./componente_header.js";
// import { criarCard } from "./card.js";
// import { criarCard2 } from "./card2.js";

// Header login ?
$.ajax({
    url: "Log_status.php",
    type: "post",
    success: (resposta)=>{
        let loginStatus = JSON.parse(resposta);
        
        if (loginStatus.status) {
            // let img = loginStatus.img;
            criarHeader(loginStatus.status, loginStatus.img);
            console.log(loginStatus);
        } else {
            criarHeader(loginStatus.status);
        }
        
    }
})

// Cards

function criarCards(qtd){
    $.ajax({
        url: "",
        type: "post",
        data: {
            quantidade: qtd
        },
        success: (resposta)=>{
            let recursos = JSON.parse(resposta);

            console.log(recursos);
        }
    })
}

criarCards(4);

criarRodape()