function criaCard(containerFilmes, text, image){
    let div = document.createElement("div")
    div.classList.add('glide__slide')
    let p = document.createElement("p")
    let img = document.createElement("img")
    img.setAttribute('src', 'https://image.tmdb.org/t/p/w500/'+image)
    containerFilmes.appendChild(div)
    div.appendChild(p)
    div.appendChild(img)
    p.innerText = text
}