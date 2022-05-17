const tbody = document.querySelector(".listar-produto");
const cadForm = document.getElementById("cad-produto-form");
const msgAlerta = document.getElementById("msgAlerta");
const cadModal = new bootstrap.Modal(document.getElementById("cadProdutoModal"));



const listarUsuarios = async (pagina) => {
    const dados = await fetch("./list.php?pagina=" + pagina);
    const resposta = await dados.text();
    tbody.innerHTML = resposta;
}

listarUsuarios(1);

cadForm.addEventListener("submit", async (e)=> {
    e.preventDefault();

    const dadosForm = new FormData(cadForm);
    dadosForm.append("add", 1);
    console.log(dadosForm);
    
    const dados = await fetch("./cadastrar.php", {
        method:"POST",
        body:dadosForm,
    });

    //const resposta = await JSON.parse(dados);
    const res = await dados.json()
    console.log(res);

    if(res['erro']){
        msgAlerta.innerHTML = res['msg'];
        cadModal.hide();
        cadForm.reset();
        listarUsuarios(1);


    }else{
        msgAlerta.innerHTML = res['msg'];
        cadModal.hide();
    }
})