let btn = document.querySelector("#btn")
let uri = "http://localhost/SpUkM01-068/miPrimeraVezPhp"
btn.addEventListener("click", async(e)=>{
    let peticion = await(fetch(`${uri}/api.php`));
    let res = await peticion.json()
    console.log(res);

})